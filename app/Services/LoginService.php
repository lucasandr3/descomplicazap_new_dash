<?php
namespace App\Services;

use App\Interfaces\Service\LoginServiceInterface;
use App\Repositories\LoginRepository;
use Support\Authenticate;
use Support\Validacao;
use Ramsey\Uuid\Uuid; //carregando a classe UUID
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

class LoginService implements LoginServiceInterface
{
    private $repository;
    private $webhookService;
    private $validacao;

    public function __construct ()
    {
        $this->repository = new LoginRepository;
        $this->webhookService = new WebhookService;
        $this->validacao = new Validacao;
    }

    public function all()
    {
        $data['clientes'] = $this->repository->all();
        return $data;
    }

    public function signin(Object $request)
    {
       // if(!empty($request->user_email)) {
            
            $this->repository->login($request);
//        }

        Authenticate::redirect('login/login', [
            'type' => 'error', 
            'title' => 'Aviso', 
            'text' => 'Dados informados incorretos.'
            ]
        );
    }

    public function register(Object $request)
    {
        $uuidUser = Uuid::uuid1();

        $create = [
            'uuid_user' => $uuidUser->toString(),
            'user_name' => $this->validacao->validaString($request->user_name),
            'user_email' => $this->validacao->validaEmail($request->user_email),
            'user_pass' => password_hash($request->user_pass, PASSWORD_DEFAULT),
        ];

        $insert = $this->repository->register($create);

        if($insert) {
            $this->webhookService->criaLinks($create['uuid_user']);
            $user = (object)[
                'user_email' => $this->validacao->validaEmail($request->user_email),
                'user_pass' => $request->user_pass
            ];
            $this->repository->login($user);
        } else {
            Authenticate::redirect('cadastro');
        }
    }

    public function logout()
    {
        $this->repository->logout();
    }
}
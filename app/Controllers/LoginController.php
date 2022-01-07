<?php

namespace App\Controllers;

use App\Interfaces\Service\LoginServiceInterface;
use App\Services\LoginService;
use Core\Controller;

class LoginController extends Controller
{
    private $service;

    public function __construct()
    {
        $this->service = new LoginService;
    }

    public function index()
    {
        if (isset($_SESSION['userLogged'])) {
            $this->redirect('');
        }
        $data = [];
        view('login/login', $data);
    }

    public function signin()
    {
        $this->service->signin($this->request()->request);
    }

    public function cadastro()
    {
        view('cadastro/cadastro', []);
    }

    public function signup()
    {
        $dados = $this->request();
        $this->service->register($dados->request);
    }

    public function logout()
    {
        $this->service->logout();
    }
}
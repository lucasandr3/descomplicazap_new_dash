<?php
namespace App\Controllers;

use App\Interfaces\Service\PixServiceInterface;
use App\middleware\Auth;
use Core\Controller;

class PixController extends Controller
{
    private $pixService;

    public function __construct
    (
        PixServiceInterface $pixService
    )
    {
      Auth::isLogged();
      $this->pixService = $pixService;
    }

	public function pixAguardando()
	{
        $uuid = $this->request()->usuario->uuid;

        $breadcrumb = [
            'Vendas' => ['link' => '', 'active' => ''],
            'Pix' => ['link' => '', 'active' => ''],
            'Aguardando Pagamento' => ['link' => '', 'active' => ''],
        ];

        $pix = $this->pixService->pixAguardando($uuid);

        render('pix/pix_aguardando', [
            'breadcrumb' => $breadcrumb,
            'pix' => $pix
        ]);

	}

    public function pixAprovados()
    {
        $uuid = $this->request()->usuario->uuid;

        $breadcrumb = [
            'Vendas' => ['link' => '', 'active' => ''],
            'Pix' => ['link' => '', 'active' => ''],
            'Aprovados' => ['link' => '', 'active' => ''],
        ];

        $pix = $this->pixService->pixAprovados($uuid);

        render('pix/pix_aprovados', [
            'breadcrumb' => $breadcrumb,
            'pix' => $pix
        ]);

    }
}
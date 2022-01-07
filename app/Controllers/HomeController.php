<?php
namespace App\Controllers;

use App\Interfaces\Service\BoletoServiceInterface;
use App\Interfaces\Service\CarrinhoAbandonadoServiceInterface;
use App\Interfaces\Service\CartaoServiceInterface;
use App\Interfaces\Service\VendaServiceInterface;
use App\middleware\Auth;
use Core\Controller;
use Support\Authenticate;

class HomeController extends Controller
{
    private $carrinhoAbandonadoService;
    private $boletoService;
    private $cartaoService;
    private $vendaService;

    public function __construct
    (
        CarrinhoAbandonadoServiceInterface $carrinhoAbandonadoService,
        BoletoServiceInterface $boletoService,
        CartaoServiceInterface $cartaoService,
        VendaServiceInterface $vendaService
    )
    {
      Auth::isLogged();
      $this->carrinhoAbandonadoService = $carrinhoAbandonadoService;
      $this->boletoService = $boletoService;
      $this->cartaoService = $cartaoService;
      $this->vendaService = $vendaService;
    }

	public function index()
	{
        $uuid = $this->request()->usuario->uuid;

        $breadcrumb = [
            'Painel' => ['link' => '', 'active' => true],
        ];

        $totais = $this->vendaService->totaisVendas($uuid);
        $carrinhosAbandonados = $this->carrinhoAbandonadoService->carrinhosAbandonados($uuid);
        $boletos = $this->boletoService->boletosGerados($uuid);
        $cartoes = $this->cartaoService->cartoes($uuid);

        render('home/home', [
            'breadcrumb' => $breadcrumb,
            'totais' => $totais,
            'abandonados' => $carrinhosAbandonados,
            'boletos' => $boletos,
            'cartoes' => $cartoes
        ]);

	}
}
<?php
namespace App\Controllers;

use App\Interfaces\Service\WalletServiceInterface;
use App\middleware\Auth;
use App\Services\WalletService;
use Core\Controller;

class WalletController extends Controller
{
    private $walletService;

    public function __construct
    (
        WalletServiceInterface $walletService
    )
    {
      Auth::isLogged();
      $this->walletService = $walletService;
    }

	public function wallets()
	{
        $uuid = $this->request()->usuario->uuid;

        $breadcrumb = [
            'Vendas' => ['link' => '', 'active' => ''],
            'Wallet' => ['link' => '', 'active' => ''],
        ];

        $wallet = $this->walletService->wallet($uuid);

        render('wallet/wallet', [
            'breadcrumb' => $breadcrumb,
            'wallet' => $wallet
        ]);

	}
}
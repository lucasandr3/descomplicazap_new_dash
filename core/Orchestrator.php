<?php

namespace Core;

use Illuminate\Container\Container;

class Orchestrator
{
    public function register($class)
    {
        $container = Container::getInstance();

        // Binds Cliente
        $container->bind(\App\Interfaces\Service\ClienteServiceInterface::class, \App\Services\ClienteService::class);
        $container->bind(\App\Interfaces\Repository\ClienteRepositoryInterface::class, \App\Repositories\ClienteRepository::class);

        // Binds Email Utils
        $container->bind(\App\Interfaces\Service\EmailUtilsServiceInterface::class, \App\Services\EmailUtilsService::class);
        $container->bind(\App\Interfaces\Repository\EmailUtilsRepositoryInterface::class, \App\Repositories\EmailUtilsRepository::class);

        // Binds Carrinho Abandonado
        $container->bind(\App\Interfaces\Service\CarrinhoAbandonadoServiceInterface::class, \App\Services\CarrinhoAbandonadoService::class);
        $container->bind(\App\Interfaces\Repository\CarrinhoAbandonadoRepositoryInterface::class, \App\Repositories\CarrinhoAbandonadoRepository::class);

        // Binds Boleto
        $container->bind(\App\Interfaces\Service\BoletoServiceInterface::class, \App\Services\BoletoService::class);
        $container->bind(\App\Interfaces\Repository\BoletoRepositoryInterface::class, \App\Repositories\BoletoRepository::class);

        // Binds Cartao
        $container->bind(\App\Interfaces\Service\CartaoServiceInterface::class, \App\Services\CartaoService::class);
        $container->bind(\App\Interfaces\Repository\CartaoRepositoryInterface::class, \App\Repositories\CartaoRepository::class);

        // Binds Venda
        $container->bind(\App\Interfaces\Service\VendaServiceInterface::class, \App\Services\VendaService::class);
        $container->bind(\App\Interfaces\Repository\VendaRepositoryInterface::class, \App\Repositories\VendaRepository::class);

        // Binds Pix
        $container->bind(\App\Interfaces\Service\PixServiceInterface::class, \App\Services\PixService::class);
        $container->bind(\App\Interfaces\Repository\PixRepositoryInterface::class, \App\Repositories\PixRepository::class);

        // Binds Wallet
        $container->bind(\App\Interfaces\Service\WalletServiceInterface::class, \App\Services\WalletService::class);
        $container->bind(\App\Interfaces\Repository\WalletRepositoryInterface::class, \App\Repositories\WalletRepository::class);

        // Binds Plano
        $container->bind(\App\Interfaces\Service\PlanoServiceInterface::class, \App\Services\PlanoService::class);
        $container->bind(\App\Interfaces\Repository\PlanoRepositoryInterface::class, \App\Repositories\PlanoRepository::class);

        // Binds Cancelamento
        $container->bind(\App\Interfaces\Service\CancelamentoServiceInterface::class, \App\Services\CancelamentoService::class);
        $container->bind(\App\Interfaces\Repository\CancelamentoRepositoryInterface::class, \App\Repositories\CancelamentoRepository::class);

        // Binds Conta
        $container->bind(\App\Interfaces\Service\ContaServiceInterface::class, \App\Services\ContaService::class);
        $container->bind(\App\Interfaces\Repository\ContaRepositoryInterface::class, \App\Repositories\ContaRepository::class);

        // Binds Receitas
        $container->bind(\App\Interfaces\Service\RevenueServiceInterface::class, \App\Services\RevenueService::class);
        $container->bind(\App\Interfaces\Repository\RevenueRepositoryInterface::class, \App\Repositories\RevenueRepository::class);

        // Binds Despesas
        $container->bind(\App\Interfaces\Service\ExpenseServiceInterface::class, \App\Services\ExpenseService::class);
        $container->bind(\App\Interfaces\Repository\ExpenseRepositoryInterface::class, \App\Repositories\ExpenseRepository::class);

        $instance = $container->make($class);

        return $instance;
    }
}
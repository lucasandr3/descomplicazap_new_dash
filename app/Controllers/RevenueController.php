<?php

namespace App\Controllers;

use App\Interfaces\Service\RevenueServiceInterface;

use Core\Controller;

class RevenueController extends Controller
{
    private $service;

    public function __construct
    (
        RevenueServiceInterface $service
    )
    {
        $this->service = $service;
    }

    public function revenues()
    {   
        $revenues = $this->service->allRevenues();

        $breadcrumb = [
            'Home' => ['link' => '', 'active' => ''],
            'Eventos' => ['link' => '', 'active' => ''],
            'Carrinhos Abandonados' => ['link' => '', 'active' => '']
        ];

        render('receitas/receitas', [
            'breadcrumb' => $breadcrumb,
            'revenues' => $revenues
        ]);
    }

//    public function revenueById(Request $request, int $revenue)
//    {
//        return $this->service->getRevenue($revenue);
//    }
//
//    public function installments(Request $request, int $revenue)
//    {
//        return $this->service->getInstallments($revenue);
//    }
//
//    public function newRevenue(Request $request)
//    {
//        return $this->service->newRevenue($request);
//    }
//
//    public function deleteRevenue(int $revenue)
//    {
//        return $this->service->deleteRevenue($revenue);
//    }
//
//    public function editRevenue(Request $request, int $revenue)
//    {
//        return $this->service->editRevenue($request, $revenue);
//    }
}

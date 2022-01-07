<?php

namespace App\Interfaces\Repository;

interface RevenueRepositoryInterface
{
    public function getAllRevenues();

    public function getTotalByMonth();

    public function getRevenueById(int $revenue);

    public function getInstallmentsByRevenue(int $revenue);

    public function saveRevenue(object $revenue, string $fileName);

    public function editRevenue(int $revenue, object $request, string $fileName);

    public function saveInstallmentsRevenue($newRevenue);

    public function delInstallmentsEdit(int $revenue);

    public function delRevenue(int $revenue);
}

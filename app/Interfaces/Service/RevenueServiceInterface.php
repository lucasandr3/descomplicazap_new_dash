<?php

namespace App\Interfaces\Service;

interface RevenueServiceInterface
{
    public function allRevenues();

    public function getRevenue(int $revenue);

    public function getInstallments(int $revenue);

    public function newRevenue(object $resquest);

    public function editRevenue(object $request, int $revenue);
}

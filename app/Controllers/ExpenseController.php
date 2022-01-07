<?php

namespace App\Controllers;

use App\Interfaces\Service\ExpenseServiceInterface;
use Core\Controller;

class ExpenseController extends Controller
{
    private $service;

    public function __construct
    (
        ExpenseServiceInterface $service
    )
    {
        $this->service = $service;
    }

    public function expenses()
    {
        $expenses = $this->service->allExpenses();

        $breadcrumb = [
            'Home' => ['link' => '', 'active' => ''],
            'Despesas' => ['link' => '', 'active' => ''],
        ];

        render('despesas/despesas', [
            'breadcrumb' => $breadcrumb,
            'expenses' => $expenses
        ]);
    }

    public function expenseById(Request $request, int $expense)
    {
        return $this->service->getExpense($expense);
    }

    public function installments(Request $request, int $expense)
    {
        return $this->service->getInstallments($expense);
    }

    public function newExpense(Request $request)
    {
        return $this->service->newExpense($request);
    }

    public function deleteExpense(int $expense)
    {
        return $this->service->deleteExpense($expense);
    }

    public function editExpense(Request $request, int $expense)
    {
        return $this->service->editExpense($request, $expense);
    }
}

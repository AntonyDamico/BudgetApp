<?php

namespace App\Models;

class BudgetData
{

    private $income;
    private $savinsgPerc;
    private $savings;

    public function __construct($income, $savingsPerc)
    {
        $this->income = $income;
        $this->savinsgPerc = $savingsPerc;
        $this->savings = $income * $savingsPerc * 0.01;
    }

    public function getNewData()
    {
        return [
            'income' => $this->income,
            'savingsPerc' => $this->savinsgPerc,
            'savings' => $this->savings
        ];
    }
}

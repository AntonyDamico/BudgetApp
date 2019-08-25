<?php

namespace App\Controllers;

use App\Services\BudgetDataService;

class BudgetDataController
{

    public function get()
    {
        $budgetData = BudgetDataService::get();
        echo json_encode($budgetData);
    }

    public function update()
    {
        $data = [
            'income' => $_POST['income'],
            'savings_perc' => $_POST['savings_perc']
        ];
        BudgetDataService::update($data);
        echo json_encode(['jaja']);
    }
}

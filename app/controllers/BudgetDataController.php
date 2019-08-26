<?php

namespace App\Controllers;

use App\Models\BudgetData;
use App\Services\BudgetDataService;
use App\Validators\BudgetDataValidator;

class BudgetDataController
{

    public function get()
    {
        $budgetData = BudgetDataService::get();
        echo json_encode($budgetData);
    }

    public function update()
    {
        list($income, $savingsPerc) = BudgetDataValidator::validate($_POST);
        $data = (new BudgetData($income, $savingsPerc))->getNewData();
        BudgetDataService::update($data);

        echo json_encode([
            'status' => 200,
            'response' => 'budget updated'
        ]);
    }
}

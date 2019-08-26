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
        if (
            !isset($_POST['income']) || !isset($_POST['savings_perc'])
            || $_POST['income'] < 0 || $_POST['savings_perc'] < 0
        ) {
            die("error with post parameters\n");
        }

        $data = [
            'income' => $_POST['income'],
            'savings_perc' => $_POST['savings_perc']
        ];

        $data['savings'] = $data['income'] * $data['savings_perc'] * 0.01;

        BudgetDataService::update($data);
        echo json_encode([
            'status' => 200,
            'response' => 'budget updated'
        ]);
    }
}

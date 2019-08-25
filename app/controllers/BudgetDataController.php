<?php

namespace App\Controllers;

use App\Services\BudgetDataService;

class BudgetDataController {

    public function get() {
        $budgetData = BudgetDataService::get();
        echo json_encode($budgetData);
    }
}
<?php

namespace App\Controllers;

use App\Services\ExpensesService;

class ExpensesController {

    public static function get() {
        $expenses = ExpensesService::get();
        echo json_encode($expenses);
    }
}
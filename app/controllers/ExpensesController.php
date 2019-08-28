<?php

namespace App\Controllers;

use App\Services\ExpensesService;
use App\Validators\ExpensesValidator;

class ExpensesController
{

    public static function get()
    {
        $expenses = ExpensesService::get();
        echo json_encode($expenses);
    }

    public static function create()
    {
        $data = ExpensesValidator::validate($_POST);
        ExpensesService::create($data);
        echo json_encode([
            'status' => 200,
            'response' => 'expense inserted'
        ]);
    }
}

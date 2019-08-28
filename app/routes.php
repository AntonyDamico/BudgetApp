<?php

return [

    'GET' => [
        '' => 'DummyController@list',
        'budget' => 'BudgetDataController@get',

        'expenses' => 'ExpensesController@get'
    ],

    'POST' => [
        'budget/update' => 'BudgetDataController@update'
    ]

];

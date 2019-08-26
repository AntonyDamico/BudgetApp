<?php

return [

    'GET' => [
        '' => 'DummyController@list',
        'budget' => 'BudgetDataController@get'
    ],

    'POST' => [
        'budget/update' => 'BudgetDataController@update'
    ]

];

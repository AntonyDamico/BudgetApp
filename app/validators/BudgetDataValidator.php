<?php

namespace App\Validators;

class BudgetDataValidator {

    public static function validate($post) {
        if(!isset($post['income'])) die("income missing\n");
        if(!isset($post['savings_perc'])) die("saving percentage missing\n");
        if($post['income'] < 0) die("income cannot be less than 0\n");
        if($post['savings_perc'] < 0) die("savings_perc cannot be less than 0\n");        
    }
}
<?php

namespace App\Validators;

class BudgetDataValidator
{

    public static function validate($post)
    {
        if (!isset($post['income'])) die("income missing\n");
        if (!isset($post['savings_perc'])) die("saving percentage missing\n");
        if(!is_numeric($post['income']) || !is_numeric($post['savings_perc']))
            die("The values have to be numeric\n");

        $income = intval($post['income']);
        $savingsPerc = intval($post['savings_perc']);
        
        if ($income < 0) die("income cannot be less than 0\n");
        if ($savingsPerc < 0) die("savings_perc cannot be less than 0\n");
        if ($savingsPerc > 100) die("savings_perc cannot be more than 100\n");

        return [$income, $savingsPerc];
    }
}

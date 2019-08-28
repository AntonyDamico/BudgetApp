<?php

namespace App\Validators;


class ExpensesValidator
{


    public static function validate($post)
    {
        if(!isset($post['name']) || !isset($post['amount']) || !isset($post['category']) || !isset($post['day']))
            die(json_encode('You must fill the required fields'));

        return [
            'name' => $post['name'],
            'amount' => $post['amount'],
            'category_id' => $post['category'],
            'note' => $post['note'],
            'day' => $post['day']
        ];
    }
}

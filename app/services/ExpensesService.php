<?php

namespace App\Services;

use Core\Container;
use PDO;

class ExpensesService
{

    const TABLE_NAME = 'expense';

    public static function get()
    {
        $query = "select expense.name as name, amount, category.name as category, note, day from expense inner join category on expense.category_id = category.id";
        $statement = Container::get('connection')->prepare($query);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }


    public static function create($data)
    {
        return Container::get('database')
            ->insert(self::TABLE_NAME, $data);
    }
}

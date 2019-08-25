<?php 

namespace App\Services;

use Core\Container;

class BudgetDataService {

    const TABLE_NAME = 'budget_data';

    public static function get() {
        return Container::get('database')->selectAll(self::TABLE_NAME);
    }

    public static function update($data) {
        return Container::get('database')
            ->update(self::TABLE_NAME, $data, 5);
    }

}
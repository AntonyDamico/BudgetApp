<?php 

namespace App\Services;

use PDO;
use Core\Container;

class BudgetDataService {

    const TABLE_NAME = 'budget_data';

    public static function get() {
        $sql = "SELECT * FROM " . self::TABLE_NAME;
        $statement = Container::get('database')->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
}
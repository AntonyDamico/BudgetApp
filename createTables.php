<?php
require 'core/bootstrap.php';

$statement = <<<EOS
    CREATE TABLE IF NOT EXISTS expense (
        id INT NOT NULL AUTO_INCREMENT,
        name VARCHAR(100) NOT NULL,
        amount decimal(9,2) not null,
        category_id INT DEFAULT NULL,
        type_id INT DEFAULT NULL,
        note varchar(255) default null,
        day date default null,
        PRIMARY KEY (id),
        FOREIGN KEY (category_id)
            REFERENCES category(id)
            ON DELETE SET NULL,
        FOREIGN KEY (type_id)
            REFERENCES type(id)
            ON DELETE SET NULL
    ) ENGINE=INNODB;

    create table if not exists category (
        id INT NOT NULL AUTO_INCREMENT,
        name VARCHAR(100) NOT NULL
    );

    create table if not exists type (
        id INT NOT NULL AUTO_INCREMENT,
        name VARCHAR(100) NOT NULL
    );

    create table if not exists personal_data (
        id INT NOT NULL AUTO_INCREMENT,
        income decimal(9,2) default 0 not null,
        savings decimal(9,2) default 0 not null,
        savings_perc int(2) default 0 not null,
        monthly_flex decimal(9,2) default 0 not null
    );
EOS;

try {
    // $createTable = Container::get('database')->exec($statement);
    echo die(var_dump(Container::get('database')));
    echo "Success!\n";
} catch (\PDOException $e) {
    exit($e->getMessage());
}

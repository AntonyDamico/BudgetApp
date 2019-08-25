CREATE TABLE IF NOT EXISTS expense (
  id INT AUTO_INCREMENT primary key,
  name VARCHAR(100) NOT NULL,
  amount decimal(9, 2) not null,
  category_id INT(4) DEFAULT NULL,
  interval_id INT(4) DEFAULT NULL,
  note varchar(255) default null,
  day date default null
) ENGINE = INNODB;


create table if not exists category (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL
) ENGINE = INNODB;


create table if not exists expense_interval (
  id INT NOT NULL AUTO_INCREMENT primary key,
  name VARCHAR(100) NOT NULL
) ENGINE = INNODB;


create table if not exists budget_data (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  income decimal(9, 2) default 0 not null,
  savings decimal(9, 2) default 0 not null,
  savings_perc int(2) default 0 not null,
  monthly_flex decimal(9, 2) default 0 not null
) ENGINE = INNODB;
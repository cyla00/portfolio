<?php
$db_hostname = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "portfolio";

$dsn = 'mysql:dbname=portfolio;host=localhost;charset=utf8';
$connection = new \PDO($dsn, $db_username, $db_password);

$connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
$connection->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
 ?>

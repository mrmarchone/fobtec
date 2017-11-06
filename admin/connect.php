<?php
$dsn = 'mysql:host=127.0.0.1; dbname=fobtec';
$username = 'root';
$password = '1@2@3@cr7@1`';
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);
try {
    $con = new PDO($dsn, $username, $password, $options);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e) {
    echo "ERROR" . $e->getMessage();
}
?>
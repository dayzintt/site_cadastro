<?php
$dbhost = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$dbname = 'amacor_site';

$conex = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);

if ($conex->connect_error) {
    die("Conexão falhou: " . $conex->connect_error);
}

$conex->set_charset("utf8");
?>

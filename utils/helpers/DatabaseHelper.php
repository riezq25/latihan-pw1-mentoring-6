<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/utils/config.php';

$databaseConfigs = config()['database'];
$database = new mysqli($databaseConfigs['host'].':'.$databaseConfigs['port'], $databaseConfigs['username'], $databaseConfigs['password']);

if ($database->connect_error) {
    die("Connection failed: " . $database->connect_error);
}

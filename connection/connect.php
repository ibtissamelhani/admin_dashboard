<?php
// config
require 'vendor/autoload.php';
$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__.'/../');
$dotenv->load();
$server = $_ENV['DB_SERVERNAME'];
$user = $_ENV['DB_USERNAME'];
$password = $_ENV['DB_PASSWORD'];
$DB_name = $_ENV['DB_NAME'];

$connection = mysqli_connect($server, $user, $password, $DB_name);

if(!$connection){
    die("<h2>Total Fail to connect</h2>" . mysqli_connect_error());
}
?>
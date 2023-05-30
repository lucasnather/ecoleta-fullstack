<?php 

require_once './vendor/autoload.php';
require_once 'global.php';

$localhost= $_ENV['HOST'];
$username= $_ENV['USERNAME'];
$password= $_ENV['PASSWORD'];
$dbname= $_ENV['DB_NAME'];

$pdo = new PDO("mysql:host=$localhost;dbname=$dbname", $username, $password);

?>
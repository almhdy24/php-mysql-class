<?php
use Almhdy\PhpMysqlClass\Database;

require_once "vendor/autoload.php";

$dbhost = '127.0.0.1';
$dbuser = 'root';
$dbpass = '123456';
$dbname = 'ciblog';

$db = new Database($dbhost, $dbuser, $dbpass, $dbname);

$users = $db->query('SELECT * FROM users')->fetchArray();
var_dump($users);

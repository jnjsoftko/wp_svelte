<?php
$root = $_SERVER['DOCUMENT_ROOT'] . "/_env";
require_once $root . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable($root);
$dotenv->load();
$email = trim($_ENV['ADMIN_USER_EMAIL']);
print_r($email);
?>
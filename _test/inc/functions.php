<?php
// $root = $_SERVER['DOCUMENT_ROOT'] . "/_env";
// require_once $root . '/vendor/autoload.php';

function get_env($var) {
    $dotenv = Dotenv\Dotenv::createImmutable($root);
    $dotenv->load();

    return trim($_ENV[$var]);
}

function get_envs($vars) {
    $root = $_SERVER['DOCUMENT_ROOT'] . "/_env";
    require_once $root . '/vendor/autoload.php';
    $dotenv = Dotenv\Dotenv::createImmutable($root);
    $dotenv->load();

    $envs = array();

    foreach ($vars as $var) {
        $envs[$var] = trim($_ENV[$var]);
    }

    return $envs;
}
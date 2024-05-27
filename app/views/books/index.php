<?php
echo("list books");

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$segments = explode('/', $path);

echo($path);

var_dump($segments);
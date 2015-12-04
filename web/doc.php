<?php
require(__DIR__ . '/../vendor/autoload.php');

$swagger = \Swagger\scan(__DIR__ . '/../modules/v1');
header('Content-Type: application/json');
echo $swagger;
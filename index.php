<?php
require_once __DIR__.'/./vendor/autoload.php';

use \Patterns\Adapter\ErrorObject;
use \Patterns\Adapter\LogToConsole;

$error = new ErrorObject("404:Not Found");

$logger = new LogToConsole($error);

$logger->write();
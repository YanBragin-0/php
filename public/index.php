<?php
require __DIR__ . '/../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Symfony\Component\VarDumper\VarDumper;
use Dotenv\Dotenv;


$dotenv = Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

$appName = $_ENV['APP_NAME'] ?? 'Без имени';
echo "<p>Имя приложения: <b>{$appName}</b></p>";



$log = new Logger('app');
$log->pushHandler(new StreamHandler(__DIR__ . '/app.log', Logger::DEBUG));
$log->info('Приложение запущено');


$data = ['user' => 'Иван', 'roles' => ['user', 'admin']];
VarDumper::dump($data);



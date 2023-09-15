<?php
session_start();

require_once 'vendor/autoload.php';

use Slim\Slim;

$app = new Slim();

/* Em produção, pode setar para false */
$app->config('debug', true);

/* functions.php  */
require_once('functions.php');

/* Rota dashboard (site.com.br/dashboard) */
require_once('dashboard.php');

/* Rota admin (site.com.br/admin) */
require_once('admin.php');

/* Rota principal (site.com.br/) */
require_once('site.php');


$app->run();

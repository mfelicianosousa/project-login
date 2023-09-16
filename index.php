<?php

session_start();

require_once 'vendor/autoload.php';

use Slim\Slim;

$app = new Slim();

/* Em produção, pode setar para false */
$app->config('debug', true);

/* Carrega function global (functions.php) */
require_once 'functions.php';

/* Rota para dashboard (site.com.br/dashboard) */
require_once 'dashboard.php';

/* Rota para admin/login (site.com.br/admin/login) */
require_once 'admin-login.php';

/* Rota para admin (site.com.br/admin) */
require_once 'admin.php';

/* Rota para cadastro (site.com.br/cadastro) */
require_once 'site-register.php';

/* Rota para login (site.com.br/login) */
require_once 'site-login.php';

/* Rota para home pública (site.com.br/) */
require_once 'site.php';

$app->run();

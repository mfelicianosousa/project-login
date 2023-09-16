<?php

use Main\PageAdmin;

$app->get('/admin/login', function () {
    $page = new PageAdmin([
            'header' => false,
            'footer' => false,
    ]);
    $page->setTpl('login');
});

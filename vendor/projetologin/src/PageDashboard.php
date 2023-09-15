<?php

namespace Main;

class PageDashboard extends Page
{
    public function __construct($opts = [], $tpl_dir = 'views'.DIRECTORY_SEPARATOR.'dashboard')
    {
        parent::__construct($opts, $tpl_dir);
    }
} // end Class

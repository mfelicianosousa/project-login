<?php

namespace Main;

class PageAdmin extends Page
{
    public function __construct($opts = [], $tpl_dir = 'views'.DIRECTORY_SEPARATOR.'admin')
    {
        parent::__construct($opts, $tpl_dir);
    }
} // end Class

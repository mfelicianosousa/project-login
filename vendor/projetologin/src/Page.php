<?php

namespace Main;

use Rain\Tpl;

class Page
{
    private $tpl;
    private $options = [];
    private $defaults = [
        'header' => true,
        'footer' => true,
        'data' => [],
    ];

    /** excuta um Assign nas váriaveis */
    public function setData($data = [])
    {
        foreach ($data as $key => $value) {
            $this->tpl->assign($key, $value);
        }
    }

    /* Renderiza o header da página */
    public function __construct($opts = [], $tpl_dir = 'views')
    {
        $this->options = array_merge($this->defaults, $opts);

        $config = [
            'tpl_dir' => $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.$tpl_dir.DIRECTORY_SEPARATOR,
            'cache_dir' => $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'views-cache'.DIRECTORY_SEPARATOR,
            'debug' => false, // set to false to improve the speed
        ];

        Tpl::configure($config);

        $this->tpl = new Tpl();

        $this->setData($this->options['data']);
        // se header = true, renderiza o header.
        if ($this->options['header'] === true) {
            $this->tpl->draw('header');
        }
    } // end method

    /* Renderiza o miolo da página */
    public function setTpl($name, $data = [], $returnHTML = false)
    {
        $this->setData($data);

        return $this->tpl->draw($name, $returnHTML);
    }

    /* Renderiza o footer da página */
    public function __destruct()
    {
        // Se o footer for true, renderiza o footer
        if ($this->options['footer'] === true) {
            $this->tpl->draw('footer');
        }
    } // end method
} // end Class

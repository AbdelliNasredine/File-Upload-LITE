<?php

namespace App\Controllers;

class BaseController
{

    protected $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

    protected function view()
    {
        return $this->container->get("view");
    }

}

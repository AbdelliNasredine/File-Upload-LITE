<?php

namespace App\Action;

class Action
{

    protected $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function getView()
    {
        return $this->container->get('view');
    }

}

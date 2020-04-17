<?php

namespace App\Action;

use Slim\Views\PhpRenderer as View;

class Action
{

    protected $view;

    public function __construct(View $view)
    {
        $this->view = $view;
    }

}

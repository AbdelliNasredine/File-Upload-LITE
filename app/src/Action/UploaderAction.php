<?php

namespace App\Action;

use Slim\Http\Request;
use Slim\Http\Response;

class UploaderAction extends Action
{

    public function __invoke(Request $request, Response $response)
    {
        $response = $this->view->render($response, 'upload.php');
        return $response;
    }

}

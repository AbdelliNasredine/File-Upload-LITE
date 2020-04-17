<?php

namespace App\Action;

use Slim\Http\Request;
use Slim\Http\Response;

final class Uploader
{

    public function __invoke(Request $request, Response $response)
    {
        $response = $response->withJson(['msg' => 'Uploader get']);
        return $response;
    }

}

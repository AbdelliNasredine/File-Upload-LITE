<?php

namespace App\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;

class UploadController extends BaseController
{
    public function index(Request $request, Response $response)
    {
        $response = $this->view()->render($response, "upload/index.php");
    }
}

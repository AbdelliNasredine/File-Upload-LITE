<?php

namespace App\Controllers;

use Kunnu\Dropbox\DropboxFile;
use Slim\Http\Request;
use Slim\Http\Response;

class UploadController extends BaseController
{
    public function index(Request $request, Response $response)
    {
        $response = $this->view()->render($response, "upload/index.php");
    }

    public function upload(Request $request, Response $response)
    {
        $file = $request->getUploadedFiles()['file'];
        $fileName = "/" . $file->getClientFileName();
        $file = DropboxFile::createByStream($fileName, $file->getStream());
        $file = $this->container->get("dropbox")->upload($file, $fileName, ['autorename' => true]);
        $response = $response->withJson(["msg" => "file uploaded successfully!"]);
        return $response;
    }
}

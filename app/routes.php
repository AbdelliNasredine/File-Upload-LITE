<?php

use App\Controllers\HomeController;
use App\Controllers\UploadController;
use Kunnu\Dropbox\DropboxFile;
use Slim\Http\Request;
use Slim\Http\Response;

$app->get('/', HomeController::class . ":index");

// $app->get('/', function (Request $request, Response $response) {
//     // get all dropbox files:
//     $files = $this->dropbox->listFolder("/")->getItems()->all();
//     $data = [];
//     foreach ($files as $file) {
//         $tempLink = $this->dropbox->getTemporaryLink($file->getPathLower());
//         $data[] = array_merge($file->getData(), ['url' => $tempLink->getLink()]);
//     }
//     $response = $this->view->render(
//         $response,
//         'home.php',
//         [
//             'files' => $data,
//         ]
//     );
//     return $response;
// });

$app->get('/upload', UploadController::class . ":index");

$app->post('/upload', function (Request $request, Response $response) {
    $file = $request->getUploadedFiles()['file'];
    $fileName = "/" . $file->getClientFileName();
    $file = DropboxFile::createByStream($fileName, $file->getStream());
    $file = $this->dropbox->upload($file, $fileName, ['autorename' => true]);
    $response = $response->withJson(["msg" => "file uploaded successfully!"]);
    return $response;
});

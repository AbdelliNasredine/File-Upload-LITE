<?php

use App\Controllers\HomeController;
use App\Controllers\UploadController;

$app->get('/', HomeController::class . ":index");
$app->get('/upload', UploadController::class . ":index");
$app->post('/upload', UploadController::class . ":upload");

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

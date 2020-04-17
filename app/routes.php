<?php

use Slim\Http\Request;
use Slim\Http\Response;

$app->get('/', function (Request $request, Response $response) {
    // get all dropbox files:
    $files = $this->dropbox->listFolder("/")->getItems()->all();
    $data = [];
    foreach ($files as $file) {
        $tempLink = $this->dropbox->getTemporaryLink($file->getPathLower());
        $data[] = array_merge($file->getData(), ['url' => $tempLink->getLink()]);
    }
    $response = $this->view->render(
        $response,
        'home.php',
        [
            'files' => $data,
        ]
    );
    return $response;
});

$app->get('/upload', App\Action\UploaderAction::class);

$app->post('/upload', function (Request $request, Response $response) {
    $pathToLocalFile = __DIR__ . DIRECTORY_SEPARATOR . "test" . DIRECTORY_SEPARATOR . "file.text";
    var_dump($pathToLocalFile);
    var_dump($this->dropbox->listFolder("/")->getItems()->all());
    die();
    $dropboxFile = new DropboxFile($pathToLocalFile);
    $file = $this->dropbox->simpleUpload($dropboxFile, "/My-Hello-World.txt", ['autorename' => true]);

    //Uploaded File
    $file->getName();
});

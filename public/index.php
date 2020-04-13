<?php

use Kunnu\Dropbox\Dropbox;
use Kunnu\Dropbox\DropboxApp;
use Kunnu\Dropbox\DropboxFile;
use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;

require '../vendor/autoload.php';

// configuration
$config['displayErrorDetails'] = true;
$config['addContentLengthHeader'] = false;

$app = new \Slim\App(['settings' => $config]);

$container = $app->getContainer();

$container['view'] = new \Slim\Views\PhpRenderer('../pages/');

// DropBox configs :
$container['dropbox'] = function () {
    $Dropbox_app = new DropboxApp();
    return new Dropbox($Dropbox_app);
};

$app->get('/', function (Request $request, Response $response) {
    $response = $this->view->render($response, 'home.php');
    return $response;
});

$app->get('/upload-document', function (Request $request, Response $response) {
    $response = $this->view->render($response, 'upload.php');
    return $response;
});

$app->post('/upload-document', function (Request $request, Response $response) {
    $pathToLocalFile = __DIR__ . DIRECTORY_SEPARATOR . "Test.txt";
    var_dump($this->dropbox->getMetadata($pathToLocalFile));
    die();
    $dropboxFile = new DropboxFile($pathToLocalFile);
    $file = $this->dropbox->simpleUpload($dropboxFile, "/My-Hello-World.txt", ['autorename' => true]);

    //Uploaded File
    $file->getName();
});

$app->run();

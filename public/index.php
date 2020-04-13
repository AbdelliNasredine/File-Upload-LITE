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
$dotenv = Dotenv\Dotenv::createImmutable(".." . DIRECTORY_SEPARATOR);
$dotenv->load();

$app = new \Slim\App(['settings' => $config]);

$container = $app->getContainer();

$container['view'] = new \Slim\Views\PhpRenderer('../pages/');

// DropBox configs :
$container['dropbox'] = function () {
    $guzzleClient = new \GuzzleHttp\Client(array('curl' => array(CURLOPT_SSL_VERIFYPEER => false)));
    $Dropbox_app = new DropboxApp(
        getenv('APP_KEY'),
        getenv('APP_SECRET'),
        getenv('ACCESS_TOKEN')
    );
    return new Dropbox(
        $Dropbox_app,
        ['http_client_handler' => $guzzleClient]
    );
};

$app->get('/', function (Request $request, Response $response) {
    $response = $this->view->render($response, 'home.html');
    return $response;
});

$app->post('/upload', function (Request $request, Response $response) {
    $pathToLocalFile = __DIR__ . DIRECTORY_SEPARATOR . "test" . DIRECTORY_SEPARATOR . "file.text";
    var_dump($pathToLocalFile);
    var_dump($this->dropbox->listFolder("/")->getItems());
    die();
    $dropboxFile = new DropboxFile($pathToLocalFile);
    $file = $this->dropbox->simpleUpload($dropboxFile, "/My-Hello-World.txt", ['autorename' => true]);

    //Uploaded File
    $file->getName();
});

$app->run();

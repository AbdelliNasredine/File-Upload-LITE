<?php

use Kunnu\Dropbox\Dropbox;
use Kunnu\Dropbox\DropboxApp;

// .env config
$config['displayErrorDetails'] = true;
$config['addContentLengthHeader'] = false;
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$container = $app->getContainer();

// php view
$container['view'] = new \Slim\Views\PhpRenderer(__DIR__ . '/../app/templates/');

// DropBox
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

// Controllers
$container[App\Controllers\HomeController::class] = function ($c) {
    return new App\Controllers\HomeController($c);
};

$container[App\Controllers\UploadController::class] = function ($c) {
    return new App\Controllers\UploadController($c);
};

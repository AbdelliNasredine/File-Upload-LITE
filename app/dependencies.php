<?php

use Kunnu\Dropbox\Dropbox;
use Kunnu\Dropbox\DropboxApp;
use Kunnu\Dropbox\DropboxFile;

// .env config
$config['displayErrorDetails'] = true;
$config['addContentLengthHeader'] = false;
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$container = $app->getContainer();

// php view
$container['view'] = new \Slim\Views\PhpRenderer('../pages/');

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

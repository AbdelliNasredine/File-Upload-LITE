<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require './vendor/autoload.php';

// configuration
$config['displayErrorDetails'] = true;
$config['addContentLengthHeader'] = false;


$app = new \Slim\App(['settings' => $config]);

$container = $app->getContainer();

$container['view'] =  new \Slim\Views\PhpRenderer('./pages/');

$app->get('/' , function(Request $request, Response $response){
    $response = $this->view->render($response ,'home.php');
    return $response;
});


$app->get('/upload-document' , function(Request $request, Response $response){
    $response = $this->view->render($response ,'upload.php');
    return $response;
});

$app->run();
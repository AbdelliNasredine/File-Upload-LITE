<?php

require '../vendor/autoload.php';

// app init
$settings = require __DIR__ . '/../app/settings.php';
$app = new \Slim\App($settings);

// dependencies
require __DIR__ . '/../app/dependencies.php';

// routes
require __DIR__ . '/../app/routes.php';

$app->run();

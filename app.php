<?php
require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/captcha.php';

$app = new Silex\Application();
$app['debug'] = true;

$app->get('/', function () {
    return "";
});
$app->get('/captcha', function () use ($app) {
    return captcha(rand(1, 2), rand(1,9), rand(1,3), rand(1,9));
});

$app->run();

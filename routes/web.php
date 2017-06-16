<?php

use App\Http\Controllers\HomeController;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

$app->get('/home', HomeController::class . ':index');

$app->get('/', function (ServerRequestInterface $request, ResponseInterface $response, $args) {
    return $response->write(
        'Welcome To Your Slim App
        <br><a href="/home">Home</a>
        <a href="/api">Api</a>'
    );
});
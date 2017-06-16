<?php

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

$app->get('/api', function (ServerRequestInterface $request, ResponseInterface $response, $args) {
    return $response->withJson([
        "data" => [
            'message' => "Welcome to Your new api, Enjoy",
            'status'  => 200,
        ],
    ], 200);
});
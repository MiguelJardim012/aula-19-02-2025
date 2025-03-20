<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

use Slim\view\PhpRender;

require __DIR__ . '/vendor/autoload.php';

$app = AppFactory::create();

$app->get(
    '/',
    function(
        Request $request,
        Response $response, 
        $args
    ) {  
        $response->getBody()->write("Olá Mundo!!!");
        return $response;      
        });


$app->get(
    '/mensagem/{nome}',
    function(
        Request $request,
        Response $response, 
        $args
    ) {  
        $response->getBody()->write("Boa Noite");
        return $response;      
        });

$app->run();

$app->get(
    '/hello}',
    function(
        Request $request,
        Response $response, 
        $args
    ) {  
        $response = new PhpRender(__DIR__. '/templates');
        return $renderer->render($response, 'hello.php', []);      
        });

$app->run();
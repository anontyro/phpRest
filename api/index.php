<?php 
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '/vendor/autoload.php';

$app = new \Slim\App;


$app->get('/', function($request, $response) use($app) {
    $response->getBody()->write("Welcome to my Slim API");


    return $response;
}); 

$app->run();

 ?>
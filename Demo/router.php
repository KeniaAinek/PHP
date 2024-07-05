<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$routes = [
    '/PHP/Demo/' => './controllers/index.php',
    '/PHP/Demo/about' => './controllers/about.php',
    '/PHP/Demo/contact' => './controllers/contact.php'
];

function routeToController($uri, $routes){
    if(array_key_exists($uri, $routes)){
        require $routes[$uri];
    }else{
        abort(404);
    }
}
function abort($code){
    http_response_code($code);
    require "views/{$code}.php";
    die();
}
 



routeToController($uri,$routes);
<?php 

require_once __DIR__.'/../vendor/autoload.php';

use App\Core\Application;

$root_dir = dirname(__DIR__);

var_dump($root_dir);

$app = new Application($root_dir);

$route = $app->router;

$route->get('/', function(){
    echo "Home";
});

$route->get('/contact', function() {
    echo "Contact";
});

$app->run();
// echo '<pre>';
// var_dump($_SERVER);
// echo '</pre>';
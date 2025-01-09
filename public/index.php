
<?php 

require '../vendor/autoload.php';
require '../partials/header.php' ;
$uri = $_SERVER['REQUEST_URI'];

$router = new  AltoRouter();

$router->map('GET','/', function () {
    require '../templates/home.php' ;
});
$router->map('GET','/apropos', function () {
    require '../templates/apropos.php' ;
});
$router->map('GET','/projets', function () {
    require '../templates/projet.php' ;
});
$router->map('GET','/competences', function () {
    require '../templates/competences.php' ;
});
$router->map('GET','/contact', function () {
    require '../templates/contact.php' ;
});

$match = $router->match();
if ($match) {
    call_user_func_array($match['target'],$match['params']);
} else {
    echo " Cette page n'existe pas ";
}

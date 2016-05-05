<?php
/* @var Illuminate\Routing\Router $router */


$router->get('/', function () {
    return view('frontend.pages.welcome');
});



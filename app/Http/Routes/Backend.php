<?php
/* @var Illuminate\Routing\Router $router */


$router->group(['prefix' => 'admin'], function ($router) {
    $router->get('/',function (){
        return view('backend.pages.login');
    });
});
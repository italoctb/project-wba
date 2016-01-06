<?php

$router->get('/', ['middleware' => 'auth'], function () {
    return view('index');
});

$router->get('auth/login', 'Auth\AuthController@getLogin');
$router->post('auth/login', 'Auth\AuthController@postLogin');
<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// generate application key
$router->get('/key', function() {
    return str_random(32);
});

$router->get('/foo', function() {
    return 'Hello, Get Method';
});

$router->post('/bar', function() {
    return 'Hello, Post Method';
});

// The Router allows you to register routes that respond to any HTTP

$router->get('/get', function() {
    return 'GET';
});

$router->post('/post', function() {
    return 'post';
});

$router->put('/put', function() {
    return 'put';
});

$router->patch('/patch', function() {
    return 'patch';
});

$router->delete('/delete', function() {
    return 'delete';
});

$router->options('/options', function() {
    return 'options';
});

$router->get('/user/{id}', function($id){
    return 'User = id ' . $id;
});

$router->get('send_email' ,'Mailcontroller@mail');
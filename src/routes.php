<?php

use Leaf\Http\Response;
use Leaf\Http\Request;

require __DIR__ . '/../config/database.php';

// Post routes
$app->get('/posts', 'PostController@index');
$app->get('/posts/:id', 'PostController@show');
$app->post('/posts', 'PostController@store');
$app->put('/posts/:id', 'PostController@update');
$app->delete('/posts/:id', 'PostController@destroy');

// User routes
$app->post('/users/register', 'UserController@register');
$app->post('/users/login', 'UserController@login');

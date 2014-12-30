<?php

    if (!isset($_SERVER['SERVER_PORT'])) {
        $_SERVER['SERVER_PORT'] = $_SERVER['HTTPS'] == 'off' ? 80 : 443;
    }    
	require 'Slim/Slim.php';

	\Slim\Slim::registerAutoloader();
	$app = new \Slim\Slim();

	$app->get(
    '/',
    function () {
        echo 'This is a GET route';
    });


	$app->post(
    '/post',
    function () {
        echo 'This is a POST route';
    });

    $app->run();
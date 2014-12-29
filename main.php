<?php
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
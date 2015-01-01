<?php

    if (!isset($_SERVER['SERVER_PORT'])) {
        $_SERVER['SERVER_PORT'] = $_SERVER['HTTPS'] == 'off' ? 80 : 443;
    }    
	require 'Slim/Slim.php';

	\Slim\Slim::registerAutoloader();
	$app = new \Slim\Slim();

    //Should include de app routers here

    require_once('apps/podcast_me.php');

    $app->run();
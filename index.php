<?php
set_include_path(get_include_path() . PATH_SEPARATOR . "restler");
set_include_path(get_include_path() . PATH_SEPARATOR . "apps");
require_once 'vendor/restler.php';
use Luracast\Restler\Restler;
use Luracast\Restler\Defaults;

Defaults::$useUrlBasedVersioning = true;

$r = new Restler();
$r->setSupportedFormats('JsonFormat');
$r->setAPIVersion(1);
$r->addAPIClass('Say');
$r->addAPIClass('Podcast');
$r->handle();

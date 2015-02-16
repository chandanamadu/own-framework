<?php
require_once __DIR__.'/../../init.php';

$res = $response->setContent('Bye...');
$res->send();

?>
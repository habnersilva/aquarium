<?php


$route->get('/', "Index@index");
$route->get('/teste', "Index@teste");

$route->get('/pages', "Pages@index");
$route->get('/pages/edit/[i:id]?', "Pages@edit");

?>
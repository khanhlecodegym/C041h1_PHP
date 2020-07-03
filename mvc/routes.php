<?php

$router->get('', 'PageController@index');
$router->get('login', 'PageController@login');
$router->get('logout', 'PageController@logout');
$router->post('login', 'PageController@home');
$router->get('employ', 'EmployController@index');

?>
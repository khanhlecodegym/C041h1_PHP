<?php

$router->get('', 'OfficeController@home');
$router->get('login', 'PageController@login');
$router->post('login', 'PageController@home');


?>
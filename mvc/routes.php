<?php

$router->get('', 'controller/OfficeController.php');
// $router->get('', 'controllers/index.php');
$router->get('login', 'controller/PageController.php');
$router->get('about/culture', 'controllers/about-culture.php');
$router->get('contact', 'controllers/contact.php');
$router->post('names', 'controllers/add-name.php');

?>
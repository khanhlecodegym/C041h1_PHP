<?php

require_once 'core/Request.php';
require_once 'core/Router.php';

// require_once 'controller/PageController.php';

require Router::load('routes.php')
    ->direct(Request::uri(), Request::method());

?>
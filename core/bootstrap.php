<?php
/* start session */
if (!session_id()) session_start();

/* start routes */
$routes = require_once __DIR__ . "/../app/config/router.php";
$route = new \Core\Route($routes);
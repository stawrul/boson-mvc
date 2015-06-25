<?php

require_once "../mvc.php";
require_once "../controllers.php";
require_once "../routing.php";

$action_url = array_key_exists('action', $_GET) ? $_GET['action'] : '/';
dispatch($routing, $action_url);

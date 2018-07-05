<?php
require 'vendor/autoload.php';
use php\packages\Classes\ComponentTest;
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : null;

$component = new ComponentTest($action);
echo "<h1 style='text-align:center;position:relative;top:40%'>".$component->dispatch()."</h1>";
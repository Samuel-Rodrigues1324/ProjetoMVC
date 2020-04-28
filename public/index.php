<?php

use App\Dispatch;

header("Content-Type: text/html; charset=utf-8");
require_once("../config/config.php");
require_once("../src/vendor/autoload.php");
require_once("../src/traits/TraitUrlParser.php");

$Dispatch=new App\Dispatch();

?>
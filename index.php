<?php
$view = new stdClass();
$view->pageTitle = 'Home';
require_once("View/index.phtml");
require_once("Model/GetData.php");

$gt = new GetData("json/index.json");
<?php
require_once("Model/GetData.php");

$gt = new GetData("json/engineering.json");
$page = $_REQUEST["page"];
$obj = $gt->getData()["pages"][$page];
require_once ("View/dashboard.phtml");
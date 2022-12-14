<?php
require_once("Model/GetData.php");

$gt = new GetData("json/engineering.json");
$pages = $gt->getData()["pages"];

require_once("View/index.phtml");
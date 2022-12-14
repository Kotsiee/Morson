<?php
require_once("Model/GetData.php");

$gt = new GetData("json/engineering.json");
$pages = $_REQUEST["page"];
$obj = $gt->getData()["pages"][$pages];

echo "<style>
header {background-color: ". $gt->getData()['meta']['colour'] ."}
</style>";

require_once ("View/embeded.phtml");
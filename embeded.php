<?php
require_once ("View/embeded.phtml");
require_once("Model/GetData.php");

$gt = new GetData("json/engineering.json");
$obj = $gt->getData()["page1"];

foreach ($obj as $key => $value) {
    echo '<p style="position: absolute; left: '. $value["position"][0] .'; top: '. $value["position"][1] .';">' . $value["content"] . '</p>';
}

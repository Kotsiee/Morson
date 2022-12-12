<?php
$view = new stdClass();
$view->pageTitle = 'Home';
require_once("View/index.phtml");
require_once("Model/GetData.php");
$gt = new GetData("Model/index.json");

if (isset($_POST["hello"])) {
    echo $gt->getData()['engineering']['password'];
}

if (isset($_POST["bye"])) {
    $gt->changeData("password", 0, "hello");
}

/*[
    "engineering": {
    "password":"hello"
  },

  "HR": {
    "password":"bloop"
  }
]*/
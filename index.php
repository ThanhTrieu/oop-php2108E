<?php

// require 'bootstrap/Bootstrap.php';
// $app = new \bootstrap\Bootstrap;

require 'vendor/autoload.php';

// goi controllers khong can require
$home = new \app\controllers\HomeController;
$data = $home->listProducts();

echo '<pre>';
print_r($data);

// to chuc  - xay dung 1 project oop php theo mo hinh mvc
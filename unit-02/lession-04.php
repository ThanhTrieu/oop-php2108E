<?php

namespace Model;

require "lession-03.php";

use App\Controllers\A as LoginModel; // truy cap vao class co namespace (keyword use)
// namespace + class
// as : doi ten class (dinh danh lai ten goi cho class)

class B extends LoginModel
{

}
$b = new B;
echo $b->index();
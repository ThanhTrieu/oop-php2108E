<?php

namespace App;

require "../traits/common.php";
require "../traits/helper.php";

use traits\Helper;
use traits\Common;


class A
{
    // sung dung traits
    use Helper, Common {
        // Conflict Resolution

        // goi check cua common
        Common::check insteadof Helper;
        Common::test insteadof Helper;

        // goi check cua helper
        //Helper::check insteadof Common;
        //Helper::test insteadof Common
    }

    // public function index()
    // {
    //     return $this->test();
    // }

    // public static function example()
    // {
    //     // trong phuong thuc static ko co con tro $this
    //     return (new A)->check();
    // }
}

$a = new A;
// echo $a->example();
echo "<br/>";
echo $a->check();
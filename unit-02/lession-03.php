<?php

// duong dan cac thu muc chua file (ten file va ten class trung nhau)
// trong 1 file chi co 1 class

namespace App\Controllers; // namespace phan cap

class A
{
    public function index()
    {
        return "Hello word .  -- " . __NAMESPACE__;
        // hang so __NAMESPACE__;
    }
}
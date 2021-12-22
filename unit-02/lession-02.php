<?php

// keyword Final
// 1 - chong ke thua

final class A 
{
    public function index()
    {
        return "This is function " . __FUNCTION__;
    }
}
$a = new A; // van khoi tao dc object binh thuong
//echo $a->index(); // van truy cap binh thuong

/*
class B extends A
{
    // sai : vi khong the ke thua final class A
}
$b = new B;
echo $b->index();
*/

// 2 - chong override
class C
{
    final public function demo()
    {
        return "This is function " . __FUNCTION__ . " of class : " . __CLASS__;
    }
}

class D extends C
{
    // override - sai : khong ther override final method cua class cha
    /*
    public function demo()
    {
        return "This is function " . __FUNCTION__ . " of class : " . __CLASS__;
    }
    */
}
$d = new D;
echo $d->demo(); // method cua class cha
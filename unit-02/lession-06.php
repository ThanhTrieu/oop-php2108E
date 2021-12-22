<?php

// class abstract
abstract class A
{
    // van duoc phep dinh nghia thuoc tinh binh thuong (khong dung tu khoa abstract)
    public $name = 'Teo';
    protected $age = 20;
    private static $money = 1000;

    // dinh nghia phuong thuc

    // 1 - phuong thuc abstract (chi dung public hoac protected - ko dc dung private)
    abstract public function demo(); // phuong thuc rong
    abstract protected function test(); // phuong thuc rong

    // 2 - phuong thuc khong phai abstract
    public function getName()
    {
        // logic
        return $this->name;
    }

    protected static function getMoney()
    {
        return self::$money;
    }
}
// khong the khoi tao doi tuong cho abstract class
// $a = new A; // sai

abstract class C extends A
{
    abstract protected function check();
}

class B extends C
{
    // class B phai override toan bo cac phuong la abstract cua class abstract A, C

    protected function check()
    {
        // logic
    }

    public function demo()
    {
        // logic
        return $this->name;
    }

    protected function test()
    {
        // logic
        return $this->age;
    }

    // cac phuong thuc khac khong bat buoc override
    public static function myMoney()
    {
        return self::getMoney();
    }
}

class D extends B
{
    // khong bat buoc phai override cac phuong thuc cua abstract class A, C (vi ko ke thua truc tiep)
}

$b = new B;
echo $b->demo();
echo "<br/>";
echo B::myMoney();
<?php

// dinh nghia interface
// S O L I D

// dinh nghia interface
interface A
{
    // khong duoc phep dinh nghia thuoc tinh
    // public $name = 'Teo'; // sai

    // chi duoc phep dinh phuong thuc o dang public - nhung cac phuong thuc phai la cac phuong thuc rong
    public function demo(); // phuong thuc rong
    public function test(); // phuong thuc rong
}
// khong the khoi tao doi tuong
// $a = new A; // sai

interface C extends A
{
    // interface ke thua interface thi van dung tu khoa extends
    public function index(); // phuong thuc rong
    public function check(); // phuong thuc rong
}

class B implements C
{
    // class ke thua interface thi dung implements
    // khi 1 class ke thua interface thi class do phai override lai toan bo cac phuong thuc cua interface
    public function demo()
    {
        // logic
        return "this is demo";
    }

    public function test()
    {
        // logic
    }

    public function index()
    {
        // logic
    }

    public function check()
    {
        // logic
    }
}

class D extends B
{
    // class D co phai bat buoc override lai toan bo cac phuong thuc cua interface nhu class B ko?
}
$b = new B;
echo $b->demo();
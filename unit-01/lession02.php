<?php
// ke thua trong php

class Person
{
    protected $money = 100;
    public $name = 'John';

    protected function getMoney()
    {
        return $this->money;
    }

    public function getName()
    {
        return $this->name;
    }
}

class Student extends Person
{
    public $myName = 'Davis';

    // tu khoa extends dung de ke thua
    // trong php khong co khai niem da ke thua (sau nay du dung trait de tao ra tien ich gan giong nhu da ke thua)

    // ke thua : co the su dung nhung thuoc tinh hoac phuong thuc ma class cha truyen xuong

    public function myMoney()
    {
        return $this->getMoney(); // oke : vi da ke thua nen goi ra dc
    }

    // override - ghi de phuong thuc (tinh da hinh)
    // overload - php ko ho tro (khong lien quan den oop)
    public function getName()
    {
        return $this->myName;
    }

    public function showName()
    {
        //return $this->getName(); // getName cua class cha hay con ????
        // class con da override lai phuong thuc
        // goi lai dung phuong thuc tu class cha o class con ???
        return parent::getName();
    }
}
$cntt = new Student;
echo $cntt->getName(); // trong class Student khong dinh nghia method getName nhung vi class Student ke thua class Person nen duoc su dung (phu thuoc vao pham vi hoat dong)
echo "<br/>";
//echo $cntt->getMoney(); // khong the goi ngoai class dc vi la protected
echo $cntt->myMoney();
echo "<br/>";
echo $cntt->showName();

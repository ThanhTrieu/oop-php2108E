<?php

// dinh nghia class php
class Student
{
    // const (chi dung const khai bao hang so trong class)
    const PI = 3.14; // khong phai la thuoc tinh - truy cap vao dung tu khoa self
    // khai bao thuoc tinh : dac diem tinh chat cua doi tuong (mieu ta thong qua tinh tu hoac danh tu)
    private $money = 100; // khai bao thuoc tinh va gan gia tri (co the hieu la dinh nghia bien)
    // private : chi su dung noi bo trong class thoi
    protected $lovely = 'single';
    // protected: chi su dung noi bo trong class va nhung class ke thua
    public $name = 'Van Teo';
    // public: co the su dung bat ky noi dau
    // mot thuoc tinh ma khong khai bao pham vi truy cap thi mac dinh la public(khong nen lam vay - vi pham cac quy tac(tieu chuan) lap trinh)

    // thuoc tinh khai bao la static
    public static $age = 20;
    private static $point = 1;
    protected static $girlFriend = 'Tieu Hy';


    // khai bao ve phuong thuc: hanh dong cua doi tuong(mieu ta thong qua cac dong tu)
    private function tronHocDiChoi()
    {
        return "AOE - LOL";
    }

    protected function diChoiVoiBanGai()
    {
        return "A";
    }

    public function diHocTrenLop()
    {
        //var_dump($this); // ??? no la gi
        //die; // dung chay tiep chuong trinh
        // trong phuong thuc : $this chinh la class dang khai bao
        // de truy cap thuoc tinh hay la phuong thuc trong class ma khong phai la "static" thi dung tu khoa $this;
        // $name = $this->name;
        // $money = $this->money; // van truy cap dc vi van trong class
        // $lovely = $this->lovely;
        // $game = $this->tronHocDiChoi();
        // return "{$name} hoc o giang duong khu A - {$money} - {$lovely} - {$game}";

        // tu 1 phuong thuc khong phai la static - truy cap vao 1 thuoc tinh la static
        //return $this->girlFriend; // sai vi khong dung $this cho thuoc tinh la static
        //return self::$girlFriend; //Student::$girlFriend; // dung tu khoa self thay the cho $this voi thuoc tinh la static

        // truy cap vao hang so trong phuong thuc - trong class
        $pi = self::PI;
        return $pi;
    }

    public static function diNhauVoiBan($friend = 'B')
    {
        // trong phuong thuc la static - khong ton tai $this
        // truy cap vao thuoc tinh khong phai la static trong phuong thuc static
        // bat buoc phai tao ra doi tuong de truy cap vao thuoc tinh khong phai la static
        /*
        $object = new Student;
        $name = $object->name; // thuoc tinh khong phai la static
        */
        //$name = (new Student)->name; // short syntax
        //return "Di nhau voi ban {$friend} va ban {$name}";

        // goi thuoc tinh static trong phuong thuc static
        $age = self::$age;
        $pi = self::PI;
        return "di nhau voi ban {$friend} da tren {$age} tuoi - {$pi}";
    }

    public static function diNgu()
    {
        $nhau = self::diNhauVoiBan(); // ????
        return $nhau;
    }
}

// tao 1 doi tuong(object) thuoc class
$cntt = new Student;
$ck = new Student;
$cdt = new Student;

// truy cap vao thuoc tinh hay phuong thuc ben ngoai class
// neu cac thuoc hay hay phuong khong phai la "static" thi dung doi tuong thuoc class truy cap
// muon truy cap vao duoc thuoc tinh hay phuong thi can phu thuoc vao pham vi hoat dong cua chung
//$money = $cntt->money; // truy cap vao thuoc tinh - sai vi la private
//echo $money; // ???
//$lovely = $ck->lovely; // ??? - sai vi la protected
//echo $lovely;
$name = $cdt->name; // ??? - vi la public nen truy cap ben ngoai class duoc
//echo $name;

$learn = $cntt->diHocTrenLop(); // () : thuc thi phuong thuc
//echo $learn; //???

// truy cap thuoc tinh static ben ngoai class
//$age = $cntt->age; // ??? (dang truy cap thuoc tinh ko ton tai)
//echo $age;

$tuoi = Student::$age; // thuoc thinh la static dung thang class de truy cap khong thong qua doi tuong cua class
//echo $tuoi;

$anNhau = Student::diNhauVoiBan('Van Ty');// truy cap vao phuong thuc la static ben ngoai class
echo $anNhau;
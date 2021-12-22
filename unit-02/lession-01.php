<?php

class A
{
    public function __construct($name = '')
    {
        // phuong thuc chay dau tien khi khoi tao doi tuong cho class
        echo "Phuong thuc " . __FUNCTION__ . " da chay";
        echo "<br/>";
    }


    public function __destruct()
    {
        // phuong thuc chay cuoi cung khi khoi tao doi tuong cho class
        echo "Phuong thuc " . __FUNCTION__ . " da chay";
    }

    public function index()
    {
        echo "Phuong thuc " . __FUNCTION__ . " da chay";
        echo "<br/>";
    }

    // tat cac cac method magic trong oop deu khai bao la public
    public function __call($nameMethod, $parameters)
    {
        echo "</br>";
        echo "Ban vua truy cap vao phuong thuc {$nameMethod} khong ton tai trong class";
        echo "</br>";
        var_dump($nameMethod, $parameters);
        echo "</br>";
        // khi truy cap vao 1 phuong thuc (khong phai la static) khong ton tai trong class thi phuong phuong __call se tu dong chay
        // __call() se nhan vao 2 tham so: ten phuong thuc truy cap(string) - va mang cac tham so truyen vao phuong neu co
    }

    public static function __callStatic($name, $arguments)
    {
        // khi truy cap vao phuong thuc static khong ton tai trong class thi phuong thuc nay se tu dong nay

        echo "</br>";
        echo "Ban vua truy cap vao phuong thuc static {$name} khong ton tai trong class";
        echo"</br>";
        var_dump($name, $arguments);
        echo "</br>";
    }

    public function __get($nameProperty)
    {
        // khi truy cap vao thuoc tinh khong phai la static ben ngoai class thi phuong nay se tu dong chay
        // tham so truyen vao phuong thuc chinh la ten cua thuoc tinh ma truy cap ben ngoai class
        echo " <br>";
        echo "Ban vua truy cap vao thuoc tinh {$nameProperty} (ko phai static) khong ton tai trong class";
        echo "</br>";
    }

    public function __set($name, $value)
    {
        echo " <br>";
        echo "Ban vua truy cap vao thuoc tinh {$name} (ko phai static) khong ton tai trong class va ban da gan tri : {$value} cho thuoc tinh {$name}";
        echo "</br>";
    }
}
$a = new A('a'); // construct se chay
$a->index();
$a->test(1,2,3,4); // truy cap vao phuong thuc khong ton tai trong class
// moi thu da chay xong het - destruct se chay
A::demo(); // truy cap vao phuong thuc static khong ton tai trong class

echo $a->name; // truy cap vao thuoc tinh khong phai la static khong ton tai trong class
$a->age = 20; // truy cap vao thuoc tinh khong phai la static khong ton tai trong class va gan gia tri cho thuoc tinh
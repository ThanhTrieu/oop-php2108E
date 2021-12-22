<?php
// magic method oop
// day la phuong thuc co san
// cach hoat dong rat dac biet (magic method)

class A 
{
    public function __construct($name = 'A')
    {
        // $name : se duoc truyen vao o dau ???
        // magic method
        // phuong thuc khoi tao
        // phuong thuc duoc khoi chay dau tien khi khoi tao doi tuong cho class
        echo __FUNCTION__ . " of class " . __CLASS__ . ' is running -- ' . $name;
        // __FUNCTION__ : lay ra ten phuong thuc dang thuc thi
        // __CLASS__ : la ra ten class
        echo "<br/>";
    }

    public function index($age)
    {
        return "phuong thuc index - {$age}";
    }
}
$a = new A('Teo'); // __construct : lap tuc chay
echo $a->index(20);
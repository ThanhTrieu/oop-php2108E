<?php

namespace bootstrap;

// day la noi dinh nghia class ho tro viec autoload cac file

// ten file va ten class la trung nhau
// trong 1 file chi ton tai 1 class

class Bootstrap
{
    // dung construct de khi khoi tao doi tuong cho class nay thi tu dong autoload file
    public function __construct()
    {
        spl_autoload_register([$this, '_myAutoload']);
    }


    private function _myAutoload($file)
    {
        // $file : bao gom ten namespace + ten class
        // quy uoc ten cua namespace chinh la ten duong dan cap thu muc chua file
        // app\controllers\HomeController
        // can chinh lai thanh duong dan chua file (app/controllers/HomeController)

        $file = str_replace('\\', '/', trim($file, '\\')) . '.php';
        if(file_exists($file)){
            require $file;
        }
    }
}
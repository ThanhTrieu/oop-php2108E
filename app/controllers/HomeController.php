<?php

namespace app\controllers;

use app\models\HomeModel; // khong can require

class HomeController
{
    private $db;

    public function __construct()
    {
        $this->db = new HomeModel;
    }

    public function listProducts()
    {
        $data = $this->db->getAllData();
        return $data;
    }
}
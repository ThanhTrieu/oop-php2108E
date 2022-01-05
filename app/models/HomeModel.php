<?php

namespace app\models;

class HomeModel
{
    public function getAllData()
    {
        return [
            [
                'id' => 1,
                'name' => 'IphoneX',
                'price' => 10000
            ],
            [
                'id' => 2,
                'name' => 'SamsungS22',
                'price' => 10000
            ]
        ];
    }
}
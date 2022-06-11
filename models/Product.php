<?php


namespace app\models;


use app\Database;
use app\helpers\UtilHelper;


class Product
{
    public ?int $id = null;
    public string $sku;
    public string $name;
    public float $price;


    public function load($data)
    {
        $this->id = $data['id'] ?? null;
        $this->sku = $data['sku'];
        $this->name = $data['name'];
        $this->price = $data['price'];
    }

    public function save()
    {
        $errors = [];
      
        if (!$this->sku) {
            $errors[] = 'Product sku is required';
        }

        if (!$this->price) {
            $errors[] = 'Product price is required';
        }

        if (empty($errors)) {

            $db = Database::$db;
            call_user_func(array($db, "create$class"),$this);

        }
    }
}
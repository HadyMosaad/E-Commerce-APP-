<?php

namespace app\models;

use app\Database;
use app\helpers\UtilHelper;
class  Book extends Product
{
    public $weight;

    public function load($data)
    {
        parent::load($data);
        $this->weight = $data['weight'];

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
            $db->createBook($this);
            
        }
    }
  
};
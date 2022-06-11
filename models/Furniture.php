<?php

namespace app\models;

use app\Database;
use app\helpers\UtilHelper;
class  Furniture extends Product
{
    public $height;
    public $width;
    public $length;

    public function load($data)
    {
        parent::load($data);
        $this->height = $data['height'];
        $this->length= $data['length'];
        $this->width = $data['width'];

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
            $db->createFurniture($this);
            
        }
    }
 
};
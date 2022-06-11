<?php
namespace app\models;
use app\Database;
use app\helpers\UtilHelper;

class Disk extends Product
{
    public $size;
    public function load($data)
    {
        parent::load($data);
        $this->size = $data['size'];

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
            $db->createDisk($this);
            
          }
    }
 
   
};
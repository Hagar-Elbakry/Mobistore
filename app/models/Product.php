<?php

class Product {
    public $db = null;

    public function __construct(Database $db) {
        if(!isset($db->pdo)) {
            return null;
        } 

        $this->db=$db;
    }

    public function getData($table = 'product') {
        $query = "SELECT * FROM $table";
        $result = $this->db->pdo->query($query)->fetchAll();
        return $result;
     
    }
}
<?php

class products {
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

    public function getProduct($item_id, $table = 'product') {
        if(isset($item_id)) {
            $query = "SELECT * FROM $table WHERE item_id = :item_id";
            $stmt = $this->db->pdo->prepare($query);
            $stmt->bindParam(':item_id', $item_id);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        }
    }
}
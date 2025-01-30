<?php

Class Carts {
    public $db = null;

    public function __construct(Database $db) {
        if(!isset($db->pdo)) {
            return null;
        } 

        $this->db=$db;
    }

    public function insertIntoCart($params = null, $table = 'cart') {
        if($this->db->pdo != null && $params != null) {
            $columns = implode(',', array_keys($params));
            $values = implode(',', array_values($params));

            $query = sprintf('INSERT INTO %s (%s) VALUES (%s)', $table, $columns, $values);
            $result = $this->db->pdo->exec($query);
            return $result;
        }
    }

    public function addToCart($userId = null, $itemId = null) {
        if(isset($userId) && isset($itemId)) {
            $params = [
                'user_id' => $userId,
                'item_id' => $itemId
            ];

            $result = $this->insertIntoCart($params);
            if($result) {
                header('Location: ' . ROOT);
            }
        }
    }

    public function getSum($prices = null) {
        if(isset($prices)) {
            $sum = 0;
            foreach($prices as $price) {
                $sum += $price;
            }
            
            return sprintf('%.2f', $sum);
        }
    }

    public function deleteCart($item_id = null, $table = 'cart') {
        if(isset($item_id)) {
            $query = "DELETE FROM $table WHERE item_id = :item_id";
            $stmt = $this->db->pdo->prepare($query);
            $stmt->bindParam(':item_id', $item_id);
            $stmt->execute();
            $result = $stmt->fetchAll();
            
            if($result) {
                header('Location: cart');
            }

            return $result;
        }
    }
}
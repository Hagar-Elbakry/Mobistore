<?php

Class Database {
    protected $dsn = "mysql:host=localhost;dbname=mobistore";
    protected $dbUsername = "root";
    protected $dbPassword = '';

    public $pdo = null;

    public function __construct() {
        try {
            $this->pdo = new PDO($this->dsn, $this->dbUsername, $this->dbPassword);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Connection Failed " . $e->getMessage());
        }
    }

    public function __destruct() {
        $this->closeConnection();
    }

    protected function closeConnection() {
        if($this->pdo != null) {
            $this->pdo = null;
        }
    }
}
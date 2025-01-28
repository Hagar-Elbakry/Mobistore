<?php

class Product {
    use Controller;
    public function index() {
        $this->view('Product');
    }
}
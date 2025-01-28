<?php

class Cart {
    use Controller;
    public function index() {
        $this->view('Cart');
    }
}
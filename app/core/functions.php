<?php

$db = new Database();

$product = new Products($db);
$product_shuffle = $product->getData();

$cart = new Carts($db);

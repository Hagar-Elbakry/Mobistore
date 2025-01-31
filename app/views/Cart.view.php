<?php 

    ob_start();
    
    include 'Header.view.php';
    count($product->getData('cart')) ? include "Templates/_cart.view.php" : include "Templates/_cart-notfound.view.php";
    count($product->getData('wishlist')) ? include "Templates/_wishlist.view.php" : include "Templates/_wishlist-notfound.view.php";
    include "Templates/_new-phones.view.php";

    include "Footer.view.php";
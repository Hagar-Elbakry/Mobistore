<?php

if(isset($_POST['item_id'])) {
    $result = $product->getProduct($_POST['item_id']);
    echo json_encode($result);
}


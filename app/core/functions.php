<?php

$db = new Database();

$product = new Products($db);

$cart = new Cart($db);

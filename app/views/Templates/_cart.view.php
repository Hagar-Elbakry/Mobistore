 <?php
   if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_cart_submit'])) {
        $deletedItem = $cart->deleteCart($_POST['item_id']);
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['save_for_later'])) {
        $saveForLater = $cart->saveForLater($_POST['item_id']);
    }
 ?>
 <!-- Shopping cart section  -->
  <section id="cart" class="py-3 mb-5">
                    <div class="container-fluid w-75">
                        <h5 class="font-baloo font-size-20">Shopping Cart</h5>

                        <!--  shopping cart items   -->
                            <div class="row">
                                <div class="col-sm-9">
                                    <!-- cart item -->
                                    <?php 
                                    foreach($product->getData('cart') as $item):
                                        $products = $product->getProduct($item['item_id']);
                                        foreach($products as $pro):
                                            $prices [] = $pro['item_price'];
                                    ?>
                                        <div class="row border-top py-3 mt-3">
                                            <div class="col-sm-2">
                                                <img src="<?php echo $pro['item_image'] ?? "http://localhost/Projects/Mobistore/public/assets/products/1.png"?>" style="height: 120px;" alt="cart1" class="img-fluid">
                                            </div>
                                            <div class="col-sm-8">
                                                <h5 class="font-baloo font-size-20"><?php echo $pro['item_name'] ?? "Unknown"?></h5>
                                                <small>by <?php echo $pro['item_brand'] ?? "Brand"?></small>
                                                <!-- product rating -->
                                                <div class="d-flex">
                                                    <div class="rating text-warning font-size-12">
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="far fa-star"></i></span>
                                                      </div>
                                                      <a href="#" class="px-2 font-rale font-size-14">20,534 ratings</a>
                                                </div>
                                                <!--  !product rating-->

                                                <!-- product qty -->
                                                    <div class="qty d-flex pt-2">
                                                        <div class="d-flex font-rale w-25">
                                                            <button class="qty-up border bg-light" data-id="<?php echo $pro['item_id'] ?? '0'?>"><i class="fas fa-angle-up"></i></button>
                                                            <input type="text" data-id="<?php echo $pro['item_id'] ?? '0'?>" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                                            <button data-id="<?php echo $pro['item_id'] ?? '0'?>" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                                        </div>
                                                        <form method="post">
                                                            <input type="hidden" name="item_id" value="<?php echo $pro['item_id']?>">
                                                            <button type="submit" name="delete_cart_submit" class="btn font-baloo text-danger px-3 border-right">Delete</button>
                                                        </form>

                                                        <form method="post">
                                                            <input type="hidden" name="item_id" value="<?php echo $pro['item_id']?>">
                                                            <button type="submit" name="save_for_later" class="btn font-baloo text-danger">Save for Later</button>
                                                        </form>
                                                        
                                                    </div>
                                                <!-- !product qty -->

                                            </div>

                                            <div class="col-sm-2 text-right">
                                                <div class="font-size-20 text-danger font-baloo">
                                                    $<span class="product_price"  data-id="<?php echo $pro['item_id'] ?? '0'?>"><?php echo $pro['item_price'] ?? '0'?></span>
                                                </div>
                                            </div>
                                        </div>
                                    <!-- !cart item -->
                                     <?php
                                        endforeach;
                                        endforeach;
                                        
                                     ?>
                                </div>
                                <!-- subtotal section-->
                                <div class="col-sm-3">
                                    <div class="sub-total border text-center mt-2">
                                        <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i> Your order is eligible for FREE Delivery.</h6>
                                        <div class="border-top py-4">
                                            <h5 class="font-baloo font-size-20">Subtotal (<?php echo isset($prices) ? count($prices):'0'?> item):&nbsp; <span class="text-danger">$<span class="text-danger" id="deal-price"><?php echo isset($prices) ? $cart->getSum($prices) : '0'?></span> </span> </h5>
                                            <button type="submit" class="btn btn-warning mt-3">Proceed to Buy</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- !subtotal section-->
                            </div>
                        <!--  !shopping cart items   -->
                    </div>
                </section>
            <!-- !Shopping cart section  -->
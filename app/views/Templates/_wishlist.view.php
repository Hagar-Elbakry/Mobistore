<?php
   if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_wishlist_submit'])) {
        $deletedItem = $cart->deleteCart($_POST['item_id'], 'wishlist');
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_to_cart'])) {
        $saveForLater = $cart->saveForLater($_POST['item_id'], 'cart', 'wishlist');
    }
 ?>
 <!-- Shopping cart section  -->
  <section id="cart" class="py-3 mb-5">
                    <div class="container-fluid w-75">
                        <h5 class="font-baloo font-size-20">Wishlist</h5>

                        <!--  shopping cart items   -->
                            <div class="row">
                                <div class="col-sm-9">
                                    <!-- cart item -->
                                    <?php 
                                    foreach($product->getData('wishlist') as $item):
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
                                                    <div class="qty d-flex pt-2 pl-0 pr-3">
                                                        <form method="post">
                                                            <input type="hidden" name="item_id" value="<?php echo $pro['item_id']?>">
                                                            <button type="submit" name="delete_wishlist_submit" class="btn font-baloo text-danger px-3 border-right">Delete</button>
                                                        </form>

                                                        <form method="post">
                                                            <input type="hidden" name="item_id" value="<?php echo $pro['item_id']?>">
                                                            <button type="submit" name="add_to_cart" class="btn font-baloo text-danger">Add To Cart</button>
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
                            </div>
                        <!--  !shopping cart items   -->
                    </div>
                </section>
            <!-- !Shopping cart section  -->
 <?php
  shuffle($product_shuffle);

  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['top_sale_submit'])) {
    $cart->addToCart($_POST['user_id'], $_POST['item_id']);
  }
 ?>
 <!-- Top Sale -->
 <section id="top-sale">
            <div class="container py-5">
              <h4 class="font-rubik font-size-20">Top Sale</h4>
              <hr>
              <!-- owl carousel -->
                <div class="owl-carousel owl-theme">
                  <?php foreach($product_shuffle as $item):?>
                  <div class="item py-2">
                    <div class="product font-rale">
                      <a href="<?php printf('%s?item_id=%s',"Product",$item['item_id'])?>"><img src="<?php echo $item['item_image'] ?? "http://localhost/Projects/Mobistor/Public/assets/products/1.png"?>" alt="product1" class="img-fluid"></a>
                      <div class="text-center">
                        <h6><?php echo $item['item_name'] ?? "Unknown"?></h6>
                        <div class="rating text-warning font-size-12">
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                          <span>$<?php echo $item['item_price'] ?? '0'?></span>
                        </div>
                        <form method="post">
                          <input type="hidden" name="user_id" value = "1">
                          <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? 1?>">
                          <?php
                            if(in_array($item['item_id'], $cart->getCartId($product->getData('cart'))) ?? []) {
                              echo '<button type="submit" disabled class="btn btn-success font-size-12">In Cart</button>';
                            } else {
                              echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>';
                            }
                          ?>
                        </form>
                      </div>
                    </div>
                  </div>
                  <?php endforeach?>
                </div>
              <!-- !owl carousel -->
            </div>
          </section>
        <!-- !Top Sale -->
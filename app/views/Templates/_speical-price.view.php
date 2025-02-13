 <?php
  $brand = array_map(function($pro){ return $pro['item_brand']; }, $product_shuffle);
  $unique_brand = array_unique($brand);
  sort($unique_brand);
  shuffle($product_shuffle);

  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['speical_price_submit'])) {
    $cart->addToCart($_POST['user_id'], $_POST['item_id']);
  }
 ?>
 <!-- Special Price -->
 <section id="special-price">
            <div class="container">
              <h4 class="font-rubik font-size-20">Special Price</h4>
              <div id="filters" class="button-group text-right font-baloo font-size-16">
                <button class="btn is-checked" data-filter="*">All Brand</button>
                <?php
                  array_map(function($bra){
                    printf('<button class="btn" data-filter=".%s">%s</button>', $bra, $bra);
                  }, $unique_brand);
                ?>
              </div>

              <div class="grid">
                <?php foreach($product_shuffle as $item):?>
                <div class="grid-item border <?php echo $item['item_brand'] ?? "Brand"?>">
                 <div class="item py-2" style="width: 200px;">
                  <div class="product font-rale">
                    <a href="<?php printf('%s?item_id=%s',"Product",$item['item_id'])?>"><img src="<?php echo $item['item_image'] ?? "http://localhost/Projects/Mobistore/public/assets/products/13.png"?>" alt="product1" class="img-fluid"></a>
                    <div class="text-center">
                      <h6><?php echo $item['item_name'] ?? "UnKnown"?></h6>
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
                              echo '<button type="submit" name="speical_price_submit" class="btn btn-warning font-size-12">Add to Cart</button>';
                            }
                          ?>
                        </form>
                    </div>
                  </div>
                </div>
                </div>
                <?php endforeach?>
              </div>
            </div>
          </section>
        <!-- !Special Price -->
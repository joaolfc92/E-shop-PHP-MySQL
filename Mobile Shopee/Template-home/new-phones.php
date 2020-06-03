   <!--new phones-->

<?php 



?>

   <section id="new-phones" >
                    <div class="container">
                        <h4 class="font-rubik font-size-20">New Phones</h4>
                        <hr>

                          <!-- owl carousel -->

                          <div class="owl-carousel owl-theme">
                            <?php foreach($product_shuffle as $item) { ?>
                                    <div class="item py-2 bg-light">

                                        <div class="product font-rale">
                                            <a style="text-decoration: none;" href="<?php printf('%s?item_id=%s', 'product.php', $item['item_id']);   ?>" >
                                            <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png"; ?>" alt="product1" class="img-fluid">
                                            </a>                
                                                <div class="text-center">
                                                    <h6><?php echo $item['item_name'] ?? "Não definido";  ?></h6>
                                                        <div class="rating text-warning font-size-12">
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                        </div>

                                                        <div class="price py-2">
                                                            <span><?php echo $item['item_price'] ?? "Não definido";  ?></span>
                                                        </div>

                                                        <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                                </div>
                                                        
                                        </div>
                                    </div>

                                <?php } ?>         


                             </div>

                        <!-- owl carousel-->

                    </div>
    </section>

            <!--</new phones-->
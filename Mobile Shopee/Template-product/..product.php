
            <!--product-->


            <?php

            $item_id = $_GET['item_id'] ?? 1;
            
            foreach($product->getData() as $item):

            if($item['item_id']==$item_id):


            ?>

                <section id="product" class="py-3 mb-5">

                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="<?php echo $item['item_image']   ?? "./assets/products/1.png";  ?>" alt="product" class="img-fluid">
                                <div class="form-row pt-4 font-size-16 font-baloo">
                                    <div class="col">
                                        <button type="submit" class="btn-danger form-control">Proceed to Buy</button>
                                    </div>

                                    <div class="col">
                                        <button type="submit" class="btn-warning form-control">Add to Cart</button>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-6">
                                   <h4 class="font-baloo font-size-20 mt-5"><?php echo $item['item_name'] ?? 'Não encontrado' ?></h4>
                                   <small><?php echo $item['item_brand'] ?? 'Não encontrado' ?></small>
                                   <div class="d-flex">
                                        <div class="rating text-warning font-size-12">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div>

                                        <a href="#" class="px-2 font-rale font-size-14" style="text-decoration: none;">
                                            20,534 ratings | 1000+ answered questions
                                        </a>

                                   </div>

                                   <hr class="m-0">

                                    <!--product price-->

                                    <table class="my-3">
                                        <tr class="font-rale font-size-14">
                                              <td>M.R.P</td>  
                                              <td><strike>$162</strike></td>
                                        </tr>
                                    </table>
                                    
                                    
                                    <table class="my-3">    
                                        <tr class="font-size-20">
                                              
                                            <p>Deal Price: <span class="text-danger"><?php echo $item['item_price'] ?> </span> <small>inclusive all taxes</small>  </p>

                                            <p class="font-size-12">You Save <span class="text-danger">$ 10,00 </span>   </p>
                                               
                                        </tr>
                                    </table>   


                                    <!--Policy-->

                                    <div class="" id="policy">
                                        <div class="d-flex">
                                            <div class="return text-center mr-5">
                                                <div class="font-size-20 my-2 color-second">
                                                  <span>  <i class="fa fa-retweet border rounded-pill"></i> </span>

                                                </div>

                                                <a href="#" style="text-decoration: none;" class="font-rale font-size-12">10 Days <br> Replacement</a>
                                            </div>

                                            <div class="return text-center mr-5">
                                                <div class="font-size-20 my-2 color-second">
                                                  <span>  <i class="fa fa-truck border rounded-pill"></i> </span>

                                                </div>

                                                <a href="#" style="text-decoration: none;" class="font-rale font-size-12">Daily Tuition<br> Deliverd
                                            </div>


                                            <div class="return text-center mr-5">
                                                <div class="font-size-20 my-2 color-second">
                                                  <span>  <i class="fa fa-check-double border rounded-pill"></i> </span>

                                                </div>

                                                <a href="#" style="text-decoration: none;" class="font-rale font-size-12">1 Year <br> Warranty</a>
                                            </div>
                                        </div>
                                    </div>


                                    <hr>

                                    <!--order-details-->


                                    <div id="order-detais" class="font-rale d-flex flex-column text-dark">
                                            <small>Delivery by: Mar 29 - Apr 1</small>
                                            <small> Sold by <a href="#" style="text-decoration: none;"> Daily Eletronics</a> (4.5 out of 5 | 18,198 ratings) </small>
                                            <small>  <i class="fa fa-map-marker"></i> &nbsp;&nbsp; Deliver to Customer - 424201</small>
                                    </div>

                                    <!--options/qtd-->


                                    <div class="row">
                                        <div class="col-6">
                                            <!--color-->

                                            <div class="color my-3">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="font-baloo">Color:  </h6>
                                                        <div class="p-2 color-yellow-bg rounded-circle" >
                                                            <button class="btn font-size-14"></button>
                                                        </div>
                                                        
                                                        <div class="p-2 color-primary-bg rounded-circle" >
                                                            <button class="btn font-size-14"></button>
                                                        </div>

                                                        <div class="p-2 color-black-bg rounded-circle" style="background-color: black;">
                                                            <button class="btn font-size-14"></button>
                                                        </div>
   
                                                  
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-6 mt-4">
                                            <div class="qtd d-flex">
                                                <h6 class="font-baloo ">Qtd:</h6>

                                                <div class="px-4 d-flex font-rale">
                                                    <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                                    <input type="number" data-id="pro1" class="qty_input border px-2 w-50 bg-light"  value="1" placeholder="1">
                                                    <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    
                                    
                                    <!--size-->

                                    <div class="size my-3">
                                        <h6 class="font-baloo">Size: </h6>

                                        <div class="d-flex justify-content-between w-75">
                                            <div class="font-rubic border p-2">
                                                <button class="btn p-0 font-size-14">4GB RAM</button>
                                            </div>

                                            <div class="font-rubic border p-2">
                                                <button class="btn p-0 font-size-14">8GB RAM</button>
                                            </div>

                                            <div class="font-rubic border p-2">
                                                <button class="btn p-0 font-size-14">16GB RAM</button>
                                            </div>
                                        </div>
                                    </div>
                                   



                            </div>


                        </div>
                    </div>


                    <!--product description-->

                    <div class="container mt-5">
                        <h5 class="font-baloo">Product Description  </h5>  

                        <p class="font-size-12 mt-4" style="color:darkgray;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae praesentium in, officiis quos culpa ex! Porro, voluptatibus ipsam natus iste maxime nesciunt magni distinctio voluptate libero doloribus esse in tenetur. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo nihil distinctio veritatis magnam. Rerum vel et laboriosam vero debitis modi, nemo quasi, error deleniti dicta nulla voluptas aut facere labore.</p>
                        <p class="font-size-12 mt-4" style="color:darkgray;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae praesentium in, officiis quos culpa ex! Porro, voluptatibus ipsam natus iste maxime nesciunt magni distinctio voluptate libero doloribus esse in tenetur. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo nihil distinctio veritatis magnam. Rerum vel et laboriosam vero debitis modi, nemo quasi, error deleniti dicta nulla voluptas aut facere labore.</p>


                    </div>




                </section>

            <?php

            endif;
            endforeach;

            ?>



            <!--</product-->
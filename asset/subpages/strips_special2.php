<?php $k=2 ;?>
<div class="w-100 mt-5 mb-5 p-4">
        <div class="d-flex " dir="rtl" style="overflow:hidden">
            <div class="h-100 sign-content">
            <br><br>
                <div class="offset-2 bg-white p-4 shadow col-9 text-center" id="signcard">
                    <h4 style="opacity:0.9">ثبت نام فروشندگان</h4>
                    <p class="text-dark"  style="opacity:0.85">برای فروش بدون واسطه محصولات کشاورزی خود به خریداران مستقیم و صادرکنندگان هم اکنون ثبت نام کنید</p>
                    <a class="btn btn-mysuccess text-white" href="register.php">ثبت نام</a>
                </div>
                <div class="offset-2 mt-4 bg-white col-9 p-4 shadow text-center" id="signcard2">
                    <h4 style="opacity:0.9">ثبت نام رانندگان</h4>
                    <p class="text-dark"  style="opacity:0.85">برای انتقال بدون واسطه محصولات کشاورزی خود به خریداران مستقیم و فروشندگان هم اکنون معرفی کنید</p>
                    <a class="btn btn-mysuccess text-white" href="register.php">ثبت نام</a>
                </div>
            </div>
            <div class="px-2 col-9 bg-white shadow text-right text-mysuccess" style="overflow: hidden;"  id="LastProduct2" ><h4>آخرین محصولات ثبت شده</h4>
                <ul class="card-list mt-2 pt-3 pb-5  bg-white" dir="rtl" style="width:95%;margin-left: 2.5%;margin-right: 03.6%;">
                    <div class="pointer next text-left bg-ylw shadow3" <?php echo "alt='".$k. "'";?> >
                        <i class="fas fa-angle-left text-white" style='font-size:100px'></i>
                    </div>
                    <div class="pointer previous mr-0 text-right shadow3 bg-ylw" <?php echo "alt='".$k. "'";?> >
                        <i class="fas fa-angle-right  text-white" style='font-size:100px'></i>
                    </div>
                    <div id=<?php echo "album".$k. "";?> class="w-100 d-flex h-100" >

                        <?php   
                                    $json_decode_array = gets_array_json("asset/json/commidity_strip.json");; 
                                    for($i =0 ; $i<count($json_decode_array);$i=$i+1){ 
                                    $json_decode_array_picture = $json_decode_array[$i]->picture;
                                    $json_decode_array_name  = $json_decode_array[$i]->commitidy_name;
                                    $json_decode_array_price = $json_decode_array[$i]->price;
                                    $json_decode_array_off = $json_decode_array[$i]->off;
                                    $json_decode_array_star = $json_decode_array[$i]->star;
                                    ?>

                        <li class="pb-5">
                        <div style="position: relative;">
                            <div class="ribbon text-right ribbon-small ribbon-purple" style="z-index: 23;">
                                <div class="banner">
                                    <div class="text" dir="rtl">
                                    <?php echo $json_decode_array_off ;?>  تخفیف
                                    </div>
                                </div>
                            </div>
                        </div>
                            <a class="card border-ylw d-flex flex-column" href="#" style="max-height:408px">
                                <div class="card-img-cont p-1">
                                    <img src=<?php echo $json_decode_array_picture;?> class=" w-100" style="height:290px;">
                                </div>
                                <div class="w-100 d-flex flex-column px-1">
                                    <strong class="text-right text-dark">نام :
                            <?php echo $json_decode_array_name;?>
                        </strong><strong class="text-right text-red">قیمت : 
                        <?php echo $json_decode_array_price;?>
                        </strong>
                                        <strong class="text-right text-dark" style="text-decoration-line:line-through;opacity:0.7;">قیمت :
                                    <?php echo $json_decode_array_price;?>
                                    </strong>

                                        <div class="d-flex ml-3 mr-auto">
                                            <div class="d-flex d-inline-block mr-2">
                                                <i class="fa fa-star-o text-ylw"></i>
                                                <i class="fa fa-star-o text-ylw"></i>
                                                <i class="fa fa-star text-ylw"></i>
                                                <i class="fa fa-star text-ylw"></i>
                                                <i class="fa fa-star text-ylw"></i>
                                            </div>
                                    </div>
                                </div>

                            </a>
                        </li>
                        <?php    
            }?>
                    </div>
                </ul>
            </div>
        </div>
    </div>
<div class="shadow strip mt-4 py-3 text-right" style="width: 95%;margin-left: 2.5%;overflow: hidden;">
    <h2 class=" d-inline shop-text mr-4 ml-auto pb-1 mt-4" style="opacity:0.8">
        <?php echo $json_decode_arrayk[$k];?>
    </h2>
    <ul class="card-list mt-2 pt-3  bg-white" dir="rtl" style="width:95%;margin-left: 2.5%;overflow: hidden;">
        <div class="pointer next shadow3 text-left bg-ylw" <?php echo "alt='".$k. "'";?> >
            <i class="fas fa-angle-left text-white" style='font-size:100px'></i>
        </div>
        <div class="pointer previous shadow3 mr-0 text-right bg-ylw" <?php echo "alt='".$k. "'";?> >
            <i class="fas fa-angle-right  text-white" style='font-size:100px'></i>
        </div>
        <div id=<?php echo "album".$k. "";?> class="w-100 d-flex h-100" style="overflow:heidden;">

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
                                    <?php echo $json_decode_array_off ;?> تخفیف
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="card border-ylw d-flex flex-column" href=<?php echo "shop_product.php?id=".$i;?>>
                            <div class="card-img-cont p-1">
                                <img src=<?php echo $json_decode_array_picture;?> class=" w-100" style="height:290px;">
                            </div>
                            <div class="w-100 d-flex flex-column">
                                <strong class="text-right text-dark px-3">نام :
                    <?php echo $json_decode_array_name;?>
                </strong><strong class="text-right text-red mr-3 mt-1 px-3">قیمت : 
                <?php echo $json_decode_array_price;?>
                </strong>
                                <div class="d-flex">
                                    <strong class="text-right px-3 text-dark" style="text-decoration-line:line-through;opacity:0.7;">قیمت :
                <?php echo $json_decode_array_price;?>
                </strong>

                                    <div class="d-flex">
                                        <div class="d-flex d-inline-block ml-2 mt-2 mr-auto">
                                            <i class="fa fa-star-o text-ylw"></i>
                                            <i class="fa fa-star-o text-ylw"></i>
                                            <i class="fa fa-star text-ylw"></i>
                                            <i class="fa fa-star text-ylw"></i>
                                            <i class="fa fa-star text-ylw"></i>
                                        </div>
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
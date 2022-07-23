<html>
<head>
<?php include ("asset/subpages/head.php")?>
<link rel="stylesheet" href="asset/style/shop.css">
</head>
<body oncontextmenu="return false" onkeydown="return false;" onmousedown="return false;" id="keshavarzi" style="overflow-x: hidden;">
    <?php include ("asset/subpages/top_header.php");include ("asset/inc/get_array_json.php");?>
<br><br><br>
    <?php include ("asset/subpages/navbar.php");
            $json_decode_array= gets_array_json("asset/json/product_category.json");
            $k = $_GET['id']; 
            $j = substr($k,0,strpos($k,'-'));
            $out = (int)$j; 
            $cat_array = $json_decode_array[$out]->category_array;
            $q = substr($k,strpos($k,'-')+1,strlen($k));
            $out = (int)$q; 
            $pro_array = $cat_array[$out]->product_array;
        ?>
    <h2 class="text-right text-center shop-text mr-4 mt-5">
        <?php echo $pro_array[0]->commitidy_name;?>
    </h2>
    <div class=" bg-dark mt-3 container mb-3" style="height: 1px;opacity: 0.2;"></div>
    <div class="p-3 d-flex w-100 shop mt-3 mb-5 container product_strip" style="direction: rtl;height:250px">
            <?php   for($i =0 ; $i<count($pro_array);$i=$i+1){ 
                    $json_decode_array_picture = $pro_array[$i]->picture;
                    $json_decode_array_name = $pro_array[$i]->commitidy_name;
                    $json_decode_array_price = $pro_array[$i]->price;
                    $json_decode_array_star = $pro_array[$i]->star;
                    $json_decode_array_off = $pro_array[$i]->off;
                    ?>
            <div <?php echo 'class="d-flex flex-column mr-2  Commodity'.$k. ' "';?>>
                <div class="ribbon ribbon-small ribbon-purple" style="z-index: 23;">
                    <div class="banner">
                        <div class="text" dir="rtl">
                            <?php echo $json_decode_array_off ;?> تخفیف   
                        </div>
                    </div>
                </div>
                <div class="border-1 options shadow pointer border-dark h-100 bg-whiteshadow">
                    <div class="d-flex flex-column w-100 ">
                        <a href=<?php echo "product.php?id=".(int)$j."-".(int)$q."-".(int)$i;?> class="pointer"><img src=<?php echo $json_decode_array_picture;?> class="pointer w-100" style="height:250px;"></a>
                        <a href=<?php echo "product.php?id=".(int)$j."-".(int)$q."-".(int)$i;?> class="text-right mt-3">
                        <div id="detail-product" class="w-100 d-flex flex-column" style="height: 125px;">
                            <strong class="text-right py-1 px-3">نام :<?php echo $json_decode_array_name;?></strong>
                            <br>
                            <strong class="text-right text-warning py-1 mr-3 mt-2 px-3">قیمت : <?php echo $json_decode_array_price;?></strong>
                            <div class="d-flex">
                                <strong class="text-right py-1 px-3" style="text-decoration-line:  line-through;;">قیمت : <?php echo $json_decode_array_price;?></strong>
                                <div class="d-flex d-inline-block ml-2 mt-2 mr-auto">
                                    <?php
                                    for($q=4 ; $q>=$json_decode_array_star;$q=$q-1){
                                        echo '<i class="fa fa-star-o text-ylw"></i>';
                                    }  
                                    for($q=0 ; $q<$json_decode_array_star;$q=$q+1){
                                        echo '<i class="fa fa-star text-ylw"></i>';
                                    }
                                                                          
                                    ?>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="d-flex w-100 buy-btn bg-yel"><button id="tag" class="w-100 bg-yel text-white text-center py-1 px-1"><b>افزودن به سبد خرید</b><i class="fas fa-cart-plus"></i></button></div>
            </div>
            <?php
                if(($i+1)%4==0){
                    echo '</div>';
                    echo '<div class="p-3 d-flex w-100 shop mt-3 mb-5 container product_strip" style="direction: rtl;height:250px">';
                }
                }
                ?>
    </div>
                <br><br>
    <?php include ("asset/subpages/page_selector.php");?>
    <?php include ("asset/subpages/footer.php");?>
    <!-- <div class="w-100 tmp d-flex" style="overflow: hidden;box-sizing: border-box;height: 500px;">
        <div class="w-25 bg-dark " style="height: 500px;"></div>
        <div class="bg-info w-50 xx" style="height: 500px;"></div>
    </div> -->
</body>
<!-- <script src="asset/js/script.js"></script> -->
<script src="asset/js/script-nav.js"></script><script src="asset/js/shop.js"></script>

</html>
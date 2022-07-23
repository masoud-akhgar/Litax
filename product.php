<html>

<head>
    <?php include ("asset/subpages/head.php")?>
</head>

<body oncontextmenu="return false" onkeydown="return false;" onmousedown="return false;">
    <?php include ("asset/subpages/top_header.php");include ("asset/inc/get_array_json.php");?>
    <br><br><br>
    <?php include ("asset/subpages/navbar.php");
        // if(isset($_GET["id"])){
        //     $json_decode_array= gets_array_json("asset/json/product_category.json");
        //     $k = $_GET['id'];  
        //     $first_line = strpos($k,'-');
        //     $j = substr($k,0,$first_line);
        //     $out1 = (int)$j; 
        //     $cat_array = $json_decode_array[$out1]->category_array;

        //     $second_line =strpos($k,'-',$first_line+1);
        //     $jj = substr($k,$first_line+1,$second_line);
        //     $out2 = (int)$jj; 
        //     $pro_array = $cat_array[$out2]->product_array;
            
        //     $q = substr($k,$second_line+2,strlen($k));
        //     $out3 = (int)$q; 
        //     $product_obj = $pro_array[$out3];
        // }else if(isset($_GET["strip"])){

        // }else{
        //     header("location:index.php");
        //     exit;
        // }
        ?><br><br>
    <div class="container">
        <div class="row mb-5" dir="rtl">
            <div class="col-md-3">
                <div class="dropdown shadow">
                    <button class="btn btn-outline-secondary btn-block btn-lg bg-mysuccess text-white dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-shopping-bag"></i>
                    <span>موجودی سبد</span>
                </button>
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow col-4">
                        <table class="table table-sm table-striped table-bordered m-0">
                            <tbody>
                                <tr>
                                    <td class="text-center">
                                        <h4>اسم محصول</h4>
                                    </td>
                                    <td class="text-center">
                                        <p class="m-0">
                                            <a href="#">
                                                <i class="fas fa-times text-mysuccess"></i>
                                            </a>
                                            <span class="text-dark">بسته ی 250 گرمی زنجبیل</span>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="m-0 text-dark text-center">
                                            قیمت واحد : 10,000
                                        </p>
                                    </td>
                                    <td class="text-center">10x</td>
                                    <td class="text-center">123.20</td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <h4>اسم محصول</h4>
                                    </td>
                                    <td class="text-center">
                                        <p class="m-0">
                                            <a href="#">
                                                <i class="fas fa-times text-mysuccess"></i>
                                            </a>
                                            <span class="text-dark">بسته ی 250 گرمی زنجبیل</span>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="m-0 text-dark text-center">
                                            قیمت واحد : 10,000
                                        </p>
                                    </td>
                                    <td class="text-center">10x</td>
                                    <td class="text-center">123.20</td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <h4>اسم محصول</h4>
                                    </td>
                                    <td class="text-center">
                                        <p class="m-0">
                                            <a href="#">
                                                <i class="fas fa-times text-mysuccess"></i>
                                            </a>
                                            <span class="text-dark">بسته ی 250 گرمی زنجبیل</span>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="m-0 text-dark text-center">
                                            قیمت واحد : 10,000
                                        </p>
                                    </td>
                                    <td class="text-center">10x</td>
                                    <td class="text-center">123.20</td>
                                </tr>
                                <tr>
                                    <td class="text-right" colspan="1">مجموع خرید</td>
                                    <td class="text-right">601.00</td>
                                </tr>
                                <tr>
                                    <td class="text-right" colspan="1">مالیات</td>
                                    <td class="text-right">4.00</td>
                                </tr>
                                <tr>
                                    <td class="text-right" colspan="1">هزینه حمل و نقل</td>
                                    <td class="text-right">120.20</td>
                                </tr>
                                <tr>
                                    <td class="text-right" colspan="1">مجموع کل هزینه</td>
                                    <td class="text-right">725.20</td>
                                </tr>
                                <tr>
                                    <td class="text-right" colspan="1">
                                        <a class="btn btn-secondary" href="#" role="button">
                                            <i class="fas fa-shopping-cart"></i>
                                            <span>تایید خرید</span>
                                        </a>
                                        <a class="btn btn-primary" href="#" role="button">
                                            <i class="fas fa-share"></i>
                                            <span>پاک کردن</span>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="dropdown shadow">
                    <button class="btn btn-outline-secondary btn-block btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-coins"></i>
                    <span>موجودی </span>
                </button>
                    <div class="dropdown-menu dropdown-menu-right shadow p-3" style="width:500px;">
                        <table class="table table-sm table-striped table-bordered m-0">
                            <tbody>
                                <tr>
                                    <td class="text-right" colspan="1">موجودی کارت</td>
                                    <td class="text-right">601.00</td>
                                </tr>
                                <tr>
                                    <td class="text-right" colspan="1">برآورد هزینه ها</td>
                                    <td class="text-right">4.00</td>
                                </tr>
                                <tr>
                                    <td class="text-right" colspan="1">موجودی نهایی</td>
                                    <td class="text-right">120.20</td>
                                </tr>
                                <tr>
                                    <td class="text-right" colspan="1">
                                        <a class="btn btn-secondary" href="#" role="button">
                                            <i class="fas fa-shopping-cart"></i>
                                            <span>تایید خرید</span>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="container text-right mb-4 pr-5">
            <h4>
                <a href=<?php echo "shop_product.php?id=".$out1."-".$out2; ?> class="text-dark">
                    <?php echo $json_decode_array[$out1]->category_name; ?>
                </a>
                <i class="fas fa-angle-left text-warning " style="font-size: 14px;"></i>
                <i class="fas  fa-angle-left text-warning ml-2" style="font-size: 14px;"></i>
                <?php echo $pro_array[$out3]->commitidy_name; ?>
            </h4>
        </div> -->

        <div class="container text-right">

            <div class="row mb-5">
                <div class="col-md-6 p-5">
                    <img src="asset/img/floral-card.jpg" class="w-100">
                </div>
                <div class="col-md-4 offset-md-2">
                    <div class="py-3 shadow">
                        <div class="card-body">
                            <h1>محصول زنجبیل خراسان جنوبی (بسته ای)</h1>
                            <p class="m-0">
                                <i class="fas fa-star fa-sm"></i>
                                <i class="fas fa-star fa-sm"></i>
                                <i class="fas fa-star fa-sm"></i>
                                <i class="far fa-star fa-sm"></i>
                                <i class="far fa-star fa-sm"></i>
                            </p>
                            <ul class="list-group list-group-flush mb-4">
                                <li class="list-group-item pl-0 pr-0 pt-2 pb-2">فروشنده : <a href="#">شرکت ایکس</a></li>
                                <li class="list-group-item pl-0 pr-0 pt-2 pb-2">نوع :اعلا</li>
                                <li class="list-group-item pl-0 pr-0 pt-2 pb-2">امتیاز:4.3 </li>
                                <li class="list-group-item pl-0 pr-0 pt-2 pb-2">قابل ارسال به : تمامی استانها</li>
                                <br><br>
                                <li class="list-group-item pl-0 pr-0 pt-2 pb-2">قیمت در بازار : 1.134,82</li>
                                <li class="list-group-item pl-0 pr-0 pt-2 pb-2">قیمت در سایت : 1.256,82</li>
                                <li class="list-group-item pl-0 pr-0 pt-2 pb-2">محاسبه قیمت بعد از تخفیف : 1.487,82</li>
                                <li class="list-group-item pl-0 pr-0 pt-2 pb-2">قیمت نهایی محصول: 1.721,82</li>
                            </ul>
                            <br><br>
                            <div class="input-group border-mysuccess input-group-lg mb-4">
                                <input type="number" class="form-control text-center" placeholder="Quantity" id="" name="" value="1" min="1" max="5" />
                                <div class="input-group-append">
                                    <span class="input-group-text">تعداد</span>
                                </div>
                            </div>
                            <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-success">
                            <i class="fas fa-cart-plus"></i>
                            <span>افزودن به سبد خرید</span>
                        </button>
                                <button type="button" class="btn btn-success"><i class="fas fa-heart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row mb-5">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <i class="float-left mr-3 fa-3x fas fa-shipping-fast"></i>
                                    <p class="h5"><br/><small class="text-muted">برای تمامی سفارشات</small></p>
                                </div>
                                <div class="col-md-3">
                                    <i class="float-left mr-3 fa-3x fas fa-thumbs-up"></i>
                                    <p class="h5"><br/><small class="text-muted">محافظت از حقوق مشتری</small></p>
                                </div>
                                <div class="col-md-3">
                                    <i class="float-left mr-3 fa-3x fas fa-umbrella"></i>
                                    <p class="h5"><br/><small class="text-muted">پرداخت امن و آنلاین</small></p>
                                </div>
                                <div class="col-md-3">
                                    <i class="float-left mr-3 fa-3x fas fa-life-ring"></i>
                                    <p class="h5"><br/><small class="text-muted">پشتیبانی و مسئولیت پذیر</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include ("asset/subpages/footer.php")?>
</body>
<script src="asset/js/script-nav.js"></script>
<script src="asset/js/shop.js"></script>

</html>
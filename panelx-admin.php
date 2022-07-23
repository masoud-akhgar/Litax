<?php
session_name('panelx');
session_start();
if(isset($_SESSION['access']) && $_SESSION['access'] === true && $_SESSION['admin']=="ns;fkas;jclwke[I93334FJ;DSVKSHQI3P" 
 && isset($_SESSION['admin']) && isset($_SESSION['password']) && $_SESSION['password']!="") {
    $_SESSION['access']=false;
    $_SESSION['admin'] = "";
} else {
    header("location:index.php");
    exit;
}
?>
    <html>

    <head>
        <?php
            include ("head.php");
        ?>
            <link href="asset/style/panelx.css" rel="stylesheet">
            <style>
                h4 {
                    color: rgb(22, 22, 22);
                }
            </style>
    </head>


    <body oncontextmenu="return false" onkeydown="return false;" onmousedown="return false;">
        <div class="w-100  shadow pt-2 bg-ylw2 mb-5" style="height: 50px;">
            <div class="container d-flex" dir="rtl">
                <div class="col-3 d-flex" dir="rtl">
                    <h4>نام :</h4>
                    <h4 class="mr-2">----</h4>
                </div>
                <div class="col-3 d-flex" dir="rtl">
                    <h4>نوع کاربری :</h4>
                    <h4 class="mr-2">----</h4>
                </div>
                <div class="col-3 d-flex" dir="rtl">
                    <h4>قدرت خرید :</h4>
                    <h4 class="mr-2">----</h4>
                </div>
                <div class="col-3 d-flex" dir="rtl">
                    <h4>ویرایش پروفایل :</h4>
                    <h4 class="mr-2">----</h4>
                </div>
            </div>
        </div>
        <div class="w-50 offset-3 rowpanel d-flex" style="height: 200;">
            <div class="col-5 m-auto bg-ylw2 p-4 h-100" alt="new_product.php">
                <a href="#" class="">
                    <a class="d-flex m-auto w-100 text-white h-100" href="">
                        <h3 class="m-auto mr-2 text-white">ثبت محصول جدید<i class="fa mt-2 text-ylw2 ml-2 fa-plus"></i></h3>
                    </a>
                </a>
            </div>
        </div>
        <div class="w-50 mt-4 offset-3 rowpanel d-flex" style="height: 200;">
            <div class="col-5 m-auto bg-ylw2 p-4 h-100" alt="new_product.php">
                <a href="">
                    <a class="d-flex m-auto w-100 text-white h-100" href="">
                        <h3 class="m-auto mr-2 text-white">لیست محصولات<i class="fa mt-2 text-ylw2 ml-2 fa-product-hunt"></i></h3>
                    </a>
                </a>
            </div>
            <div class="col-5 m-auto bg-ylw2 p-4 h-100" alt="new_product.php">
                <a href="">
                    <a class="d-flex m-auto w-100 text-white h-100" href="">
                        <h3 class="m-auto mr-2 text-white">درامد ها<i class="fa mt-2 text-ylw2 ml-2 fa-money"></i></h3>
                    </a>
                </a>
            </div>
        </div>
        <div class="w-50 mt-4 offset-3 rowpanel d-flex" style="height: 200;">
            <div class="col-5 m-auto bg-ylw2 p-4 h-100" alt="new_product.php">
                <a href="">
                    <a class="d-flex m-auto w-100 text-white h-100" href="">
                        <h3 class="m-auto mr-2 text-white">پروفایل<i class="fa mt-2 text-ylw2 ml-2 fa-user"></i></h3>
                    </a>
                </a>
            </div>
            <div class="col-5 m-auto bg-ylw2 p-4 h-100" alt="new_product.php">
                <a href="">
                    <a class="d-flex m-auto w-100 text-white h-100" href="">
                        <h3 class="m-auto mr-2 text-white">لیست سفارشات<i class="fa mt-2 text-ylw2 ml-2 fa-first-order"></i></h3>
                    </a>
                </a>
            </div>
        </div>


        <div class="w-100 mt-5" style="height: 1px;"></div>

    </body>
    <script src="asset/js/script.js"></script>
    <script src="asset/js/panelx.js"></script>

    </html>
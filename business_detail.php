<?php
session_name('panelx');
session_start();
$show_next_div=0;
if(isset($_SESSION["type"]) && $_SESSION["type"]!=0 && $_SESSION["type"]!=""){
    if(isset($_SESSION["id"]) && isset($_SESSION["valid"]) && $_SESSION["id"]!="" && $_SESSION["valid"]==1){
        $type = $_SESSION["type"];
    }
}else{
    // echo $_SESSION["type"];
    header("location:index.php");
    exit;
}
include ("asset/inc/get_array_json.php");
if(isset($_POST["submit_business"])){
    if(isset($_POST["firstname"]) && isset($_POST["familyname"]) && isset($_POST["birth_day"]) && isset($_POST["birth_month"])
    && isset($_POST["birth_year"]) && isset($_POST["gender"]) && isset($_POST["melicode"]) && isset($_POST["shcode"]) && isset($_POST["shop"])
    && isset($_POST["state"]) && isset($_POST["city"]) && isset($_POST["address"]) && isset($_POST["phone"]) && isset($_POST["shabanumber1"]) && isset($_POST["shabanumber2"])
    && isset($_POST["phonenum"]) && isset($_POST["areacode"]) && isset($_POST["postalcode"]) && isset($_POST["shabanumber3"]) && isset($_POST["shabanumber4"])
    && isset($_POST["main_supply_category_id"])){
    $show_next_div = 1;
    $_SESSION["firstname"] = $_POST["firstname"];
    $_SESSION["familyname"] = $_POST["familyname"];
    $_SESSION["birth_day"] = $_POST["birth_day"];
    $_SESSION["birth_month"] = $_POST["birth_month"];
    $_SESSION["birth_year"] = $_POST["birth_year"];
    $_SESSION["gender"] = $_POST["gender"];
    $_SESSION["melicode"] = $_POST["melicode"];
    $_SESSION["shcode"] = $_POST["shcode"];
    $_SESSION["state"] = $_POST["state"];
    $_SESSION["city"] = $_POST["city"];
    $_SESSION["address"] = $_POST["address"];
    $_SESSION["shop"] = $_POST["shop"];
    $_SESSION["phonenum"] = $_POST["phonenum"];
    $_SESSION["areacode"] = $_POST["areacode"];
    $_SESSION["postalcode"] = $_POST["postalcode"];
    $_SESSION["phone"] = $_POST["phone"];
    $_SESSION["shabanumber1"] = $_POST["shabanumber1"];
    $_SESSION["shabanumber2"] = $_POST["shabanumber2"];
    $_SESSION["shabanumber3"] = $_POST["shabanumber3"];
    $_SESSION["shabanumber4"] = $_POST["shabanumber4"];
    $_SESSION["main_supply_category_id"] = $_POST["main_supply_category_id"];
    header("location:business_document.php");
    exit;
    }else{
        header("location:business_detail.php?eror_data=sdfll2s");
        exit;
    }
}

if(isset($_GET["eror_data"])){
    $show_next_div = 0;
}
if(isset($_GET["eror-empty"])){
    $show_next_div = 1;
}
?>

    <html>

    <head>

        <?php include ("asset/subpages/head.php")?>
        <link href="asset/style/register.css" rel="stylesheet">
        <style>
            .text-ylw3 {
                color: #239b56;
            }
        </style>
    </head>

    <?php
    $year  = 1310;
    // echo $show_next_div;
    ?>

<body oncontextmenu="return false" onkeydown="return false;" onmousedown="return false;">

            <div class="w-100 background2 personaldetail">
                <?php include ("asset/subpages/top_header.php")?>
                <div class="container mt-5 px-0" id="container">
                    <form method="post" action="" class="px-0 d-block">
                        <div class="w-100 h-100 pr-3 text-right" style="overflow-y: scroll;">
                            <h4 class="text-danger text-right mt-5">توجه: پر کردن تمامی موارد الزامیست</h4>
                            <h2 class="text-right">چه نوع فروشنده ای هستید؟</h2>
                            <div class="d-flex">
                                <div class="personal-detail">
                                    <input class=" pointer col-1 ml-2 mr-1" type="radio" name="kind" required>
                                    <h6 class="text-right mt-1">کشاورز</h4>
                                        <input class=" pointer ml-2 col-1 mr-1" type="radio" name="kind" required>
                                        <h6 class="text-right mt-1">شرکت دانش بنیان</h4>
                                            <input class=" pointer ml-2 col-1 mr-1" type="radio" name="kind" required>
                                            <h6 class="text-right mt-1">فروشنده ماشین آلات کشاورزی</h4>
                                </div>
                                <div class="personal-detail">
                                    <input class=" pointer ml-2 col-1 mr-1" type="radio" name="kind" required>
                                    <h6 class="text-right mt-1">فروشنده تجهیزات کشاورزی</h4>
                                        <input class=" pointer ml-2 col-1 mr-1" type="radio" name="kind" required>
                                        <h6 class="text-right mt-1">فروشنده سموم و کود</h4>
                                            <input class=" pointer ml-2 col-1 mr-1" type="radio" name="kind" required>
                                            <h6 class="text-right mt-1">فروشنده گل و گیاه</h4>
                                                <input class=" pointer ml-2 col-1 mr-1" type="radio" name="kind" required>
                                                <h6 class="text-right mt-1">فروشنده میوه و سبزیجات</h4>
                                </div>
                            </div>

                            <h4 class="text-right">
                                شخص حقیقی فردی است که دارای خصوصیاتی مختص به خود مانند نام، نام خانوادگی،<br> تاریخ تولد، کد ملی، شماره شناسنامه و غیره می باشد. شخص حقوقی موسسات یا شرکت هایی <br>هستند که پس از طی مراحل قانونی به ثبت می‌رسند و دارای مشخصاتی
                                مانند نام شخص حقوقی<br> تاریخ ثبت، شماره ثبت، کد شناسایی، کد اقتصادی، موضوع فعالیت و غیره می باشند
                            </h4><br><br>
                            <h3 class="text-right  border-mysuccess">اطلاعات شخصی</h3>
                            <div class="personal-detail">
                                <input type="text" id="" class="my_form-control" name="familyname" placeholder=" نام خانوادگی" required>
                                <input type="text" id="" class="my_form-control" name="firstname" placeholder="نام" required>
                            </div>
                            <label class="text-right mt-3">تاریخ تولد ( مثال:‌ ۶۵/۱۲/۰۶ )</label>
                            <div class="text-right date">
                                <select class="col-2 mr-1 ml-3" name="birth_day" placeholder="روز" required="" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                <option data-select2-id="3"></option>
                                        <?php for($i=$year ; $i<=$year+75 ; $i=$i+1){
                                            echo '<option value="'.$i.'">'.$i.'</option>';
                                        }
                                        ?>
                            </select>
                                <span>روز</span>
                                <select class="col-2 mr-1 ml-3" name="birth_month" placeholder="ماه" data-validation="date" required="" data-select2-id="4" tabindex="-1" aria-hidden="true">
                                <option data-select2-id="6"></option>
                                        <?php for($i=1 ; $i<=31 ; $i=$i+1){
                                            echo '<option value="'.$i.'">'.$i.'</option>';
                                        }
                                        ?>
                            </select>
                                <span>ماه</span>
                                <select class="col-2 mr-1 ml-3" name="birth_year" placeholder="سال" data-validation="date" required="" data-select2-id="7" tabindex="-1" aria-hidden="true">
                                <option data-select2-id="9"></option>
                                        <?php for($i=1 ; $i<=12 ; $i=$i+1){
                                            echo '<option value="'.$i.'">'.$i.'</option>';
                                        }
                                        ?>
                            </select>
                                <span>سال</span>
                            </div>

                            <label class="text-right mt-3">جنسیت</label>
                            <div class="personal-detail offset-9">
                                <input class=" ml-2" type="radio" name="gender" required>
                                <h4 class="text-right mt-1 mr-2 ml-1">مرد</h4>
                                <input class=" ml-2" type="radio" name="gender" required>
                                <h4 class="text-right mt-1 mr-2 ml-1">زن</h4>
                            </div>
                            <br>
                            <h3 class="text-right mt-3 border-mysuccess">اطلاعات تماس</h3>

                            <div class="personal-detail">
                                <input type="text" id="" class="my_form-control mr-4" name="shcode" placeholder="شماره شناسنامه" required>
                                <input type="text" id="" class="my_form-control" name="melicode" placeholder="کد ملی" required>
                            </div>

                            <div class="personal-detail">
                                <input type="text" id="" class="my_form-control mr-4" name="state" placeholder="استان محل سکونت" required>
                                <input type="text" id="" class="my_form-control" name="city" placeholder="شهر" required>
                            </div>
                            <div class="personal-detai">
                                <input type="text" id="" class="my_form-control w-75" name="address" style="margin-left: 15%;" placeholder="آدرس" required>
                            </div>
                            <div class="personal-detail">
                                <input type="text" id="" class="my_form-control col-4" name="postalcode" placeholder="کدپستی" required>
                                <input type="text" id="" class="my_form-control col-2 offset-1" name="areacode" placeholder="پیش شماره" required>
                                <input type="text" id="" class="my_form-control col-4 offset-1" name="phonenum" placeholder="تلفن" required>
                            </div>
                            <div class="personal-detail mb-4">
                                <input type="text" id="" class="my_form-control col-6 offset-6" name="phone" placeholder="تلفن" required>
                            </div>
                            <br>
                            <h3 class="border-mysuccess text-right mt-4">اطلاعات تجاری</h3>
                            <div class="personal-detail">
                                <input type="text" id="" class="my_form-control col-6 offset-6" name="shop" placeholder="نام فروشگاه" required>
                            </div>
                            <br><br>
                            <div class="personal-detail px-2">
                                <h4 class="mt-2 mr-2">IR</h4>
                                <input type="text" id="shabanumber" name="shabanumber1" class="text-left ml-1 my_form-control col-2 py-0" maxlength="6" required>
                                <input type="text" id="shabanumber" name="shabanumber2" class="text-left ml-1 my_form-control col-2 py-0" maxlength="6" required>
                                <input type="text" id="shabanumber" name="shabanumber3" class="text-left ml-1 my_form-control col-2 py-0" maxlength="6" required>
                                <input type="text" id="shabanumber" name="shabanumber4" class="text-left ml-1 my_form-control col-2 py-0" maxlength="6" required>
                                <h4 class="text-dark mr-0 ml-auto mt-3">:شماره شبا</h4>
                            </div>
                            <br><br>
                            <div class="personal-detail text-right" dir="rtl">
                                <h4 class="ml-2">قصد فروش چه نوع کالایی دارید؟</h4>
                                <select name="main_supply_category_id" data-select2-id="7" tabindex="-1" aria-hidden="true" required="" class="text-right personal-detail-select">
                                    <option value="1" data-select2-id="1">غلات</option>
                                    <option value="2" data-select2-id="2">حبوبات</option>
                                    <option value="3" data-select2-id="3">مرکبات</option>
                                    <option value="4" data-select2-id="4">میوه جات</option>
                                    <option value="5" data-select2-id="5">صیفی جات</option>
                                </select>
                            </div><br><br>
                            <div class="d-flex flex-column w-100">
                                <button type="submit" name="submit_business" class="btn btn-mysuccess px-4 py-1 ml-auto mr-0 py-1 font-weight-bolder" style="font-size: 18px;">ادامه</button>
                                <?php
                                if(isset($_GET["shaba-eror"])){
                                    echo '<p class="text-danger text-right">شماره شبا مشکل دارد</p>';
                                }if(isset($_GET["eror_data"])){
                                    echo '<p class="text-danger text-right">فیلدی درست وارد نشده است</p>';
                                }
                                
                                ?>
                            </div>
                            <div class="w-100" style="height: 40px;"></div>
                        </div>

                    </form>
                </div>
            </div>

            
        </body>
        <script src="asset/js/script.js "></script>
        <script src="asset/js/register.js "></script>

    </html>
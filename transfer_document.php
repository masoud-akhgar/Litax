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
if(isset($_POST['submit_business_final'])){
    if (empty($_POST['myfile2'])){
        $show_next_div = 1;
        header("location:business_detail.php?eror-empty=s22asfla-k0u9");
        exit;
    }else if (empty($_POST['myfile'])){
        $show_next_div = 1; 
        header("location:business_detail.php?eror-empty=eok3223lds");
        exit;
    }else{
        $_SESSION["kind2"] = $_POST["kind2"];
        $_SESSION["myfile"] = $_POST["myfile"];
        $_SESSION["myfile2"] = $_POST["myfile2"];
        $type = $_SESSION["type"];
        if($type==2){
            $json_decode_str = gets_array_json("asset/json/sellers.json");
        }else if($type==1){
            $json_decode_str = gets_array_json("asset/json/drivers.json"); 
        }

        array_push($json_decode_str, array('id' => $_SESSION["id"] ,'firstname'=>$_SESSION["firstname"],"familyname"=>$_SESSION["familyname"],"birth_day"=>$_SESSION["birth_day"],
        'birth_year'=>$_SESSION['birth_year'], 'birth_month'=>$_SESSION["birth_month"], 'username'=>$_SESSION["username"] , 'email'=>$_SESSION["email"] , 'pass'=>$_SESSION["password"] ,
        'gender'=>$__SESSION['gender'],'melicode'=>$__SESSION['melicode'],'shcode'=>$__SESSION['shcode'],'state'=>$__SESSION['state'],'city'=>$__SESSION['city'],'address'=>$__SESSION['address'],'shop'=>$__SESSION['shop'],
        'number'=>$_SESSION["number"],'phonenum'=>$_SESSION["phonenum"],'areacode'=>$_SESSION["areacode"],'postalcode'=>$_SESSION["postalcode"],'phone'=>$_SESSION["phone"],'shabanumber1'=>$_SESSION["shabanumber1"],
        'shabanumber2'=>$_SESSION["shabanumber2"],'shabanumber3'=>$_SESSION["shabanumber3"],'shabanumber4'=>$_SESSION["shabanumber4"],'main_supply_category_id'=>$_SESSION["main_supply_category_id"],
        'myfile2'=>$_SESSION["myfile2"],'myfile'=>$_SESSION["myfile"],'kind2'=>$_SESSION["kind2"],'valid'=>$_SESSION["valid"]));

        $json_file_new = json_encode($json_decode_str);

        if($type==2){
            file_put_contents("asset/json/sellers.json",$json_file_new);
        }else if($type==1){
            file_put_contents("asset/json/drivers.json",$json_file_new);

        }
        

        header("location:register.php?success=s22asfla-k0u9");
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
                <div class="container text-right mt-5 p-5" id="container" dir="rtl">
                    <form action="" method="post" class="d-block px-0 w-100 text-right">
                        <h2 class="text-right font-weight-bolder">مالیات بر ارزش افزوده</h2><br>
                        <h4 class="text-dark">آیا مشمول مالیات بر ارزش افزوده می باشید؟<br> توجه نمایید برگه ارزش افزوده حقیقی باید به نام شخص ثبت نام کننده باش</h4>
                        <div class="d-flex personal-detail w-100">
                            <input class=" pointer w-25 ml-2 mr-1" type="radio" name="kind2" required>
                            <h4 class="text-right mt-1">خیر</h4>
                            <input class=" pointer ml-2 w-25 mr-1" type="radio" name="kind2" required>
                            <h4 class="text-right mt-1">بلی</h4>
                        </div><br><br>
                        <h4 class="text-danger">
                            تصویر کارت ملی
                            <br> - تصاویر باید صاف و کاملاً واضح باشد. <br> - تصویر رو و پشت کارت ملی باید به طور جداگانه بارگذاری شود. <br> - تصویر کارت ملی همه صاحبان حق امضا در قالب یک عکس در کنار هم قرار گرفته و بارگذاری شود.
                        </h4><br><br>

                        <div class="d-flex w-100">
                            <label for="onMeliCard" class="btn btn-mysuccess px-4 py-1 col-4 text-white text-center font-weight-bolder" style="font-size: 18px;">بارگزاری تصویر روی گواهینامه</label>
                            <input type="file" id="onMeliCard" class="d-none" name="myfile">
                        </div><br><br>
                        <div class="d-flex w-100">
                            <label for="BehindMeliCard" class="btn btn-mysuccess px-4 py-1 col-4 text-white text-center font-weight-bolder" style="font-size: 18px;">بارگزاری تصویر پشت گواهینامه</label>
                            <input type="file" id="BehindMeliCard" class="d-none" name="myfile2">
                        </div><br><br>
                        <button type="submit" name="submit_business_final" class=" btn-mysuccess px-4 py-1 font-weight-bolder" style="font-size: 18px;">ثبت نهایی</button>
                        <?php
                        if(isset($_GET["eror-empty"])){
                            echo '<p class="text-danger text-right">فایل آپلود نشده است</p>';
                        }
                        ?>
                    </form>
                </div>
                <div class="w-100" style="height: 40px;"></div>
            </div>
        </body>
        <script src="asset/js/script.js "></script>
        <script src="asset/js/register.js "></script>

    </html>
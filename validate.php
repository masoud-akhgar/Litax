<?php
// $to = "";
// $subject = "My subject";
// $txt = "Hello world!";
// $headers = "From: masoudmdar78@gmail.com" . "\r\n" .
// "CC: masoudmdar78@gmail.com";
session_name('panelx');
session_start();

include ("asset/inc/get_array_json.php");
if(isset($_POST["signup"])){
    if(isset($_POST["username2"]) && isset($_POST["password2"]) && isset($_POST["usermail2"]) && isset($_POST["phonenomber2"]) ){
        if($_POST["username2"]!="" && $_POST["password2"]!=""  && $_POST["usermail2"]!="" && $_POST["phonenomber2"]!=""){
            $clearusername2 = trim($_POST["username2"]);
            $clearusermail2 = trim($_POST["usermail2"]);
            $clearpassword2 = trim($_POST["password2"]);
            $clearnumber2 = trim($_POST["phonenomber2"]);
            $flag=0;
            $type = $_GET["kind"];
            $_SESSION["type"]=$type;

            if($clearpassword2=="" || $clearusermail2=="" || $clearnumber2=="" || $clearusername2==''){
                header("location:register.php");
                exit;
            }
            if(($clearusername2[0]<'a' || $clearusername2[0]<'z') && ($clearusername2[0]<'A' || $clearusername2[0]<'Z') || $clearusername2[0]=='3'){
                header("location:register.php?eror-type=13263304");exit;
            }
            if(strpos($clearusername2, '&') || strpos($clearusername2, '/') || strpos($clearusername2, '?') || strpos($clearusername2, '\\') || strpos($clearusername2, '!')){
                header("location:register.php?eror-specific=878sd657");exit;
            }
            if(strpos($clearpassword2, '&') || strpos($clearpassword2, '/') || strpos($clearpassword2, '?') || strpos($clearpassword2, '\\') || strpos($clearpassword2, '!')){
                header("location:register.php?eror-specific=878sd657");exit;
            }
            if(strlen($clearpassword2)<=8 || strlen($clearusername2)<=8){
                header("location:register.php?eror-count=sa8ssa8sddsa8sd657-".strlen($clearusername2)."-".strlen($clearpassword2));exit;
            }
            if($clearnumber2[0]!="0" || $clearnumber2[1]!='9'){
                header("location:register.php?eror-number=mls3sa8sd657");exit;
            }

            if($type==2){
                $json_decode_str = gets_array_json("asset/json/sellers.json");
            }else if($type==0){
                $json_decode_str = gets_array_json("asset/json/users.json"); 
            }else if($type==1){
                $json_decode_str = gets_array_json("asset/json/drivers.json"); 
            }
            

            for($i=0;$i<count($json_decode_str);$i=$i+1){
                if(($json_decode_str[$i]->email==$clearusermail2 || $clearnumber2==$json_decode_str[$i]->number)){
                    $flag=1;
                    if($json_decode_str[$i]->valid==1){
                        if($json_decode_str[$i]->email==$clearusermail2){
                            header("location:register.php?eror-existemail=m0s6503234");
                            exit;
                        }else{
                            header("location:register.php?eror-existnumber=m0s6503234");
                            exit;
                        }
                    }else{
                        if($json_decode_str[$i]->email==$clearusermail2 && $clearnumber2==$json_decode_str[$i]->number){
                            $_SESSION["id"] = $json_decode_str[$i]->id;
                        }else{
                            header("location:register.php?eror-conflict=0635m23s04");
                            exit; 
                        }
                    }
                }
            }
            
            
            
            $_SESSION["username"] = $clearusername2;
            $_SESSION["password"] = $clearpassword2;
            $_SESSION["email"] = $clearusermail2;
            $_SESSION["number"] = $clearnumber2;
            $_SESSION["valid"] = 0;
            $_SESSION['access'] = true;
            

            if($flag==0){
                $size = count($json_decode_str);
                if($size!=0)$new_index = $json_decode_str[$size-1]->id;
                else $new_index=0;
                $new_index = $new_index+1;
                $_SESSION["id"] = $new_index;
                if($type==0){
                    array_push($json_decode_str, array('id' => $new_index , 'name'=>$clearusername2 , 'email'=>$clearusermail2 , 'pass'=>$clearpassword2 , 'number'=>$clearnumber2,'valid'=>0));
                    $json_file_new = json_encode($json_decode_str);
                    file_put_contents("asset/json/users.json",$json_file_new);
                }
            }
            session_write_close();
            }else{
            header("location:register.php?eror-notsuccess=1300003234");
            exit;
            }
        }else{
        header("location:register.php?eror-notsuccess=1300003234");
        exit;
        }
}else if(isset($_POST["sendmail"])){
        if($_SESSION['access']){
            if($_POST["code"]!="" && isset($_POST["code"])){
                $type = $_SESSION["type"];
                // confrimed!!!
                if($type==2){
                    $json_decode_str = gets_array_json("asset/json/sellers.json");
                }else if($type==0){
                    $json_decode_str = gets_array_json("asset/json/users.json"); 
                }else if($type==1){
                    $json_decode_str = gets_array_json("asset/json/drivers.json"); 
                }
                
                for($i=0;$i<count($json_decode_str);$i=$i+1){
                    if($json_decode_str[$i]->id == $_SESSION["id"]){
                        $json_decode_str[$i]->valid = 1;
                        $_SESSION["valid"]=1;
                        $_SESSION['access']=false;
                        break;
                    }
                }

                $json_file_new = json_encode($json_decode_str);
                if($type==2){
                    file_put_contents("asset/json/sellers.json",$json_file_new);
                }else if($type==0){
                    file_put_contents("asset/json/users.json",$json_file_new);
                }else if($type==1){
                    file_put_contents("asset/json/drivers.json",$json_file_new);
                }

                if($type==2){
                    header("location:business_detail.php");
                }else if($type==0){
                    header("location:register.php?success=28sc]34llmdsd");
                }else if($type==1){
                    header("location:transfer_detail.php");
                }
                
            }else{
                header("location:validate.php?fillout=s2fbth632c");
                exit;
            }
        }else{
            header("location:index.php");
            exit;
        }
    }else{
        // header("location:index.php");
        // exit;
    }
    // mail($to,$subject,$txt,$headers);
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


    <body oncontextmenu="return false" onkeydown="return false;" onmousedown="return false;">

        <div class="w-100 background2">
            <?php include ("asset/subpages/top_header.php")?>

            <div class="container mt-5 h-25" id="container">
                <div class="w-100 h-100 bg-white p-5">
                    <div class="confrim-email text-center ">
                        <h4 class="text-center text-ylw3 font-weight-bolder w-100">
                            توجه: ایمیل فعالسازی برای شما ارسال شده است. در صورتی که <br> ایمیل مربوطه در صندوق دریافتی شما نیست، پوشه اسپم ایمیل خود را<br> نیز بررسی نمایید
                        </h4>
                        <form method="post" id="contact-form" class="w-100" role="form" novalidate>
                        <div class="form-group mt-5">
                            <label>
                            <input type="text" name="code" placeholder="کد ارسال شده را وارد کنید" name="usermail" id="form_email" class=" w-100 m-auto border-ylw" required>
                            <div class="invalid-feedback">لطفا کد معتبر وارد کنید</div>
                        </label>
                        </div>

                        <div class="form-group pt-0 text-center">
                            <button name="sendmail" type="submit" class="btn btn-mysuccess mt-2 py-1 mx-auto font-weight-bolder" style="font-size: 20px;">تایید عضویت</button>
                        </div>
                        <div class="form-group pt-0 text-center">
                            <button class="to-login2 btn btn-mysuccess mt-2 py-1 mx-auto font-weight-bolder " style="font-size: 20px; ">صفحه ی ورود</button>
                        </div>
                        <?php
                        if(isset($_GET["fillout"])){
                            echo '<p class="text-danger text-center">کادر مورد نظر را پر کنید</p>';
                        }
                        ?>
                        </form>

                    </div>
                </div>


            </div>
        </div>
        </div>

    </body>
    <script src="asset/js/script.js "></script>
    <script src="asset/js/register.js "></script>

    </html>
    
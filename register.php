<?php 
session_name('panelx');
session_start();
$_SESSION['access'] = false;
$_SESSION['id'] = null;
$_SESSION['username'] = null;
$_SESSION['password'] = null;
$_SESSION['email'] = null;
$error = 0;
$text = null;

// composer require 'kavenegar-php-master/src/KavenegarApi.php';
include ("kavenegar-php-master/src/KavenegarApi.php");
?>

<head>
    <?php include ("asset/subpages/head.php")?>
</head>

<?php
$type=0;
if(isset($_SESSION["id"])){
    header("location:panelx-admin.php");
    exit;
}
if(isset($_GET["kind"])){
    $type=$_GET['kind'];

}
?>

    <?php 
    // function file_get_contents($filename)
    // {
    // $handle = fopen($filename, "rb");
    // $contents = fread($handle, filesize($filename));
    // fclose($handle);
    // return $contents;
    // }
    include ("asset/inc/get_array_json.php");
                if(isset($_POST["t0"])){    
                    $type=0;
                }
                if(isset($_POST["t1"])){
                    $type=1;
                }
                if(isset($_POST["t2"])){
                    $type=2;
                }
            ?>
    <?php
    if(isset($_POST["login"])){
        if(isset($_POST["usermail"]) && isset($_POST["password"]) ){
            if($_POST["usermail"]!="" && $_POST["password"]!="" ){
                $clearusermail = trim($_POST["usermail"]);
                $clearpassword = trim($_POST["password"]);
                
                if($clearpassword=="" || $clearusermail==""){
                    header("location:register.php");
                    exit;
                }
                if(($clearusermail[0]<'a' || $clearusermail[0]<'z') && ($clearusermail[0]<'A' || $clearusermail[0]<'Z') || $clearusermail[0]=='3'){
                    header("location:register.php?eror-type=13263304");exit;
                }
                
                if(strpos($clearusermail, '&') || strpos($clearusermail, '/') || strpos($clearusermail, '?') || strpos($clearusermail, '\\') || strpos($clearusermail, '!')){
                    header("location:register.php?eror-specific=878sd657");exit;
                }
                if(strpos($clearpassword, '&') || strpos($clearpassword, '/') || strpos($clearpassword, '?') || strpos($clearpassword, '\\') || strpos($clearpassword, '!')){
                    header("location:register.php?eror-specific=878sd657");exit;
                }
                if(strlen($clearpassword)<=8 || strlen($clearusermail)<=8){
                    header("location:register.php?eror-count=sa8ssa8sddsa8sd657".strlen($clearusermail)."-".strlen($clearpassword));exit;
                }

                $json_decode_str = gets_array_json("asset/json/admins.json");
                for($i=0;$i<count($json_decode_str);$i=$i+1){
                    if($json_decode_str[$i]->email==$clearusermail && $clearpassword==$json_decode_str[$i]->pass){
                        if($user2user2[$i]->id==0){
                            header("location:register.php?eror-confrim=1sds65117dds");
                            exit;
                        }
                        $_SESSION["id"] = $json_decode_str[$i]->id;
                        $_SESSION["username"] = $json_decode_str[$i]->name;
                        $_SESSION["password"] = $json_decode_str[$i]->pass;
                        $_SESSION["email"] = $json_decode_str[$i]->email;
                        $_SESSION["number"] = $json_decode_str[$i]->number;
                        $_SESSION["valid"] = $json_decode_str[$i]->valid;
                        $_SESSION['admin'] = "ns;fkas;jclwke[I93334FJ;DSVKSHQI3P";
                        $_SESSION['access'] = true;
                        session_write_close();
                        header("location:panelx-admin.php");  
                        exit();
                    }
                }
                header("location:register.php?eror-notfound=13263304");
                exit;
            }else{
            header("location:register.php?eror-notfound=13263304");
            exit;
            }
        }else{
        header("location:register.php?eror-notfound=13263304");
        exit;
        }
    }
    
?>
        <html>

        <head>
            <link href="asset/style/register.css" rel="stylesheet">
        </head>

        <body oncontextmenu="return false" onkeydown="return false;" onmousedown="return false;" id="register">
            <?php include ("asset/subpages/top_header.php")?>
            <br><br>
            <br><br>
            <div class="ml-0 pl-5 shadow3 mr-auto bg-none layer" style="width: 90%;z-index:0">
                <div class="border-1 bg-ylw border-danger mt-3 py-1 px-1 shadow chooser" style="width:105px;height: 40px;position: absolute;z-index: 100;border-radius: 40px;">
                    <div class="w-33 bg-ylw2 h-100 pointer" id="ruller" <?php echo "style='transform: translateX(".($type*35). "px);'";?> ></div>
                </div>
                <form action="" method="POST" class="border-1 pointer border-danger mt-3  py-1 px-1 shadow chooser" style="width:105px;opacity: 0;">
                    <div class="d-flex w-100 h-100">
                        <input name="t0" type="submit" class="w-33 pointer mr-1" alt="ورود یا ثبت نام کاربران">
                        <input name="t1" type="submit" class="w-33 pointer mr-1" alt="ورود یا ثبت نام رانندگان">
                        <input name="t2" type="submit" class="w-33 pointer mr-1" alt="ورود یا ثبت نام فروشندگان">
                    </div>
                </form>
                <div class="w-100 ">
                    <div class="row" id="layer-content">
                        <form method="post" id="needs-validation" class="mb-0" action=<?php echo "validate.php?kind=".$type;?> style="z-index:22" >
                            <div class="text-white h-set text-center" style="padding-left: 4rem;padding-right: 4rem;">
                                <br><br><br>
                                <h2 class="text-white">عضویت</h2>
                                <br>
                                <h4>ازنوع ثبت نام خود مطمئن شوید</h4>
                                <br><br>
                                <input type="text" name="username2" class="border-0 p-2" placeholder="نام کاربری " required>
                                <br><br>
                                <input type="email" name="usermail2" class="border-0 p-2" placeholder="ایمیل " required>
                                <br><br>
                                <input type="text" name="phonenomber2" class="border-0 p-2" placeholder="شماره تلفن همراه " required>
                                <br><br>
                                <input type="text" name="password2" class="border-0 p-2" placeholder="رمز " required>
                                <br><br>
                                <button class="btn-mysuccess pointer border-0" type="submit" name="signup">عضویت</button>
                                <?php
                                                        if(isset($_GET["success"])){
                                                            echo "<p class='text-center text-white'>باموفقیت عضو شدید</p>"; } if(isset($_GET["eror-notfound"])){ echo "
                    <p class='text-center text-danger'>کاربری پیدا نشد</p>"; } if(isset($_GET["eror-notsuccess"])){ echo "
                    <p class='text-center text-danger'>موفقیت آمیز نبود</p>"; } if(isset($_GET["eror-type"])){ echo "
                    <p class='text-center text-danger'>نام کاربری باید با حرف شروع شود</p>"; }if(isset($_GET["eror-specific"])){ echo "
                    <p class='text-center text-danger'>نام و رمز نباید شامل کاراکتر های خاص باشد</p>"; }if(isset($_GET["eror-count"])){ echo "
                    <p class='text-center text-danger'> مشخصات حداقل باید شامل 8کارکتر باشد</p>"; } if(isset($_GET["eror-number"])){ echo "
                    <p class='text-center text-danger'> شماره معتبر نیست</p>"; } if(isset($_GET["eror-existnumber"])){ echo "
                    <p class='text-center text-danger'> این شماره وجود دارد</p>"; }if(isset($_GET["eror-existemail"])){ echo "
                    <p class='text-center text-danger'> این ایمیل وجود دارد</p>"; } if(isset($_GET["eror-conflict"])){ echo "
                    <p class='text-center text-danger'> این ایمیل متعلق به شماره نیست ابتدا به حساب خود وارد شوید و سپس شماره را تغییر دهید</p>"; } if(isset($_GET["eror-confrim"])){ echo "
                    <p class='text-center text-danger'> ابتدا کد فعالسازی را ثبت کنید</p>"; } ?>
                            </div>
                        </form>
                        <div class="w-50 bg-none text-center m-auto text-white mr-5  h-set overlay-layer pr-5" style="z-index: 1;">
                            <div class=" forget-card ">
                                <h1>به صفحه <br>}اسم شرکت} <br> خوش آمدید</h1>
                                <p>با عضویت در سایت ما از <br>امکانات ما بهره مند شوید</p>
                                <button class="ghost py-1 font-weight-bolder" id="signInbtn" style="font-size: 20px;">ورود</button>
                                <button class="ghost py-1 font-weight-bolder d-none" id="loginInbtn" style="font-size: 20px;">عضویت</button>
                            </div>
                        </div>
                        <div class=" bg-none text-dark pt-5  text-center h-set " id="login-layer" style="z-index: 0;">
                            <br><br>
                            <form method="post" style="padding-right: 8rem;margin-top:12%;">
                                <div class="px-4 pr-5 txet-center">
                                    <h2 class="text-white">ورود</h2>

                                    <p class="text-white ">از نوع ثبت نام خود در این صفحه مطمئن شوید</p>
                                    <div class=" ">
                                        <label>
                                                            <input class="border-0 p-2 border-ylw" type="email" placeholder="ایمیل" id="form_password"  name="usermail" required>
                                                            <div  class="invalid-feedback">لطفا ایمیل معتبر وارد کنید</div>
                                                        </label>
                                    </div>
                                    <div class=" ">
                                        <label>
                                                            <input class="border-ylw border-0 p-2" type="password" name="password" id="form_password" placeholder="رمز" required>
                                                            <div class="invalid-feedback" >لطفا کادر مورد نظر را پر کنید</div>
                                    
                                                        </label>
                                    </div>
                                    <br><br>
                                    <div class=" text-center ">
                                        <button type="submit" name="login" id="login" class="btn-mysuccess pointer border-0">ورود</button>
                                    </div>

                                    <div class=" mt-2 text-center">
                                        <span class="forgot text-white">رمز خود را فراموش کردید؟</span>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <br><br><br>
        </body>
        <script>
            var ruller_state = "<?php echo $type;?>";
        </script>
        <script src="asset/js/register.js " type="text/javascript"></script>

        <script src="asset/js/script.js " type="text/javascript"></script>

        </html>
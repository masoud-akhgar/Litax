<?php

if(isset($_POST["massage"])){
    if(isset($_POST["usermail"]) && isset($_POST["username"]) && isset($_POST["phonenum"]) && isset($_POST["subject"]) && isset($_POST["textbox"])){
        if($_POST["usermail"]!="" && $_POST["username"]!="" && $_POST["phonenum"]!="" && $_POST["subject"]!="" && $_POST["textbox"]!="" ){
            $json_decode_str = gets_array_json("asset/json/massages.json");

            $size = count($json_decode_str);
            if($size!=0)$new_index = $json_decode_str[$size-1]->id;
            else $new_index=0;
            $new_index = $new_index+1;
            array_push($json_decode_str, array('id' => $new_index , 'name'=>$_POST["username"] , 'email'=>$_POST["usermail"] ,
            'phonenum'=>$_POST["phonenum"] , 'subject'=>$_POST["subject"],'textbox'=>$_POST["textbox"]));

            $json_file_new = json_encode($json_decode_str);
            file_put_contents("asset/json/massages.json",$json_file_new);
        }
    }
}
?>

<div class="text-center container">
                <h2 class="font-weight-bolder mb-4">ارسال انتقادات پیشنهادات درخواستها</h2>
                <div class=" ">
                    <form action="" method="post" class="w-75" style="margin-left:12.5%;">
                        <div class="Proposal offset-3">
                            <div class="">
                                <input type="email" name="usermail" placeholder="ایمیل">
                            </div>
                            <div class="offset-2">
                                <input type="text" name="username" placeholder="نام">
                            </div>
                        </div>
                        <div class="Proposal mt-3 offset-3">
                            <div >
                                <input type="text" name="phonenum" placeholder="شماره تماس">
                            </div>
                            <div class="offset-2">
                                <input type="text" name="subject" placeholder="موضوع">
                            </div>
                        </div>
                        <div class="w-100 ">
                            <textarea rows="10" cols="100" class="pr-2 text-center w-50 mt-4" style="z-index: 11;" type="text" name="textbox" id="" placeholder="متن پیام"></textarea>
                            <div class="form-group pt-0 text-center">
                                <button type="submit" name="massage" style="z-index: 11;" class="mt-2 bg-ylw2 text-white  border-0  py-1 px-4 mx-auto font-weight-bolder">ارسال</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
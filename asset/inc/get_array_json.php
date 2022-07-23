<?php
function gets_array_json($str) {
    // $filename = "asset/json/admins.json"
    try{
        $json_file = fopen($str,'r');
        $json_string = fread($json_file, filesize($str));
        $json_decode_str = array();
        $json_decode_str = json_decode($json_string);
        return $json_decode_str;
    }catch (\Throwable $ex){
        echo ' <p>متاسفانه سیستم با اختلال مواجه شد</p>'; 
    }
}
?>
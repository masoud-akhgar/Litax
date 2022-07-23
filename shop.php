<html>

<head>
    <?php include ("asset/subpages/head.php")?>
</head>


<body oncontextmenu="return false" onkeydown="return false;" onmousedown="return false;" id="keshavarzi" style="overflow-x: hidden;">
    <?php include ("asset/subpages/top_header.php");include ("asset/inc/get_array_json.php");?>
    <div class="w-100 mt-5 h-max "></div>

    <?php 
    include ("asset/subpages/navbar.php");
            $json_decode_arrayk= gets_array_json("asset/json/product_tag.json");
            for($k =0 ; $k<count($json_decode_arrayk);$k=$k+1){ 
                include ("asset/subpages/strips.php");  
                if($k==1)include ("asset/subpages/advers.php");
                } ?>
    <br><br><br>
    <?php include ("asset/subpages/page_selector.php");?>
    <?php include ("asset/subpages/footer.php")?>
</body>
<script>
</script>
<!-- <script src="asset/js/script.js"></script> -->
<script src="asset/js/shop.js"></script>

<script src="asset/js/script-nav.js"></script>

</html>
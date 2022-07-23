<html>

<head>
    <?php include ("asset/subpages/head.php")?>
    <link rel="stylesheet" href="asset/style/contact.css">
</head>
<body oncontextmenu="return false" onkeydown="return false;" onmousedown="return false;"  id="keshavarzi" style="overflow-x: hidden;">
    <?php include ("asset/subpages/top_header.php");include ("asset/inc/get_array_json.php");?>
<br><br><br>
    <div class="container shadow bg-white p-3 pb-5 d-flex">
        <div class="col-6 wpb_column vc_column_container">
            <div id="googleMap" style="width:100%;height:400px;"></div>
        </div>
        <div class="col-sm-6 text-center px-3">
            <h2 class="font-weight-bolder">دلایلی دیگر برای انتخاب ما</h2>
            <div class="container text-right">
                <p class="text-dark font-weight-normal px-4" style="font-size: 18px;">اولین گام برای افزایش بهره وری کسب و کار خود را با استایک بردارید. ما یک تیم آموزش دیده هستیم که در تلاش برای بهبود کیفیت قالب های ارائه شده هستیم.</p>
            </div>

            <div class="container px-5">
                <ul class="text-right text-success font-weight-bold px-3 list-style-none">
                    <li><i style="border-radius: 50%;" class="fa fa-check bg-success text-white p-1"></i>کارمندانی در آمریکا</li>
                    <li><i style="border-radius: 50%;" class="fa fa-check bg-success text-white p-1"></i>کاهش یا افزایش حجم کار بر اساس نیاز</li>
                    <li><i style="border-radius: 50%;" class="fa fa-check bg-success text-white p-1"></i>پروژه های در حال انجام</li>
                    <li><i style="border-radius: 50%;" class="fa fa-check bg-success text-white p-1"></i>استخدام بر اساس مهارت</li>
                </ul>
                <br><br><br>
                <div class="contact-info">
                    <div class="contact-info-content">
                        <h2 class="font-weight-bolder"> اطلاعات تماس</h2>
                        <ul class="list-style-none text-right text-dark">
                            <li> <i class="bx bx-phone-call"></i> <a href="" class="text-dark"> 992929292992+ </a></li>
                            <li> <i class="bx bx-mail-send"></i> <a href="mailto:info@yazdaneiranian.ir" class="text-dark"> Info@gmail.ir </a></li>
                        </ul>
                        <div class="footer-social-icon  text-right">
                            <a href="#"><i class="fab fa-facebook-f facebook-bg" aria-hidden="true"></i></a>
                            <a href="#"><i class="fab fa-twitter twitter-bg" aria-hidden="true"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g google-bg" aria-hidden="true"></i></a>
                            <a href="$"><i class="fab mt-1 fa-telegram-plane telegram-bg" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <br><br><br>
    <?php include ("asset/subpages/massages_handler.php");?>
    <div class="mapout">
        <div class="map-holder">
            <div id="le"></div>
        </div>
        <div class="clear"></div>
    </div>

    <?php include ("asset/subpages/footer.php")?>
</body>
<script>
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFUH1j4WLWlXws01ua1BXeHuqEowaTzHY&libraries=places&callback=initMap" async defer></script>
<script>
    function myMap() {
        var mapProp = {
            center: new google.maps.LatLng(36.3, 59.6),
            zoom: 15,
        };
        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>

<!-- <script src="asset/js/script.js"></script> -->
<script src="asset/js/shop.js"></script>
<script src="asset/js/script-nav.js"></script>

</html>
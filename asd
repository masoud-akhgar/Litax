
    <?php include ("asset/subpages/strips_special2.php ")?>
    <br><br><br>
    <div class=" bg-dark mt-3 container mb-3" style="height: 1px;opacity: 0.2;"></div>

    <?php include ("asset/subpages/advers.php") ?>
    <br><br><br>
    <div class=" bg-dark mt-3 container mb-3" style="height: 1px;opacity: 0.2;"></div>
    <br><br><br>

    <?php 
        $json_decode_array = gets_array_json("asset/json/posts.json");
        for($i=count($json_decode_array)-1;$i>=0;$i=$i-1){
            if($i%3==(count($json_decode_array)-1)%3)echo '<div class="w-100 d-flex introduce mt-4 px-4" >';
    ?>
    <div class="col-4 p-3 d-flex flex-column px-5">
        <img src=<?php echo '"'.$json_decode_array[$i]->image.'"';?> class="logo-post" style="max-height: 50px;min-height: 50px;">
        <h3 class="mt-2 text-right font-weight-bolder" style="opacity: 0.85;">
            <?php echo $json_decode_array[$i]->header;?>
        </h3>
        <p class="text-dark text-right">
            <?php echo $json_decode_array[$i]->text;?>
        </p>
    </div>
    <?php 
        if($i%3==count($json_decode_array)%3){
            echo '</div>';
        }
        }
    ?>
    <br><br><br>
    <h4 class="font-weight-bolder text-right container" style="color: rgba(75, 75, 75, 0.671)">پیشنهاد ما</h4>
    <div class=" bg-dark mt-3 container mb-3" style="height: 1px;opacity: 0.2;"></div>

    <?php 
    $k=2; 
    include ("asset/subpages/strips_special.php ");
    ?>
    <br><br>
    <div class=" bg-dark mt-3 container mb-3" style="height: 1px;opacity: 0.2;"></div>
    <br><br><br>
    <div class="container">
        <div class="px-5 d-flex">
            <div class="text-center w-100 px-5">
                <h4>دانلود و استفاده آسان</h4>
                <p class="text-dark">این یک متن آزمایشی درباره سایت شماست. کافیه با دو بار کلیک روی همین بخش اونو به دلخواه خودتون تغییر بدین... لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله
                    در ستون و سطرآنچنان که لازم است.</p>
            </div>
            <div class="text-center w-100">
                <img src="asset/img/keshavarzi6.png" class="m-auto w-50">
            </div>
        </div><br><br>
        <div class="px-5 d-flex" dir="rtl">
            <div class="text-center w-100 px-5">
                <h4>دانلود و استفاده آسان</h4>
                <p class="text-dark">این یک متن آزمایشی درباره سایت شماست. کافیه با دو بار کلیک روی همین بخش اونو به دلخواه خودتون تغییر بدین... لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله
                    در ستون و سطرآنچنان که لازم است.</p>
            </div>
            <div class="text-center w-100">
                <img src="asset/img/keshavarzi1.jpg" class="m-auto w-50">
            </div>
        </div><br><br>
        <div class="px-5 d-flex">
            <div class="text-center w-100 px-5">
                <h4>دانلود و استفاده آسان</h4>
                <p class="text-dark">این یک متن آزمایشی درباره سایت شماست. کافیه با دو بار کلیک روی همین بخش اونو به دلخواه خودتون تغییر بدین... لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله
                    در ستون و سطرآنچنان که لازم است.</p>
            </div>
            <div class="text-center w-100">
                <img src="asset/img/keshavarzi2.png" class="m-auto w-50">
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="w-100 Proposal ml-auto mr-0 pr-0 d-flex" style="right:0;">
        <div class="col-6 d-flex pt-5 mt-5 flex-column">
            <?php include ("asset/subpages/massages_handler.php");?>
        </div>
        <img src="asset/img/tijana-drndarski.png" class="w-50 mr-0 ml-auto">
    </div>
    <br><br>
    <div class=" bg-dark mt-3 container mb-3" style="height: 1px;opacity: 0.2;"></div>
    <br>
    <div class="container links mt-5 " dir="rtl">
        <h4 class="font-weight-bolder text-right ">لینک های مفید</h4>
        <div class="w-100 d-flex px-4">
            <?php $json_decode_array = gets_array_json("asset/json/product_category.json");
            $k=0;
            for($j=0 ; $j<=5;$j=$j+1){
                if($k>=5*12)break;
                $cat_array = $json_decode_array[$j]->category_array;
                for($i =0 ; $i<count($cat_array);$i=$i+1){ 
                if($k>=5*12)break;  
                if($k%12==0)echo '<div class="d-flex flex-column h-100 w-25">';
            ?>
            <h4 class="font-weight-bolder text-right "><a <?php echo 'href="shop_product.php?id='.$j. '"'; ?> class=""><?php echo $cat_array[$i]->tag_name;$k=$k+1; ?></a></h4>
            <?php if($k%12==0)echo '</div>';
                } 
                ?>
            <?php 
            }
            if($k%12!=11)echo '</div>';
            ?>
        </div>
    </div>

    <div class="w-100 " style="height: 40px;"></div>
    <?php include ("asset/subpages/footer.php ")?>
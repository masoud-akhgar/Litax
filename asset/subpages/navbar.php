<nav class="navbar   navbar-expand-md navbar-light px-4" style="direction: rtl;">
        <div class="collapse shadow2 navbar-collapse bg-white" id="navbarNavDropdown">
            <ul class="navbar-nav pr-4 mr-4">
                <?php
                $json_decode_array= gets_array_json("asset/json/product_category.json");
                 for($j=0 ; $j<count($json_decode_array);$j=$j+1){
                    $cat_array = $json_decode_array[$j]->category_array;
                ?>
                <li class="nav-item dropdown p-2" >
                    <a class="nav-link dropdown-toggle" style="font-size: 18px;" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $json_decode_array[$j]->category_name?>
                    </a>
                    <ul class="dropdown-menu shadow px-3 pb-3 text-right"  aria-labelledby="navbarDropdownMenuLink" style="direction: rtl;">
                        <div class="d-flex pr-1 pt-2">
                            <?php
                                    for($i =1 ; $i<count($cat_array);$i=$i+1){ 
                                        
                                ?>
                                <?php if($i%8==1){ echo '<div class="mr-2 pt-2">';
                                echo '<h2>'.$cat_array[$i]->tag_name.'</h2>';
                                }?>
                                
                                <li>
                                    <a class="dropdown-item d-flex" <?php echo 'href="shop_product.php?id='.$j.'-'.$i.'"'; ?>>
                                        <i class="fas fa-angle-left k mt-2"></i>
                                        <p class="mr-2 py-1" style="font-size: 14px;">
                                            <?php echo $cat_array[$i]->tag_name; ?>
                                        </p>
                                    </a>
                                </li>
                                <?php if($i%8==0){ echo '</div>';}?>
                                <?php }
                                if((count($cat_array)-1)%8!=0){
                                    echo '</div>';
                                } ?>
                                <div class=" w-50 ml-4 mr-auto p-5">
                                    <img src="asset/img/option4.jpg" class="w-100 img-fluid h-100 ">
                                </div>
                        </div>
                    </ul>
                </li>
                <?php } ?>
            </ul>
        </div>
    </nav>
<?php get_header();?>

    <div>
        <img src="wp-content/themes/abcinsurance/assets/images/hero.jpg" alt="">
        <div class="banner-text">Protect your family <br>with insurance<br>
            <button class="banner_button" type="" >REQUEST A QUOTE</button>
        </div>
    </div><br><br>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="section_title text-center mb_70">
                    <h3>Products</h3>
                </div>
            </div>
        </div><br>
        <div class="row">
        <?php 
            while(have_posts()){?>
                
                <div class="col-lg-3 col-md-6">
                    <div class="single" >
                        <?php the_post();?>
                        <h5><?php the_title(); ?></h5>
                            <p><?php the_content(); ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div><br><br>

    <div class="silverbg">
        <h3>Looking for a corporate plan?</h3><br>
        <p><img src="wp-content/themes/abcinsurance/assets/images/corporate.png" alt="">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id mi dapibus, luctus sapien ut, mattis arcu. Pellentesque nec ligula nec lacus faucibus blandit. In cursus felis non orci auctor porttitor. Donec eleifend hendrerit erat, faucibus efficitur sem consectetur id. Pellentesque molestie sapien ac odio tempus suscipit. Aenean gravida tristique magna, sit amet volutpat metus cursus nec. Cras nec est varius, tempus diam non, vehicula mauris. Aenean gravida tristique magna, sit amet volutpat metus cursus nec. Cras nec est varius, tempus diam non, vehicula mauris consectetur adipiscing elit. Pellentesque id mi dapibus, luctus sapien ut, mattis arcu. Pellentesque nec ligula nec lacus faucibus blandit. In cursus felis non orci auctor porttitor. Donec eleifend hendrerit erat, faucibus efficitur sem consectetur id. Pellentesque molestie sapien ac odio tempus suscipit. Aenean gravida tristique magna, sit amet volutpat metus cursus nec. Cras nec est varius, tempus diam non, vehicula mauris.</p><br>
        <div class="container"><button class="banner_button" type="" >Learn More</button></div>
    </div><br><br><br><br>


<?php get_footer();?>
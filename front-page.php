<?php get_header(); ?>

    

<?php $i = 1; if( have_rows('hero') ): ?>


    <div class="slider_area">
        <div class="slider_active owl-carousel">

            <?php while( have_rows('hero') ): the_row(); 

                
                $image = get_sub_field('image');
                $title1 = get_sub_field('title1');
                $title2 = get_sub_field('title2');
                $title3 = get_sub_field('title3');

                ?>

                <div class="single_slider  d-flex align-items-center slider_bg_<?php echo $i; ?> overlay">
                    <div class="container">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-xl-9 col-md-9 col-md-12">
                                <div class="slider_text text-center">
                                    <div class="deal_text">
                                        <span><?php echo $title1; ?></span>
                                    </div>
                                    <h3><?php echo $title2; ?></h3>
                                    <h4><?php echo $title3; ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            <?php $i++; endwhile; ?>

        </div>
    </div>
    <!-- slider_area_end -->
            
<?php endif; ?>
 

    <div class="best_burgers_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-80">
                        <span>Burger Menu</span>
                        <h3>Best Ever Burgers</h3>
                    </div>
                </div>
            </div>
            <div class="row">


                <?php
                $burger = new WP_Query(array(
                    'post_type'=>'burger',
                    'posts_per_page'=>-1
                ));
                 

                 while($burger->have_posts()){
                    $burger->the_post(); ?>


                <div class="col-xl-6 col-md-6 col-lg-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                        </div>
                        <div class="info">
                            <h3><?php the_title(); ?></h3>
                            <p><?php the_content(); ?></p>
                            <span>$<?php the_field('burger_price'); ?></span>
                        </div>
                    </div>
                </div>


            <?php } ?>
                
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="iteam_links">
                        <a class="boxed-btn5" href="Menu.html">More Items</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- features_room_startt -->


<div class="Burger_President_area">
            <div class="Burger_President_here">

    <?php if( have_rows('president_area') ): ?>

    

    <?php while( have_rows('president_area') ): the_row(); 


        $image = get_sub_field('image');
        $price = get_sub_field('price');
        $description = get_sub_field('description');
        $title = get_sub_field('title');
        
       

        ?>

            <div class="single_Burger_President">
                    <div class="room_thumb">
                        <img src="<?php echo $image; ?>" alt="">
                        <div class="room_heading d-flex justify-content-between align-items-center">
                            <div class="room_heading_inner">
                                <span>$<?php echo $price; ?></span>
                                <h3><?php echo $title; ?></h3>
                                <p><?php echo $description; ?></p>
                                <a href="#" class="boxed-btn3">Order Now</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
       

      

    <?php endwhile; ?>

    

<?php endif; ?>
                
            </div>
        </div>
        <!-- features_room_end -->


    <?php echo do_shortcode("[about]"); ?>


    <!-- video_area_start -->
    <div class="video_area video_bg overlay">
        <div class="video_area_inner text-center">
            <h3>Burger <br>
                Bachelor</h3>
            <span>How we make delicious Burger</span>
            <div class="video_payer">
                <a href="https://www.youtube.com/watch?v=vLnPwxZdW4Y" class="video_btn popup-video">
                    <i class="fa fa-play"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- video_area_end -->

    <!-- testimonial_area_start  -->
        <div class="testimonial_area ">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                                <div class="section_title mb-60 text-center">
                                        <span>Testimonials</span>
                                        <h3>Happy Customers</h3>
                                    </div>
                        </div>
                    </div>


                    <?php echo do_shortcode("[testimonial]"); ?>
    <!-- testimonial_area_ned  -->
    
 <div class="instragram_area">
    <div class="container">

    
    <?php if( have_rows('instagram_area','option') ): ?>

      <div class="row">
        <?php while( have_rows('instagram_area','option') ): the_row(); 

        // vars
        $image = get_sub_field('image','option');
       

        ?>
            <div class="col-lg-3 col-md-6">
                <div class="single_instagram">
                    <img src="<?php echo $image; ?>" alt="">
                    <div class="ovrelay">
                        <a href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
       
    <?php endwhile; ?>
        </div>
    <?php endif; ?>
   </div>
</div>
<?php get_footer(); ?>
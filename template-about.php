<?php
/*
Template Name: About
*/
get_header();
?>

<!-- bradcam_area_start -->
  <div class="bradcam_area breadcam_bg_1 overlay">
    <h3>about</h3>
</div>
<!-- bradcam_area_end -->
<?php echo do_shortcode("[about]"); ?>

    <!-- gallery_start -->
    <div class="gallery_area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                            <div class="section_title mb-70 text-center">
                                    <span>Gallery Image</span>
                                    <h3>Our Gallery</h3>
                                </div>
                    </div>
                </div>
            </div>
            <div class="single_gallery big_img">
                    <a class="popup-image" href="<?php bloginfo('template_directory'); ?>/img/gallery/1.png">
                        <i class="ti-plus"></i>
                    </a>
                <img src="<?php bloginfo('template_directory'); ?>/img/gallery/1.png" alt="">
            </div>
            <div class="single_gallery small_img">
                <a class="popup-image" href="<?php bloginfo('template_directory'); ?>/img/gallery/2.png">
                    <i class="ti-plus"></i>
                </a>
                <img src="<?php bloginfo('template_directory'); ?>/img/gallery/2.png" alt="">
            </div>
            <div class="single_gallery small_img">
                <a class="popup-image" href="<?php bloginfo('template_directory'); ?>/img/gallery/3.png">
                    <i class="ti-plus"></i>
                </a>
                <img src="<?php bloginfo('template_directory'); ?>/img/gallery/3.png" alt="">
            </div>
    
            <div class="single_gallery small_img">
                <a class="popup-image" href="<?php bloginfo('template_directory'); ?>/img/gallery/4.png">
                    <i class="ti-plus"></i>
                </a>
                <img src="<?php bloginfo('template_directory'); ?>/img/gallery/4.png" alt="">
            </div>
            <div class="single_gallery small_img">
                <a class="popup-image" href="<?php bloginfo('template_directory'); ?>/img/gallery/5.png">
                    <i class="ti-plus"></i>
                </a>
                <img src="<?php bloginfo('template_directory'); ?>/img/gallery/5.png" alt="">
            </div>
            <div class="single_gallery big_img">
                <a class="popup-image" href="<?php bloginfo('template_directory'); ?>/img/gallery/6.png">
                    <i class="ti-plus"></i>
                </a>
                <img src="<?php bloginfo('template_directory'); ?>/img/gallery/6.png" alt="">
            </div>
        </div>

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
        </div>
</div>
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

<?php get_footer(); ?>
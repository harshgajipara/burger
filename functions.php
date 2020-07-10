<?php


function burger_files(){
wp_enqueue_style('bootstrap', get_theme_file_uri('/css/bootstrap.min.css'));
wp_enqueue_style('owl.carousel', get_theme_file_uri('/css/owl.carousel.min.css'));
wp_enqueue_style('magnific-popup', get_theme_file_uri('/css/magnific-popup.css'));
wp_enqueue_style('font-awesome', get_theme_file_uri('/css/font-awesome.min.css'));
wp_enqueue_style('themify-icons', get_theme_file_uri('/css/themify-icons.css'));
wp_enqueue_style('nice-select', get_theme_file_uri('/css/nice-select.css'));
wp_enqueue_style('flaticon', get_theme_file_uri('/css/flaticon.css'));
wp_enqueue_style('animate', get_theme_file_uri('/css/animate.css'));
wp_enqueue_style('slicknav', get_theme_file_uri('/css/slicknav.css'));
wp_enqueue_style('style', get_theme_file_uri('/css/style.css'));
wp_enqueue_style('responsive', get_theme_file_uri('/css/responsive.css'));


wp_enqueue_script('modernizr',get_theme_file_uri('/js/vendor/modernizr-3.5.0.min.js'),NULL,'1.0',true);
wp_enqueue_script('jquery',get_theme_file_uri('/js/vendor/jquery-1.12.4.min.js'),NULL,'1.0',true);
wp_enqueue_script('popper',get_theme_file_uri('/js/popper.min.js'),NULL,'1.0',true);
wp_enqueue_script('bootstrap',get_theme_file_uri('/js/bootstrap.min.js'),NULL,'1.0',true);
wp_enqueue_script('owl.carousel',get_theme_file_uri('/js/owl.carousel.min.js'),NULL,'1.0',true);
wp_enqueue_script('isotope',get_theme_file_uri('/js/isotope.pkgd.min.js'),NULL,'1.0',true);
wp_enqueue_script('ajax',get_theme_file_uri('/js/ajax-form.js'),NULL,'1.0',true);
wp_enqueue_script('waypoints',get_theme_file_uri('/js/waypoints.min.js'),NULL,'1.0',true);
wp_enqueue_script('jquery.counterup',get_theme_file_uri('/js/jquery.counterup.min.js'),NULL,'1.0',true);
wp_enqueue_script('imagesloaded',get_theme_file_uri('/js/imagesloaded.pkgd.min.js'),NULL,'1.0',true);
wp_enqueue_script('scrollIt',get_theme_file_uri('/js/scrollIt.js'),NULL,'1.0',true);
wp_enqueue_script('jquery.scrollUp',get_theme_file_uri('/js/jquery.scrollUp.min.js'),NULL,'1.0',true);
wp_enqueue_script('wow',get_theme_file_uri('/js/wow.min.js'),NULL,'1.0',true);
wp_enqueue_script('nice-select',get_theme_file_uri('/js/nice-select.min.js'),NULL,'1.0',true);
wp_enqueue_script('jquery.slicknav',get_theme_file_uri('/js/jquery.slicknav.min.js'),NULL,'1.0',true);
wp_enqueue_script('jquery.magnific-popup',get_theme_file_uri('/js/jquery.magnific-popup.min.js'),NULL,'1.0',true);
wp_enqueue_script('plugins',get_theme_file_uri('/js/plugins.js'),NULL,'1.0',true);


wp_enqueue_script('js', get_theme_file_uri('/js/contact.js'),NULL,'1.0',true);
wp_enqueue_script('jquery-ajax',get_theme_file_uri('/js/jquery.ajaxchimp.min.js'),NULL,'1.0',true);
wp_enqueue_script('jquery-form',get_theme_file_uri('/js/jquery.form.js'),NULL,'1.0',true);
wp_enqueue_script('jquery-validate',get_theme_file_uri('/js/jquery.validate.min.js'),NULL,'1.0',true);
wp_enqueue_script('maail',get_theme_file_uri('/js/mail-script.js'),NULL,'1.0',true);
wp_enqueue_script('main',get_theme_file_uri('/js/main.js'),NULL,'1.0',true);
}

add_action('wp_enqueue_scripts','burger_files');


add_theme_support('menus');
add_theme_support('post-thumbnails');

function features(){
	register_nav_menu('headermenulocation', 'Header Menu Location');
}


add_action('after_setup_theme', 'features');

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}


function about_shortcode(){?>
	<!-- about_area_start -->
<div class="about_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="about_thumb2">
                        <div class="img_1">
                            <img src="<?php echo get_field('front_image','option'); ?>" alt="">
                        </div>
                        <div class="img_2">
                            <img src="<?php echo get_field('rear_image','option') ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 offset-lg-1 col-md-6">
                    <div class="about_info">
                        <div class="section_title mb-20px">
                            <span>About Us</span>
                            <h3><?php echo get_field('title','option'); ?></h3>
                        </div>
                        <p><?php echo get_field('description','option'); ?></p>
                        <div class="img_thumb">
                            <img src="<?php echo get_field('signature','option'); ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_area_end -->
<?php }


add_shortcode('about','about_shortcode');


function testimonial_shortcode(){ ?>

    <div class="row">
        <div class="col-xl-12">
            <div class="testmonial_active owl-carousel">

                <?php 
                $testimonial = new WP_Query(array(
                    'post_type'=>'testimonial',
                    'posts_per_page'=>-1
                ));


                while($testimonial->have_posts()){
                    $testimonial->the_post(); ?>

                    <div class="single_carousel">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="single_testmonial text-center">
                                    <p><?php the_content(); ?></p>
                                    <div class="testmonial_author">
                                        <div class="thumb">
                                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                        </div>
                                        <h4><?php the_title(); ?></h4>
                                        <div class="stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                <?php } ?>

            </div>
        </div>
    </div>
</div>
</div>

<?php }

add_shortcode('testimonial','testimonial_shortcode');

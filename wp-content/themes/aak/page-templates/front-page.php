<?php 
    /**
    * template name: home page
    */
    get_header();
    $home_desktop_banner = get_field('home_desktop_banner');
    $home_mobile_banner = get_field('home_mobile_banner');
    $home_page_service_section = get_field('home_page_service_section');
?>
<section class="home-banner-section home-banner">
    <img src="<?php echo $home_desktop_banner['url']; ?>" alt="<?php echo $home_desktop_banner['alt'] ?>" class="w-100 desktop-image" />
    <img src="<?php echo $home_mobile_banner['url']; ?>" alt="<?php echo $home_mobile_banner['alt'] ?>" class="w-100 mobile-image" />
    <div class="col-md-12 p-0 text-center text-white home-banner-content">
        <div class="col-md-12 p-md-5 p-3">
            <h1><?php echo get_field('home_banner_main_heading'); ?></h1>
            
            <P class="d-block">
                <?php echo get_field('home_banner_sub_heading'); ?>
            </P>
        </div>
    </div>
</section>
    
<section class="checkout-promotions-section">
    <div class="col-md-12 d-flex flex-row flex-wrap align-items-center justify-content-center">
        <div class="col-md-12 p-md-5 p-3 d-flex flex-row flex-wrap align-items-center justify-content-center">
        <?php $latest_promotions = get_field('latest_promotions'); 
            $latest_promotions_url = $latest_promotions['url'];
        ?>
            <a href="<?php echo esc_url( $latest_promotions_url ); ?>" class="px-lg-5 px-md-4 px-3 checkout-btn">
                Check out our latest Promotions
            </a>
        </div>
    </div>
</section>

<section class="automative-needs-content-section light-blue">
    <div class="container">
        <div class="col-lg-10 col-md-12 mx-auto py-5 text-white d-flex flex-row flex-wrap align-items-center justify-content-center">
            <div
                class="col-md-12 d-flex flex-row flex-wrap align-items-center justify-content-center an-auto-repair">
                <h2><?php echo get_field('home_page_second_section_main_heading') ?></h2>
                <p class="w-100 bottom-line"></p>
            </div>
            <div class="col-md-12 p-md-5 p-3 text-center">
                <p class="pb-4 font-18">
                <?php echo get_field('home_page_second_section_sub_heading_one') ?>
                </p>
                <p class="pb-4 font-18">
                <?php echo get_field('home_page_second_section_sub_heading_two') ?>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="owl-carousel-section">
    <div class="owl-carousel owl-theme">
        <?php 

            $args = array(
                'post_type' => 'services',
                // 'category_name' => 'major-service'
                // 'posts_per_page' => 6, 
            );

            $services = new WP_Query( $args );
            if($services->have_posts()){
                while($services->have_posts()){
                    $services->the_post();
        ?>
            <div class="item">
                <a href="<?php echo get_the_permalink(get_the_ID()) ?>">
                <div class="card home-carousel-card">
                    <?php the_post_thumbnail('', array('class' => 'img-fluid')) ?>
                    <p class="m-0 p-2 text-center">
                        <?php the_title() ?>
                    </p>
                </div>
                    
                </a>
            </div>
        <?php } }?>
        <?php wp_reset_postdata();  ?>
    </div>
</section>

<section class="automative-needs-content-section light-blue">
    <div class="container">
        <div class="col-lg-10 col-md-12 mx-auto py-5 text-white d-flex flex-row flex-wrap align-items-center justify-content-center">
            <div
                class="col-md-12 d-flex flex-row flex-wrap align-items-center justify-content-center an-auto-repair">
                <h2><?php echo get_field('home_page_fourth_section_main_heading') ?></h2>
                <p class="w-100 bottom-line"></p>
            </div>
            <div class="col-md-12 text-center btn-block mt-5">
                <?php $home_page_fourth_section_service_link = get_field('home_page_fourth_section_service_link'); 
                    $home_page_fourth_section_service_link_url = $home_page_fourth_section_service_link['url'];
                ?>
                <a href="<?php echo esc_url( $home_page_fourth_section_service_link_url ); ?>" class="px-lg-5 px-md-4 px-3 checkout-btn">
                    Check Out Our Services Now
                </a>
            </div>
            <div class="col-md-12 p-md-5 p-3 text-center">
                <p class="pb-4 font-18">
                <?php echo get_field('home_page_fourth_section_sub_heading_one') ?>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="services-section">
    <div class="col-md-12 py-5">
        <div class="container">
            <div class="col-md-12 d-flex flex-row flex-wrap align-items-stretch justify-content-between">
                <?php 
                    if( have_rows('home_page_service_section') ){
                        while ( have_rows('home_page_service_section') ) { the_row();
                ?>
                    <div class="col-lg-3 col-md-4 text-center p-3">
                        <div class="col-md-12 d-flex flex-row flex-wrap align-items-center justify-content-center">
                            <div class="card">
                                <div>
                                    <img src="<?php the_sub_field('service_image')?>" alt="Service Image" class="home-page-service-icon">
                                </div>
                                
                                <div class="col-md-12 p-0">
                                <?php $service_name = get_sub_field('service_name'); 
                                    $sevice_name_url = $service_name['url'];
                                ?>
                                    <a href="<?php echo esc_url( $sevice_name_url ); ?>" class="btn home-service-btn">
                                        <?php the_sub_field('service_title')?>
                                        
                                    </a>
                                    <!-- <a href="<//?php the_sub_field('sevice_name')?>" class="btn home-service-btn">
                                        <//?php the_sub_field('service_title')?>
                                    </a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }} ?>
                
            </div>
        </div>
    </div>
</section>

    <?php get_footer() ?>
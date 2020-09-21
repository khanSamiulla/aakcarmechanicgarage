<?php 
/**
 * template name: promotions
 */
get_header();
$promotions_sub_images = get_field('promotions_sub_images');
$promotions_for_services = get_field('promotions_for_services');
?>

<section class="promo-banner">
        <div class="container">
            <div class="col-md-10 mx-auto d-flex flex-row flex-wrap align-items-center justify-content-center">
                <img src="<?php echo get_field('promotions_banner_image') ?>" alt="Promotions Banner" class="w-100">
            </div>
            <div class="col-md-12 text-center">
                <p class="type-of-cars-heading bold light-blue-color m-0 text-uppercase">
                    <?php echo get_field('promotions_main_heading') ?>
                </p>
                <hr class="hr-line">
            </div>
            <div class="col-md-12 d-flex flex-row flex-wrap align-items-center justify-content-center">
                <?php 
                    if(have_rows('promotions_sub_images')){
                        while(have_rows('promotions_sub_images')){
                            the_row();
                        
                ?>    
                    <div class="col-lg-3 col-md-6 p-3">
                        <img src="<?php echo the_sub_field('promotions_sub_image') ?>" alt="Car Image" class="w-100">
                    </div>
                <?php 
                    }
                }
                ?>
            </div>
            <div class="col-md-12 py-5">
                <?php
                    if(have_rows('promotions_for_services')){
                        while(have_rows('promotions_for_services')){
                            the_row();
                      
                ?>
                <div class="row m-0 px-md-0 py-4">
                    <div class="col-md-12 promotions-image-block px-md-0">
                        <img src="<?php echo the_sub_field('promotion_image') ?>" alt="Service Image" class="w-100">
                        <div class="col-md-12 promotions-content-block">
                            <div class="col-md-12 d-flex flex-row flex-wrap align-items-center justify-content-between p-3">
                                <div class="col-md-4">
                                    <p class="price-number">
                                        <?php echo the_sub_field('service_price') ?> <span class="price-letter">KD</span>
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <p class="promo-service-title bold">
                                        <?php echo the_sub_field('service_name') ?>
                                    </p>
                                </div>
                                <div class="col-md-4">
                                <ul>
                                  <?php 
                                   if(have_rows('service_check_list')){
                                       while(have_rows('service_check_list')){
                                           the_row();
                                       
                                   
                                  ?>
                                    <li><?php echo the_sub_field('item') ?></li>
                                    <?php }}?>
                                  </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
                        }
                    }
                ?>
            </div>
        </div>
    </section>

<?php get_footer() ?>

<?php 
    /**
    * template name: contact us
    */
    get_header();
    $contact_us_banner = get_field('contact_us_banner');
    $location_icon = get_field('location_icon');
    $mobile_icon = get_field('mobile_icon');
    $email_icon = get_field('email_icon');

?>

<section class="contact-us-banner-section">
            <div class="col-md-12 contact-us-banner-block p-0">
                <img src="<?php echo $contact_us_banner ?>" alt="Contact Us Banner" class="w-100">
                <div class="col-md-12 contact-us-content-block">
                    <div class="container">
                        <div class="col-md-12 py-md-5 p-0 d-flex flex-row flex-wrap align-items-center justify-content-between text-white contact-us-details">
                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <p class="contact-us-main-heading bold">
                                        <?php echo get_field('contact_us_main_heading') ?> <span class="d-block"><?php echo get_field('contact_us_sub_heading') ?></span>
                                    </p>
                                    <!-- <hr class="hr-white-line"> -->
                                </div>
                                <div class="col-md-12">
                                    <p class="contact-us-sub-heading bold">
                                    <?php echo get_field('contact_us_content_block') ?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12 d-flex flex-row flex-wrap align-items-stretch justify-content-between contact-details-icons p-md-4 p-0">
                                    <div class="col-4 p-0 text-center">
                                        <img src="<?php echo $location_icon ?>" alt="Location Icon" class="img-fluid">
                                    </div>
                                    <div class="col-8 p-0">
                                        <p class="bold"><?php echo get_field('street_name') ?></p>
                                        <p class="bold"><?php echo get_field('house_number') ?></p>
                                        <p class="bold"><?php echo get_field('city_name') ?></p>
                                        <p class="bold"><?php echo get_field('state_name') ?></p>
                                        <p class="bold"><?php echo get_field('country_name') ?></p>
                                        
                                    </div>
                                    
                                </div>
                                <div class="col-md-12 d-flex flex-row flex-wrap align-items-stretch justify-content-between contact-details-icons p-md-4 p-0">
                                    
                                    <div class="col-4 p-0 text-center">
                                        <img src="<?php echo $mobile_icon ?>" alt="Mobile Icon" class="img-fluid">
                                    </div>
                                    <div class="col-8 p-0">
                                        <p class="bold"><?php echo get_field('mobile_number_one') ?></p>
                                        <p class="bold"><?php echo get_field('mobile_number_two') ?></p>
                                    </div>
                                </div>
                                <div class="col-md-12 d-flex flex-row flex-wrap align-items-stretch justify-content-between contact-details-icons p-md-4 p-0">
                                    
                                    <div class="col-4 p-0 text-center">
                                        <img src="<?php echo $email_icon ?>" alt="Mail Icon" class="img-fluid">
                                    </div>
                                    <div class="col-8 p-0 email-block">
                                        <p class="bold mt-3"><?php echo get_field('email_id') ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<?php get_footer() ?>
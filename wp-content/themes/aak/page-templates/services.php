<?php 
    /**
    * template name: services page
    */
    get_header();
    $general_section_service = get_field('general_section_service');
    $engine_services = get_field('engine_services');
    $transmission_services = get_field('transmission_services');
    $general_repair_services = get_field('general_repair_services');
?>


 <!-- GENERAL SECTION STARTS FROM HERE -->
 <section class="general-services-section">
    <div class="col-md-12 p-0">
        <div class="col-md-12 text-center light-blue service-heading-block p-5">
            <p class="service-heading bold">
                <?php echo get_field('general_service_main_heading') ?>
            </p>
        </div>
        <div class="container">
            <div class="col-md-12 d-flex flex-row flex-wrap align-items-stertch justify-content-center py-md-5 px-0">
                <?php 
                    if(have_rows('general_section_service')){
                        while(have_rows('general_section_service')){
                            the_row();
                        
                ?>
                    <div class="col-lg-3 col-md-4 p-3 text-center">
                        <div class="service-image-block">
                            <img src="<?php echo the_sub_field('general_service_image') ?>" alt="General Service">
                        </div>
                        <p class="py-4">
                            <?php echo the_sub_field('general_service_name') ?>
                        </p>
                    </div>

                <?php }} ?>
            </div>
        </div>
    </div>
</section>
<!-- GENERAL SECTION ENDS HERE -->

 <!-- ENGINE SERVICE SECTION STARTS FROM HERE -->
<section class="engine-services-section">
    <div class="col-md-12 p-0">
        <div class="col-md-12 text-center light-blue service-heading-block p-5">
            <p class="service-heading bold">
                <?php echo get_field('engine_services_section_main_heading') ?>
            </p>
        </div>
        <div class="container">
            <div class="col-md-12 d-flex flex-row flex-wrap align-items-stertch justify-content-center py-md-5 px-0">
                <?php 
                    if(have_rows('engine_services')){
                        while(have_rows('engine_services')){
                            the_row();
                        
                ?>
                    <div class="col-lg-3 col-md-4 p-3 text-center">
                        <div class="service-image-block">
                            <img src="<?php echo the_sub_field('engine_service_image') ?>" alt="Engine Service">
                        </div>
                        <p class="py-4">
                            <?php echo the_sub_field('engine_service_name') ?>
                        </p>
                    </div>
                <?php }} ?>
            </div>
        </div>
    </div>
</section>
 <!-- ENGINE SERVICE SECTION ENDS HERE -->

<!-- TRANSMISSION SERVICE SECTION STARTS FROM HERE -->
<section class="transmission-services-section">
    <div class="col-md-12 p-0">
        <div class="col-md-12 text-center light-blue service-heading-block p-5">
            <p class="service-heading bold">
                <?php echo get_field('transmission_services_main_heading') ?>
            </p>
        </div>
        <div class="container">
            <div class="col-md-12 d-flex flex-row flex-wrap align-items-stertch justify-content-center py-md-5 px-0">
                <?php 
                    if(have_rows('transmission_services')){
                        while(have_rows('transmission_services')){
                            the_row();
                        
                ?>
                    <div class="col-lg-3 col-md-4 p-3 text-center">
                        <div class="service-image-block">
                            <img src="<?php echo the_sub_field('transmission_service_image') ?>" alt="Engine Service">
                        </div>
                        <p class="py-4">
                            <?php echo the_sub_field('transmission_service_name') ?>
                        </p>
                    </div>
                <?php }} ?>
            </div>
        </div>
    </div>
</section>
<!-- TRANSMISSION SERVICE SECTION ENDS HERE -->

<!-- General Repair SERVICE SECTION STARTS FROM HERE -->
<section class="general-repair-services-section">
    <div class="col-md-12 p-0">
        <div class="col-md-12 text-center light-blue service-heading-block p-5">
            <p class="service-heading bold">
                <?php echo get_field('general_repair_services_main_heading') ?>
            </p>
        </div>
        <div class="container">
            <div class="col-md-12 d-flex flex-row flex-wrap align-items-stertch justify-content-center py-md-5 px-0">
                <?php 
                    if(have_rows('general_repair_services')){
                        while(have_rows('general_repair_services')){
                            the_row();
                        
                ?>
                    <div class="col-lg-3 col-md-4 p-3 text-center">
                        <div class="service-image-block">
                            <img src="<?php echo the_sub_field('general_repair_service_image') ?>" alt="Engine Service">
                        </div>
                        <p class="py-4">
                            <?php echo the_sub_field('general_repair_service_name') ?>
                        </p>
                    </div>
                <?php }} ?>
            </div>
        </div>
    </div>
</section>
<!-- General Repair Services SECTION ENDS HERE -->
<?php get_footer() ?>
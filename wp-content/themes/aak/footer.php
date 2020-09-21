<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
  * @package AAK
 * @subpackage aak_car_mechanic_garage
 * @since AAK CAR MECHANIC GARAGE
 * @version 1.0
 */

?>
<footer class="light-blue text-white">
        <div class="container">
            <div class="col-lg-12 d-flex flex-row flex-wrap align-items-center justify-content-between py-5">
                <div class="col-md-6">
                    <div class="col-md-12 d-flex flex-row flex-wrap align-items-stretch justify-content-between">
                        <div class="col-md-6">
                            <p>House No : <span><?php echo get_field('house_number' , 'option')?></span> </p>
                            <p>Street : <span><?php echo get_field('street_name' , 'option')?></span> </p>
                            <p>Town : <span><?php echo get_field('town_name' , 'option')?></span> </p>
                            <p>City : <span><?php echo get_field('city_name' , 'option')?></span> </p>
                            <p>Country : <span><?php echo get_field('country_name' , 'option')?></span> </p>
                        </div>
                        <div class="col-md-6">
                            <p>Phone</p>
                            <p>Mobile : <?php echo get_field('shop_number' , 'option')?> </p>
                            <p>Shop : <?php echo get_field('mobile_number' , 'option')?> </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col md-12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d30962.75249289725!2d78.75353!3d14.056849!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbf26124603136dce!2sM.M%20Roadlines(G.I.K)!5e0!3m2!1sen!2sin!4v1585715385482!5m2!1sen!2sin" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="w-100"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </footer>
	<?php wp_footer(); ?>

</body>

</html>

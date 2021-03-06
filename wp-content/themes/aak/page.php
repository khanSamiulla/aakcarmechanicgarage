<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="container">
			<div class="col-md-12 d-flex flex-row flex-wrap align-items-center justify-content-between">
				<div class="col-md-12">
					<?php if(have_posts()){
							while(have_posts()){
								the_post();

					 ?>

					 <?php the_content(); ?>

				<?php } } ?>
				</div>
			</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php
get_footer();

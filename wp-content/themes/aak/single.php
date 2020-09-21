<?php
/**
 * The template for displaying all single posts
 *
 *
 * @package AAK
 * @subpackage aak_car_mechanic_garage
 * @since AAK CAR MECHANIC GARAGE
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="container">
    <div class="col-md-12 p-0 d-flex flex-row flex-wrap align-items-center justify-content-between">
        <?php if(has_post_thumbnail()) : ?>
            <div class="col-md-12 p-0">
                <img src="<?php the_post_thumbnail_url() ?>" alt="Service Image" class="w-100">
            </div>
        <?php endif; ?>
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <div class="col-md-12 px-0 py-3">
                <h1><?php the_title(); ?></h1>
            </div>
			<div class="col-md-12 d-flex flex-row flex-wrap align-items-center justify-content-between p-0">
				<div class="col-md-6 col-lg-4 px-md-0">
					<span> Pirce </span> : <span><?php echo get_field('price') ?></span>
				</div>
				<div class="col-md-6 col-lg-4 px-md-0">
					<span> Discount </span> : <span><?php echo get_field('discount') ?></span>
				</div>
				<div class="col-md-6 col-lg-4">
					
				</div>
			</div>
            <div class="col-md-12 p-0">
                <?php the_content(); ?>
            </div>
        <?php endwhile; endif;?> 
    </div>
</div>

			<!-- <//?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/post/content', get_post_format() );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

				// the_post_navigation(
				// 	array(
				// 		'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'twentyseventeen' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '</span>%title</span>',
				// 		'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'twentyseventeen' ) . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ) . '</span></span>',
				// 	)
				// );

			endwhile; // End the loop.
			?> -->

		</main><!-- #main -->
	</div><!-- #primary -->
	<!-- <//?php get_sidebar(); ?> -->
</div><!-- .wrap -->

<?php
get_footer();

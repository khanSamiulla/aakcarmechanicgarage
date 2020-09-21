<?php
/**
 * The template for displaying archive pages
 *
 *
 * @package AAK
 * @subpackage aak_car_mechanic_garage
 * @since AAK CAR MECHANIC GARAGE
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">

	<?php if ( have_posts() ) : ?>
		<header class="page-header">
			<!-- <//?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?> -->
		</header><!-- .page-header -->
	<?php endif; ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="container p-4">
    <div class="row">
        
    </div>
    <div class="row">
    <div class="container">
        <!-- <h2><//?php single_cat_title(); ?></h2> -->
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <div class="card mb-2 p-md-4 p-2">
                <div class="card-title"></div>
                <div class="card-body">
					<div class="col-md-12">
						<h1><?php the_title(); ?></h1>
					</div>
					<div class="col-md-12">
						<?php the_excerpt(); ?>
					</div>
					<div class="col-md-12">
						<a href="<?php the_permalink(); ?>" class="btn btn-success">Read more</a>
					</div>
                </div>
            </div>
        <?php endwhile; endif;?>
    </div>
        
    </div>
</div>

		<!-- <//?php
		if ( have_posts() ) :
			?>
			<//?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that
				 * will be used instead.
				 */
				get_template_part( 'template-parts/post/content', get_post_format() );

			endwhile;

			the_posts_pagination(
				array(
					'prev_text'          => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
					'next_text'          => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
				)
			);

		else :

			get_template_part( 'template-parts/post/content', 'none' );

		endif;
		?> -->

		</main><!-- #main -->
	</div><!-- #primary -->
	<!-- <//?php get_sidebar(); ?> -->
</div><!-- .wrap -->

<?php
get_footer();

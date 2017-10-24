<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package elite_mebel
 */

get_header(); ?>

<div class="container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="row">
				<div class="col-lg-12">

				<?php
				if ( have_posts() ) : ?>

					<header class="page-header">
						<?php
							echo '<h1 class="page-title vintage">'.single_cat_title( '', false ).'</h1>';
							//the_archive_description( '<div class="archive-description">', '</div>' );
						?>
					</header><!-- .page-header -->

				</div><!-- .col-lg-12 -->
			</div><!-- .row -->


			<div class="row">
				<div class="listitem">
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'cat' );

					endwhile;

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>

				</div><!-- .col-lg-12 -->
			</div><!-- .row -->

			<?php 
			if (is_category('8')) :
				echo '<div class="row">'; 
				echo '<div class="col-lg-12 gallery-in-cat">'; 
				echo '<div class="entry-content gallery-in-cat">'; 
						$args = array('include' => '101');
						$pages = get_pages($args);
						foreach($pages as $page){ 
							setup_postdata($page);
							the_content(); 
						}  
						wp_reset_postdata();
				echo '</div>';
				echo '</div>';
				echo '</div>';
			endif;
			?>

			<?php get_sidebar(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .container -->

<?php
get_footer();

<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package elite_mebel
 */

get_header(); ?>

<div class="container">
	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="row">
				<div class="col-lg-12">

				<?php
				if ( have_posts() ) : ?>

					<header class="page-header">
						<h3 class="page-title"><?php printf( esc_html__( 'Вы искали: %s', 'elite_mebel' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
					</header><!-- .page-header -->

					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );

					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>

				</div><!-- .col-lg-12 -->
			</div><!-- .row -->

			<?php get_sidebar(); ?>
		</main><!-- #main -->
	</section><!-- #primary -->
</div><!-- .container -->

<?php
get_footer();

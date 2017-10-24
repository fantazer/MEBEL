<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package elite_mebel
 */

get_header(); ?>

<div class="container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="row">
				<div class="col-lg-12">

					<section class="error-404 not-found">
						<h1>ошибка 404</h1>
						<div class="page-content">
							<header class="page-header">
								<h3 class="page-title">К сожалению у нас такого нет. Попробуйте воспользоваться поиском ниже:</h3>
							</header><!-- .page-header -->
							<?php
								get_search_form();

							?>
						</div><!-- .page-content -->
					</section><!-- .error-404 -->

				</div><!-- .col-lg-12 -->
			</div><!-- .row -->

			<?php get_sidebar(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .container -->

<?php
get_footer();

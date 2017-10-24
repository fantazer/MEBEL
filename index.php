<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package elite_mebel
 */

get_header(); ?>
<div class="container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<h1 class="page-title vintage">Деревянная мебель на заказ по индивидуальным размерам</h1>

		<div class="row">
			<div class="col-lg-12">
				<article id="category-8" <?php post_class('hentry'); ?>>

					<div class="entry-content">
						<div class="info">
							<div class="entry-title"><a href="<?php echo get_category_link(8); ?>"><?php echo get_cat_name(8); ?></a><a class="read-more" href="<?php echo get_category_link(8); ?>">Подробнее</a></div>
						</div>
						<?php
							echo wp_get_attachment_image( 343, 'full' ); 
						?>
					</div><!-- .entry-content -->
				</article><!-- #post-## -->
			</div><!-- .col-lg-12 -->
		</div><!-- .row -->


		<?php
		if ( have_posts() ) : ?>

			<?php
			query_posts('cat=2');
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'index' );

			endwhile;

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
			
		<div class="row">
			<div class="col-lg-12">
				<div id="infotext">
					<?php 
						$args = array('include' => '197');
						$pages = get_pages($args);
						foreach($pages as $page){ 
							setup_postdata($page);
							the_content(); 
						}  
						wp_reset_postdata();
					?> 
				</div>
			</div><!-- .col-lg-12 -->
		</div><!-- .row -->

		<div class="row">
			<div class="col-lg-12">
				<div id="adventage">


					<h2>Наши преимущества</h2>
					<div id="atg-1" class="atg">
						<div class="icon-avt-1 icon-avt"></div>
						<div class="info">Работаем 10 лет</div>
					</div>

					<div id="atg-2" class="atg">
						<div class="icon-avt-2 icon-avt"></div>
						<div class="info">Наработанные дизайнерские решенеия</div>
					</div>

					<div id="atg-3" class="atg">
						<div class="icon-avt-3 icon-avt"></div>
						<div class="info">Делаем “Под ключ”</div>
					</div>

					<div id="atg-4" class="atg">
						<div class="icon-avt-4 icon-avt"></div>
						<div class="info">Собственная дизайн-студия</div>
					</div>

					<div id="atg-5" class="atg">
						<div class="icon-avt-5 icon-avt"></div>
						<div class="info">Ручная работа</div>
					</div>
				</div><!-- #adventage -->
			</div><!-- .col-lg-12 -->
		</div><!-- .row -->
			
		<div class="row">
			<div class="col-lg-12">
				<h2>Акция</h2>
				<div id="banner">
					<a href="#" class="request-call" data-toggle="modal" data-target="#requestcall">
						<img src="<?php echo get_template_directory_uri().'/img/sale_15_percent.jpg'; ?>" alt="Баннер распродажи. Скидки 15%">
					</a>
				</div><!-- #banner -->
			</div><!-- .col-lg-12 -->
		</div><!-- .row -->

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .container -->

<?php
get_footer();

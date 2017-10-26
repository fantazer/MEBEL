<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', get_post_format() );

					// If comments are open or we have at least one comment, load up the comment template.
					//if ( comments_open() || get_comments_number() ) :
						//comments_template();
					//endif;

				endwhile; // End of the loop.
				?>
				<?
				/*	global $the_term;
					$values = CFS()->get( 'list' );
					foreach ( $values as $term_id ) {
					    $the_term = get_term($term_id);
					}*/
					global $the_term;
					$the_term =  CFS()->get( 'list' )[0];
				?>
				<div class="entry-content">
					<?
						if(CFS()->get( 'list' )!=""){
							$args = array(
				        'cat'=> $the_term,
				        'posts_per_page' => 100,
				        'order' => 'ASC',
				      );
				      query_posts($args);
				      while (have_posts()) : the_post();
				    ?>
				      <div class="item_list"><a href="<?php the_permalink();?>"><?=get_the_title();?></a></div>
				    <?
				      endwhile;
				      wp_reset_query();
				    }
					?>
				</div>
				</div><!-- .col-lg-12 -->
			</div><!-- .row -->

			<?echo "HELOOOW"; ?>
			<?php get_sidebar(); ?>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .container -->
<?php
get_footer();

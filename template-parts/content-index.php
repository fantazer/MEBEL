<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package elite_mebel
 */

?>
<div class="row">
	<div class="col-lg-12">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="entry-content">
				<div class="info">
				<?php
					the_title( '<div class="entry-title"><a href="'. esc_url( get_permalink() ) . '">', '</a><a class="read-more" href="'. esc_url( get_permalink() ) . '">Подробнее</a></div>' );
				?>
				
				</div>
				<?php
					the_post_thumbnail('full');
				?>
			</div><!-- .entry-content -->
		</article><!-- #post-## -->
	</div><!-- .col-lg-12 -->
</div><!-- .row -->
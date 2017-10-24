<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package elite_mebel
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php
			if( has_post_thumbnail() )
				the_post_thumbnail('thumbnail');
			else
				echo "<img src='".get_template_directory_uri()."/img/placeholder.png' class='img-circle'>";
		?>
		<?php
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->

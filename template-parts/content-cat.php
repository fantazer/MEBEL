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
</article><!-- #post-## -->

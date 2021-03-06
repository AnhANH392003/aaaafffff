<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage EmallShop
 * @since EmallShop 1.0
 */

$column_grid= emallshop_get_option('blog-page-show-column','two');

if (isset($GLOBALS['emall_blog_columns']))
    $column_grid = $GLOBALS['emall_blog_columns'];

$column_class='col-xs-12 col-sm-6';
if($column_grid== 'three'):
	$column_class='col-xs-12 col-sm-6 col-md-4';
elseif($column_grid== 'four'):
	$column_class='col-xs-12 col-sm-6 col-md-3';
endif; ?>
	
<div class="<?php echo esc_attr($column_class);?>">
	<article id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>
	   
		<?php if( emallshop_get_option('show-blogs-thumbnail', 1) ==1):
			// Post thumbnail.
			emallshop_get_post_thumbnail('medium');
		endif; ?>
		
		<div class="entry-date">
			<span class="entry-day"><?php  echo get_the_time('d');?></span>
			<span class="entry-month"><?php  echo get_the_time('M');?></span>
		</div>
		<header class="entry-header">
			<?php
				the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			?>
		</header><!-- .entry-header -->
		
		<?php if(emallshop_get_option('show-postmeta', 1)==1):?>
			<footer class="entry-footer">
				<?php emallshop_entry_meta(); ?>
				<?php edit_post_link( esc_html__( 'Edit', 'emallshop' ), '<span class="edit-link">', '</span>' ); ?>
			</footer><!-- .entry-footer -->
		<?php endif;?>
		
		<div class="entry-content">

			<?php if(emallshop_get_option('show-blog-excerpt',1) ==1):
				$length=emallshop_get_option('blog-excerpt-length', 75);
				echo emallshop_excerpt($length);
			else:
				/* translators: %s: Name of current post */
				the_content( sprintf(
					esc_html__( 'Read more %s', 'emallshop' ),
					the_title( '<span class="screen-reader-text">', '</span>', false )
				) );
			endif;?>
			
		</div><!-- .entry-content -->

	</article><!-- #post-## -->
</div>

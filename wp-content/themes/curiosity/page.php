<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @file      404.php
 * @package   curiosity
 * @author    Sami Ch.
 * @link 	  http://gazpo.com
 */
?>
<?php get_header(); ?>

<div id="content">		
	
		<?php if (have_posts()) { ?>		
			<?php while (have_posts()) : the_post(); ?>
		
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
					<h2><?php the_title(); ?></h2>
					<div class="post-meta">	
							<?php if ( curiosity_get_option( 'show_page_comments' ) == 1 ) { ?>
								<span class="comments"><?php comments_popup_link( __('no comments', 'curiosity'), __( '1 comment', 'curiosity'), __('% comments', 'curiosity')); ?></span>
							<?php } ?>						
					</div><!-- /post-meta -->
			
					<div class="post-entry">
						<?php the_content(); ?>				
					</div><!-- /post-entry -->
							
				</div><!-- post -->
				
				<?php if ( curiosity_get_option( 'show_page_comments' ) == 1 ) { ?>
					<?php comments_template( '', true ); ?>
				<?php } ?>
            
			<?php endwhile; ?> 
		
			<?php if (  $wp_query->max_num_pages > 1 ) { ?>
       
				<div class="navigation">
					<div class="previous"><?php next_posts_link( __( '&#8249; Older posts', 'curiosity' ) ); ?></div>
					<div class="next"><?php previous_posts_link( __( 'Newer posts &#8250;', 'curiosity' ) ); ?></div>
				</div>
			<?php } ?>
		
		<?php } else { ?>
			
			<div id="post-0" class="post">
				<h2><?php _e( 'Nothing Found', 'curiosity' ); ?></h2>
				<p><?php _e('Apologies, but no results were found for the requested archive. Perhaps searching will help.', 'curiosity'); ?></p>			
				<?php get_search_form(); ?>	
			</div>
		
		<?php } ?> <!-- /have_posts -->		
		
</div><!-- /content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
<?php global $theme; ?>
    
    <div <?php post_class('post clearfix'); ?> id="post-<?php the_ID(); ?>">
    
        <h2 class="title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'themater' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
        
        <div class="postmeta-primary clearfix">
    
            <div class="alignleft">
                <span class="meta_date"><?php the_time($theme->get_option('dateformat')); ?></span>
            </div>
            
            <?php if(comments_open( get_the_ID() ))  {
                    ?><div class="alignright"><span class="meta_comments"><?php comments_popup_link( __( 'No comments', 'themater' ), __( '1 Comment', 'themater' ), __( '% Comments', 'themater' ) ); ?></span></div><?php
                }
                ?> 
        </div>
        
        <div class="entry clearfix">
            
            <?php
                if(has_post_thumbnail())  {
                    ?><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(
                        array($theme->get_option('featured_image_width'), $theme->get_option('featured_image_height')),
                        array("class" => $theme->get_option('featured_image_position') . " featured_image")
                    ); ?></a><?php  
                }
            ?>
            
            <?php
                the_content('');
            ?>

        </div>
        
        <?php if($theme->display('read_more')) { ?>
        <div class="readmore">
            <a href="<?php the_permalink(); ?>#more-<?php the_ID(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'themater' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php $theme->option('read_more'); ?></a>
        </div>
        <?php } ?>
        
    </div><!-- Post ID <?php the_ID(); ?> -->
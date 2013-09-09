<?php global $theme, $third_class; ?>
    
    <div <?php post_class('post clearfix homepage-posts ' . $third_class); ?> id="post-<?php the_ID(); ?>">
    
        <?php
            if(has_post_thumbnail())  {
                ?><div class="featured_image-container"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(
                    array(278, 999),
                    array("class" => "aligncenter featured_image")
                ); ?></a></div><?php  
            }
        ?>
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
                echo $theme->shorten(get_the_excerpt(), 25);
            ?>

        </div>
        
        <?php if($theme->display('read_more')) { ?>
        <div class="readmore">
            <a href="<?php the_permalink(); ?>#more-<?php the_ID(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'themater' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php $theme->option('read_more'); ?></a>
        </div>
        <?php } ?>
        
    </div><!-- Post ID <?php the_ID(); ?> -->
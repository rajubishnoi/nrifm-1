<?php global $theme; get_header(); ?>

    <div id="main">
    
        <?php $theme->hook('main_before'); ?>

        <div id="content-homepage">
        
            <?php $theme->hook('content_before'); ?>
            
            <?php 
                $is_third = 0;
                if (have_posts()) : while (have_posts()) : the_post();
                    $is_third++;
                    if($is_third == '3') {
                        $third_class = 'homepage-posts-last';
                        $is_third = 0;
                    } else {
                        $third_class = '';
                    }
                    /**
                     * The default post formatting from the post-homepage.php template file will be used.
                     * Learn more about the get_template_part() function: http://codex.wordpress.org/Function_Reference/get_template_part
                     */

                    get_template_part('post', 'homepage');
                    
                endwhile;
                
                else :
                    get_template_part('post', 'noresults');
                endif; 
                
                get_template_part('navigation');
            ?>
            
            <?php $theme->hook('content_after'); ?>
        
        </div><!-- #content -->
        
        <?php $theme->hook('main_after'); ?>
        
    </div><!-- #main -->
    
<?php get_footer(); ?>
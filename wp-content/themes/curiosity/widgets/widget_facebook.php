<?php
/*
 * Plugin Name: Facebook Likebox widget
 * Plugin URI: http://gazpo.com
 * Description: A widget to display facebook like box.
 * Version: 1.0
 * Author: Sami Ch.
 * Author URI: http://gazpo.com
 */

add_action( 'widgets_init', 'max_magazine_facebook_widgets' );

function max_magazine_facebook_widgets() {
	register_widget( 'max_magazine_facebook_widget' );
}

class max_magazine_facebook_widget extends WP_Widget {

function max_magazine_facebook_widget() {
	
		/* Widget settings */
		$widget_ops = array( 'classname' => 'widget_facebook', 'description' => __('A widget to display your facebook like box.', 'curiosity') );

		/* Create the widget */
		$this->WP_Widget( 'max_magazine_facebook_widget', __('Max: Facebook Likebox', 'curiosity'), $widget_ops );
	}
	
function widget( $args, $instance ) {
		extract( $args );
		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$fburl = $instance['fburl'];
		
		echo $before_widget;

		if ( $title )
			echo $before_title . $title . $after_title;		
	?>
		<iframe src="http://www.facebook.com/plugins/likebox.php?href=<?php echo $fburl; ?>&amp;width=270&amp;colorscheme=light&amp;show_faces=true&amp;border_color=white&amp;stream=false&amp;header=false&amp;height=330" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:270px; height:330px;"></iframe>       
        <?php
		echo $after_widget;
	}
	
function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['fburl'] = $new_instance['fburl'];		
		return $instance;
	}

	function form( $instance ) {
	
		/* default widget settings. */
		$defaults = array(
		'title' => '',
		'fburl' => "http://www.facebook.com/pages/Gazpocom/182192741803165"		
		);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'curiosity') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'fburl' ); ?>"><?php _e('Facebook URL:', 'max-mag') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'fburl' ); ?>" name="<?php echo $this->get_field_name( 'fburl' ); ?>" value="<?php echo $instance['fburl']; ?>" />
		</p>
		
	<?php
	}
}

?>
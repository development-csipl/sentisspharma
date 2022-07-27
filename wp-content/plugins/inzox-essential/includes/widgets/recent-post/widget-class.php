<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * recent post widget
 */
class Inzox_Recent_Post extends WP_Widget {

	function __construct() {

		$widget_opt = array(
			'classname'		 => 'inzox-widget',
			'description'	 => esc_html__('Recent post with thumbnail','inzox-essential')
		);

		parent::__construct( 'xs-recent-post', esc_html__( 'Inzox recent post', 'inzox-essential' ), $widget_opt );
	}

	function widget( $args, $instance ) {

		global $wp_query;

		echo inzox_return($args[ 'before_widget' ]);

		if ( !empty( $instance[ 'title' ] ) ) {

			echo inzox_return($args[ 'before_title' ]) . apply_filters( 'widget_title', $instance[ 'title' ] ) . inzox_return($args[ 'after_title' ]);

		}
		$post_title_crop 	= (!isset($instance['post_title_crop'])? '10': $instance['post_title_crop']);

		if ( !empty( $instance[ 'number_of_posts' ] ) ) {
			$no_of_post = $instance[ 'number_of_posts' ];
		} else {
			$no_of_post = 3;
		}
	
		$query = array(
			'post_type'		 => array( 'post' ),
			'post_status'	 => array( 'publish' ),
			'orderby'		 => 'date',
			'order'			 => 'DESC',
			'posts_per_page' => $no_of_post
		);  

		$loop = new WP_Query( $query );
		?>
		<div class="widget-posts recent-post-widget">
			<?php
			if ( $loop->have_posts() ):
				while ( $loop->have_posts() ):
					$loop->the_post();
					?>
					<div class="widget-post media">
						<?php
							$thumbnail	 = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), '' );
							
							if ( function_exists( 'fw_resize' ) ) {
								$img  = fw_resize( $thumbnail[ 0 ], 350, 200,true );
							}else{
								$img = $thumbnail[ 0 ];
							}
							echo '<a href="'.get_the_permalink().'"><img src="' . esc_url( $img ) . '" alt="' . esc_attr__('thumb','inzox-essential') . '"></a>';
							?>
						<div class="media-body">
						
							<h5 class="entry-title">
								<a href="<?php echo get_the_permalink(); ?>" ><?php echo esc_html(wp_trim_words(get_the_title(), $post_title_crop,'')); ?></a>

							</h5>
							<div class="post-meta">
								<span class="post-meta-date"> 
									<?php echo get_the_date(get_option('date_format')); ?>
								</span>
							</div>
						</div>
					</div>

				<?php endwhile; ?>
			<?php else: ?>
				<div class="nopost_message">
					<p><?php echo esc_html__( 'No post avainable', 'inzox-essential' ) ?></p>';
				</div>
			<?php endif; ?>  
			</div>
		<?php
		wp_reset_postdata();
		echo inzox_return($args[ 'after_widget' ]);
	}

	function update( $new_instance, $old_instance ) {

		$old_instance[ 'title' ]			 = strip_tags( $new_instance[ 'title' ] );
		$old_instance[ 'number_of_posts' ] = $new_instance[ 'number_of_posts' ];
		$old_instance['post_title_crop'] 	=  $new_instance['post_title_crop'];


		return $old_instance;
	}

	function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		} else {
			$title = esc_html__( 'Recent posts', 'inzox-essential' );
		}
		if ( isset( $instance[ 'number_of_posts' ] ) ) {
			$no_of_post = $instance[ 'number_of_posts' ];
		} else {
			$no_of_post = 3;
		}
		if ( isset( $instance[ 'post_title_crop' ] ) ) {
			$post_title_crop = $instance[ 'post_title_crop' ];
		} else {
			$post_title_crop = 7;
		}
		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title:', 'inzox-essential' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'number_of_posts' ) ); ?>"><?php esc_html_e( 'Number of posts:', 'inzox-essential' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'number_of_posts' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'number_of_posts' ) ); ?>" type="text" value="<?php echo esc_attr( $no_of_post ); ?>" />
		</p>
		      <!-- Post Title Crop-->
				<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'post_title_crop' ) ); ?>"><?php esc_html_e('Post Title Crop:', 'inzox-essential'); ?></label>
			<input  type="text" class="widefat" id="<?php print $this->get_field_id( 'post_title_crop' ); ?>" name="<?php print $this->get_field_name( 'post_title_crop' ); ?>" value="<?php echo esc_attr( $post_title_crop ); ?>"  />
		</p>

		<?php
	}

}

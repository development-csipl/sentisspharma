<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * social widget
 */
class Inzox_Service_Hour extends WP_Widget {

	function __construct() {
		$widget_opt = array(
			'classname'		 => 'inzox-widget',
			'description'	 => esc_html__('Inzox Service Hour','inzox-essential')
		);

		parent::__construct( 'xs-service', esc_html__( 'Inzox Service Hour', 'inzox-essential' ), $widget_opt );
	}

	function widget( $args, $instance ) {
		global $wp_query;

		echo wp_kses_post( $args[ 'before_widget' ] );
		if ( !empty( $instance[ 'title' ] ) ) {

			echo wp_kses_post( $args[ 'before_title' ] ) . apply_filters( 'widget_title', $instance[ 'title' ] ) . wp_kses_post( $args[ 'after_title' ] );
		}

		$saturday			 = '';
		$sunday			    = '';
		$monday				 = '';
		$tuesday			    = '';
		$wednesday			 = '';
		$thursday			 = '';
		$friday			    = '';
		


		if ( isset( $instance[ 'saturday' ] ) ) {
			$saturday = $instance[ 'saturday' ];
		}
		if ( isset( $instance[ 'sunday' ] ) ) {
			$sunday = $instance[ 'sunday' ];
		}
		if ( isset( $instance[ 'monday' ] ) ) {
			$monday = $instance[ 'monday' ];

		}
		if ( isset( $instance[ 'tuesday' ] ) ) {
			$tuesday = $instance[ 'tuesday' ];
		}
		if ( isset( $instance[ 'wednesday' ] ) ) {
			$wednesday = $instance[ 'wednesday' ];
		}
		if ( isset( $instance[ 'thursday' ] ) ) {
			$thursday = $instance[ 'thursday' ];
		}
	
		if ( isset( $instance[ 'friday' ] ) ) {
			$friday = $instance[ 'friday' ];
		}
		
	
		?>
	
	     <ul class="unstyled service-time">
	     	       	<?php if ( $monday != '' ): ?>
                     <li>
                        <span> <?php echo esc_html__("Monday",'inzox-essential'); ?> </span>
                        <span><?php echo esc_html( $monday ); ?></span>
                     </li>
                     <?php endif; ?>
                   	<?php if ( $tuesday != '' ): ?>
                     <li>
                        <span> <?php echo esc_html__("Tuesday",'inzox-essential'); ?> </span>
                        <span><?php echo esc_html( $tuesday ); ?></span>
                     </li>
                     <?php endif; ?>
                     	<?php if ( $wednesday != '' ): ?>
                     <li>
                        <span> <?php echo esc_html__("Wednesday",'inzox-essential'); ?> </span>
                        <span><?php echo esc_html( $wednesday ); ?></span>
                     </li>
                     <?php endif; ?>
                     	<?php if ( $thursday != '' ): ?>
                     <li>
                        <span><?php echo esc_html__("Thursday",'inzox-essential'); ?>  </span>
                        <span><?php echo esc_html( $thursday ); ?></span>
                     </li>
                     <?php endif; ?>
                     	<?php if ( $friday != '' ): ?>
                     <li>
                        <span> <?php echo esc_html__("Friday",'inzox-essential'); ?> </span>
                        <span><?php echo esc_html( $friday ); ?></span>
                     </li>
                     <?php endif; ?>

                     <?php if ( $saturday != '' ): ?>
                     <li>
                        <span>  <?php echo esc_html__("Saturday",'inzox-essential'); ?></span>
                        <span>  <?php echo esc_html( $saturday ); ?></span>
                     </li>
                     <?php endif; ?>

                     <?php if ( $sunday != '' ): ?>
                     <li>
                        <span> <?php echo esc_html__("Sunday",'inzox-essential'); ?> </span>
                        <span><?php echo esc_html( $sunday ); ?></span>
                     </li>
                     <?php endif; ?>

                  
                  </ul> <!-- Service Time -->


		<?php
		echo wp_kses_post( $args[ 'after_widget' ] );
	}

	function update( $old_instance, $new_instance ) {
		$new_instance[ 'title' ]			    = strip_tags( $old_instance[ 'title' ] );
		$new_instance[ 'saturday' ]			 = $old_instance[ 'saturday' ];
		$new_instance[ 'sunday' ]			    = $old_instance[ 'sunday' ];
		$new_instance[ 'monday' ]			    = $old_instance[ 'monday' ];
		$new_instance[ 'tuesday' ]		       = $old_instance[ 'tuesday' ];
		$new_instance[ 'wednesday' ]			 = $old_instance[ 'wednesday' ];
		$new_instance[ 'thursday' ]			 = $old_instance[ 'thursday' ];
		$new_instance[ 'friday' ]			    = $old_instance[ 'friday' ];
		
	
		return $new_instance;
	}

	function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		} else {
			$title = esc_html__( 'Service hour', 'inzox-essential' );
		}

		$saturday			 = '';
		$sunday			    = '';
		$monday				 = '';
		$tuesday			    = '';
		$wednesday			 = '';
		$thursday			 = '';
		$friday			    = '';
	
		$service_alignment	 = 'Center';

		if ( isset( $instance[ 'saturday' ] ) ) {
			$saturday = $instance[ 'saturday' ];
		}
		if ( isset( $instance[ 'sunday' ] ) ) {
			$sunday = $instance[ 'sunday' ];
		}
		if ( isset( $instance[ 'monday' ] ) ) {
			$monday = $instance[ 'monday' ];
		}
		if ( isset( $instance[ 'tuesday' ] ) ) {
			$tuesday = $instance[ 'tuesday' ];
		}
		if ( isset( $instance[ 'wednesday' ] ) ) {
			$wednesday = $instance[ 'wednesday' ];
		}
		if ( isset( $instance[ 'thursday' ] ) ) {
			$thursday = $instance[ 'thursday' ];
		}
		if ( isset( $instance[ 'friday' ] ) ) {
			$friday = $instance[ 'friday' ];
		}
	
	

		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title', 'inzox-essential' ).': '; ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'saturday' ) ); ?>"><?php esc_html_e( 'Saturday', 'inzox-essential' ).':'; ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'saturday' ) ); ?>" 
				   name="<?php echo esc_attr( $this->get_field_name( 'saturday' ) ); ?>" type="text" 
				   value="<?php echo esc_attr( $saturday ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'sunday' ) ); ?>"><?php esc_html_e( 'Sunday', 'inzox-essential' ).':'; ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'sunday' ) ); ?>" 
				   name="<?php echo esc_attr( $this->get_field_name( 'sunday' ) ); ?>" type="text" 
				   value="<?php echo esc_attr( $sunday ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'monday' ) ); ?>"><?php esc_html_e( 'Monday', 'inzox-essential' ).':'; ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'monday' ) ); ?>" 
				   name="<?php echo esc_attr( $this->get_field_name( 'monday' ) ); ?>" type="text" 
				   value="<?php echo esc_attr( $monday ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'tuesday' ) ); ?>"><?php esc_html_e( 'Tuesday', 'inzox-essential' ).':'; ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'tuesday' ) ); ?>" 
				   name="<?php echo esc_attr( $this->get_field_name( 'tuesday' ) ); ?>" type="text" 
				   value="<?php echo esc_attr( $tuesday ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'wednesday' ) ); ?>"><?php esc_html_e( 'Wednesday', 'inzox-essential' ).':'; ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'wednesday' ) ); ?>" 
				   name="<?php echo esc_attr( $this->get_field_name( 'wednesday' ) ); ?>" type="text" 
				   value="<?php echo esc_attr( $wednesday ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'thursday' ) ); ?>"><?php esc_html_e( 'Thursday', 'inzox-essential' ).':'; ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'thursday' ) ); ?>" 
				   name="<?php echo esc_attr( $this->get_field_name( 'thursday' ) ); ?>" type="text" 
				   value="<?php echo esc_attr( $thursday ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'friday' ) ); ?>"><?php esc_html_e( 'Friday', 'inzox-essential' ).':'; ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'friday' ) ); ?>" 
				   name="<?php echo esc_attr( $this->get_field_name( 'friday' ) ); ?>" type="text" 
				   value="<?php echo esc_attr( $friday ); ?>" />
		</p>


		<?php
	}

}

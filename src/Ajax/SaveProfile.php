<?php

namespace Never5\WPCarManager\Ajax;

use Never5\WPCarManager\Vehicle;

class SaveProfile extends Ajax {

	/**
	 * Constructor
	 */
	public function __construct() {
		parent::__construct( 'save_profile' );
	}

	/**
	 * AJAX callback method
	 *
	 * @return void
	 */
	public function run() {

		// return fields
		$return = array( 'success' => false, 'errors' => array() );

		try {

			// check nonce
			$this->check_nonce();

			// check if user is allowed to edit this profile
			$is_allowed = false;

			// get current user id
			if ( is_user_logged_in() ) {

				// get logged in user
				$user = wp_get_current_user();

				// make sure we've got a logged in user
				if ( false != $user ) {
					$is_allowed = true;
				}
			}

			// requester not allowed to do what they try to do
			if ( true != $is_allowed ) {
				throw new SaveProfileException( __( 'Not allowed to edit profile.', 'wp-car-manager' ), 'not-allowed' );
			}

			// check if data is posted
			if ( ! isset( $_POST['data'] ) ) {
				throw new SaveProfileException( 'No data received', 'no-data' );
			}

			// parse post data
			$data = $_POST['data'];

			/**
			 * Email validation checks
			 */
			if ( ! isset( $data['email'] ) ) {
				throw new SaveProfileException( 'Email address not set', 'no-email' );
			}

			if ( ! empty( $data['email'] ) && ! is_email( $data['email'] ) ) {
				throw new SaveProfileException( 'Email address is not correct', 'bad-email' );
			}

			/**
			* Location valodation checks	
			*/
			if( ! isset( $data['location'] ) ){
				throw new SaveProfileException( 'Location not set', 'no-location' );
			}

			/**
			 * Phone validation checks
			 */
			if ( ! isset( $data['phone_name'] ) ) {
				throw new SaveProfileException( 'Phone name not set', 'no-phone' );
			}
			if ( ! isset( $data['phone'] ) ) {
				throw new SaveProfileException( 'Phone not set', 'no-phone' );
			}
			if ( ! isset( $data['phone_name_02'] ) ) {
				throw new SaveProfileException( 'Phone name not set', 'no-phone' );
			}
			if ( ! isset( $data['phone_02'] ) ) {
				throw new SaveProfileException( 'Phone not set', 'no-phone' );
			}

			/**
			* WhatsApp validation checks
			*/
			if ( ! isset( $data['whatsapp_name'] ) ) {
				throw new SaveProfileException( 'WhatsApp name not set', 'no-phone' );
			}

			if ( ! isset( $data['whatsapp_01'] ) ) {
				throw new SaveProfileException( 'WhatsApp not set', 'no-phone' );
			}

			if ( ! isset( $data['whatsapp_name_02'] ) ) {
				throw new SaveProfileException( 'WhatsApp name not set', 'no-phone' );
			}
			
			if ( ! isset( $data['whatsapp_02'] ) ) {
				throw new SaveProfileException( 'WhatsApp not set', 'no-phone' );
			}

			if ( ! isset( $data['whatsapp_name_03'] ) ) {
				throw new SaveProfileException( 'WhatsApp name not set', 'no-phone' );
			}
			
			if ( ! isset( $data['whatsapp_03'] ) ) {
				throw new SaveProfileException( 'WhatsApp not set', 'no-phone' );
			}



			/**
			 * Data sanitization
			 */
			$data['email'] 				= trim( $data['email'] );
			$data['location'] 			= trim( $data['location'] );
			$data['phone_name'] 		= trim( $data['phone_name'] );
			$data['phone'] 				= trim( $data['phone'] );
			$data['phone_name_02'] 		= trim( $data['phone_name_02'] );
			$data['phone_02'] 			= trim( $data['phone_02'] );
			
			$data['whatsapp_name'] 		= trim( $data['whatsapp_name'] );
			$data['whatsapp_01'] 		= trim( $data['whatsapp_01'] );
			$data['whatsapp_name_02']   = trim( $data['whatsapp_name_02'] );
			$data['whatsapp_02'] 		= trim( $data['whatsapp_02'] );
			$data['whatsapp_name_03'] 	= trim( $data['whatsapp_name_03'] );
			$data['whatsapp_03'] 		= trim( $data['whatsapp_03'] );

			/**
			 * Data Persisting
			 */
			update_user_meta( $user->ID, 'wpcm_email', $data['email'] );
			update_user_meta( $user->ID, 'wpcm_location', $data['location']);
			
			update_user_meta( $user->ID, 'wpcm_phone_name', $data['phone_name'] );
			update_user_meta( $user->ID, 'wpcm_phone', $data['phone'] );
			update_user_meta( $user->ID, 'wpcm_phone_name_02', $data['phone_name_02'] );
			update_user_meta( $user->ID, 'wpcm_phone_02', $data['phone_02']);

			update_user_meta( $user->ID, 'wpcm_whatsapp_name', $data['whatsapp_name'] );
			update_user_meta( $user->ID, 'wpcm_whatsapp_01', $data['whatsapp_01'] );
			update_user_meta( $user->ID, 'wpcm_whatsapp_name_02', $data['whatsapp_name_02'] );
			update_user_meta( $user->ID, 'wpcm_whatsapp_02', $data['whatsapp_02'] );
			update_user_meta( $user->ID, 'wpcm_whatsapp_name_03', $data['whatsapp_name_03'] );
			update_user_meta( $user->ID, 'wpcm_whatsapp_03', $data['whatsapp_03'] );

			/**
			 * Return statement
			 */
			$return['success'] = true;
			$return['data']    = array(
				'email' 			=> esc_html( $data['email'] ),
				'location' 			=> esc_html( $data['location']),
				'phone_name' 		=> esc_html( $data['phone_name'] ),
				'phone' 			=> esc_html( $data['phone'] ),
				'phone_name_02' 	=> esc_html( $data['phone_name_02'] ),
				'phone_02' 			=> esc_html( $data['phone_02'] ),
				'whatsapp_name' 	=> esc_html( $data['whatsapp_name'] ),
				'whatsapp_01' 		=> esc_html( $data['whatsapp_01'] ),
				'whatsapp_name_02' 	=> esc_html( $data['whatsapp_name_02'] ),
				'whatsapp_02' 		=> esc_html( $data['whatsapp_02'] ),
				'whatsapp_name_03' 	=> esc_html( $data['whatsapp_name_03'] ),
				'whatsapp_03'    	=> esc_html( $data['whatsapp_03'] )
			);

		} catch ( SaveProfileException $e ) {
			$return['success'] = false;
			$return['errors']  = array(
				'id'  => $e->getId(),
				'msg' => $e->getMessage()
			);
		}

		// send JSON
		wp_send_json( $return );

		// bye
		exit;
	}

}
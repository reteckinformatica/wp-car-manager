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
			if ( ! isset( $data['phone'] ) ) {
				throw new SaveProfileException( 'Phone not set', 'no-phone' );
			}

			if ( ! isset( $data['whatsapp'] ) ) {
				throw new SaveProfileException( 'WhatsApp not set', 'no-phone' );
			}
			
			if ( ! isset( $data['phone2'] ) ) {
				throw new SaveProfileException( 'Phone2 not set', 'no-phone' );
			}

			if ( ! isset( $data['phone3'] ) ) {
				throw new SaveProfileException( 'Phone3 not set', 'no-phone' );
			}

			/**
			 * Data sanitization
			 */
			$data['email'] = trim( $data['email'] );
			$data['location'] = trim( $data['location'] );
			$data['phone'] = trim( $data['phone'] );
			$data['whatsapp'] = trim( $data['whatsapp'] );
			$data['phone2'] = trim( $data['phone2'] );
			$data['phone3'] = trim( $data['phone3'] );

			/**
			 * Data Persisting
			 */
			update_user_meta( $user->ID, 'wpcm_email', $data['email'] );
			update_user_meta( $user->ID, 'wpcm_location', $data['location']);
			update_user_meta( $user->ID, 'wpcm_phone', $data['phone'] );
			update_user_meta( $user->ID, 'wpcm_whatsapp', $data['whatsapp'] );
			update_user_meta( $user->ID, 'wpcm_phone2', $data['phone2'] );
			update_user_meta( $user->ID, 'wpcm_phone3', $data['phone3']);

			/**
			 * Return statement
			 */
			$return['success'] = true;
			$return['data']    = array(
				'email' 	=> esc_html( $data['email'] ),
				'location' 	=> esc_html( $data['location']),
				'phone' 	=> esc_html( $data['phone'] ),
				'whatsapp' 	=> esc_html( $data['whatsapp'] ),
				'phone2' 	=> esc_html( $data['phone2'] ),
				'phone3'  	=> esc_html( $data['phone3'] )
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
<?php
/**
 * Checkout Files Upload - Section Settings
 *
 * @version 1.0.0
 * @since   1.0.0
 * @author  Algoritmika Ltd.
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! class_exists( 'Alg_WC_Checkout_Files_Upload_Settings_Section' ) ) :

class Alg_WC_Checkout_Files_Upload_Settings_Section {

	/**
	 * Constructor.
	 *
	 * @version 1.0.0
	 * @since   1.0.0
	 */
	public function __construct() {
		add_filter( 'woocommerce_get_sections_alg_wc_checkout_files_upload',              array( $this, 'settings_section' ) );
		add_filter( 'woocommerce_get_settings_alg_wc_checkout_files_upload_' . $this->id, array( $this, 'get_settings' ), PHP_INT_MAX );
	}

	/**
	 * settings_section.
	 *
	 * @version 1.0.0
	 * @since   1.0.0
	 */
	function settings_section( $sections ) {
		$sections[ $this->id ] = $this->desc;
		return $sections;
	}

}

endif;
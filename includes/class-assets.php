<?php
/**
 * Assets class.
 *
 * @package Plance\Plugin\Light_Code_Block
 */

namespace Plance\Plugin\Light_Code_Block;

defined( 'ABSPATH' ) || exit;

use const Plance\Plugin\Light_Code_Block\URL;
use const Plance\Plugin\Light_Code_Block\VERSION;
use Plance\Plugin\Light_Code_Block\Singleton;

/**
 * Assets class.
 */
class Assets {
	use Singleton;

	/**
	 * Init.
	 *
	 * @return void
	 */
	protected function init() {
		add_action( 'admin_enqueue_scripts', array( $this, 'admin_enqueue_scripts' ) );
	}

	/**
	 * Hook: admin_enqueue_scripts.
	 *
	 * @return void
	 */
	public function admin_enqueue_scripts() {
		wp_register_script( 'light-code-block', '', array(), true, true );

		$translations = array(
			'popup_title' => __( 'Light Code Block', 'light-code-block' ),
		);

		wp_localize_script( 'light-code-block', 'localizePlanceSimpleCodeBlock', $translations );
		wp_enqueue_script( 'light-code-block' );
	}
}

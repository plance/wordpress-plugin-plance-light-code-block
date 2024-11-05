<?php
/**
 * Textdomain class.
 *
 * @package Plance\Plugin\Simple_Code_Block
 */

namespace Plance\Plugin\Simple_Code_Block;

defined( 'ABSPATH' ) || exit;

use Plance\Plugin\Simple_Code_Block\Singleton;

/**
 * Textdomain class.
 */
class Textdomain {
	use Singleton;

	/**
	 * Init.
	 *
	 * @return void
	 */
	protected function init() {
		load_plugin_textdomain( 'plance-simple-code-block', false, '/plance-simple-code-block/languages' );
	}
}

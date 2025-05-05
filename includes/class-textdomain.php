<?php
/**
 * Textdomain class.
 *
 * @package Plance\Plugin\Light_Code_Block
 */

namespace Plance\Plugin\Light_Code_Block;

defined( 'ABSPATH' ) || exit;

use Plance\Plugin\Light_Code_Block\Singleton;

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
		load_plugin_textdomain( 'light-code-block', false, '/light-code-block/languages' );
	}
}

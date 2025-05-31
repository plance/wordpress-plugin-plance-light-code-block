<?php
/**
 * Tinymce class.
 *
 * @package Plance\Plugin\Light_Code_Block
 */

namespace Plance\Plugin\Light_Code_Block;

defined( 'ABSPATH' ) || exit;

use const Plance\Plugin\Light_Code_Block\URL;
use const Plance\Plugin\Light_Code_Block\VERSION;
use Plance\Plugin\Light_Code_Block\Singleton;

/**
 * Tinymce class.
 */
class Tinymce {
	use Singleton;

	/**
	 * Init.
	 *
	 * @return void
	 */
	protected function init() {
		add_filter( 'init', array( $this, 'run' ) );
		add_filter( 'mce_external_plugins', array( $this, 'mce_external_plugins' ) );
		add_filter( 'mce_buttons', array( $this, 'mce_buttons' ) );
	}

	/**
	 * Run.
	 *
	 * @return void
	 */
	public function run() {
		add_editor_style( URL . '/assets/css/tinymce.css?v=' . VERSION );
	}

	/**
	 * Hook: mce_external_plugins.
	 *
	 * @param  array $plugins Plugins.
	 * @return array
	 */
	public function mce_external_plugins( $plugins ) {
		$plugins['plance_light_code_block'] = URL . '/assets/js/tinymce.js?v=' . VERSION;

		return $plugins;
	}

	/**
	 * Hook: mce_buttons.
	 *
	 * @param  array $buttons Buttons.
	 * @return array
	 */
	public function mce_buttons( $buttons ) {
		$buttons[] = 'btn_light_code_block';

		return $buttons;
	}
}

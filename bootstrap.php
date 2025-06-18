<?php
/**
 * Bootstrap.
 *
 * @package Plance\Plugin\Light_Code_Block
 */

namespace Plance\Plugin\Light_Code_Block;

defined( 'ABSPATH' ) || exit;


const PATH    = __DIR__;
const VERSION = '1.0.1';

define( 'PLANCE_PLUGIN_LIGHT_CODE_BLOCK_URL', rtrim( plugin_dir_url( __FILE__ ), '/' ) );


/**
 * Autoload plugin classes.
 */
spl_autoload_register(
	function ( $class ) { // phpcs:ignore
		if ( strpos( $class, __NAMESPACE__ . '\\' ) !== 0 ) {
			return;
		}

		$class     = str_replace( __NAMESPACE__ . '\\', '', $class );
		$class     = str_replace( '_', '-', strtolower( $class ) );
		$folders   = explode( '\\', $class );
		$classname = array_pop( $folders );

		$path = '';
		if ( ! empty( $folders ) ) {
			$path = join( DIRECTORY_SEPARATOR, $folders ) . DIRECTORY_SEPARATOR;
		}

		$prefixes = array( 'class' );
		foreach ( $prefixes as $prefix ) {
			$file_name = PATH . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . $path . $prefix . '-' . $classname . '.php';
			if ( file_exists( $file_name ) ) {
				require_once $file_name;
				return;
			}
		}
	}
);

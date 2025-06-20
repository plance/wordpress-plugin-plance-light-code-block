<?php
/**
 * Actions.
 *
 * @package Plance\Plugin\Light_Code_Block
 */

namespace Plance\Plugin\Light_Code_Block;

defined( 'ABSPATH' ) || exit;


use Plance\Plugin\Light_Code_Block\Assets;
use Plance\Plugin\Light_Code_Block\Tinymce;


add_action( 'plugins_loaded', array( Assets::class, 'instance' ) );
add_action( 'plugins_loaded', array( Tinymce::class, 'instance' ) );

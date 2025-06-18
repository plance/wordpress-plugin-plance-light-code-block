<?php
/**
 * Main plugin file.
 *
 * @package Plance\Plugin\Light_Code_Block
 *
 * Plugin Name: Light Code Block
 * Description: Adds a button to the TinyMCE editor to display a popup and enter code into it.
 * Plugin URI:  https://plance.top/
 * Version:     1.0.1
 * Author:      plance
 * License:     GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: light-code-block
 * Domain Path: /languages/
 */

namespace Plance\Plugin\Light_Code_Block;

defined( 'ABSPATH' ) || exit;


/**
 * Bootstrap.
 */
require __DIR__ . '/bootstrap.php';

/**
 * Actions.
 */
require __DIR__ . '/actions.php';

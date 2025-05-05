<?php
/**
 * Main plugin file.
 *
 * @package Plance\Plugin\Light_Code_Block
 *
 * Plugin Name: Light Code Block
 * Plugin URI:  https://wordpress.org/plugins/plance-redirects-for-htaccess/
 * Description: Adds a button to the TinyMCE editor to display a popup and enter code into it.
 * Version:     1.0.0
 * Author:      Pavel
 * Author URI:  https://plance.top/
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

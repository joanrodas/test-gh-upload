<?php

/**
 * @wordpress-plugin
 * Plugin Name:       TestGhUpload
 * Plugin URI:        https://sirvelia.com/
 * Description:       A WordPress plugin made with PLUBO.
 * Version:           1.0.0
 * Author:            Sirvelia
 * Author URI:        https://sirvelia.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       test-gh-upload
 * Domain Path:       /languages
 * Update URI:        false
 * Requires Plugins:
 */

if (!defined('WPINC')) {
    die('YOU SHALL NOT PASS!');
}

// PLUGIN CONSTANTS
define('TEST_GH_UPLOAD_NAME', 'test-gh-upload');
define('TEST_GH_UPLOAD_VERSION', '1.0.0');
define('TEST_GH_UPLOAD_PATH', plugin_dir_path(__FILE__));
define('TEST_GH_UPLOAD_BASENAME', plugin_basename(__FILE__));
define('TEST_GH_UPLOAD_URL', plugin_dir_url(__FILE__));
define('TEST_GH_UPLOAD_ASSETS_PATH', TEST_GH_UPLOAD_PATH . 'dist/' );
define('TEST_GH_UPLOAD_ASSETS_URL', TEST_GH_UPLOAD_URL . 'dist/' );

// AUTOLOAD
if (file_exists(TEST_GH_UPLOAD_PATH . 'vendor/autoload.php')) {
    require_once TEST_GH_UPLOAD_PATH . 'vendor/autoload.php';
}

// LYFECYCLE
register_activation_hook(__FILE__, [TestGhUpload\Includes\Lyfecycle::class, 'activate']);
register_deactivation_hook(__FILE__, [TestGhUpload\Includes\Lyfecycle::class, 'deactivate']);
register_uninstall_hook(__FILE__, [TestGhUpload\Includes\Lyfecycle::class, 'uninstall']);

// LOAD ALL FILES
$loader = new TestGhUpload\Includes\Loader();

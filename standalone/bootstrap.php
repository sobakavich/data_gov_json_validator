<?

/**
 * Require this bootstrap when you run standalone scripts without Drupal
 */

require_once(__DIR__ . '/../data_gov_json_validator.module');

function composer_manager_register_autoloader()
{
    require_once(__DIR__ . '/../vendor/autoload.php');
}

class ResourceNotFoundException extends Exception {}

// debug mode on
error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors', 1);

// 30 minutes
set_time_limit(60*30);

define('JSON_SCHEMA_PATH', __DIR__.'/../schema/schema_1_0_final.json');
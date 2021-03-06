<?php

require_once '../vendor/autoload.php';
/**
 * $apiHost should be set to default unit test host for external users
 * can be overwritten with environment variable PAYMILL_TEST_API_HOST
 */
if (!defined('API_HOST') && getenv('PAYMILL_TEST_API_HOST')) {
    define('API_HOST', getenv('PAYMILL_TEST_API_HOST'));
}
defined('API_HOST') || define('API_HOST', 'https://api.paymill.com/v2/');

/**
 * $apiKey should be set to api test key
 * can be overriden with environment variable API_TEST_KEY
 */
if (!defined('API_TEST_KEY') && getenv('API_TEST_KEY')) {
    define('API_TEST_KEY', getenv('API_TEST_KEY'));
}

/**
 * SSL_VERIFY_PEER can be deactivated by environment to enable other hosts where the original certificate
 * does not match (i.e. for local development)
 * To activate, set environment variable SSL_VERIFY_PEER=false
 */
if (!defined('SSL_VERIFY_PEER') && getenv('SSL_VERIFY_PEER')) {
    define('SSL_VERIFY_PEER', getenv('SSL_VERIFY_PEER') === 'false' ? false : true);
} else {
    define('SSL_VERIFY_PEER', true);
}




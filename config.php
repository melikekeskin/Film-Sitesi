<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'filmkullanicilar');

// Application configuration
define('SITE_URL', 'http://localhost/sevims/MelikeBacımlaÖdevYapıyosssss');
define('SITE_NAME', 'Bana Film Öner');

// Security configuration
define('HASH_COST', 10); // for password_hash()
define('SESSION_LIFETIME', 3600); // 1 hour

// Error reporting
error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . '/logs/error.log');

// Create logs directory if it doesn't exist
if (!file_exists(__DIR__ . '/logs')) {
    mkdir(__DIR__ . '/logs', 0777, true);
}

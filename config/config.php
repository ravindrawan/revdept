<?php
/**
 * Configuration & Environment Settings
 * Provincial Revenue Department - North Western Province
 */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Supported languages - default is English as requested
define('DEFAULT_LANG', 'en');
define('SUPPORTED_LANGUAGES', ['en', 'si', 'ta']);

// Dynamic Base URL detection for seamless web server / subfolder deployment
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443)) ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? ''));

// Normalize base path
$basePath = rtrim($scriptDir, '/');
if (basename($basePath) === 'admin') {
    $basePath = dirname($basePath);
}
$basePath = rtrim($basePath, '/');
define('BASE_URL', $protocol . $host . $basePath);
define('BASE_PATH', $basePath);

/**
 * Helper to generate environment-agnostic URLs
 */
function base_url($path = '') {
    $path = ltrim($path, '/');
    return ($path === '') ? BASE_URL : BASE_URL . '/' . $path;
}

/**
 * Helper to generate relative URLs preserving current language
 */
function page_url($page, $lang = null) {
    global $currentLang;
    $targetLang = $lang ?? $currentLang ?? DEFAULT_LANG;
    return $page . '?lang=' . urlencode($targetLang);
}

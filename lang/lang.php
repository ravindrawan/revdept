<?php
/**
 * Language Localization Controller
 * North Western Province Revenue Department
 */

require_once __DIR__ . '/../config/config.php';

// Determine current language
if (isset($_GET['lang']) && in_array($_GET['lang'], SUPPORTED_LANGUAGES, true)) {
    $currentLang = $_GET['lang'];
    $_SESSION['site_lang'] = $currentLang;
    setcookie('site_lang', $currentLang, time() + (86400 * 30), "/");
} elseif (isset($_SESSION['site_lang']) && in_array($_SESSION['site_lang'], SUPPORTED_LANGUAGES, true)) {
    $currentLang = $_SESSION['site_lang'];
} elseif (isset($_COOKIE['site_lang']) && in_array($_COOKIE['site_lang'], SUPPORTED_LANGUAGES, true)) {
    $currentLang = $_COOKIE['site_lang'];
} else {
    $currentLang = DEFAULT_LANG;
}

// Load dictionary
$langFile = __DIR__ . '/' . $currentLang . '.php';
if (file_exists($langFile)) {
    $translations = require $langFile;
} else {
    $translations = require __DIR__ . '/en.php';
}

/**
 * Translation helper with dot-notation support
 * e.g. __('nav.home') or __('footer.rights')
 */
function __($key, $default = '') {
    global $translations;
    
    $segments = explode('.', $key);
    $current = $translations;
    
    foreach ($segments as $segment) {
        if (is_array($current) && isset($current[$segment])) {
            $current = $current[$segment];
        } else {
            return $default !== '' ? $default : $key;
        }
    }
    
    return is_string($current) ? $current : $default;
}

/**
 * Returns active language code
 */
function current_lang() {
    global $currentLang;
    return $currentLang ?? DEFAULT_LANG;
}

/**
 * Generates current URL with changed language parameter
 */
function lang_switch_url($lang) {
    $script = basename($_SERVER['PHP_SELF'] ?? 'index.php');
    $params = $_GET;
    $params['lang'] = $lang;
    return $script . '?' . http_build_query($params);
}

<?php
/**
 * Global Header Component
 * Department of Provincial Revenue - North Western Province
 */

require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../lang/lang.php';

$activeLang = current_lang();
$currentTitle = isset($pageTitle) ? $pageTitle . ' - ' . __('department_title') : __('site_title');
?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars($activeLang) ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($currentTitle) ?></title>
    
    <!-- Meta SEO & Social -->
    <meta name="description" content="Official Web Portal of the Department of Provincial Revenue, North Western Province (Wayamba), Sri Lanka.">
    <meta name="keywords" content="NWP Revenue, Wayamba Revenue, Provincial Revenue Department Kurunegala, Stamp Duty Sri Lanka, BTT Wayamba">
    
    <!-- Google Fonts for English, Sinhala & Tamil -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Sinhala:wght@400;500;600;700&family=Noto+Sans+Tamil:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>

    <!-- Top Accent Stripe -->
    <div class="top-stripe"></div>

    <!-- Language Selector Bar -->
    <div class="language-bar">
        <div class="lang-container">
            <span class="lang-label"><?= htmlspecialchars(__('common.select_language')) ?>:</span>
            <a href="<?= htmlspecialchars(lang_switch_url('en')) ?>" class="lang-tab <?= ($activeLang === 'en') ? 'active' : '' ?>">English</a>
            <a href="<?= htmlspecialchars(lang_switch_url('si')) ?>" class="lang-tab <?= ($activeLang === 'si') ? 'active' : '' ?>">සිංහල</a>
            <a href="<?= htmlspecialchars(lang_switch_url('ta')) ?>" class="lang-tab <?= ($activeLang === 'ta') ? 'active' : '' ?>">தமிழ்</a>
        </div>
    </div>

    <!-- Branding Header Section -->
    <header class="header">
        <div class="header-logo-left">
            <a href="index.php" title="<?= htmlspecialchars(__('nav.home')) ?>">
                <img src="assets/images/sl.png" alt="<?= htmlspecialchars(__('emblem_alt')) ?>">
            </a>
        </div>
        
        <div class="header-title">
            <h1><?= htmlspecialchars(__('department_title')) ?></h1>
            <h3><?= htmlspecialchars(__('province_name')) ?></h3>
        </div>
        
        <div class="header-logo-right">
            <a href="index.php" title="<?= htmlspecialchars(__('nav.home')) ?>">
                <img src="assets/images/OIP (6).png" alt="<?= htmlspecialchars(__('council_logo_alt')) ?>">
            </a>
        </div>
    </header>

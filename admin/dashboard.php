<?php
/**
 * Staff Portal - Administrative Dashboard Shell
 * Department of Provincial Revenue - North Western Province
 */

require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../lang/lang.php';

// Check session authentication
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: login.php');
    exit;
}

// Handle logout
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    unset($_SESSION['admin_logged_in']);
    unset($_SESSION['admin_user']);
    header('Location: login.php');
    exit;
}

$adminUser = $_SESSION['admin_user'] ?? 'Administrator';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Provincial Revenue Department</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
</head>
<body style="background: #f1f5f9; animation: none;">

    <header class="header" style="padding: 15px 5%;">
        <div class="header-logo-left">
            <a href="../index.php">
                <img src="../assets/images/sl.png" alt="Emblem" style="height: 55px;">
            </a>
        </div>
        <div class="header-title">
            <h1 style="font-size: 22px;">Provincial Revenue Department - Content Management Portal</h1>
            <h3 style="font-size: 14px;">Logged in as: <?= htmlspecialchars($adminUser) ?></h3>
        </div>
        <div class="header-logo-right">
            <a href="dashboard.php?action=logout" class="portal-link" style="background: #ef4444; border-color: #dc2626; color: white;">
                Log Out
            </a>
        </div>
    </header>

    <div class="container" style="margin-top: 35px;">

        <div style="background: #ffffff; border-radius: var(--radius-lg); padding: 25px 30px; box-shadow: var(--shadow-sm); margin-bottom: 25px; border-left: 5px solid var(--brand-cyan);">
            <h2 style="color: var(--primary-navy); font-size: 20px; font-weight: 700; margin-bottom: 8px;">
                Welcome to the Provincial Revenue Administration Portal
            </h2>
            <p style="color: var(--text-body); font-size: 14px; line-height: 1.6;">
                This administrative section is pre-architected to support backend CRUD operations. When you are ready to connect a MySQL database in XAMPP, this portal will manage public notices, document downloads, news announcements, and view citizen inquiries.
            </p>
        </div>

        <!-- Management Cards Grid -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px; margin-bottom: 35px;">
            
            <div class="card" style="margin-bottom: 0;">
                <h3 class="section-title" style="font-size: 18px;">Notice Board</h3>
                <p style="font-size: 14px; color: var(--text-body); margin-bottom: 16px;">
                    Update Chilaw sub-office schedules, emergency alerts, and public tax deadlines.
                </p>
                <button class="btn-download" style="width: 100%; justify-content: center; cursor: pointer; border: none;">
                    Manage Notices &rarr;
                </button>
            </div>

            <div class="card" style="margin-bottom: 0;">
                <h3 class="section-title" style="font-size: 18px;">PDF Downloads</h3>
                <p style="font-size: 14px; color: var(--text-body); margin-bottom: 16px;">
                    Upload new tax statutes, opinion forms, gazettes, and refund application forms.
                </p>
                <button class="btn-download" style="width: 100%; justify-content: center; cursor: pointer; border: none;">
                    Manage Downloads &rarr;
                </button>
            </div>

            <div class="card" style="margin-bottom: 0;">
                <h3 class="section-title" style="font-size: 18px;">News & Gallery</h3>
                <p style="font-size: 14px; color: var(--text-body); margin-bottom: 16px;">
                    Publish articles on land valuation projects, training workshops, and photo highlights.
                </p>
                <button class="btn-download" style="width: 100%; justify-content: center; cursor: pointer; border: none;">
                    Manage Articles &rarr;
                </button>
            </div>

            <div class="card" style="margin-bottom: 0;">
                <h3 class="section-title" style="font-size: 18px;">Citizen Inquiries</h3>
                <p style="font-size: 14px; color: var(--text-body); margin-bottom: 16px;">
                    Review incoming taxpayer inquiries submitted through the contact page.
                </p>
                <button class="btn-download" style="width: 100%; justify-content: center; cursor: pointer; border: none;">
                    View Inquiries &rarr;
                </button>
            </div>

        </div>

        <div style="text-align: center; margin-top: 20px;">
            <a href="../index.php" style="color: var(--brand-blue); font-weight: 600; font-size: 15px;">
                &larr; Return to Public Website
            </a>
        </div>

    </div>

</body>
</html>

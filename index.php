<?php
/**
 * Home Page
 * Department of Provincial Revenue - North Western Province
 */

$currentPage = 'home';
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/lang/lang.php';
$pageTitle = __('nav.home');

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>

<!-- Main Content Area -->
<div class="main-wrapper">
    
    <!-- Left Column (Main Content) -->
    <main>
        
        <!-- Interactive Map Section -->
        <section class="card map-container">
            <h2 class="section-title"><?= htmlspecialchars(__('home.map_title')) ?></h2>
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d506168.3242637213!2d79.800000!3d7.750000!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2ca315352c219%3A0x6e25c04e2d3126f2!2sNorth%20Western%20Province!5e0!3m2!1sen!2slk!4v1600000000000!5m2!1sen!2slk" 
                loading="lazy" 
                title="<?= htmlspecialchars(__('home.map_title')) ?>">
            </iframe>
        </section>

        <!-- Commissioner's Message Section -->
        <section class="card commissioner-box">
            <h2 class="section-title"><?= htmlspecialchars(__('home.commissioner_title')) ?></h2>
            <br>
            <div class="commissioner-img-wrapper">
                <img src="assets/images/dat.jpeg" alt="<?= htmlspecialchars(__('home.commissioner_name')) ?>" class="commissioner-img">
            </div>
            <div class="commissioner-name"><?= htmlspecialchars(__('home.commissioner_name')) ?></div>
            <div class="commissioner-title"><?= htmlspecialchars(__('home.commissioner_post')) ?></div>
            <blockquote class="message-text">
                <?= htmlspecialchars(__('home.commissioner_message')) ?>
            </blockquote>
        </section>

        <!-- Vision and Mission Section -->
        <section class="card">
            <h2 class="section-title"><?= htmlspecialchars(__('home.our_goals')) ?></h2>
            <div class="vision-mission">
                <div class="vm-card">
                    <h3>
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/></svg>
                        <?= htmlspecialchars(__('home.vision_title')) ?>
                    </h3>
                    <p><?= htmlspecialchars(__('home.vision_text')) ?></p>
                </div>
                <div class="vm-card">
                    <h3>
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
                        <?= htmlspecialchars(__('home.mission_title')) ?>
                    </h3>
                    <p><?= htmlspecialchars(__('home.mission_text')) ?></p>
                </div>
            </div>
        </section>

    </main>

    <!-- Right Column (Sidebar) -->
    <?php require_once __DIR__ . '/includes/sidebar.php'; ?>

</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

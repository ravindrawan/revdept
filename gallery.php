<?php
/**
 * News, Announcements & Gallery Page
 * Department of Provincial Revenue - North Western Province
 */

$currentPage = 'gallery';
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/lang/lang.php';
$pageTitle = __('nav.gallery');

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>

<div class="container">

    <div class="page-header">
        <h2><?= htmlspecialchars(__('gallery.page_title')) ?></h2>
        <p><?= htmlspecialchars(__('gallery.subtitle')) ?></p>
    </div>

    <!-- News Grid -->
    <div class="card">
        <h3 class="section-title"><?= htmlspecialchars(__('gallery.section_title')) ?></h3>
        
        <div class="news-grid">
            
            <!-- News Item 1: Land Values Project -->
            <article class="news-card">
                <div class="news-content">
                    <?php if (!empty(__('gallery.news_items.land_values.tag'))): ?>
                        <span class="news-tag"><?= htmlspecialchars(__('gallery.news_items.land_values.tag')) ?></span>
                    <?php endif; ?>
                    <?php if (!empty(__('gallery.news_items.land_values.date'))): ?>
                        <span class="news-date"><?= htmlspecialchars(__('gallery.news_items.land_values.date')) ?></span>
                    <?php endif; ?>
                    <h4 class="news-title"><?= htmlspecialchars(__('gallery.news_items.land_values.title')) ?></h4>
                    <p class="news-desc"><?= htmlspecialchars(__('gallery.news_items.land_values.desc')) ?></p>
                </div>
            </article>

            <!-- News Item 2: Officer Training Workshop -->
            <article class="news-card">
                <img src="assets/images/training.jpg" alt="<?= htmlspecialchars(__('gallery.news_items.training.title')) ?>" loading="lazy">
                <div class="news-content">
                    <?php if (!empty(__('gallery.news_items.training.tag'))): ?>
                        <span class="news-tag"><?= htmlspecialchars(__('gallery.news_items.training.tag')) ?></span>
                    <?php endif; ?>
                    <?php if (!empty(__('gallery.news_items.training.date'))): ?>
                        <span class="news-date"><?= htmlspecialchars(__('gallery.news_items.training.date')) ?></span>
                    <?php endif; ?>
                    <h4 class="news-title"><?= htmlspecialchars(__('gallery.news_items.training.title')) ?></h4>
                    <p class="news-desc"><?= htmlspecialchars(__('gallery.news_items.training.desc')) ?></p>
                </div>
            </article>

        </div>
    </div>

    <!-- Department Gallery Photos -->
    <div class="card">
        <h3 class="section-title"><?= htmlspecialchars(__('gallery.gallery_title')) ?></h3>
        <div class="news-grid" style="grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));">
            <div style="border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-sm);">
                <img src="assets/images/iau.jpeg" alt="Internal Affairs Unit" style="width: 100%; height: 220px; object-fit: cover;">
                <div style="padding: 12px; background: #ffffff; font-size: 13px; font-weight: 600; text-align: center; color: var(--primary-navy);">
                    <?= htmlspecialchars(__('sidebar.iau_title')) ?>
                </div>
            </div>

            <div style="border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-sm);">
                <img src="assets/images/training.jpg" alt="Training Program" style="width: 100%; height: 220px; object-fit: cover;">
                <div style="padding: 12px; background: #ffffff; font-size: 13px; font-weight: 600; text-align: center; color: var(--primary-navy);">
                    <?= htmlspecialchars(__('gallery.news_items.training.title')) ?>
                </div>
            </div>

            <div style="border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-sm);">
                <img src="assets/images/flower.jpg" alt="NWP Provincial Council Emblem" style="width: 100%; height: 220px; object-fit: cover;">
                <div style="padding: 12px; background: #ffffff; font-size: 13px; font-weight: 600; text-align: center; color: var(--primary-navy);">
                    <?= htmlspecialchars(__('province_name')) ?>
                </div>
            </div>
        </div>
    </div>

</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

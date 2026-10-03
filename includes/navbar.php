<?php
/**
 * Global Navigation Component
 * Department of Provincial Revenue - North Western Province
 */

$currentPage = $currentPage ?? 'home';
?>
<!-- Navigation Bar -->
<nav class="navbar">
    <div class="nav-container">
        
        <!-- Mobile Toggle Button -->
        <button class="mobile-toggle" id="mobileToggle" aria-label="<?= htmlspecialchars(__('nav.toggle_menu')) ?>">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <!-- Navigation Menu -->
        <ul class="nav-menu" id="navMenu">
            <!-- Home -->
            <li class="nav-item">
                <a href="index.php" class="nav-link <?= ($currentPage === 'home') ? 'active' : '' ?>">
                    <?= htmlspecialchars(__('nav.home')) ?>
                </a>
            </li>

            <!-- About Us (with Dropdown) -->
            <li class="nav-item has-dropdown">
                <a href="about.php" class="nav-link <?= ($currentPage === 'about') ? 'active' : '' ?>">
                    <span><?= htmlspecialchars(__('nav.about')) ?></span>
                    <i class="dropdown-caret"></i>
                </a>
                <div class="dropdown-menu">
                    <a href="about.php#background">1. <?= htmlspecialchars(__('nav.about_dropdown.background')) ?></a>
                    <a href="about.php#duties">2. <?= htmlspecialchars(__('nav.about_dropdown.role')) ?></a>
                    <a href="about.php#revenue">3. <?= htmlspecialchars(__('nav.about_dropdown.revenue')) ?></a>
                    <a href="about.php#chart">4. <?= htmlspecialchars(__('nav.about_dropdown.chart')) ?></a>
                    <a href="about.php#staff">5. <?= htmlspecialchars(__('nav.about_dropdown.staff')) ?></a>
                </div>
            </li>

            <!-- Taxes & Services -->
            <li class="nav-item">
                <a href="taxes.php" class="nav-link <?= ($currentPage === 'taxes') ? 'active' : '' ?>">
                    <?= htmlspecialchars(__('nav.taxes')) ?>
                </a>
            </li>

            <!-- Downloads -->
            <li class="nav-item">
                <a href="downloads.php" class="nav-link <?= ($currentPage === 'downloads') ? 'active' : '' ?>">
                    <?= htmlspecialchars(__('nav.downloads')) ?>
                </a>
            </li>

            <!-- News & Gallery -->
            <li class="nav-item">
                <a href="gallery.php" class="nav-link <?= ($currentPage === 'gallery') ? 'active' : '' ?>">
                    <?= htmlspecialchars(__('nav.gallery')) ?>
                </a>
            </li>

            <!-- Contact Us -->
            <li class="nav-item">
                <a href="contact.php" class="nav-link <?= ($currentPage === 'contact') ? 'active' : '' ?>">
                    <?= htmlspecialchars(__('nav.contact')) ?>
                </a>
            </li>
        </ul>

        <!-- Desktop Action: Staff Portal Link -->
        <div class="nav-actions">
            <a href="admin/login.php" class="portal-link">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"/></svg>
                <?= htmlspecialchars(__('nav.admin_portal')) ?>
            </a>
        </div>

    </div>
</nav>

<!-- Backdrop Overlay for Mobile Drawer -->
<div class="nav-overlay" id="navOverlay"></div>

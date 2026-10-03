<?php
/**
 * Global Sidebar Component
 * Department of Provincial Revenue - North Western Province
 */
?>
<aside class="sidebar">

    <!-- Contact Info Card -->
    <div class="sidebar-card contact-info">
        <h2 class="section-title"><?= htmlspecialchars(__('sidebar.contact_title')) ?></h2>
        <p>
            <strong><?= htmlspecialchars(__('sidebar.address_label')) ?></strong><br>
            <?= nl2br(htmlspecialchars(__('sidebar.address_value'))) ?>
        </p>
        <hr class="contact-divider">
        <p><strong><?= htmlspecialchars(__('sidebar.phone_office')) ?></strong> <?= htmlspecialchars(__('sidebar.phone_office_val')) ?></p>
        <p><strong><?= htmlspecialchars(__('sidebar.phone_commissioner')) ?></strong> <?= htmlspecialchars(__('sidebar.phone_commissioner_val')) ?></p>
        <p><strong><?= htmlspecialchars(__('sidebar.fax')) ?></strong> <?= htmlspecialchars(__('sidebar.fax_val')) ?></p>
        <p><strong><?= htmlspecialchars(__('sidebar.email')) ?></strong> <?= htmlspecialchars(__('sidebar.email_val')) ?></p>
    </div>

    <!-- Notice Board Card -->
    <div class="sidebar-card">
        <h2 class="section-title"><?= htmlspecialchars(__('sidebar.notices_title')) ?></h2>
        <div class="notice-board">
            <div class="notice-item">
                <span class="notice-badge">Notice</span><br>
                <strong><?= htmlspecialchars(__('sidebar.special_notice_title')) ?></strong><br>
                <?= htmlspecialchars(__('sidebar.special_notice_desc')) ?>
            </div>
        </div>
    </div>

    <!-- IAU Section Card -->
    <div class="sidebar-card iau-box">
        <h2 class="section-title"><?= htmlspecialchars(__('sidebar.iau_title')) ?></h2>
        <p style="font-size: 13px; color: var(--text-muted); margin-top: 4px;">
            <?= htmlspecialchars(__('sidebar.iau_desc')) ?>
        </p>
        <img src="assets/images/iau.jpeg" alt="<?= htmlspecialchars(__('sidebar.iau_title')) ?>" loading="lazy">
    </div>

    <!-- RTI (Right to Information) Card -->
    <div class="sidebar-card rti-box">
        <h2 class="section-title"><?= htmlspecialchars(__('sidebar.rti_title')) ?></h2>
        <div class="rti-details">
            <p><strong><?= htmlspecialchars(__('sidebar.rti_officer_label')) ?></strong></p>
            <p class="rti-officer-name">
                <?= htmlspecialchars(__('sidebar.rti_officer_name')) ?><br>
                <span style="font-weight: 500; font-size: 13px; color: var(--text-muted);"><?= htmlspecialchars(__('sidebar.rti_officer_designation')) ?></span><br>
                <span style="color: var(--brand-blue); font-weight: 600;"><?= htmlspecialchars(__('sidebar.rti_officer_phone')) ?></span>
            </p>
        </div>
        <a href="https://rticommission.lk" target="_blank" rel="noopener noreferrer" class="rti-link-box">
            <?= __('sidebar.rti_link_text') ?>
        </a>
    </div>

</aside>

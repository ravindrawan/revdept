<?php
/**
 * Global Footer Component
 * Department of Provincial Revenue - North Western Province
 */
?>
    <!-- Site Footer -->
    <footer class="site-footer">
        <div class="footer-top">
            
            <!-- Column 1: Department Info -->
            <div class="footer-col">
                <h4><?= htmlspecialchars(__('department_title')) ?></h4>
                <p><?= htmlspecialchars(__('footer.about_text')) ?></p>
                <p style="margin-top: 14px; font-size: 13px; color: var(--brand-emerald);">
                    <?= htmlspecialchars(__('province_name')) ?>
                </p>
            </div>

            <!-- Column 2: Quick Links -->
            <div class="footer-col">
                <h4><?= htmlspecialchars(__('footer.quick_links')) ?></h4>
                <ul class="footer-links">
                    <li><a href="index.php">&rarr; <?= htmlspecialchars(__('nav.home')) ?></a></li>
                    <li><a href="about.php">&rarr; <?= htmlspecialchars(__('nav.about')) ?></a></li>
                    <li><a href="taxes.php">&rarr; <?= htmlspecialchars(__('nav.taxes')) ?></a></li>
                    <li><a href="downloads.php">&rarr; <?= htmlspecialchars(__('nav.downloads')) ?></a></li>
                    <li><a href="gallery.php">&rarr; <?= htmlspecialchars(__('nav.gallery')) ?></a></li>
                    <li><a href="contact.php">&rarr; <?= htmlspecialchars(__('nav.contact')) ?></a></li>
                </ul>
            </div>

            <!-- Column 3: Public Services -->
            <div class="footer-col">
                <h4><?= htmlspecialchars(__('footer.public_services')) ?></h4>
                <ul class="footer-links">
                    <li><a href="downloads.php">&rarr; <?= htmlspecialchars(__('downloads.items.statute.title')) ?></a></li>
                    <li><a href="downloads.php">&rarr; <?= htmlspecialchars(__('downloads.items.opinion.title')) ?></a></li>
                    <li><a href="downloads.php">&rarr; <?= htmlspecialchars(__('downloads.items.refund.title')) ?></a></li>
                    <li><a href="taxes.php">&rarr; <?= htmlspecialchars(__('taxes.stamp_duty_title')) ?></a></li>
                    <li><a href="https://rticommission.lk" target="_blank" rel="noopener noreferrer">&rarr; RTI Commission</a></li>
                </ul>
            </div>

            <!-- Column 4: Contact Shortcuts -->
            <div class="footer-col">
                <h4><?= htmlspecialchars(__('sidebar.contact_title')) ?></h4>
                <p><?= nl2br(htmlspecialchars(__('sidebar.address_value'))) ?></p>
                <p style="margin-top: 10px;">
                    <strong><?= htmlspecialchars(__('sidebar.phone_office')) ?></strong> 037-2225771<br>
                    <strong><?= htmlspecialchars(__('sidebar.email')) ?></strong> revdepnwp@gmail.com
                </p>
            </div>

        </div>

        <!-- Copyright Bottom Strip -->
        <div class="footer-bottom">
            &copy; <?= date("Y"); ?> <?= htmlspecialchars(__('department_title')) ?> - <?= htmlspecialchars(__('province_name')) ?>. <?= htmlspecialchars(__('common.all_rights_reserved')) ?>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <div class="back-to-top" id="backToTop" title="<?= htmlspecialchars(__('common.back_to_top')) ?>">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6z"/></svg>
    </div>

    <!-- Scripts -->
    <script src="assets/js/main.js"></script>
</body>
</html>

<?php
/**
 * Contact Us Page
 * Department of Provincial Revenue - North Western Province
 */

$currentPage = 'contact';
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/lang/lang.php';
$pageTitle = __('nav.contact');

$formSubmitted = false;
if (($_SERVER['REQUEST_METHOD'] ?? '') === 'POST' && isset($_POST['send_inquiry'])) {
    $senderName = trim($_POST['name'] ?? '');
    $senderEmail = trim($_POST['email'] ?? '');
    $senderPhone = trim($_POST['phone'] ?? '');
    $senderSubject = trim($_POST['subject'] ?? '');
    $senderMessage = trim($_POST['message'] ?? '');

    if (!empty($senderName) && !empty($senderEmail) && !empty($senderMessage)) {
        $formSubmitted = true;
    }
}

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>

<div class="container">

    <div class="page-header">
        <h2><?= htmlspecialchars(__('contact.page_title')) ?></h2>
        <p><?= htmlspecialchars(__('contact.subtitle')) ?></p>
    </div>

    <div class="contact-grid">
        
        <!-- Contact Information Column -->
        <div class="contact-info-col">
            
            <!-- Head Office Card -->
            <div class="contact-card-box">
                <h3><?= htmlspecialchars(__('contact.head_office')) ?></h3>
                
                <div class="contact-card-item">
                    <div class="contact-card-icon">
                        <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                    </div>
                    <div>
                        <strong><?= htmlspecialchars(__('sidebar.address_label')) ?></strong><br>
                        <?= nl2br(htmlspecialchars(__('sidebar.address_value'))) ?>
                    </div>
                </div>

                <div class="contact-card-item">
                    <div class="contact-card-icon">
                        <svg viewBox="0 0 24 24"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                    </div>
                    <div>
                        <strong><?= htmlspecialchars(__('sidebar.phone_office')) ?></strong> 037-2225771<br>
                        <strong><?= htmlspecialchars(__('sidebar.phone_commissioner')) ?></strong> 037-2223806
                    </div>
                </div>

                <div class="contact-card-item">
                    <div class="contact-card-icon">
                        <svg viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                    </div>
                    <div>
                        <strong><?= htmlspecialchars(__('sidebar.email')) ?></strong> revdepnwp@gmail.com<br>
                        <strong><?= htmlspecialchars(__('sidebar.fax')) ?></strong> 037-2223806
                    </div>
                </div>
            </div>

            <!-- Sub Office Card -->
            <div class="contact-card-box">
                <h3><?= htmlspecialchars(__('contact.sub_office')) ?></h3>
                <p style="margin-bottom: 8px;">
                    <strong><?= htmlspecialchars(__('sidebar.address_label')) ?></strong><br>
                    <?= htmlspecialchars(__('contact.sub_office_address')) ?>
                </p>
                <p style="font-size: 13px; color: var(--brand-blue); font-weight: 600;">
                    <?= htmlspecialchars(__('sidebar.special_notice_desc')) ?>
                </p>
            </div>

            <!-- Operating Hours Card -->
            <div class="contact-card-box">
                <h4 style="color: var(--primary-blue); font-size: 16px; margin-bottom: 6px;">
                    <?= htmlspecialchars(__('contact.operating_hours')) ?>
                </h4>
                <p style="color: var(--text-body); font-size: 14px;">
                    <?= htmlspecialchars(__('contact.hours_value')) ?>
                </p>
            </div>

            <!-- Embedded Map -->
            <div class="map-container" style="border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-sm);">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.5134769062325!2d80.36440267576575!3d7.488059811440755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae33a1e2bf65d83%3A0x7d0186326e5a40b9!2sProvincial%20Council%20Office%20Complex%2C%20Kurunegala!5e0!3m2!1sen!2slk!4v1694000000000!5m2!1sen!2slk"
                    width="100%" 
                    height="280" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade"
                    title="NWP Revenue Department Location">
                </iframe>
            </div>

        </div>

        <!-- Inquiry Form Column -->
        <div class="contact-form-col">
            <div class="form-card">
                <h3><?= htmlspecialchars(__('contact.form_title')) ?></h3>

                <?php if ($formSubmitted): ?>
                    <div class="alert-success">
                        <?= htmlspecialchars(__('contact.form.success_msg')) ?>
                    </div>
                <?php endif; ?>

                <form action="contact.php" method="POST" id="inquiryForm">
                    <div class="form-group">
                        <label for="contactName"><?= htmlspecialchars(__('contact.form.name')) ?> *</label>
                        <input type="text" name="name" id="contactName" class="form-control" required placeholder="e.g. K.M. Perera">
                    </div>

                    <div class="form-group">
                        <label for="contactEmail"><?= htmlspecialchars(__('contact.form.email')) ?> *</label>
                        <input type="email" name="email" id="contactEmail" class="form-control" required placeholder="e.g. name@example.com">
                    </div>

                    <div class="form-group">
                        <label for="contactPhone"><?= htmlspecialchars(__('contact.form.phone')) ?></label>
                        <input type="tel" name="phone" id="contactPhone" class="form-control" placeholder="e.g. 077 1234567">
                    </div>

                    <div class="form-group">
                        <label for="contactSubject"><?= htmlspecialchars(__('contact.form.subject')) ?> *</label>
                        <select name="subject" id="contactSubject" class="form-control" required>
                            <option value="general"><?= htmlspecialchars(__('contact.form.subject_options.general')) ?></option>
                            <option value="stamp_duty"><?= htmlspecialchars(__('contact.form.subject_options.stamp_duty')) ?></option>
                            <option value="refund"><?= htmlspecialchars(__('contact.form.subject_options.refund')) ?></option>
                            <option value="valuation"><?= htmlspecialchars(__('contact.form.subject_options.valuation')) ?></option>
                            <option value="feedback"><?= htmlspecialchars(__('contact.form.subject_options.feedback')) ?></option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="contactMessage"><?= htmlspecialchars(__('contact.form.message')) ?> *</label>
                        <textarea name="message" id="contactMessage" class="form-control" rows="5" required placeholder="Type your inquiry or message here..."></textarea>
                    </div>

                    <button type="submit" name="send_inquiry" class="btn-primary">
                        <?= htmlspecialchars(__('contact.form.submit')) ?>
                    </button>
                </form>
            </div>
        </div>

    </div>

</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

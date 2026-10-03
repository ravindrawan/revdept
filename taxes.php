<?php
/**
 * Taxes & Statutory Services Page
 * Department of Provincial Revenue - North Western Province
 */

$currentPage = 'taxes';
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/lang/lang.php';
$pageTitle = __('nav.taxes');

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';

$lang = current_lang();
?>

<div class="container">

    <div class="page-header">
        <h2><?= htmlspecialchars(__('taxes.page_title')) ?></h2>
        <p><?= htmlspecialchars(__('site_title')) ?></p>
    </div>

    <!-- Section 1: Stamp Duty Introduction -->
    <section class="card">
        <h3 class="section-title"><?= htmlspecialchars(__('taxes.stamp_intro_title')) ?></h3>
        <p style="text-align: justify; margin-bottom: 12px;">
            <?= htmlspecialchars(__('taxes.stamp_intro_p1')) ?>
        </p>
        <p style="margin-bottom: 10px;"><?= htmlspecialchars(__('taxes.stamp_intro_p2')) ?></p>
        <ul style="padding-left: 25px; color: var(--text-body); line-height: 1.9; margin-bottom: 0;">
            <?php foreach ($translations['taxes']['stamp_intro_list'] ?? [] as $item): ?>
                <li><?= htmlspecialchars($item) ?></li>
            <?php endforeach; ?>
        </ul>
    </section>

    <!-- Section 2: Tax Rates -->
    <section class="card">
        <h3 class="section-title"><?= htmlspecialchars(__('taxes.tax_rates_title')) ?></h3>

        <div class="table-responsive">
            <table class="data-table">
                <thead>
                    <tr>
                        <th><?= htmlspecialchars(__('taxes.rate_headers.property_type')) ?></th>
                        <th><?= htmlspecialchars(__('taxes.rate_headers.limit')) ?></th>
                        <th><?= htmlspecialchars(__('taxes.rate_headers.rate')) ?></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Sale and Transfer of Immovable Property -->
                    <tr>
                        <td rowspan="2"><strong><?= htmlspecialchars(__('taxes.rates_data.transfer_title')) ?></strong></td>
                        <td><?= htmlspecialchars(__('taxes.rates_data.transfer_row1_limit')) ?></td>
                        <td><?= htmlspecialchars(__('taxes.rates_data.transfer_row1_rate')) ?></td>
                    </tr>
                    <tr>
                        <td><?= htmlspecialchars(__('taxes.rates_data.transfer_row2_limit')) ?></td>
                        <td><?= htmlspecialchars(__('taxes.rates_data.transfer_row2_rate')) ?></td>
                    </tr>
                    <!-- Gift Deeds -->
                    <tr>
                        <td rowspan="2"><strong><?= htmlspecialchars(__('taxes.rates_data.gift_title')) ?></strong></td>
                        <td><?= htmlspecialchars(__('taxes.rates_data.gift_row1_limit')) ?></td>
                        <td><?= htmlspecialchars(__('taxes.rates_data.gift_row1_rate')) ?></td>
                    </tr>
                    <tr>
                        <td><?= htmlspecialchars(__('taxes.rates_data.gift_row2_limit')) ?></td>
                        <td><?= htmlspecialchars(__('taxes.rates_data.gift_row2_rate')) ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Section 3: Determination of Value -->
    <section class="card">
        <h3 class="section-title"><?= htmlspecialchars(__('taxes.valuation_title')) ?></h3>

        <!-- Sub-section 1 -->
        <div style="margin-bottom: 22px;">
            <h4 style="color: var(--primary-blue); font-size: 16px; margin-bottom: 10px;">
                <?= htmlspecialchars(__('taxes.val_sub1_title')) ?>
            </h4>
            <p style="text-align: justify; color: var(--text-body); line-height: 1.8;">
                <?= htmlspecialchars(__('taxes.val_sub1_desc')) ?>
            </p>
        </div>

        <!-- Sub-section 2 -->
        <div>
            <h4 style="color: var(--primary-blue); font-size: 16px; margin-bottom: 14px;">
                <?= htmlspecialchars(__('taxes.val_sub2_title')) ?>
            </h4>

            <!-- Part A -->
            <div class="sub-box" style="background: rgba(0,198,255,0.05); border-left: 4px solid var(--brand-cyan); padding: 16px 20px; border-radius: 0 var(--radius-sm) var(--radius-sm) 0; margin-bottom: 16px;">
                <h5 style="color: var(--primary-navy); font-size: 14px; margin-bottom: 10px;">
                    <?= htmlspecialchars(__('taxes.val_sub2_a_title')) ?>
                </h5>
                <ol style="padding-left: 22px; color: var(--text-body); line-height: 1.9; margin-bottom: 8px;">
                    <?php foreach ($translations['taxes']['val_sub2_a_points'] ?? [] as $point): ?>
                        <li style="margin-bottom: 6px;"><?= htmlspecialchars($point) ?></li>
                    <?php endforeach; ?>
                </ol>
                <p style="font-weight: 600; color: var(--primary-blue); font-size: 13px; margin-bottom: 0;">
                    <?= htmlspecialchars(__('taxes.val_sub2_a_note')) ?>
                </p>
            </div>

            <!-- Part B -->
            <div class="sub-box" style="background: rgba(0,198,255,0.05); border-left: 4px solid var(--brand-cyan); padding: 16px 20px; border-radius: 0 var(--radius-sm) var(--radius-sm) 0;">
                <h5 style="color: var(--primary-navy); font-size: 14px; margin-bottom: 10px;">
                    <?= htmlspecialchars(__('taxes.val_sub2_b_title')) ?>
                </h5>
                <ol style="padding-left: 22px; color: var(--text-body); line-height: 1.9; margin-bottom: 8px;">
                    <?php foreach ($translations['taxes']['val_sub2_b_points'] ?? [] as $point): ?>
                        <li style="margin-bottom: 6px;"><?= htmlspecialchars($point) ?></li>
                    <?php endforeach; ?>
                </ol>
                <p style="font-weight: 600; color: var(--primary-blue); font-size: 13px; margin-bottom: 0;">
                    <?= htmlspecialchars(__('taxes.val_sub2_b_note')) ?>
                </p>
            </div>
        </div>
    </section>

    <!-- Bank Accounts Section -->
    <section class="account-card">
        <h3>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M4 10v7h3v-7H4zm6 0v7h3v-7h-3zM2 22h19v-3H2v3zm14-12v7h3v-7h-3zm-4.5-9L2 6v2h19V6l-9.5-5z"/></svg>
            <?= htmlspecialchars(__('taxes.bank_accounts_title')) ?>
        </h3>

        <div class="account-grid">
            <?php foreach ($translations['taxes']['accounts'] ?? [] as $account): ?>
                <div class="account-item">
                    <div class="account-title"><?= htmlspecialchars($account['title']) ?></div>
                    <div class="account-bank"><?= htmlspecialchars($account['bank']) ?></div>
                    <div class="account-number"><?= htmlspecialchars($account['number']) ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
/**
 * Official Downloads Page
 * Department of Provincial Revenue - North Western Province
 */

$currentPage = 'downloads';
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/lang/lang.php';
$pageTitle = __('nav.downloads');

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';

$downloads = [
    [
        'key' => 'statute',
        'file' => 'assets/docs/1990s.pdf.pdf',
        'type' => __('downloads.file_format'),
    ],
    [
        'key' => 'opinion',
        'file' => 'assets/docs/ops.pdf',
        'type' => __('downloads.form_format'),
    ],
    [
        'key' => 'refund',
        'file' => 'assets/docs/refs.pdf',
        'type' => __('downloads.form_format'),
    ],
];
?>

<div class="container">

    <div class="page-header">
        <h2><?= htmlspecialchars(__('downloads.page_title')) ?></h2>
        <p><?= htmlspecialchars(__('downloads.subtitle')) ?></p>
    </div>

    <div class="download-list">
        <?php foreach ($downloads as $item): ?>
            <div class="download-card">
                <div class="file-info">
                    <div class="pdf-icon">
                        <svg viewBox="0 0 24 24"><path d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/></svg>
                    </div>
                    <div class="file-details">
                        <h3><?= htmlspecialchars(__('downloads.items.' . $item['key'] . '.title')) ?></h3>
                        <span><?= htmlspecialchars($item['type']) ?> &bull; <?= htmlspecialchars(__('downloads.items.' . $item['key'] . '.desc')) ?></span>
                    </div>
                </div>
                
                <a href="<?= htmlspecialchars($item['file']) ?>" target="_blank" download class="btn-download">
                    <svg viewBox="0 0 24 24"><path d="M19 9h-4V3H9v6H5l7 7 7-7zM5 18v2h14v-2H5z"/></svg>
                    <?= htmlspecialchars(__('downloads.download_button')) ?>
                </a>
            </div>
        <?php endforeach; ?>
    </div>

</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

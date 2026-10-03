<?php
/**
 * About Us Page
 * Department of Provincial Revenue - North Western Province
 */

$currentPage = 'about';
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/lang/lang.php';
$pageTitle = __('nav.about');

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';

$lang = current_lang();
$chartImg = ($lang === 'si') ? 'assets/images/str.jpg' : 'assets/images/stre.jpg';

// Staff Data localized
$staffList = [
    [
        'en' => ['name' => 'Mr. D.A.T. Hemachandra', 'role' => 'Provincial Revenue Commissioner'],
        'si' => ['name' => 'ඩී.ඒ.ටී. හේමචන්ද්‍ර මයා', 'role' => 'පළාත් ආදායම් කොමසාරිස්'],
        'ta' => ['name' => 'திரு. D.A.T. ஹேமச்சந்திர', 'role' => 'மாகாண இறைவரி ஆணையாளர்'],
        'phone' => '037-2223806'
    ],
    [
        'en' => ['name' => 'Mr. R.D.S. Gunawardhana', 'role' => 'Deputy Commissioner'],
        'si' => ['name' => 'ආර්.ඩී.එස්. ගුණවර්ධන මයා', 'role' => 'නියෝජ්‍ය කොමසාරිස්'],
        'ta' => ['name' => 'திரு. R.D.S. குணவர்தன', 'role' => 'பிரதி ஆணையாளர்'],
        'phone' => '037-2223984'
    ],
    [
        'en' => ['name' => 'Mrs. R.M.S.N. Rathnayake', 'role' => 'Accountant'],
        'si' => ['name' => 'ආර්.එම්.එස්.එන්. රත්නායක මිය', 'role' => 'ගණකාධිකාරී'],
        'ta' => ['name' => 'திருமதி. R.M.S.N. ரத்நாயக்க', 'role' => 'கணக்காளர்'],
        'phone' => '037-2223983'
    ],
    [
        'en' => ['name' => 'Mr. R.H.N. Wimalarathna', 'role' => 'Senior Assessor'],
        'si' => ['name' => 'ආර්.එච්.එන්. විමලරත්න මයා', 'role' => 'ජ්‍යෙෂ්ඨ තක්සේරුකරු'],
        'ta' => ['name' => 'திரு. R.H.N. விமலரத்ன', 'role' => 'சிரேஷ்ட மதிப்பீட்டாளர்'],
        'phone' => '037-2229509'
    ],
    [
        'en' => ['name' => 'Mr. D.A.P.J. Dedigamaarachchi', 'role' => 'Senior Assessor'],
        'si' => ['name' => 'ඩී.ඒ.පී.ජේ. දැඩිගමආරච්චි මයා', 'role' => 'ජ්‍යෙෂ්ඨ තක්සේරුකරු'],
        'ta' => ['name' => 'திரு. D.A.P.J. தெடிகமஆரச்சி', 'role' => 'சிரேஷ்ட மதிப்பீட்டாளர்'],
        'phone' => '037-3764271'
    ],
    [
        'en' => ['name' => 'Mrs. T.M.U. Rathnayake', 'role' => 'Senior Assessor'],
        'si' => ['name' => 'ටී.එම්.යූ. රත්නායක මිය', 'role' => 'ජ්‍යෙෂ්ඨ තක්සේරුකරු'],
        'ta' => ['name' => 'திருமதி. T.M.U. ரத்நாயக்க', 'role' => 'சிரேஷ்ட மதிப்பீட்டாளர்'],
        'phone' => '037-3615011'
    ],
    [
        'en' => ['name' => 'Mrs. T.M.K.K. Gunathilaka', 'role' => 'Senior Assessor'],
        'si' => ['name' => 'ටී.එම්.කේ.කේ. ගුණතිලක මිය', 'role' => 'ජ්‍යෙෂ්ඨ තක්සේරුකරු'],
        'ta' => ['name' => 'திருமதி. T.M.K.K. குணதிலக்க', 'role' => 'சிரேஷ்ட மதிப்பீட்டாளர்'],
        'phone' => '037-2223982'
    ],
    [
        'en' => ['name' => 'Mrs. M.E.A. Sandarekha', 'role' => 'Senior Assessor'],
        'si' => ['name' => 'එම්.ඊ.ඒ. සඳරේඛා මිය', 'role' => 'ජ්‍යෙෂ්ඨ තක්සේරුකරු'],
        'ta' => ['name' => 'திருமதி. M.E.A. சந்தரேகா', 'role' => 'சிரேஷ்ட மதிப்பீட்டாளர்'],
        'phone' => '037-3971543'
    ],
    [
        'en' => ['name' => 'Mr. D.M.W.N. Wanninayake', 'role' => 'Senior Assessor'],
        'si' => ['name' => 'ඩී.එම්.ඩබ්.එන්. වන්නිනායක මයා', 'role' => 'ජ්‍යෙෂ්ඨ තක්සේරුකරු'],
        'ta' => ['name' => 'திரு. D.M.W.N. வன்னிநாயக்க', 'role' => 'சிரேஷ்ட மதிப்பீட்டாளர்'],
        'phone' => '037-2223901'
    ],
    [
        'en' => ['name' => 'Mr. A.L.A.A.U. Gunawardhana', 'role' => 'Senior Assessor'],
        'si' => ['name' => 'ඒ.එල්.ඒ.ඒ.යූ. ගුණවර්ධන මයා', 'role' => 'ජ්‍යෙෂ්ඨ තක්සේරුකරු'],
        'ta' => ['name' => 'திரு. A.L.A.A.U. குணவர்தன', 'role' => 'சிரேஷ்ட மதிப்பீட்டாளர்'],
        'phone' => '037-2223902'
    ],
    [
        'en' => ['name' => 'Mr. S.M.R.K. Senevirathne', 'role' => 'Assessor'],
        'si' => ['name' => 'එස්.එම්.ආර්.කේ. සෙනෙවිරත්න මයා', 'role' => 'තක්සේරුකරු'],
        'ta' => ['name' => 'திரு. S.M.R.K. செனவிரத்ன', 'role' => 'மதிப்பீட்டாளர்'],
        'phone' => '037-3144518'
    ],
    [
        'en' => ['name' => 'Mr. M.M.I. Samankumara', 'role' => 'Assessor'],
        'si' => ['name' => 'එම්.එම්.අයි. සමන්කුමාර මයා', 'role' => 'තක්සේරුකරු'],
        'ta' => ['name' => 'திரு. M.M.I. சமன்குமார', 'role' => 'மதிப்பீட்டாளர்'],
        'phone' => '037-2227633'
    ],
    [
        'en' => ['name' => 'Mr. B.S. Nimal', 'role' => 'Assessor'],
        'si' => ['name' => 'බී.එස්. නිමල් මයා', 'role' => 'තක්සේරුකරු'],
        'ta' => ['name' => 'திரு. B.S. நிமல்', 'role' => 'மதிப்பீட்டாளர்'],
        'phone' => '037-3618416'
    ],
    [
        'en' => ['name' => 'Mrs. V.A.S.N. Thilakarathna', 'role' => 'Administrative Officer'],
        'si' => ['name' => 'වී.ඒ.එස්.එන්. තිලකරත්න මිය', 'role' => 'පරිපාලන නිලධාරී'],
        'ta' => ['name' => 'திருமதி. V.A.S.N. திலகரத்ன', 'role' => 'நிருவாக உத்தியோகத்தர்'],
        'phone' => '037-2223981'
    ],
];
?>

<div class="container">

    <div class="page-header">
        <h2><?= htmlspecialchars(__('about.page_title')) ?></h2>
        <p><?= htmlspecialchars(__('site_title')) ?></p>
    </div>

    <!-- Section 1: Departmental Background -->
    <section id="background" class="card">
        <h3 class="section-title"><?= htmlspecialchars(__('about.background_title')) ?></h3>
        <p style="text-align: justify; margin-bottom: 16px;">
            <?= htmlspecialchars(__('about.background_text')) ?>
        </p>
        
        <?php
        $delegatedList = $translations['about']['delegated_list'] ?? [];
        if (!empty($delegatedList)):
            $actsTitle = __('about.acts_title');
            if (!empty($actsTitle)):
        ?>
        <h4 style="color: var(--primary-blue); font-size: 16px; margin: 18px 0 10px 0;">
            <?= htmlspecialchars($actsTitle) ?>
        </h4>
        <?php endif; ?>
        <ul style="padding-left: 25px; color: var(--text-body); line-height: 1.8;">
            <?php foreach ($delegatedList as $item): ?>
                <li><?= htmlspecialchars($item) ?></li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>
    </section>

    <!-- Section 2: Institutional Role -->
    <section id="duties" class="card">
        <h3 class="section-title"><?= htmlspecialchars(__('about.duties_title')) ?></h3>
        <p style="margin-bottom: 14px;"><?= htmlspecialchars(__('about.duties_intro')) ?></p>
        <ul style="padding-left: 25px; color: var(--text-body); line-height: 1.9;">
            <?php 
            $duties = $translations['about']['duties_list'] ?? [];
            foreach ($duties as $duty): 
            ?>
                <li><?= htmlspecialchars($duty) ?></li>
            <?php endforeach; ?>
        </ul>
        <?php if (!empty(__('about.duties_footer'))): ?>
            <p style="margin-top: 14px;"><?= htmlspecialchars(__('about.duties_footer')) ?></p>
        <?php endif; ?>
    </section>

    <!-- Section 3: Stamp Duty Revenue Performance -->
    <section id="revenue" class="card">
        <h3 class="section-title"><?= htmlspecialchars(__('about.revenue_title')) ?></h3>
        <p style="margin-bottom: 15px;"><?= htmlspecialchars(__('about.revenue_subtitle')) ?></p>
        
        <div class="table-responsive">
            <table class="data-table">
                <thead>
                    <tr>
                        <th><?= htmlspecialchars(__('about.table_headers.year')) ?></th>
                        <th><?= htmlspecialchars(__('about.table_headers.normal_revenue')) ?></th>
                        <th><?= htmlspecialchars(__('about.table_headers.additional_revenue')) ?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>2011</strong></td>
                        <td><?= ($lang === 'si') ? 'මිලියන 671' : (($lang === 'ta') ? '671 மில்லியன்' : '671 Million') ?></td>
                        <td><?= ($lang === 'si') ? 'මිලියන 2.8' : (($lang === 'ta') ? '2.8 மில்லியன்' : '2.8 Million') ?></td>
                    </tr>
                    <tr>
                        <td><strong>2015</strong></td>
                        <td><?= ($lang === 'si') ? 'මිලියන 1,401' : (($lang === 'ta') ? '1,401 மில்லியன்' : '1,401 Million') ?></td>
                        <td><?= ($lang === 'si') ? 'මිලියන 32' : (($lang === 'ta') ? '32 மில்லியன்' : '32 Million') ?></td>
                    </tr>
                    <tr>
                        <td><strong>2020</strong></td>
                        <td><?= ($lang === 'si') ? 'මිලියන 1,757' : (($lang === 'ta') ? '1,757 மில்லியன்' : '1,757 Million') ?></td>
                        <td><?= ($lang === 'si') ? 'මිලියන 70' : (($lang === 'ta') ? '70 மில்லியன்' : '70 Million') ?></td>
                    </tr>
                    <tr>
                        <td><strong>2025</strong></td>
                        <td><span style="color: var(--brand-blue); font-weight: 700;"><?= ($lang === 'si') ? 'මිලියන 4,216' : (($lang === 'ta') ? '4,216 மில்லியன்' : '4,216 Million') ?></span></td>
                        <td><span style="color: var(--brand-blue); font-weight: 700;"><?= ($lang === 'si') ? 'මිලියන 287' : (($lang === 'ta') ? '287 மில்லியன்' : '287 Million') ?></span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Section 4: Organizational Chart -->
    <section id="chart" class="card">
        <h3 class="section-title"><?= htmlspecialchars(__('about.chart_title')) ?></h3>
        <p style="margin-bottom: 20px;"><?= htmlspecialchars(__('about.chart_desc')) ?></p>
        <div style="text-align: center; background: #f8fafc; padding: 15px; border-radius: var(--radius-md); border: 1px solid #e2e8f0;">
            <img src="<?= htmlspecialchars($chartImg) ?>" alt="<?= htmlspecialchars(__('about.chart_title')) ?>" style="max-width: 100%; border-radius: var(--radius-md); box-shadow: var(--shadow-sm); margin: 0 auto;">
        </div>
    </section>

    <!-- Section 5: Staff Information -->
    <section id="staff" class="card">
        <h3 class="section-title"><?= htmlspecialchars(__('about.staff_title')) ?></h3>
        
        <div class="table-responsive">
            <table class="data-table">
                <thead>
                    <tr>
                        <th><?= htmlspecialchars(__('about.staff_table_headers.name')) ?></th>
                        <th><?= htmlspecialchars(__('about.staff_table_headers.designation')) ?></th>
                        <th><?= htmlspecialchars(__('about.staff_table_headers.phone')) ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($staffList as $officer): ?>
                        <tr>
                            <td><strong><?= htmlspecialchars($officer[$lang]['name'] ?? $officer['en']['name']) ?></strong></td>
                            <td><?= htmlspecialchars($officer[$lang]['role'] ?? $officer['en']['role']) ?></td>
                            <td>
                                <a href="tel:<?= preg_replace('/[^0-9]/', '', $officer['phone']) ?>" style="color: var(--brand-blue); font-weight: 600;">
                                    <?= htmlspecialchars($officer['phone']) ?>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>

</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

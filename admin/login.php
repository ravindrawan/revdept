<?php
/**
 * Staff Portal - Administrative Login
 * Department of Provincial Revenue - North Western Province
 */

require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../lang/lang.php';

$error = '';
if (($_SERVER['REQUEST_METHOD'] ?? '') === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    // Placeholder authentication (ready for database verification)
    if ($username === 'admin' && $password === 'admin123') {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_user'] = 'Provincial Officer';
        header('Location: dashboard.php');
        exit;
    } else {
        $error = 'Invalid credentials. For demonstration setup, use: admin / admin123';
    }
}
?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars(current_lang()) ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars(__('admin.login_title')) ?> - <?= htmlspecialchars(__('department_title')) ?></title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    
    <style>
        .login-wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 25px;
        }

        .login-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-radius: var(--radius-xl);
            padding: 40px;
            width: 100%;
            max-width: 440px;
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.35);
            border: 1px solid rgba(255, 255, 255, 0.8);
            text-align: center;
        }

        .login-logo {
            width: 75px;
            height: auto;
            margin: 0 auto 15px auto;
            filter: drop-shadow(0 4px 10px rgba(0, 198, 255, 0.4));
        }

        .login-card h2 {
            font-size: 22px;
            font-weight: 700;
            color: var(--primary-navy);
            margin-bottom: 6px;
        }

        .login-card p {
            font-size: 13px;
            color: var(--text-muted);
            margin-bottom: 25px;
        }

        .login-form {
            text-align: left;
        }

        .error-badge {
            background: #fee2e2;
            color: #b91c1c;
            border: 1px solid #fca5a5;
            padding: 10px 14px;
            border-radius: var(--radius-sm);
            font-size: 13px;
            margin-bottom: 18px;
            text-align: center;
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            margin-top: 25px;
            color: var(--brand-blue);
            font-size: 14px;
            font-weight: 600;
            transition: var(--transition);
        }

        .back-link:hover {
            color: var(--primary-navy);
            transform: translateX(-3px);
        }
    </style>
</head>
<body>

    <div class="login-wrapper">
        <div class="login-card">
            <img src="../assets/images/sl.png" alt="<?= htmlspecialchars(__('emblem_alt')) ?>" class="login-logo">
            <h2><?= htmlspecialchars(__('admin.login_title')) ?></h2>
            <p><?= htmlspecialchars(__('department_title')) ?> - <?= htmlspecialchars(__('province_name')) ?></p>

            <?php if (!empty($error)): ?>
                <div class="error-badge"><?= htmlspecialchars($error) ?></div>
            <?php endif; ?>

            <form action="login.php" method="POST" class="login-form">
                <div class="form-group">
                    <label for="username"><?= htmlspecialchars(__('admin.username')) ?></label>
                    <input type="text" name="username" id="username" class="form-control" required placeholder="admin" autocomplete="username">
                </div>

                <div class="form-group">
                    <label for="password"><?= htmlspecialchars(__('admin.password')) ?></label>
                    <input type="password" name="password" id="password" class="form-control" required placeholder="••••••••" autocomplete="current-password">
                </div>

                <button type="submit" class="btn-primary" style="margin-top: 10px;">
                    <?= htmlspecialchars(__('admin.login_btn')) ?>
                </button>
            </form>

            <a href="../index.php" class="back-link">
                &larr; <?= htmlspecialchars(__('admin.back_to_site')) ?>
            </a>
        </div>
    </div>

</body>
</html>

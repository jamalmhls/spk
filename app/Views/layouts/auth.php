<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title ?? 'Login' ?> &mdash; Sistem Pendukung Keputusan Prakter Kerja Industri</title>
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/img/logo-smk.webp" type="image/x-icon" />
    <script async type="module" crossorigin src="<?= base_url(); ?>assets/compiled/js/auth-forgot-password.js"></script>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/compiled/css/auth-forgot-password.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/compiled/css/app.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/compiled/css/app-dark.css" />
</head>

<body>
    <script src="<?= base_url(); ?>assets/static/js/initTheme.js"></script>
    <div id="auth">
        <?= $this->renderSection('content') ?>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title ?? 'Error 404' ?> &mdash; Sistem Pendukung Keputusan Prakter Kerja Industri</title>
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/img/logo-smk.webp" type="image/x-icon" />
    <script async type="module" crossorigin src="./assets/compiled/js/error-403.js"></script>
    <link rel="stylesheet" href="./assets/compiled/css/error-403.css" />
    <link rel="stylesheet" href="./assets/compiled/css/app.css" />
</head>

<body>
    <script src="<?= base_url(); ?>assets/static/js/initTheme.js"></script>
    <div id="error">
        <?= $this->renderSection('content') ?>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?? '' ?> &mdash; Sistem Pendukung Keputusan Prakter Kerja Industri</title>
  <link rel="shortcut icon" href="<?= base_url(); ?>assets/img/logo-smk.webp" type="image/x-icon" />
  <script async type="module" crossorigin src="<?= base_url(); ?>assets/compiled/js/layout-rtl-backup.js"></script>
  <link rel="stylesheet" href="<?= base_url(); ?>assets/compiled/css/layout-rtl-backup.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/compiled/css/app-dark.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/compiled/css/app.css" />
  <?= $this->renderSection('styles') ?>
</head>

<body>
  <script src="assets/static/js/initTheme.js"></script>
  <div id="app">
    <!-- Sidebar -->
    <?= $this->include('layouts/sidebar') ?>
    <!-- End Sidebar -->

    <!-- Main -->
    <div id="main">
      <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
          <i class="bi bi-justify fs-3"></i>
        </a>
      </header>

      <!-- Content -->
      <?= $this->renderSection('content') ?>
      <!-- End Content -->

      <!-- Footer -->
      <?= $this->include('layouts/footer') ?>
      <!-- End Footer -->
    </div>
    <!-- End Main -->
  </div>

  <script src="assets/static/js/components/dark.js"></script>
  <script src="assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script src="assets/compiled/js/app.js"></script>
  <?= $this->renderSection('js') ?>
</body>

</html>
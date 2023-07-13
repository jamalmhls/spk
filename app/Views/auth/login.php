<?= $this->extend('layouts/auth') ?>

<?= $this->section('content') ?>

<body>
  <script src="assets/static/js/initTheme.js"></script>
  <div id="auth">
    <div class="row h-100">
      <div class="col-lg-5 col-12">
        <div id="auth-left">
          <div class="auth-logo">
            <a href="<?= base_url(); ?>"><img src="<?= base_url(); ?>assets/images/favicon.svg" alt="Logo" /></a>
          </div>
          <h1 class="auth-title">Login</h1>
          <p class="auth-subtitle mb-5">
            Login with your data.
          </p>

          <form action="index.html">
            <div class="form-group position-relative has-icon-left mb-4">
              <input type="text" class="form-control" placeholder="Username" />
              <div class="form-control-icon">
                <i class="bi bi-person"></i>
              </div>
            </div>
            <div class="form-group position-relative has-icon-left mb-4">
              <input type="password" class="form-control" placeholder="Password" />
              <div class="form-control-icon">
                <i class="bi bi-shield-lock"></i>
              </div>
            </div>
            <button class="btn btn-primary btn-block btn-lg shadow-lg mt-2">
              Login
            </button>
          </form>
        </div>
      </div>
      <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right"></div>
      </div>
    </div>
  </div>
</body>
<?= $this->endSection() ?>
<?= $this->extend('layouts/auth') ?>

<?= $this->section('content') ?>
<div class="row h-100">
  <div class="col-lg-5 col-12">
    <div id="auth-left">
      <div class="auth-logo">
        <a href="<?= base_url(); ?>"><img src="<?= base_url(); ?>assets/compiled/svg/logo.svg" alt="Logo" /></a>
      </div>
      <h1 class="auth-title">Login</h1>
      <!-- <p class="auth-subtitle mb-5">
        Login with your data.
      </p> -->
      <form action="<?= url_to('login') ?>" method="post">
        <?= csrf_field() ?>
        <div class="form-group position-relative has-icon-left mb-4">
          <input type="text" class="form-control form-control-xl" placeholder="Email" name="email" />
          <div class="form-control-icon">
            <i class="bi bi-person"></i>
          </div>
        </div>
        <div class="form-group position-relative has-icon-left mb-4">
          <input type="password" class="form-control form-control-xl" placeholder="Password" name="password" />
          <div class="form-control-icon">
            <i class="bi bi-shield-lock"></i>
          </div>
        </div>
        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-2" type="submit">Login</button>
      </form>
      <?php if (session('error') !== null) : ?>
        <div class="alert alert-danger" role="alert"><?= session('error') ?></div>
      <?php elseif (session('errors') !== null) : ?>
        <div class="alert alert-danger" role="alert">
          <?php if (is_array(session('errors'))) : ?>
            <?php foreach (session('errors') as $error) : ?>
              <?= $error ?>
              <br>
            <?php endforeach ?>
          <?php else : ?>
            <?= session('errors') ?>
          <?php endif ?>
        </div>
      <?php endif ?>

      <?php if (session('message') !== null) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert" role="alert">
          <?= session('message') ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php endif ?>
    </div>
  </div>
  <div class="col-lg-7 d-none d-lg-block">
    <div id="auth-right"></div>
  </div>
</div>
<?= $this->endSection() ?>
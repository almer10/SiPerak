    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="<?= base_url('dashboard'); ?>">
          <img src="<?= assets_url('siperak.png', false); ?>" alt="logo" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="<?= base_url('dashboard'); ?>">
          <img src="<?= assets_url('logo.png', false); ?>" alt="logo" />
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <div class="btn_wrapper">
              <a href="<?= base_url('auth/logout'); ?>" class="btn_col btn_color3">Login Admin</a>
            </div>
      </div>
      </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="icon-menu"></span>
      </button>
      </div>
    </nav>
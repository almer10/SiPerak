      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper" style="margin-bottom: 0px;">
                <div class="profile-image">
                  <img src="<?= $user_avatar; ?>" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name"><?= $user_name; ?></p>
                  <div>
                    <small class="designation text-muted"><?= $jabatan; ?></small><br>
                    <small class="designation text-muted">Bid. <?= $bidang; ?></small>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url(''); ?>">
              <i class="menu-icon mdi mdi-home"></i>
              <span class="menu-title">Home</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('StrukturOrganisasi/index'); ?>">
              <i class="menu-icon mdi mdi-group"></i>
              <span class="menu-title">Struktur Organisasi</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Profile/index'); ?>">
              <i class="menu-icon mdi mdi-account"></i>
              <span class="menu-title">Profile</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Ebook/pegawai'); ?>">
              <i class="menu-icon mdi mdi-book"></i>
              <span class="menu-title">Ebook</span>
            </a>
          </li>
          <!--<li class="nav-item">
            <a class="nav-link" href="<?= base_url('dashboard'); ?>">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('daftar_izin'); ?>">
              <i class="menu-icon mdi mdi-pen"></i>
              <span class="menu-title">Permohonan Ganti Profile</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Aspirasi/index'); ?>">
              <i class="menu-icon mdi mdi-account"></i>
              <span class="menu-title">Aspirasi</span>
            </a>
          </li>
        </ul>
      </nav>
      <div class="main-panel">
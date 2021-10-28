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
                    <small class="designation text-muted">Admin</small>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('dashboard'); ?>">
              <i class="menu-icon mdi mdi-home"></i>
              <span class="menu-title">Home</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Inbox/index'); ?>">
              <i class="menu-icon mdi mdi-email"></i>
              <span class="menu-title">Inbox</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-dm" aria-expanded="false" aria-controls="ui-dm">
              <i class="menu-icon mdi mdi-treasure-chest"></i>
              <span class="menu-title">Manajemen Data Pegawai</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-dm">
              <ul class="nav flex-column sub-menu">
                <?= generate_navlink($path_page, 'data_master/admin', 'Data Admin'); ?>
                <?= generate_navlink($path_page, 'data_master/jabatan', 'Data Jabatan'); ?>
                <?= generate_navlink($path_page, 'data_master/bidang', 'Data Bidang'); ?>
                <?= generate_navlink($path_page, 'data_master/pegawai', 'Data Pegawai'); ?>
                <?= generate_navlink($path_page, 'data_master/nama_izin', 'Data Nama Izin'); ?>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Pemetaan/index'); ?>">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Pemetaan SDM</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Diklat/rencana'); ?>">
              <i class="menu-icon mdi mdi-group"></i>
              <span class="menu-title">Diklat</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Produktivitas/index'); ?>">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Produktivitas SDM</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Report/index'); ?>">
              <i class="menu-icon mdi mdi-file-chart"></i>
              <span class="menu-title">Report</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Dokumensdm/index'); ?>">
              <i class="menu-icon mdi mdi-file"></i>
              <span class="menu-title">Dokumen SDM</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('data_izin'); ?>">
              <i class="menu-icon mdi mdi-treasure-chest"></i>
              <span class="menu-title">Manajemen Data Izin</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('konfirmasi_izin'); ?>">
              <i class="menu-icon mdi mdi-checkbox-multiple-marked-outline"></i>
              <span class="menu-title">Konfirmasi Izin</span>
            </a>
          </li>
        </ul>
      </nav>
      <div class="main-panel">
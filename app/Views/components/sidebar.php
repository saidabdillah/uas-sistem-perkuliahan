<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url() ?>">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="bi bi-code-slash"></i>
    </div>
    <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item <?= $title == 'Dashboard' ? 'active' : ''; ?>">
    <a class="nav-link" href="<?= base_url(); ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider border-2 opacity-100">

  <!-- Heading -->
  <div class="sidebar-heading">
    Interface
  </div>

  <!-- Mahasiswa -->
  <li class="nav-item <?= $title == 'Mahasiswa' ? 'active' : ''; ?>">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="bi bi-person-standing"></i>
      <span>Mahasiswa</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Mahasiswa:</h6>
        <a class="collapse-item" href="<?= base_url('dashboard/mahasiswa'); ?>">Lihat</a>
        <a class="collapse-item" href="<?= base_url('dashboard/mahasiswa/tambah'); ?>">Tambah</a>
      </div>
    </div>
  </li>

  <!-- Jurusan -->
  <li class="nav-item <?= $title == 'Jurusan' ? 'active' : ''; ?>">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseJurusan" aria-expanded="true" aria-controls="collapseJurusan">
      <i class="bi bi-pin-map-fill"></i>
      <span>Jurusan</span>
    </a>
    <div id="collapseJurusan" class="collapse" aria-labelledby="headingJurusan" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Jurusan:</h6>
        <a class="collapse-item" href="<?= base_url('dashboard/jurusan'); ?>">Lihat</a>
        <a class="collapse-item" href="<?= base_url('dashboard/jurusan/tambah'); ?>">Tambah</a>
      </div>
    </div>
  </li>

  <!-- Kehadiran -->
  <li class="nav-item <?= $title == 'Kehadiran' ? 'active' : ''; ?>">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
      <i class="bi bi-calendar-check-fill"></i>
      <span>Kehadiran</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Kehadiran:</h6>
        <a class="collapse-item" href="<?= base_url('dashboard/kehadiran'); ?>">Lihat</a>
      </div>
    </div>
  </li>

  <!-- Mata Kuliah -->
  <li class="nav-item <?= $title == 'Mata Kuliah' ? 'active' : ''; ?>">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseKrs" aria-expanded="true" aria-controls="collapseKrs">
      <i class="bi bi-book-fill"></i>
      <span>Mata Kuliah</span>
    </a>
    <div id="collapseKrs" class=" collapse" aria-labelledby="headingKrs" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Mata Kuliah:</h6>
        <a class="collapse-item" href="<?= base_url('dashboard/matakuliah'); ?>">Lihat</a>
      </div>
    </div>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider border-2 opacity-100">

  <!-- Heading -->
  <div class="sidebar-heading">
    Addons
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
      <i class="fas fa-fw fa-folder"></i>
      <span>Pages</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Login Screens:</h6>
        <a class="collapse-item" href="login.html">Login</a>
        <a class="collapse-item" href="register.html">Register</a>
        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
        <div class="collapse-divider"></div>
        <h6 class="collapse-header">Other Pages:</h6>
        <a class="collapse-item" href="404.html">404 Page</a>
        <a class="collapse-item" href="blank.html">Blank Page</a>
      </div>
    </div>
  </li>

  <!-- Nav Item - Charts -->
  <li class="nav-item">
    <a class="nav-link" href="charts.html">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Charts</span></a>
  </li>

  <!-- Nav Item - Tables -->
  <li class="nav-item">
    <a class="nav-link" href="tables.html">
      <i class="fas fa-fw fa-table"></i>
      <span>Tables</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider border-2 opacity-100 d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->
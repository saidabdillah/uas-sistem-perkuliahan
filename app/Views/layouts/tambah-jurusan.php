<?= $this->extend('components\main'); ?>
<?= $this->section('main'); ?>
<!-- Main Content -->
<main id="content">

  <?= $this->include('components\header'); ?>

  <!-- Begin Page Content -->
  <div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Jurusan</h1>
      <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
  </div>
  <!-- /.container-fluid -->

  <section class="container-fluid">
    <div class="row">
      <div class="col-12 col-md-6">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Jurusan</h6>
          </div>
          <div class="card-body">
            <form action="<?= base_url('jurusan'); ?>" method="POST">
              <?= csrf_field(); ?>
              <div class="mb-3">
                <label for="kode_jurusan" class="form-label">Kode Jurusan</label>
                <input type="text" class="form-control <?= session('validation') && session('validation')->hasError('kode_jurusan') ? 'is-invalid' : ''; ?>" id="kode_jurusan" name="kode_jurusan" value="<?= old('kode_jurusan'); ?>">
                <?php if (session('validation')) : ?>
                  <div class="invalid-feedback">
                    <?= session('validation')->getError('kode_jurusan'); ?>
                  </div>
                <?php endif; ?>
              </div>
              <div class="mb-3">
                <label for="nama_jurusan" class="form-label">Nama Jurusan</label>
                <input type="text" class="form-control <?= session('validation') && session('validation')->hasError('nama_jurusan') ? 'is-invalid' : ''; ?>" id="nama_jurusan" name="nama_jurusan" value="<?= old('nama_jurusan'); ?>">
                <?php if (session('validation')) : ?>
                  <div class="invalid-feedback">
                    <?= session('validation')->getError('nama_jurusan'); ?>
                  </div>
                <?php endif; ?>
              </div>
              <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>
<!-- End of Main Content -->
<?= $this->endSection(); ?>
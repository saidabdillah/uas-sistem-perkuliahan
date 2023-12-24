<?= $this->extend('components\main'); ?>
<?= $this->section('main'); ?>
<!-- Main Content -->
<main id="content">

  <?= $this->include('components\header'); ?>

  <!-- Begin Page Content -->
  <div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Mata Kuliah</h1>
      <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
  </div>
  <!-- /.container-fluid -->

  <section class="container-fluid">
    <div class="row">
      <div class="col-12 col-md-6">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Mata Kuliah</h6>
          </div>
          <div class="card-body">
            <form action="<?= base_url('dashboard/matakuliah/' . $matakuliah['kode_mata_kuliah'] . '/update'); ?>" method="POST">
              <?= csrf_field(); ?>
              <input type="hidden" name="_method" value="PUT">
              <div class="mb-3">
                <label for="kode_mata_kuliah" class="form-label">Kode Mata Kuliah</label>
                <input type="text" class="form-control <?= session('validation') && session('validation')->hasError('kode_mata_kuliah') ? 'is-invalid' : ''; ?>" id="kode_mata_kuliah" name="kode_mata_kuliah" value="<?= old('kode_mata_kuliah', $matakuliah['kode_mata_kuliah']); ?>">
                <?php if (session('validation')) : ?>
                  <div class="invalid-feedback">
                    <?= session('validation')->getError('kode_mata_kuliah'); ?>
                  </div>
                <?php endif; ?>
              </div>
              <div class="mb-3">
                <label for="nama_mata_kuliah" class="form-label">Nama Mata Kuliah</label>
                <input type="text" class="form-control <?= session('validation') && session('validation')->hasError('nama_mata_kuliah') ? 'is-invalid' : ''; ?>" id="nama_mata_kuliah" name="nama_mata_kuliah" value="<?= old('nama_mata_kuliah', $matakuliah['nama_mata_kuliah']); ?>">
                <?php if (session('validation')) : ?>
                  <div class="invalid-feedback">
                    <?= session('validation')->getError('nama_mata_kuliah'); ?>
                  </div>
                <?php endif; ?>
              </div>
              <button type="submit" class="btn btn-primary">Ubah</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>
<!-- End of Main Content -->
<?= $this->endSection(); ?>
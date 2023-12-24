<?= $this->extend('components\main'); ?>
<?= $this->section('main'); ?>
<!-- Main Content -->
<main id="content">

  <?= $this->include('components\header'); ?>

  <!-- Begin Page Content -->
  <div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Mahasiswa</h1>
      <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
  </div>
  <!-- /.container-fluid -->

  <section class="container-fluid">
    <div class="row">
      <div class="col-6">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Ubah Mahasiswa</h6>
          </div>
          <div class="card-body">
            <form action="<?= base_url('mahasiswa/' . $mahasiswa['nim'] . '/update'); ?>" method="POST">
              <?= csrf_field(); ?>
              <input type="hidden" name="_method" value="PUT">
              <div class="form-group">
                <label for="nama">Nama Mahasiswa</label>
                <input type="text" class="form-control" id="nama" value="<?= esc($mahasiswa['nama_mahasiswa']); ?>">
              </div>
              <div class="form-group mb-4">
                <label for="nim">NIM</label>
                <input type="number" class="form-control" id="nim" value="<?= esc($mahasiswa['nim']); ?>">
              </div>
              <label for="jurusan">Jurusan</label>
              <select id="jurusan" class="custom-select custom-select-md mb-3">
                <option selected>Jurusan</option>
                <?php foreach ($jurusan as $jrs) : ?>
                  <option value="<?= esc($jrs['kode_jurusan']); ?>" <?= esc($jrs['kode_jurusan']) == esc($mahasiswa['jurusan']) ? 'selected' : ''; ?>><?= esc($jrs['nama_jurusan']); ?></option>
                <?php endforeach; ?>
              </select>
              <label class="d-block">Jenis Kelamin</label>
              <div id="jenis_kelamin" class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="l" name="jenis_kelamin" class="custom-control-input" value="L" <?= esc($mahasiswa['jenis_kelamin'] == 'L' ? 'checked' : ''); ?>>
                <label class="custom-control-label" for="l">Laki - Laki</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline mb-3">
                <input type="radio" id="p" name="jenis_kelamin" class="custom-control-input" value="P" <?= esc($mahasiswa['jenis_kelamin'] == 'P' ? 'checked' : ''); ?>>
                <label class="custom-control-label" for="p">Perempuan</label>
              </div>
              <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" value="<?= esc($mahasiswa['email']); ?>">
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" id="alamat" rows="3"><?= esc($mahasiswa['alamat']); ?></textarea>
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
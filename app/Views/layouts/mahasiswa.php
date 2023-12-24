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
      <div class="col-12">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Mahasiswa</h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Jurusan</th>
                    <th>Jenis Kelamin</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($mahasiswa as $i => $mhs) : ?>
                    <tr>
                      <td><?= esc($mhs['nama_mahasiswa']); ?></td>
                      <td><?= esc($mhs['nim']); ?></td>
                      <td><?= esc($mhs['jurusan']); ?></td>
                      <td><?= esc($mhs['jenis_kelamin']); ?></td>
                      <td><?= esc($mhs['email']); ?></td>
                      <td><?= esc($mhs['alamat']); ?></td>
                      <td>
                        <a href="<?= base_url('mahasiswa/' . $mhs['nim']  . '/edit'); ?>" class="btn btn-success">Edit</a>
                        <button type="button" class="btn btn-danger hapus-mahasiswa" data-nim-mahasiswa="<?= esc($mhs['nim']); ?>">Hapus</button>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>
<!-- End of Main Content -->
<?= $this->endSection(); ?>
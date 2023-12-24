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
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Muhammad Said Abdillah</td>
                    <td>220110054</td>
                    <td>Ilmu Komputer</td>
                    <td>Laki - laki</td>
                    <td>msaidabdillah18@gmail.com</td>
                    <td>Kelua</td>
                  </tr>
                  <tr>
                    <td>Arifurrahman</td>
                    <td>220110056</td>
                    <td>Ilmu Komputer</td>
                    <td>Laki - laki</td>
                    <td>msaidabdillah18@gmail.com</td>
                    <td>Kelua</td>
                  </tr>
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
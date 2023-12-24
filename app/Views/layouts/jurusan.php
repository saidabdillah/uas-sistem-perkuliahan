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
      <div class="col-12">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 fw-bold text-primary">Jurusan</h6>
            <?php if (session()->getFlashdata('berhasil')) : ?>
              <div data-berhasil="<?= session()->getFlashdata('berhasil'); ?>" class="msg-berhasil"></div>
            <?php endif; ?>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode Jurusan</th>
                    <th>Nama Jurusan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($jurusan as $i => $jrs) : ?>
                    <tr>
                      <td><?= $i += 1; ?></td>
                      <td><?= esc($jrs['kode_jurusan']); ?></td>
                      <td><?= esc($jrs['nama_jurusan']); ?></td>
                      <td>

                        <a href="<?= base_url('/dashboard/jurusan/'); ?><?= $jrs['kode_jurusan']; ?>/edit" class="btn btn-success">Edit</a>

                        <button type="button" class="btn btn-danger hapus-jurusan" data-kode-jurusan="<?= $jrs['kode_jurusan']; ?>">Hapus</button>
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
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - <?= $title; ?></title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->


  <link rel="stylesheet" href="<?= base_url('css/sb-admin-2.css'); ?>">
  <!-- <link href="/css/sb-admin-2.min.css" rel="stylesheet"> -->

  <!-- Icon bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

  <!-- Custom styles for this page -->
  <link href="<?= base_url('vendor/datatables/dataTables.bootstrap4.min.css'); ?>" rel="stylesheet">

  <script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.10.1/dist/sweetalert2.all.min.js
"></script>
  <link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.10.1/dist/sweetalert2.min.css
" rel="stylesheet">
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?= $this->include('components\sidebar'); ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main -->
      <?= $this->renderSection('main'); ?>
      <!-- End Main -->

      <!-- Footer -->
      <?= $this->include('components\footer'); ?>
      <!-- End Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Keluar</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body text-center">Yakin ingin keluar</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
          <a class="btn btn-primary" href="/login">Keluar</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('vendor/jquery/jquery.min.js'); ?>"></script>
  <script src="<?= base_url('vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('js/sb-admin-2.min.js'); ?>"></script>

  <!-- Page level plugins -->
  <script src="<?= base_url('vendor/chart.js/Chart.min.js'); ?>"></script>
  <script src="<?= base_url('vendor/datatables/jquery.dataTables.min.js'); ?>"></script>
  <script src="<?= base_url('vendor/datatables/dataTables.bootstrap4.min.js'); ?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?= base_url('js/demo/chart-area-demo.js'); ?>"></script>
  <script src="<?= base_url('js/demo/chart-pie-demo.js'); ?>"></script>
  <script src="<?= base_url('js/demo/datatables-demo.js'); ?>"></script>

  <!-- JS Bootrstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <script src="<?= base_url('js/script.js'); ?>"></script>
</body>

</html>
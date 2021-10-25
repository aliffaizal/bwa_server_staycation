
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tugas Besar 1 PWE</title>

  <!-- Custom fonts for this template -->
  <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">



    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
      <div class="container">
      <br>
      <br>
    <div class="row">
        <div class="col-8">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Form Tambah Data</h1>
            </div>
            <form action="/home/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="form-group row">
                    <label for="nomor_pelanggan" class="col-sm-2 col-form-label">No. Pelanggan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control id="nomor_pelanggan" name="nomor_pelanggan" autofocus value="<?= old('nomor_pelanggan'); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_pelanggan" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" value="<?= old('nama_pelanggan'); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tgl_lahir" class="col-sm-2 col-form-label">Tgl Lahir</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= old('tgl_lahir'); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenis_keanggotaan" class="col-sm-2 col-form-label">Jenis Keanggotaan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jenis_keanggotaan" name="jenis_keanggotaan" value="<?= old('jenis_keanggotaan'); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= old('alamat'); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="telp" class="col-sm-2 col-form-label">No. Telp</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="telp" name="telp" value="<?= old('telp'); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
      </div>
      <!-- End of Main Content -->



    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->



  <!-- Bootstrap core JavaScript-->
  <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="/js/demo/datatables-demo.js"></script>

</body>

</html>

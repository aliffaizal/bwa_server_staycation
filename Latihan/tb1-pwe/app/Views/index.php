
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>TB 2 PWE</title>

  <!-- Custom fonts for this template -->
  <link href="<?= base_url() ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?= base_url() ?>/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/leaflet/leaflet.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="<?= base_url() ?>/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">



    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">



        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800"></h1>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            <a href="/home/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Tambah Data</a>
            <a href="/home/grafik" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"> Tampil Grafik</a>  
            <a href="/home/datapdf" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"> Tampil Data PDF</a>  
          </div>
            <div class="card-body">
              <div class="table-responsive">
                
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">No. Pelanggan</th>
                        <th scope="col">Nama Pelanggan</th>
                        <th scope="col">Jenis Keanggotaan</th>
                        <th scope="col">Telp</th>
                        <th scope="col">Pengaturan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($pelanggan as $p) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $p['nomor_pelanggan']; ?></td>
                            <td><?= $p['nama_pelanggan']; ?></td>
                            <td><?= $p['jenis_keanggotaan']; ?></td>
                            <td><?= $p['telp']; ?></td>
                            <td>
                            <a href="/home/edit/<?= $p['id']; ?>" class="btn btn-warning">Edit</a>
                            <form action="/home/<?= $p['id']; ?>" method="post" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Delete</button>
                            </form>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<div id="maps"></div>
  <!-- <canvas id="myChart" width="50" height="50"></canvas> -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->



  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url() ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url() ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url() ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url() ?>/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?= base_url() ?>/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url() ?>/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?= base_url() ?>/js/demo/datatables-demo.js"></script>
  <script src="<?= base_url() ?>/leaflet/leaflet.js"></script>
  <script>
    var map = L.map('maps').setView({ lat : 0.7893, lon : 113.9213 }, 10);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 19,

    }).addTo(map);
    L.marker({lat : 0.7893, lon : 113.9213}).bindPopup('Alamat').addTo(map);
  </script>
  <style>
    #maps {
      height: 200px;
    }
  </style>


  <script src="<?= base_url() ?>/vendor/chart.js/Chart.min.js"></script>
  <script src="path/to/chartjs/dist/chart.js"></script>
  <script>
var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>
</body>

</html>

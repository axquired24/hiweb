<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Jualan Batik Alfatih24</title>
  <link rel="stylesheet" href="../bs3_dist/css/bootstrap.min.css" />
</head>
<body>
  <div class="row">
    <div class="container">
      <h2 class="page-header">Jualan Batik
        <div class="col-lg-6 pull-right">
          <form action="./?ur=konten/hasil_cari" method="post">
            <div class="input-group">
              <input name="barang_cari" type="text" class="form-control" placeholder="Cari produk disini" required>
              <span class="input-group-btn">
                <button class="btn btn-success" type="submit">Cari !</button>
              </span>
            </div><!-- /input-group -->
            </form>
          </div><!-- /.col-lg-6 -->      
      </h2>
    </div>
  </div>
  <div class="row">
    <div class="container">
      <div class="col-md-4">
        <?php
          error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
          include "koneksi.php";      
          $list_barang  = "ur=konten/list_barang";
          $daftar_harga = "ur=konten/daftar_harga";
          $detail_barang = "ur=konten/detail_barang";
          $manajemen_produk = "ur=manajemen_store/manajemen_produk";
          include "navmenu.php";
         // Buat Menu 
        ?>      
      </div>
      <div class="col-md-8">
        <?php          
           // Buat Konten
          // $uriget = decode($_SERVER['REQUEST_URI']);        
          $file = $_GET[ur];
          if(! isset($file))
          {
            include "konten/home.php";
          }
          else          
          {
            include $file.".php";
          }
        ?>
      </div>
    </div>
  </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Jualan Batik Alfatih24</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
</head>
<body>
  <div class="row">
    <div class="container">
      <h2 class="page-header">Jualan Batik
        <div class="col-lg-6 pull-right">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Cari produk disini">
              <span class="input-group-btn">
                <button class="btn btn-success" type="button">Cari !</button>
              </span>
            </div><!-- /input-group -->
          </div><!-- /.col-lg-6 -->      
      </h2>
    </div>
  </div>
  <div class="row">
    <div class="container">
      <div class="col-md-4">
        <?php
          error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
          include "../AES/function.php";
          $list_barang  = paramEncrypt("ur=konten/list_barang");
          $daftar_harga = paramEncrypt("ur=konten/daftar_harga");
          include "navmenu.php";
         // Buat Menu 
        ?>      
      </div>
      <div class="col-md-8">
        <?php          
           // Buat Konten
          $uriget = decode($_SERVER['REQUEST_URI']);
          
          $file = $uriget[ur];
          include $file.".php";
        ?>
      </div>
    </div>
  </div>
</body>
</html>

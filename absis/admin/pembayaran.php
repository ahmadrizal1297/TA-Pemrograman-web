<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin | ahmad rizal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="../assets/images/favicon.png">

    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/custom.css">
    <link rel="stylesheet" href="../assets/css/custom-admin.css">

  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-light fixed-top">
        <a class="navbar-brand menu-logo" href="#" >
          <img src="../assets/images/logo-white.png" alt="Absis"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link text-light" href="home.php">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="langganan.php">Langganan</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="pembayaran.php">Pembayaran</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="bantuan.php">Bantuan</a></li>
          </ul>

          <ul class="nav nav-pills">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle btn-light btn-sm" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Ahmad Rizal </a>
              <div class="dropdown-menu dropdown-menu-right text-right menu-profil">
                <a class="dropdown-item" href="profil.php">Lihat Profil</a>
                <a class="dropdown-item" href="langganan.php">Daftar Langganan</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="pengaturan.php">Pengaturan</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../login.php">Keluar</a>
              </div>
            </li>
          </ul>

        </div>
      </nav>
    </header>

    <br>
    <main role="main" class="mt-4">
      <section>

        <div class="container pad-tb-5">
          <div class="row">

              <div class="col-md-6">
                <h3>Tagihan Pembayaran</h3>
              </div>

              <div class="col-md-6">

              </div>
              <div class="col-md-12"><hr><br></div>

              <div class="col-md-4">
                <div class="card text-white bg-danger mb-3">
                  <div class="card-header">Bulan November</div>
                  <div class="card-body">
                    <h5 class="card-title">Rp. 100.000 ,-</h5>
                    <p class="card-text">Status : Belum terbayar.<br>Batas waktu 8 hari lagi.</p>
                  </div>
                </div>

                <div class="card bg-light mb-3">
                  <div class="card-header">Saldo Akun</div>
                  <div class="card-body">
                    <h5 class="card-title">Rp. 450.000 ,-</h5>
                    <p class="card-text">Pembayaran akan otomatis terpotong dari saldo anda.</p>
                    <button type="button" class="btn btn-block btn-primary"><i class="fa fa-money mr-3"></i>Bayar Tagihan Sekarang </button>
                  </div>
                </div>
              </div>

              <div class="col-md-8">
                <div class="card mb-5">
                  <h5 class="card-header">Detail Tagihan</h5>
                  <div class="card-body">
                    <p class="alert alert-success">
                      <i class="fa fa-info mr-3"></i>Info : Batas pembayaran perbulan dilakukan setiap <strong>tanggal 10.</strong>
                    </p>
                    <table class="table">
                      <tr>
                        <th>No.</th>
                        <th>Aplikasi</th>
                        <th>Potongan</th>
                        <th class="text-right">Harga</th>
                      </tr>
                      <tr>
                        <td>1.</td>
                        <td>e-Perpustakaan</td>
                        <td>-</td>
                        <td class="text-right"><label class="badge badge-info">Rp. 15.000</label></td>
                      </tr>

                      <tr>
                        <td>2.</td>
                        <td>Try Out Online</td>
                        <td>-</td>
                        <td class="text-right"><label class="badge badge-info">Rp. 30.000</label></td>
                      </tr>

                      <tr>
                        <td>3.</td>
                        <td>Remote Dapodik</td>
                        <td>-</td>
                        <td class="text-right"><label class="badge badge-info">Rp. 55.000</label></td>
                      </tr>

                      <tr>
                        <td colspan="2"></td>
                        <td class="text-right">Total :</td>
                        <td class="text-right"><label class="badge badge-success">Rp. 100.000</label></td>
                      </tr>
                    </table>

                  </div>
                </div>

                <div class="card">
                  <h5 class="card-header">History Pembayaran</h5>
                  <div class="card-body">
                    <table class="table">
                      <tr>
                        <th>No.</th>
                        <th>Bulan</th>
                        <th>Detail</th>
                        <th>Tanggal Pembayaran</th>
                        <th class="text-right">Total</th>
                      </tr>
                      <tr>
                        <td>1.</td>
                        <td>Oktober 2018</td>
                        <td><a href="#">Lihat Detail</a></td>
                        <td><label class="badge badge-disabled">14:43, 7 Okt 2018</label></td>
                        <td class="text-right"><label class="badge badge-disabled">Rp. 100.000</label></td>
                      </tr>
                      <tr>
                        <td>2.</td>
                        <td>September 2018</td>
                        <td><a href="#">Lihat Detail</a></td>
                        <td><label class="badge badge-disabled">15:22, 5 Sep 2018</label></td>
                        <td class="text-right"><label class="badge badge-disabled">Rp. 100.000</label></td>
                      </tr>
                      <tr>
                        <td>3.</td>
                        <td>Agustus 2018</td>
                        <td><a href="#">Lihat Detail</a></td>
                        <td><label class="badge badge-disabled">11:55, 10 Agt 2018</label></td>
                        <td class="text-right"><label class="badge badge-disabled">Rp. 72.500</label></td>
                      </tr>
                      <tr>
                        <td>4.</td>
                        <td>Juli 2018</td>
                        <td><a href="#">Lihat Detail</a></td>
                        <td><label class="badge badge-disabled">09:42, 7 Jul 2018</label></td>
                        <td class="text-right"><label class="badge badge-disabled">Rp. 25.000</label></td>
                      </tr>
                      <tr>
                        <td>5.</td>
                        <td>Juni 2018</td>
                        <td><a href="#">Lihat Detail</a></td>
                        <td><label class="badge badge-disabled">10:12, 7 Jun 2018</label></td>
                        <td class="text-right"><label class="badge badge-disabled">Rp. 25.000</label></td>
                      </tr>
                    </table>
                    <center>
                      <div class="btn-group" role="group">
                        <button type="button" class="btn btn-sm btn-primary"><i class="fa fa-arrow-left"></i></button>
                        <button type="button" class="btn btn-sm btn-light">1</button>
                        <button type="button" class="btn btn-sm btn-primary">2</button>
                        <button type="button" class="btn btn-sm btn-primary"><i class="fa fa-arrow-right"></i></button>
                      </div>
                    </center>

                  </div>
                </div>


              </div>
          </div>
        </div>
      </section>

    </main>

    <script src="../assets/bootstrap/js/jquery-3.3.1.slim.min.js"></script>
    <script src="../assets/bootstrap/js/popper.min.js"></script>
    <script src="../assets/bootstrap/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>

  </body>
</html>

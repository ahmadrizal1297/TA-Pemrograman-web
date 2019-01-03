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

        <div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="topup" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="detaillabel">Detail Aplikasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-4">
                      <img src="../assets/images/admin/default_apps.png" width="100%" height="auto" class="rounded img-thumbnail" />
                      <center class="mt-3">
                        <label class="badge badge-info">Rp. 15.000 / bulan</label>
                        <label class="badge badge-success">4.5k Berlangganan</label>
                      </center>
                  </div>
                  <div class="col-sm-8">
                    <h3>e-Perpustakaan</h3>
                    <br />
                    <p>Aplikasi untuk mengelola data perpustakaan sekolah. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>
                    <p> the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <br />
                    <h4>Screenshots</h4>
                    <br />
                    <div class="row">
                      <div class="col-sm-4">
                        <a href="#"><img src="../assets/images/admin/default_apps.png" width="100%" height="auto" class="rounded img-thumbnail" /></a>
                      </div>
                      <div class="col-sm-4">
                        <a href="#"><img src="../assets/images/admin/default_apps.png" width="100%" height="auto" class="rounded img-thumbnail" /></a>
                      </div>
                      <div class="col-sm-4">
                        <a href="#"><img src="../assets/images/admin/default_apps.png" width="100%" height="auto" class="rounded img-thumbnail" /></a>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <label class="badge badge-info">Berlangganan sejak 20:45:03 14 Agustus 2016</label>
              </div>
            </div>
          </div>
        </div>




        <div class="jumbotron">
          <div class="container pad-tb-5">
            <center>

            <h1 class="display-4">Selamat Datang</h1>
            <p>Perkenalkan, aplikasi pembantu sistem sekolah. Kami adalah penyedia layanan bagi pihak sekolah untuk mengatur sistem sekolah.<br />Kami memberikan kemudahan bagi para pengguna baik dalam penggunaan dan pemrosesan data sekolah anda.</p>

            <form class="w-25">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari aplikasi sekolah">
                <div class="input-group-append">
                  <a class="btn btn-primary" href="search.php"><i class="fa fa-search"></i></a>
                </div>
              </div>
            </form>
          </center>

          </div>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-md-3 box-features pt-3 animation">
                <img src="../assets/images/admin/default_apps.png" alt="Data Akurat" width="100%">
                <br /><br />
                <center>
                  <h4>e-Perpustakaan</h4>

                  <label class="badge badge-info">Rp. 15.000 / bulan</label>
                  <p class="text-muted">Aplikasi untuk mengelola data perpustakaan sekolah.</p>
                  <a href="#" class="btn btn-success"><i class="fa fa-check"></i></a>
                  &nbsp;
                  <a href="#" data-toggle="modal" data-target="#detail" class="btn btn-outline-primary">Lihat Detail</a>
                </center>
            </div>

            <div class="col-md-3 box-features pt-3 animation">
                <img src="../assets/images/admin/default_apps.png" alt="Data Akurat" width="100%">
                <br /><br />
                <center>
                  <h4>Try out Online</h4>

                  <label class="badge badge-info">Rp. 30.000 / bulan</label>
                  <p class="text-muted">Aplikasi berisi paket dari ulangan, ujian, dan latihan online.</p>
                  <a href="#" class="btn btn-success"><i class="fa fa-check"></i></a>
                  &nbsp;
                  <a href="#" data-toggle="modal" data-target="#detail" class="btn btn-outline-primary">Lihat Detail</a>
                </center>
            </div>

            <div class="col-md-3 box-features pt-3 animation">
                <img src="../assets/images/admin/default_apps.png" alt="Data Akurat" width="100%">
                <br /><br />
                <center>
                  <h4>Absensi Siswa</h4>

                  <label class="badge badge-info">Rp. 7.999 / bulan</label>
                  <label class="badge badge-warning">20%</label>
                  <p class="text-muted">Pencatatan data siswa dari sekolah dan memberikan laporan.</p>
                  <a href="#" class="btn btn-danger">Langganan</a>
                  &nbsp;
                  <a href="#" class="btn btn-outline-primary">Lihat Detail</a>
                </center>
            </div>

            <div class="col-md-3 box-features pt-3 animation">
                <img src="../assets/images/admin/default_apps.png" alt="Data Akurat" width="100%">
                <br /><br />
                <center>
                  <h4>Absensi Karyawan</h4>

                  <label class="badge badge-info">Rp. 19.999 / bulan</label>
                  <p class="text-muted">Aplikasi untuk mengelola absensi karyawan dan staff sekolah.</p>
                  <a href="#" class="btn btn-danger">Langganan</a>
                  &nbsp;
                  <a href="#" class="btn btn-outline-primary">Lihat Detail</a>
                </center>
            </div>

            <div class="col-md-3 box-features pt-3 animation">
                <img src="../assets/images/admin/default_apps.png" alt="Data Akurat" width="100%">
                <br /><br />
                <center>
                  <h4>e-Rapor</h4>

                  <label class="badge badge-info">Rp. 29.999 / bulan</label>
                  <p class="text-muted">Aplikasi rapor siswa dalam bentuk digital dan otomatis.</p>
                  <a href="#" class="btn btn-danger">Langganan</a>
                  &nbsp;
                  <a href="#" class="btn btn-outline-primary">Lihat Detail</a>
                </center>
            </div>

            <div class="col-md-3 box-features pt-3 animation">
                <img src="../assets/images/admin/default_apps.png" alt="Data Akurat" width="100%">
                <br /><br />
                <center>
                  <h4>e-Laboratorium</h4>

                  <label class="badge badge-info">Rp. 15.000 / bulan</label>
                  <label class="badge badge-warning">15%</label>
                  <p class="text-muted">Aplikasi jadwal, fasilitas, dari laboratorium.</p>
                  <a href="#" class="btn btn-danger">Langganan</a>
                  &nbsp;
                  <a href="#" class="btn btn-outline-primary">Lihat Detail</a>
                </center>
            </div>

            <div class="col-md-3 box-features pt-3 animation">
                <img src="../assets/images/admin/default_apps.png" alt="Data Akurat" width="100%">
                <br /><br />
                <center>
                  <h4>Remote Dapodik</h4>

                  <label class="badge badge-info">Rp. 55.000 / bulan</label>
                  <p class="text-muted">Fitur untuk melakukan remote server lokal melalui tempat lain.</p>
                  <a href="#" class="btn btn-success"><i class="fa fa-check"></i></a>
                  &nbsp;
                  <a href="#" class="btn btn-outline-primary">Lihat Detail</a>
                </center>
            </div>

            <div class="col-md-3 box-features pt-3 animation">
                <img src="../assets/images/admin/default_apps.png" alt="Data Akurat" width="100%">
                <br /><br />
                <center>
                  <h4>Online Tugas</h4>

                  <label class="badge badge-info">Rp. 20.000 / bulan</label>
                  <p class="text-muted">Aplikasi untuk mengelola tugas siswa secara online.</p>
                  <a href="#" class="btn btn-danger">Langganan</a>
                  &nbsp;
                  <a href="#" class="btn btn-outline-primary">Lihat Detail</a>
                </center>
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

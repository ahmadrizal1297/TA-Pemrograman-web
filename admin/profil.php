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

        <div class="modal fade" id="topup" tabindex="-1" role="dialog" aria-labelledby="topup" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="topuplabel">Beli Saldo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-4">
                    <a href="#">
                      <img src="../assets/images/admin/paket_1.png" width="100%" height="auto" class="rounded img-thumbnail" />
                    </a>
                  </div>
                  <div class="col-sm-4">
                    <a href="#">
                      <img src="../assets/images/admin/paket_2.png" width="100%" height="auto" class="rounded img-thumbnail" />
                    </a>
                  </div>
                  <div class="col-sm-4">
                    <a href="#">
                      <img src="../assets/images/admin/paket_3.png" width="100%" height="auto" class="rounded img-thumbnail" />
                    </a>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <p>Pembayaran dapat dilakukan di indomart, alfamart, bank bri, bank mandiri dan bank jateng terdekat.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="container pad-tb-5">
          <div class="row">
              <div class="col-md-12">
                <a href="pengaturan.php" class=" float-right btn btn-sm btn-primary"><i class="fa fa-gear"></i></a>
                <a href="#topup" class=" float-right btn btn-sm btn-success mr-2" data-toggle="modal" data-target="#topup"><i class="fa fa-money"></i></a>
              </div>
              <div class="col-md-12 mb-5">
                <div class="text-center">
                  <img src="../assets/images/admin/profile.jpg" class="rounded img-thumbnail mx-auto mb-3" width="150" alt="Profil Photo" />
                  <h4>Ahmad Rizal</h4>
                  <span class="text-muted">Saldo tersisa : Rp. 450.000 ,-</span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <h5 class="card-header">Informasi Pribadi</h5>
                  <div class="card-body">
                    <table class="table-profil">
                      <tr>
                        <th width="30%">Email</th>
                        <td width="20">:</td>
                        <td>ahmad.rizal@gmail.com</td>
                      </tr>
                      <tr>
                        <th width="30%">No Telp.</th>
                        <td width="20">:</td>
                        <td>0812 345 678 910</td>
                      </tr>
                      <tr>
                        <th width="30%">Jenis Kelamin</th>
                        <td width="20">:</td>
                        <td>Laki-laki</td>
                      </tr>
                      <tr>
                        <th width="30%">Pekerjaan </th>
                        <td width="20">:</td>
                        <td>Staff IT</td>
                      </tr>
                      <tr>
                        <th>Alamat 1</th>
                        <td width="20">:</td>
                        <td>Jl. Imam Bonjol Nomor 207, Kota Semarang, Indonesia.</td>
                      </tr>
                      <tr>
                        <th>Alamat 2</th>
                        <td width="20">:</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td colspan="3"><hr></td>
                      </tr>
                      <tr>
                        <th width="30%">Username</th>
                        <td width="20">:</td>
                        <td>remaginz</td>
                      </tr>
                      <tr>
                        <th width="30%">Password</th>
                        <td width="20">:</td>
                        <td><label class="badge badge-primary">Last change on 20/6/2018</label></td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="card">
                  <h5 class="card-header">Informasi Sekolah</h5>
                  <div class="card-body">
                    <table class="table-profil">
                      <tr>
                        <th width="30%">Nama Sekolah</th>
                        <td width="20">:</td>
                        <td>SMK Wikrama 1 Jepara</td>
                      </tr>
                      <tr>
                        <th width="30%">No Telp.</th>
                        <td width="20">:</td>
                        <td>+21 443 120 23</td>
                      </tr>
                      <tr>
                        <th width="30%">Email</th>
                        <td width="20">:</td>
                        <td>smkwkm1jepara@gmail.com</td>
                      </tr>
                      <tr>
                        <th width="30%">Website</th>
                        <td width="20">:</td>
                        <td>www.smkwikrama1jepara.sch.id</td>
                      </tr>
                      <tr>
                        <th>Alamat 1</th>
                        <td width="20">:</td>
                        <td>Jl. Keling Nomor 31 KM 5, Kota Jepara, Indonesia.</td>
                      </tr>
                    </table>
                  </div>
                </div>

              </div>

              <div class="col-md-12 mt-5">

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

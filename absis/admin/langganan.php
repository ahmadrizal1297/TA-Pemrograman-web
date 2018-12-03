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


      <div class="modal fade" id="berhentilangganan" tabindex="-1" role="dialog" aria-labelledby="berhentilangganan" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Berhenti Langganan?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Anda yakin ingin berhenti berlangganan?, akses akan dimatikan setelah anda memutuskan untuk berhenti langganan.
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-secondary">Berhenti Langganan</button>
            </div>
          </div>
        </div>
      </div>

      <section>

        <div class="container pad-tb-5">
          <div class="row">

              <div class="col-md-6">
                <h3>Daftar Aplikasi Berlangganan</h3>
              </div>

              <div class="col-md-6">
                <form>
                  <div class="input-group mb-3 float-right w-50">
                    <input type="text" class="form-control" placeholder="Cari aplikasi sekolah">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
                </form>
              </div>


              <div class="col-md-12">

                <table class="table">
                  <tr>
                    <th>No.</th>
                    <th>Aplikasi</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                    <th>Potongan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                  <tr>
                    <td>1.</td>
                    <td>e-Perpustakaan</td>
                    <td><label class="badge badge-info">Rp. 15.000</label></td>
                    <td>Aplikasi untuk mengelola data perpustakaan sekolah.</td>
                    <td>-</td>
                    <td><label class="badge badge-success">Aktif</label></td>
                    <td>
                      <div class="btn-group" role="group">
                        <a href="detail.php" class="btn btn-sm btn-primary" title="Detail"><i class="fa fa-search"></i></a>
                        <button type="button" class="btn btn-sm btn-secondary" title="Matikan Akses"><i class="fa fa-close"></i></button>
                        <button type="button" class="btn btn-sm btn-secondary" title="Berhenti Berlangganan" data-toggle="modal" data-target="#berhentilangganan"><i class="fa fa-trash"></i></button>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>2.</td>
                    <td>Try Out Online</td>
                    <td><label class="badge badge-info">Rp. 30.000</label></td>
                    <td>Aplikasi berisi paket dari ulangan, ujian, dan latihan online.</td>
                    <td>-</td>
                    <td><label class="badge badge-success">Aktif</label></td>
                    <td>
                      <div class="btn-group" role="group">
                        <button type="button" class="btn btn-sm btn-primary" title="Detail"><i class="fa fa-search"></i></button>
                        <button type="button" class="btn btn-sm btn-secondary" title="Matikan Akses"><i class="fa fa-close"></i></button>
                        <button type="button" class="btn btn-sm btn-secondary" title="Berhenti Berlangganan" data-toggle="modal" data-target="#berhentilangganan"><i class="fa fa-trash"></i></button>
                      </div>
                    </td>
                  </tr>

                  <tr class="text-muted">
                    <td>3.</td>
                    <td>Absensi Karyawan</td>
                    <td><label class="badge badge-info">Rp. 19.999</label></td>
                    <td>Aplikasi untuk mengelola absensi karyawan dan staff sekolah.</td>
                    <td>-</td>
                    <td><label class="badge badge-disabled">Akses Mati</label></td>
                    <td>
                      <div class="btn-group" role="group">
                        <button type="button" class="btn btn-sm btn-primary" title="Detail"><i class="fa fa-search"></i></button>
                        <button type="button" class="btn btn-sm btn-secondary" title="Berhenti Berlangganan" data-toggle="modal" data-target="#berhentilangganan"><i class="fa fa-trash"></i></button>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>4.</td>
                    <td>Remote Dapodik</td>
                    <td><label class="badge badge-info">Rp. 55.000</label></td>
                    <td>Fitur untuk melakukan remote server lokal melalui tempat lain.</td>
                    <td>-</td>
                    <td><label class="badge badge-success">Aktif</label></td>
                    <td>
                      <div class="btn-group" role="group">
                        <button type="button" class="btn btn-sm btn-primary" title="Detail"><i class="fa fa-search"></i></button>
                        <button type="button" class="btn btn-sm btn-secondary" title="Matikan Akses"><i class="fa fa-close"></i></button>
                        <button type="button" class="btn btn-sm btn-secondary" title="Berhenti Berlangganan" data-toggle="modal" data-target="#berhentilangganan"><i class="fa fa-trash"></i></button>
                      </div>
                    </td>
                  </tr>
                </table>
                <center>
                  <div class="btn-group" role="group">
                    <button type="button" class="btn btn-sm btn-primary"><i class="fa fa-arrow-left"></i></button>
                    <button type="button" class="btn btn-sm btn-light">1</button>
                    <button type="button" class="btn btn-sm btn-primary">2</button>
                    <button type="button" class="btn btn-sm btn-primary">3</button>
                    <button type="button" class="btn btn-sm btn-primary">4</button>
                    <button type="button" class="btn btn-sm btn-primary"><i class="fa fa-arrow-right"></i></button>
                  </div>
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

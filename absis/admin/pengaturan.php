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
              <div class="col-md-12 mb-5">
                <div class="text-center">
                  <img src="../assets/images/admin/profile.jpg" class="rounded img-thumbnail mx-auto mb-3" width="150" alt="Profil Photo" />
                  <h4>Ahmad Rizal</h4>
                  <button class="btn btn-sm btn-primary">Upload Photo</button>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <h5 class="card-header">Informasi Pribadi</h5>
                  <div class="card-body">

                    <form class="needs-validation">
                      <div class="row">
                        <div class="col-md-6 mb-3">
                          <label for="namadepan">Nama Depan</label>
                          <input class="form-control" id="namadepan" placeholder="" value="Ahmad" required="" type="text">
                          <div class="invalid-feedback">
                            Input fields is required.
                          </div>
                        </div>
                        <div class="col-md-6 mb-3">
                          <label for="namabelakang">Nama Belakang</label>
                          <input class="form-control" id="namabelakang" placeholder="" value="Rizal" required="" type="text">
                          <div class="invalid-feedback">
                            Input fields is required.
                          </div>
                        </div>
                      </div>

                      <div class="mb-3">
                        <label for="jk">Jenis Kelamin</label><br>
                        <input type="radio" value="Laki-laki" name="jk" class="mr-2" checked> Laki-laki
                        <input type="radio" value="Perempuan" name="jk" class="ml-4 mr-2"> Perempuan
                        <div class="invalid-feedback">
                          Please enter a valid No Telp.
                        </div>
                      </div>

                      <div class="mb-3">
                        <label for="notelp">No Telp.</label>
                        <input class="form-control" id="notelp" value="0812 345 678 910" type="text">
                        <div class="invalid-feedback">
                          Please enter a valid No Telp.
                        </div>
                      </div>

                      <div class="mb-3">
                        <label for="pekerjaan">Pekerjaan</label>
                        <input class="form-control" id="pekerjaan" value="Staff IT" type="text">
                        <div class="invalid-feedback">
                          Please enter a valid No Telp.
                        </div>
                      </div>

                      <div class="mb-3">
                        <label for="alamat1">Alamat 1</label>
                        <textarea class="form-control" id="alamat1" required="">Jl. Imam Bonjol Nomor 207, Kota Semarang, Indonesia.
                        </textarea>
                        <div class="invalid-feedback">
                          Input fields is required.
                        </div>
                      </div>

                      <div class="mb-3">
                        <label for="alamat2">Alamat 2</label>
                        <textarea class="form-control" id="alamat2" required=""></textarea>
                        <div class="invalid-feedback">
                          Input fields is required.
                        </div>
                      </div>

                      <div class="mb-3">
                        <label for="email">Email</label>
                        <input class="form-control" id="email" value="ahmad.rizal@gmail.com" placeholder="you@example.com" type="email">
                        <div class="invalid-feedback">
                          Please enter a valid email address.
                        </div>
                      </div>

                      <div class="mb-3">
                        <label for="Username">Username</label>
                        <input class="form-control" id="Username" value="ahmadrizal" type="text">
                        <div class="invalid-feedback">
                          Please enter a valid Username.
                        </div>
                      </div>

                      <br>
                      <button class="btn btn-success" type="submit">Simpan</button>

                    </form>
                  </div>
                </div>

              </div>

              <div class="col-md-6">
                <div class="card">
                  <h5 class="card-header">Informasi Sekolah</h5>
                  <div class="card-body">
                    <form class="needs-validation">

                      <div class="mb-3">
                        <label for="sekolah">Nama Sekolah</label>
                        <input class="form-control" id="sekolah" value="SMK Wikrama 1 Jepara" type="email">
                        <div class="invalid-feedback">
                          Please enter a valid email address.
                        </div>
                      </div>

                      <div class="mb-3">
                        <label for="notelp">No Telp.</label>
                        <input class="form-control" id="notelp" value="+21 345 678 910" type="text">
                        <div class="invalid-feedback">
                          Please enter a valid No Telp.
                        </div>
                      </div>

                      <div class="mb-3">
                        <label for="email1">Email</label>
                        <input class="form-control" id="email1" value="smkwikrama1jepara@gmail.com" type="email">
                        <div class="invalid-feedback">
                          Please enter a valid email address.
                        </div>
                      </div>

                      <div class="mb-3">
                        <label for="Website">Website</label>
                        <input class="form-control" id="Website" value="www.smkwikrama" type="text">
                        <div class="invalid-feedback">
                          Please enter a valid No Telp.
                        </div>
                      </div>

                      <div class="mb-3">
                        <label for="alamat1">Alamat 1</label>
                        <textarea class="form-control" id="alamat1" required="">Jl. Imam Bonjol Nomor 207, Kota Semarang, Indonesia.
                        </textarea>
                        <div class="invalid-feedback">
                          Input fields is required.
                        </div>
                      </div><br>
                      <button class="btn btn-success" type="submit">Simpan</button>

                    </form>
                  </div>
                </div>

                <div class="card mt-5">
                  <h5 class="card-header">Ganti Password</h5>
                  <div class="card-body">

                    <form class="needs-validation">

                      <div class="mb-3">
                        <label for="password">Password</label>
                        <input class="form-control" id="password" placeholder="Min. 6 Characters" type="password">
                        <div class="invalid-feedback">
                          Please enter a valid password.
                        </div>
                      </div>

                      <div class="mb-3">
                        <label for="repassword">Re-password</label>
                        <input class="form-control" id="repassword" placeholder="Re-enter password" type="password">
                        <div class="invalid-feedback">
                          Please enter a valid password.
                        </div>
                      </div>
                      <br>
                      <button class="btn btn-primary" type="submit">Ganti Password</button>

                    </form>
                  </div>
                </div>

              </div>

              <div class="col-md-12">

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

<?php

require "config.php";

$login = mysqli_query($connect, "SELECT * FROM login");
$kategori = mysqli_query($connect, "SELECT * FROM kategori");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="https://petik.or.id/wp-content/uploads/2023/11/photo1699426632.jpeg">
  <title>PMBP - PeTIK
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/2bb9122efe.js" crossorigin="anonymous"></script>
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-4">
                <a href="../../index.php">
                  <img src="photo_2023-12-28_08-45-25-removebg-preview.png" alt="" width="50%" style="margin-left: 8rem;">
                </a>
                <div class="card-header pb-0 text-left bg-transparent mt-3">
                  <h3 class="">PMBP - PeTIK <br>Gelombang 1 Dan 2</h3>
                  <p class="mb-0 mt-3">1 Desember 2023 - 12 Februari 2024</p>
                </div>
                <?php

                $user = $_POST['user'];
                $password = $_POST['pass'];
                $pass = md5($password);
                if (isset($_POST['masuk'])) {
                  foreach ($login as $lg) {
                    // $log = mysqli_query($connect, "SELECT * FROM login WHERE ")
                    foreach ($kategori as $kat) {
                      if ($user == $lg["username"] && $pass == $lg["password"]) {
                        if ($lg["kat_id"] == 2) {
                          header("Location:../detail_user/index.php?id=$lg[santri_id]");
                        } else {
                          header('Location:../dashboard/dashboard.php');
                        }
                      } elseif ($user == $lg["username"] || $pass == $lg["password"]) {
                ?>
                        <script>
                          swal({
                            title: "Perhatian !",
                            text: "Username atau Password salah",
                            icon: "warning",
                            button: "Tutup",
                          });
                        </script>
                <?php
                      }
                    }
                  }
                }
                ?>

                <div class="card-body">
                  <form role="form" method="post">
                    <label>Username / Email</label>
                    <div class="mb-3">
                      <input type="user" class="form-control" placeholder="Username or Email" name="user">
                    </div>
                    <label>Password</label>
                    <div class="mb-3">
                      <input type="password" class="form-control" placeholder="Password" name="pass">
                    </div>
                    <!-- <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                      <label class="form-check-label" for="rememberMe">Ingatkan Saya</label>
                    </div> -->
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2" name="masuk">Masuk</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-sm mx-auto">
                    Belum Punya Akun?
                    <a href="sign-up.php" class="fw-bold">Daftar</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8 ">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6 mb-5" style="background-image:url(../../img/bg.png); background-position:0rem;"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer class="footer mb-5" style="margin-right: 1rem;">
    <div class="col-lg-8 mx-auto text-center mb-4 mt-4">
      <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
        <span class="text-lg fab fa-chrome"></span>
      </a>
      <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
        <span class="text-lg fa-brands fa-x-twitter"></span>
      </a>
      <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
        <span class="text-lg fab fa-instagram"></span>
      </a>
      <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
        <span class="text-lg fab fa-linkedin"></span>
      </a>
      <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
        <span class="text-lg fab fa-facebook"></span>
      </a>
    </div>
    <!--   Core JS Files   -->
    <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->

    <div class="container">
      <div class="row">
        <div class="col-8 mx-auto text-center mt-1">
          <p class="mb-0 text-secondary">
            Copyright © <script>
              document.write(new Date().getFullYear())
            </script> Soft by PeTIK 2023
          </p>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>
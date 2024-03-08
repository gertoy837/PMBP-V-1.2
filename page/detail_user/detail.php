<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PMBP - PeTIK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <!-- Favicons -->
    <link href="img/logopetik.jpeg" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body style="background-image: url(img/6229893.jpg); background-size:cover;">

    <?php
    require "config.php";

    $query = "SELECT santri.*, wali_santri.alamat, wali_santri.nama_ayah, wali_santri.nama_ibu FROM santri INNER JOIN wali_santri ON santri.id = wali_santri.santri_id ";
    $santri = mysqli_query($connect, $query);
    foreach ($santri as $san) {
        if ($_GET["id"] == $san["id"]) {
    ?>
            <!-- ======= Header ======= -->
            <header id="header" class="fixed-top  header-transparent " style="background-color: #87C4FF;">
                <div class="container d-flex align-items-center justify-content-between">

                    <div class="logo">
                        <h1><a href="index.php?id=<?= $san["id"] ?>"><img src="./img/lgPetik-removebg-preview.png" alt=""></a></h1>
                    </div>

                    <nav id="navbar" class="navbar ">
                        <ul>
                            <li><a class="nav-link  scrollto" href="index.php?id=<?= $san["id"] ?>">Home</a></li>
                            <li><a class="nav-link  scrollto" href="about.php?id=<?= $san["id"] ?>">About</a></li>
                            <li class="dropdown">
                                <a class="nav-link" href="#" id="dropdown-user" role="button" data-toggle="dropdown" aria-expanded="false">
                                    <span class="user-states states-online ">
                                        <img src="../../img/<?= $san["foto"] ?>" width="35" alt="" class=" img-fluid rounded-circle">
                                    </span>
                                    <span class="h-lg-down dropdown-toggle">&nbsp; Hi, <?= $san["nama_panggil"] ?></span>
                                </a>
                                <ul>
                                    <li>
                                        <a class="dropdown-item" href="detail.php?id=<?= $san["id"] ?>">My Profile </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/users/change_password"> Change password </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/users/snippets/bari04001"> My Snippets </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="../login/sign-in.php"> Logout </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <i class="bi bi-list mobile-nav-toggle"></i>
                    </nav><!-- .navbar -->

                </div>
            </header><!-- End Header -->



            <div class="container mt-5" style="padding-top: 5rem; padding-bottom:10rem;">
                <div class="row">
                    <div class="col-md-3" style="border-radius:5px; background: linear-gradient(to right, #626983,#dfb6aa); ">
                        <img class="mx-auto d-block rounded-circle" width="200px" src="../../img/<?= $san["foto"] ?>" alt="" style="margin-top: 7rem;">
                        <h5 class="fw-bold text-center mt-4 text-light">Hello, </h5>
                        <h5 class="text-light text-center fw-bold "><?= $san["nama_lengkap"] ?></h5>
                        <p class="mt-3 text-center text-light">Mahasantri baru 2024-2025</p>
                    </div>
                    <div class="col-md-9">
                        <h3 class="fw-bold  text-light mt-4">Data Diri</h3>
                        <hr style="color: #fff; width:70%">
                        <div class="row" style="backdrop-filter: blur(50px);">
                            <div class="col-md-3 text-white fw-bold">
                                <p>NIK</p>
                                <p>NISN</p>
                                <p>Nama</p>
                                <p>Nama Ayah</p>
                                <p>Nama Ibu</p>
                                <p>Nama Lengkap</p>
                                <p>Nama Panggilan</p>
                                <p>Tempat Tanggal Lahir</p>
                                <p>No HP</p>
                                <p>Alamat</p>
                            </div>
                            <div class="col-md-4 text-white fw-bold">
                                <p>: <?= $san['nik'] ?></p>
                                <p>: <?= $san['nisn'] ?></p>
                                <p>: <?= $san['nama_lengkap'] ?></p>
                                <p>: <?= $san['nama_ayah'] ?></p>
                                <p>: <?= $san['nama_ibu'] ?></p>
                                <p>: <?= $san['nama_lengkap'] ?></p>
                                <p>: <?= $san['nama_panggil'] ?></p>
                                <p>: <?= $san['tmp_lahir'], ", ", $san['tgl_lahir'] ?></p>
                                <p>: <?= $san['no_hp'] ?></p>
                                <p>: <?= $san['alamat'] ?></p>
                            </div>
                            <div class="col-md text-white fw-bold">
                                <p>Ijazah :</p>
                                <img src="../../../img/<?= $san['ijazah'] ?>" class="img-thumbnail" width="40%" alt="" />
                                <p>Rapot :</p>
                                <img src="../../../img/<?= $san['rapot'] ?>" class="img-thumbnail" width="40%" alt="" />
                                <p>Kartu Keluarga :</p>
                                <img src="../../../img/<?= $san['kk'] ?>" class="img-thumbnail" width="40%" alt="" />
                            </div>
                        </div>
                <?php }
        } ?>
                    </div>
                </div>
            </div>

            <footer id="footer">

                <div class=" text-center py-3">
                    <div class="container">
                        <div class="row"><br>

                            <div class="col-lg-4 mb-2  mb-lg-0 text-left" style="text-align:left">
                                <img class="navbar-brand " src="./img/lgPetik-removebg-preview.png" height="100px" width="250px" bgcolor="dark" style="text-align: left;">

                                <div class="mt-3">
                                    <p align="left" class="text-dark"><i class="fa fa-envelope" aria-hidden="true"></i> Email <br> pmb.petik@gmail.com</p>
                                    <p align="left" class="text-dark"><i class="fa fa-phone-square" aria-hidden="true"></i> Nomor Telepon <br>0813-9396-3363</p>
                                </div>
                            </div>

                            <div class="col-lg-4 mb-5 mt-4 mb-lg-0">
                                <h4 class="text-center text-dark font-alt mb-4">Media Sosial</h4>
                                <div class="flex-row ml-6col-md-8 col-md-offset-2 mb-3">
                                    <a href="https://petik.com" target="_blank"><i class="fa-solid fa-earth-asia fa-2x"></i></a>&nbsp;&nbsp;

                                    <a href="https://www.instagram.com/petik_/" target="_blank"><i class="fa-brands fa-instagram fa-2x"></i></a>&nbsp;&nbsp;
                                    <a href="https://www.youtube.com/@petik4973" target="_blank"><i class="fa-brands fa-youtube fa-2x"></i></a>&nbsp;&nbsp;
                                    <a href="https://www.facebook.com/petikII/" target="_blank"><i class="fa-brands fa-facebook-f fa-2x"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 mb-5 mt-4 mb-lg-0">
                                <h4 class="text-left text-dark font-alt mb-4" style="text-align: left;">Lokasi Tempat</h4>

                                <p class=" mb-0 text-dark " style="text-align: left;">
                                    PeTIK - YBM PLN<br> Jl. Mandor Basar No.54, Rangkapan Jaya, <br>Kec. Pancoran Mas, Kota Depok, Jawa Barat 16434

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="background-color: #39A7FF;" class="p-3">
                    <p class="text-center" style="margin: auto; color:white"> &copy; 2024 Copyright hak cipta dilindungi oleh Undang-undang</p>
                </div>
            </footer>

            <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
            </script>

            <!-- Template Main JS File -->
            <script src="assets/js/main.js"></script>
</body>

</html>
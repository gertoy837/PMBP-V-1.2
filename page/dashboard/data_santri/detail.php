<?php

require "../config.php";

$id = $_GET['id'];

$query = "SELECT * FROM santri WHERE id = $id";
$santri = mysqli_query($connect, $query);
$santri1 = mysqli_fetch_assoc($santri);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PMBP - PeTIK</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../assets/img/logo.jpg" rel="icon">
    <link href="../assets/img/logo.jpg" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center" style="background-color: #E0F4FF;">

        <div class="d-flex align-items-center justify-content-between">
            <a href="../index.html" class="logo d-flex align-items-center">
                <img src="../assets/img/logo2-removebg-preview.png" alt="">
                <span class="d-none d-lg-block">PMBP - PeTIK</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Admin</h6> <!--//* nama -->
                            <span>Administrator</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="../users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="../users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="../pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help?</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="../../login/sign-in.php">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar" style="background-color: #87C4FF;">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link rounded-3 collapsed" href="../dashboard.php">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link rounded-3 collapsed" href="../data_akun/data_akun.php">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Data Akun</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="data_santri.php">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Data Santri</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link rounded-3 collapsed" href="../data_ws/data_ws.php">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Data Wali Santri</span>
                </a>
            </li>

        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main" style="background-color: #FFEED9;">

        <div class="pagetitle">
            <h1>Data Santri</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../dashboard.php">Home</a></li>
                    <li class="breadcrumb-item active">Data Santri <?= $santri1["nama_lengkap"] ?></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="filter d-flex justify-content-between me-4 mx-4 mt-3">
                            <a class="icon" href="data_santri.php"><button class="btn btn-outline-dark"><i class="bi bi-chevron-double-left"></i> Kembali</button></a>
                            <a class="icon" href="edit.php?id=<?= $santri1["id"] ?>"><button class="btn btn-outline-info"><i class="bi bi-pencil"></i> Edit</button></a>
                        </div>
                        <div class="card-body">
                            <img src="../../../img/<?= $santri1["foto"] ?>" class="rounded-circle mx-auto d-block object-fit-cover img-thumbnail mt-5 mb-4" style="width: 15%;" alt="...">
                            <h5 class="card-title fs-3 fw-bold text-center mb-5"><?= $santri1["nama_lengkap"] ?></h5>
                            <p class="card-title fs-5 fw-bold">Data Santri</p>
                            <div class="row row-cols-3">
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">NIK</h5>
                                        <div class="img-thumbnail">
                                            <span class="p-2 "><?= $santri1["nik"] ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">NISN</h5>
                                        <div class="img-thumbnail">
                                            <span class="p-2"><?= $santri1["nisn"] ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">Nama Lengkap</h5>
                                        <div class="img-thumbnail">
                                            <span class="p-2"><?= $santri1["nama_lengkap"] ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">Nama Panggilan</h5>
                                        <div class="img-thumbnail">
                                            <span class="p-2"><?= $santri1["nama_panggil"] ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">Tempat Tanggal Lahir</h5>
                                        <div class="img-thumbnail">
                                            <span class="p-2"><?= $santri1["tmp_lahir"], ", ", $santri1["tgl_lahir"] ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">No Hp</h5>
                                        <div class="img-thumbnail">
                                            <span class="p-2"><?= $santri1["no_hp"] ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="card-title fs-5 fw-bold">Data Wali Santri</p>
                            <div class="row row-cols-3">
                                <?php
                                $wali_santri = mysqli_query($connect, "SELECT * FROM wali_santri WHERE santri_id = $santri1[id]");
                                foreach ($wali_santri as $ws) {
                                ?>
                                    <div class="col">
                                        <div class="card-body">
                                            <h5 class="mx-1 fw-bold">Nama Ayah</h5>
                                            <div class="img-thumbnail">
                                                <span class="p-2"><?= $ws["nama_ayah"] ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card-body">
                                            <h5 class="mx-1 fw-bold">Tempat Tanggal Lahir</h5>
                                            <div class="img-thumbnail">
                                                <span class="p-2"><?= $ws["tmp_lahir_a"], ", ", $ws["tgl_lahir_a"] ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card-body">
                                            <h5 class="mx-1 fw-bold">No Hp Ayah</h5>
                                            <div class="img-thumbnail">
                                                <span class="p-2"><?= $ws["no_hp_a"] ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card-body">
                                            <h5 class="mx-1 fw-bold">Pekerjaan Ayah</h5>
                                            <div class="img-thumbnail">
                                                <span class="p-2">
                                                    <?php
                                                    if ($ws["pkj_a"] == 1) {
                                                        echo "Belum/ Tidak Bekerja";
                                                    } elseif ($ws["pkj_a"] == 2) {
                                                        echo "Mengurus Rumah Tangga";
                                                    } elseif ($ws["pkj_a"] == 3) {
                                                        echo "Pegawai Negeri Sipil";
                                                    } elseif ($ws["pkj_a"] == 4) {
                                                        echo "TNI/ Polri";
                                                    } elseif ($ws["pkj_a"] == 5) {
                                                        echo "Guru/ Dosen";
                                                    } elseif ($ws["pkj_a"] == 6) {
                                                        echo "Karyawan Swasta";
                                                    } elseif ($ws["pkj_a"] == 7) {
                                                        echo "Karyawan BUMN";
                                                    } elseif ($ws["pkj_a"] == 8) {
                                                        echo "Profesional";
                                                    } elseif ($ws["pkj_a"] == 9) {
                                                        echo "Wiraswasta";
                                                    } else {
                                                        echo "Buruh";
                                                    }
                                                    ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card-body">
                                            <h5 class="mx-1 fw-bold">Penghasilan Ayah</h5>
                                            <div class="img-thumbnail">
                                                <span class="p-2">
                                                    <?php
                                                    if ($ws["phs_a"] == 1) {
                                                        echo "-";
                                                    } elseif ($ws["phs_a"] == 2) {
                                                        echo "< 2 Juta";
                                                    } elseif ($ws["phs_a"] == 3) {
                                                        echo "2 - 5 Juta";
                                                    } elseif ($ws["phs_a"] == 4) {
                                                        echo "5 - 10 Juta";
                                                    } else {
                                                        echo "> 10 Juta";
                                                    }
                                                    ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="row row-cols-3 mt-3">
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">Nama Ibu</h5>
                                        <div class="img-thumbnail">
                                            <span class="p-2"><?= $ws["nama_ibu"] ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">Tempat Tanggal Lahir</h5>
                                        <div class="img-thumbnail">
                                            <span class="p-2"><?= $ws["tmp_lahir_i"], ", ", $ws["tgl_lahir_i"] ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">No Hp Ibu</h5>
                                        <div class="img-thumbnail">
                                            <span class="p-2"><?= $ws["no_hp_i"] ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">Pekerjaan Ibu</h5>
                                        <div class="img-thumbnail">
                                            <span class="p-2">
                                                <?php
                                                if ($ws["pkj_i"] == 1) {
                                                    echo "Belum/ Tidak Bekerja";
                                                } elseif ($ws["pkj_i"] == 2) {
                                                    echo "Mengurus Rumah Tangga";
                                                } elseif ($ws["pkj_i"] == 3) {
                                                    echo "Pegawai Negeri Sipil";
                                                } elseif ($ws["pkj_i"] == 4) {
                                                    echo "TNI/ Polri";
                                                } elseif ($ws["pkj_i"] == 5) {
                                                    echo "Guru/ Dosen";
                                                } elseif ($ws["pkj_i"] == 6) {
                                                    echo "Karyawan Swasta";
                                                } elseif ($ws["pkj_i"] == 7) {
                                                    echo "Karyawan BUMN";
                                                } elseif ($ws["pkj_i"] == 8) {
                                                    echo "Profesional";
                                                } elseif ($ws["pkj_i"] == 9) {
                                                    echo "Wiraswasta";
                                                } else {
                                                    echo "Buruh";
                                                }
                                                ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">Penghasilan Ibu</h5>
                                        <div class="img-thumbnail">
                                            <span class="p-2">
                                                <?php
                                                if ($ws["phs_i"] == 1) {
                                                    echo "-";
                                                } elseif ($ws["phs_i"] == 2) {
                                                    echo "< 2 Juta";
                                                } elseif ($ws["phs_i"] == 3) {
                                                    echo "2 - 5 Juta";
                                                } elseif ($ws["phs_i"] == 4) {
                                                    echo "5 - 10 Juta";
                                                } else {
                                                    echo "> 10 Juta";
                                                }
                                                ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <h5 class="mx-1 fw-bold">Alamat</h5>
                                    <div class="img-thumbnail">
                                        <span class="p-2"><?= $ws["alamat"] ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php
                                }
                        ?>
                        <p class="card-title fs-5 fw-bold">Berkas Santri</p>
                        <div class="row row-cols-3">
                            <div class="col">
                                <div class="card-body">
                                    <h5 class="fw-bold">Kartu Keluarga :</h5>
                                    <img src="../../../img/<?= $santri1["kk"] ?>" class="img-thumbnail" width="50%" alt="...">
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <h5 class="fw-bold">Ijazah :</h5>
                                    <img src="../../../img/<?= $santri1["ijazah"] ?>" class="img-thumbnail" width="50%" alt="...">
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <h5 class="fw-bold">Rapot :</h5>
                                    <img src="../../../img/<?= $santri1["rapot"] ?>" class="img-thumbnail" width="50%" alt="...">
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>

                </div>
            </div>

            </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>PMBP - PeTIK</span></strong>. All Rights Reserved
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/chart.js/chart.umd.js"></script>
    <script src="../assets/vendor/echarts/echarts.min.js"></script>
    <script src="../assets/vendor/quill/quill.min.js"></script>
    <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>

</body>

</html>
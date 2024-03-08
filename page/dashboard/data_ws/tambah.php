<?php

require "../config.php";

ob_start();
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
                <a class="nav-link rounded-3 collapsed" href="data_santri.php">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Data Santri</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="../data_ws/data_ws.php">
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
                    <li class="breadcrumb-item active">Data Santri</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <div class="float-end me-2 mt-4">
                                <a href="data_ws.php"><button class="btn btn-dark">Kembali</button></a>
                            </div>

                            <!-- form mulai -->
                            <form action="" method="post" enctype="multipart/form-data">
                                <p class="card-title fs-5 fw-bold">Data Wali Santri</p>
                                <div class="row row-cols-3">

                                    <div class="col">
                                        <div class="card-body">
                                            <h5 class="mx-1 fw-bold">Nama Ayah</h5>
                                            <input type="text" name="nama_a" class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card-body">
                                            <h5 class="mx-1 fw-bold">Tempat Lahir</h5>
                                            <input type="text" name="tmp_a" class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card-body">
                                            <h5 class="mx-1 fw-bold">Tanggal Lahir</h5>
                                            <input type="date" name="tgl_a" class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card-body">
                                            <h5 class="mx-1 fw-bold">No Hp Ayah</h5>
                                            <input type="text" name="no_hp_a" class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card-body">
                                            <h5 class="mx-1 fw-bold">Pekerjaan Ayah</h5>
                                            <select class="form-select" name="pkj_a">
                                                <option hidden></option>
                                                <option value="1">Belum/ Tidak Bekerja</option>
                                                <option value="2">Mengurus Rumah Tangga</option>
                                                <option value="3">Pegawai Negeri Sipil</option>
                                                <option value="4">TNI/ Polri</option>
                                                <option value="5">Guru/ Dosen</option>
                                                <option value="6">Karyawan Swasta</option>
                                                <option value="7">Karyawan BUMN</option>
                                                <option value="8">Profesional</option>
                                                <option value="9">Wiraswasta</option>
                                                <option value="10">Buruh</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card-body">
                                            <h5 class="mx-1 fw-bold">Penghasilan Ayah</h5>
                                            <select class="form-select" name="phs_a">
                                                <option hidden></option>
                                                <option value="1">-</option>
                                                <option value="2">
                                                    < 2 Juta</option>
                                                <option value="3">2 - 5 Juta</option>
                                                <option value="4">5 - 10 Juta</option>
                                                <option value="5">> 10 Juta</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-cols-3 mt-3">
                                    <div class="col">
                                        <div class="card-body">
                                            <h5 class="mx-1 fw-bold">Nama Ibu</h5>
                                            <input type="text" name="nama_i" class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card-body">
                                            <h5 class="mx-1 fw-bold">Tempat Lahir</h5>
                                            <input type="text" name="tmp_i" class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card-body">
                                            <h5 class="mx-1 fw-bold">Tanggal Lahir</h5>
                                            <input type="date" name="tgl_i" class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card-body">
                                            <h5 class="mx-1 fw-bold">No Hp Ibu</h5>
                                            <input type="text" name="no_hp_i" class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card-body">
                                            <h5 class="mx-1 fw-bold">Pekerjaan Ibu</h5>
                                            <select class="form-select" name="pkj_i">
                                                <option hidden></option>
                                                <option value="1">Belum/ Tidak Bekerja</option>
                                                <option value="2">Mengurus Rumah Tangga</option>
                                                <option value="3">Pegawai Negeri Sipil</option>
                                                <option value="4">TNI/ Polri</option>
                                                <option value="5">Guru/ Dosen</option>
                                                <option value="6">Karyawan Swasta</option>
                                                <option value="7">Karyawan BUMN</option>
                                                <option value="8">Profesional</option>
                                                <option value="9">Wiraswasta</option>
                                                <option value="10">Buruh</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card-body">
                                            <h5 class="mx-1 fw-bold">Penghasilan Ibu</h5>
                                            <select class="form-select" name="phs_i">
                                                <option hidden></option>
                                                <option value="1">-</option>
                                                <option value="2">
                                                    < 2 Juta</option>
                                                <option value="3">2 - 5 Juta</option>
                                                <option value="4">5 - 10 Juta</option>
                                                <option value="5">> 10 Juta</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card-body">
                                            <h5 class="mx-1 fw-bold">Nama santri</h5>
                                            <select class="form-select" name="nama">
                                                <option hidden></option>
                                                <?php
                                                $santri = mysqli_query($connect, "SELECT * FROM santri");
                                                foreach ($santri as $san) {
                                                ?>
                                                    <option value="<?= $san['id'] ?>"><?= $san['nama_lengkap'] ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="card-body">
                                            <h5 class="mx-1 fw-bold">Alamat <i class="fa fa-location-dot"></i></h5>
                                            <textarea name="alamat" id="" cols="20" rows="5" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-outline-success float-end me-4 mt-3" name="simpan"><i class="bi bi-save2"></i> Simpan</button>
                            </form>
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

<?php

$kirim = $_POST['simpan'];

// Data Walisantri
// ayah
$nama_ayah = $_POST['nama_a'];
$tmp_lahir_a = $_POST['tmp_a'];
$tgl_lahir_a = $_POST['tgl_a'];
$nom_tlp_ayah = $_POST['no_hp_a'];
$pekerjaan_ayah = $_POST['pkj_a'];
$penghasilan_ayah = $_POST['phs_a'];
// ibu
$nama_ibu = $_POST['nama_i'];
$tmp_lahir_i = $_POST['tmp_i'];
$tgl_lahir_i = $_POST['tgl_i'];
$nom_tlp_ibu = $_POST['no_hp_i'];
$pekerjaan_ibu = $_POST['pkj_i'];
$penghasilan_ibu = $_POST['pkj_i'];

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

$query = "INSERT INTO wali_santri (nama_ayah, tmp_lahir_a, tgl_lahir_a, no_hp_a, pkj_a, phs_a, nama_ibu, tmp_lahir_i, tgl_lahir_i, no_hp_i, pkj_i, phs_i, alamat, santri_id) 
VALUES ('$nama_ayah', '$tmp_lahir_a', '$tgl_lahir_a','$nom_tlp_ayah','$pekerjaan_ayah','$penghasilan_ayah','$nama_ibu', '$tmp_lahir_i', '$tgl_lahir_i', '$nom_tlp_ibu','$pekerjaan_ibu','$penghasilan_ibu','$alamat', '$nama')";

if (isset($kirim)) {
    mysqli_query($connect, $query);

    ob_clean();
    header("Location:data_ws.php");
}
?>
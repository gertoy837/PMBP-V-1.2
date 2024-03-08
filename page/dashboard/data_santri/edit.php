<?php

require "../config.php";

$id = $_GET['id'];

$query = "SELECT * FROM santri WHERE id = $id";
$santri = mysqli_query($connect, $query);
$santri1 = mysqli_fetch_assoc($santri);

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
                        <div class="filter mx-4 mt-3">
                            <a class="icon" href="detail.php?id=<?= $santri1["id"] ?>"><button class="btn btn-outline-dark"><i class="bi bi-chevron-double-left"></i> Kembali</button></a>
                        </div>
                        <div class="card-body">
                            <img src="../../../img/<?= $santri1["foto"] ?>" class="rounded-circle mx-auto d-block object-fit-cover img-thumbnail mt-5 mb-4" style="width: 15%;" alt="...">
                            <h5 class="card-title fs-3 fw-bold text-center mb-5"><?= $santri1["nama_lengkap"] ?></h5>
                            <p class="card-title fs-5 fw-bold">Data Santri</p>

                            <!-- form mulai -->
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="row row-cols-3">
                                    <div class="col">
                                        <div class="card-body">
                                            <h5 class="mx-1 fw-bold">NIK</h5>
                                            <input type="text" name="nik" class="form-control" id="" value="<?= $santri1["nik"] ?>">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card-body">
                                            <h5 class="mx-1 fw-bold">NISN</h5>
                                            <input type="text" name="nisn" class="form-control" id="" value="<?= $santri1["nisn"] ?>">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card-body">
                                            <h5 class="mx-1 fw-bold">Nama Lengkap</h5>
                                            <input type="text" name="nama_lengkap" class="form-control" id="" value="<?= $santri1["nama_lengkap"] ?>">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card-body">
                                            <h5 class="mx-1 fw-bold">Nama Panggilan</h5>
                                            <input type="text" name="nama_panggil" class="form-control" id="" value="<?= $santri1["nama_panggil"] ?>">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card-body">
                                            <h5 class="mx-1 fw-bold">Tempat Lahir</h5>
                                            <input type="text" name="tmp_lahir" class="form-control" id="" value="<?= $santri1["tmp_lahir"] ?>">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card-body">
                                            <h5 class="mx-1 fw-bold">Tanggal Lahir</h5>
                                            <input type="text" name="tgl_lahir" class="form-control" id="" value="<?= $santri1["tgl_lahir"] ?>">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card-body">
                                            <h5 class="mx-1 fw-bold">No Hp</h5>
                                            <input type="text" name="no" class="form-control" id="" value="<?= $santri1["no_hp"] ?>">
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
                                                <input type="text" name="nama_ayah" class="form-control" id="" value="<?= $ws["nama_ayah"] ?>">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card-body">
                                                <h5 class="mx-1 fw-bold">Tempat Lahir</h5>
                                                <input type="text" name="tmp_lahir_a" class="form-control" id="" value="<?= $ws["tmp_lahir_a"] ?>">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card-body">
                                                <h5 class="mx-1 fw-bold">Tanggal Lahir</h5>
                                                <input type="text" name="tgl_lahir_a" class="form-control" id="" value="<?= $ws["tgl_lahir_a"] ?>">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card-body">
                                                <h5 class="mx-1 fw-bold">No Hp Ayah</h5>
                                                <input type="text" name="no_hp_a" class="form-control" id="" value="<?= $ws["no_hp_a"] ?>">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card-body">
                                                <h5 class="mx-1 fw-bold">Pekerjaan Ayah</h5>
                                                <select class="form-select" name="pkj_a">
                                                    <option hidden></option>
                                                    <option <?php echo $ws['pkj_a'] == 1 ? "selected" : "" ?> value="1">Belum/ Tidak Bekerja</option>
                                                    <option <?php echo $ws['pkj_a'] == 2 ? "selected" : "" ?> value="2">Mengurus Rumah Tangga</option>
                                                    <option <?php echo $ws['pkj_a'] == 3 ? "selected" : "" ?> value="3">Pegawai Negeri Sipil</option>
                                                    <option <?php echo $ws['pkj_a'] == 4 ? "selected" : "" ?> value="4">TNI/ Polri</option>
                                                    <option <?php echo $ws['pkj_a'] == 5 ? "selected" : "" ?> value="5">Guru/ Dosen</option>
                                                    <option <?php echo $ws['pkj_a'] == 6 ? "selected" : "" ?> value="6">Karyawan Swasta</option>
                                                    <option <?php echo $ws['pkj_a'] == 7 ? "selected" : "" ?> value="7">Karyawan BUMN</option>
                                                    <option <?php echo $ws['pkj_a'] == 8 ? "selected" : "" ?> value="8">Profesional</option>
                                                    <option <?php echo $ws['pkj_a'] == 9 ? "selected" : "" ?> value="9">Wiraswasta</option>
                                                    <option <?php echo $ws['pkj_a'] == 10 ? "selected" : "" ?> value="10">Buruh</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card-body">
                                                <h5 class="mx-1 fw-bold">Penghasilan Ayah</h5>
                                                <select class="form-select" name="phs_a">
                                                    <option hidden></option>
                                                    <option <?php echo $ws['phs_a'] == 1 ? "selected" : "" ?> value="1">-</option>
                                                    <option <?php echo $ws['phs_a'] == 2 ? "selected" : "" ?> value="2">
                                                        < 2 Juta</option>
                                                    <option <?php echo $ws['phs_a'] == 3 ? "selected" : "" ?> value="3">2 - 5 Juta</option>
                                                    <option <?php echo $ws['phs_a'] == 4 ? "selected" : "" ?> value="4">5 - 10 Juta</option>
                                                    <option <?php echo $ws['phs_a'] == 5 ? "selected" : "" ?> value="5">> 10 Juta</option>
                                                </select>
                                            </div>
                                        </div>
                                </div>
                                <div class="row row-cols-3 mt-3">
                                    <div class="col">
                                        <div class="card-body">
                                            <h5 class="mx-1 fw-bold">Nama Ibu</h5>
                                            <input type="text" name="nama_ibu" class="form-control" id="" value="<?= $ws["nama_ibu"] ?>">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card-body">
                                            <h5 class="mx-1 fw-bold">Tempat Lahir</h5>
                                            <input type="text" name="tmp_lahir_i" class="form-control" id="" value="<?= $ws["tmp_lahir_i"] ?>">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card-body">
                                            <h5 class="mx-1 fw-bold">Tanggal Lahir</h5>
                                            <input type="text" name="tgl_lahir_i" class="form-control" id="" value="<?= $ws["tgl_lahir_i"] ?>">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card-body">
                                            <h5 class="mx-1 fw-bold">No Hp Ibu</h5>
                                            <input type="text" name="no_hp_i" class="form-control" id="" value="<?= $ws["no_hp_i"] ?>">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card-body">
                                            <h5 class="mx-1 fw-bold">Pekerjaan Ibu</h5>
                                            <select class="form-select" name="pkj_i">
                                                <option hidden></option>
                                                <option <?php echo $ws['pkj_i'] == 1 ? "selected" : "" ?> value="1">Belum/ Tidak Bekerja</option>
                                                <option <?php echo $ws['pkj_i'] == 2 ? "selected" : "" ?> value="2">Mengurus Rumah Tangga</option>
                                                <option <?php echo $ws['pkj_i'] == 3 ? "selected" : "" ?> value="3">Pegawai Negeri Sipil</option>
                                                <option <?php echo $ws['pkj_i'] == 4 ? "selected" : "" ?> value="4">TNI/ Polri</option>
                                                <option <?php echo $ws['pkj_i'] == 5 ? "selected" : "" ?> value="5">Guru/ Dosen</option>
                                                <option <?php echo $ws['pkj_i'] == 6 ? "selected" : "" ?> value="6">Karyawan Swasta</option>
                                                <option <?php echo $ws['pkj_i'] == 7 ? "selected" : "" ?> value="7">Karyawan BUMN</option>
                                                <option <?php echo $ws['pkj_i'] == 8 ? "selected" : "" ?> value="8">Profesional</option>
                                                <option <?php echo $ws['pkj_i'] == 9 ? "selected" : "" ?> value="9">Wiraswasta</option>
                                                <option <?php echo $ws['pkj_i'] == 10 ? "selected" : "" ?> value="10">Buruh</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card-body">
                                            <h5 class="mx-1 fw-bold">Penghasilan Ibu</h5>
                                            <select class="form-select" name="phs_i">
                                                <option hidden></option>
                                                <option <?php echo $ws['phs_i'] == 1 ? "selected" : "" ?> value="1">-</option>
                                                <option <?php echo $ws['phs_i'] == 2 ? "selected" : "" ?> value="2">
                                                    < 2 Juta</option>
                                                <option <?php echo $ws['phs_i'] == 3 ? "selected" : "" ?> value="3">2 - 5 Juta</option>
                                                <option <?php echo $ws['phs_i'] == 4 ? "selected" : "" ?> value="4">5 - 10 Juta</option>
                                                <option <?php echo $ws['phs_i'] == 5 ? "selected" : "" ?> value="5">> 10 Juta</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">Alamat <i class="fa fa-location-dot"></i></h5>
                                        <textarea name="alamat" id="" cols="20" rows="5" class="form-control"><?= $ws["alamat"] ?></textarea>
                                    </div>
                                </div>
                            <?php
                                    }
                            ?>
                            <p class="card-title fs-5 fw-bold">Berkas Santri</p>
                            <div class="row row-cols-4">
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="fw-bold">Kartu Keluarga :</h5>
                                        <input type="file" name="kk" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="fw-bold">Foto :</h5>
                                        <input type="file" name="foto" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="fw-bold">Ijazah :</h5>
                                        <input type="file" name="ijazah" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="fw-bold">Rapot :</h5>
                                        <input type="file" name="rapot" class="form-control" id="">
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
// data santri
$nik = $_POST['nik'];
$nisn = $_POST['nisn'];
$nama_lengkap = mysqli_real_escape_string($connect, $_POST['nama_lengkap']);
$nama_panggil = mysqli_real_escape_string($connect, $_POST['nama_panggil']);
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$no = $_POST['no'];

$kk = $_FILES['kk'];
$foto = $_FILES['foto'];
$ijazah = $_FILES['ijazah'];
$rapot = $_FILES['rapot'];

$nama_kk = $kk['name'];
$nama_foto = $foto['name'];
$nama_ijazah = $ijazah['name'];
$nama_rapot = $rapot['name'];

move_uploaded_file($kk['tmp_name'], '../../../img/' . $nama_kk);
move_uploaded_file($foto['tmp_name'], '../../../img/' . $nama_foto);
move_uploaded_file($ijazah['tmp_name'], '../../../img/' . $nama_ijazah);
move_uploaded_file($rapot['tmp_name'], '../../../img/' . $nama_rapot);

$query1 = "UPDATE santri SET nik = '$nik', nisn = '$nisn', nama_lengkap = '$nama_lengkap', nama_panggil = '$nama_panggil', tmp_lahir = '$tmp_lahir', tgl_lahir = '$tgl_lahir', no_hp = '$no', kk = '$nama_kk', foto = '$nama_foto', ijazah = '$nama_ijazah', rapot = '$nama_rapot'
WHERE id = '$santri1[id]'";


$nama_ayah = $_POST['nama_ayah'];
$tmp_lahir_a = $_POST['tmp_lahir_a'];
$tgl_lahir_a = $_POST['tgl_lahir_a'];
$no_hp_a = $_POST['no_hp_a'];
$pkj_a = $_POST['pkj_a'];
$phs_a = $_POST['phs_a'];

$nama_ibu = $_POST['nama_ibu'];
$tmp_lahir_i = $_POST['tmp_lahir_i'];
$tgl_lahir_i = $_POST['tgl_lahir_i'];
$no_hp_i = $_POST['no_hp_i'];
$pkj_i = $_POST['pkj_i'];
$phs_i = $_POST['phs_i'];

$alamat = $_POST['alamat'];

$query2 = "UPDATE wali_santri SET nama_ayah = '$nama_ayah', tmp_lahir_a = '$tmp_lahir_a', tgl_lahir_a = '$tgl_lahir_a', no_hp_a = '$no_hp_a', pkj_a = '$pkj_a', phs_a = '$phs_a',
nama_ibu = '$nama_ibu', tmp_lahir_i = '$tmp_lahir_i', tgl_lahir_i = '$tgl_lahir_i', no_hp_i = '$no_hp_i', pkj_i = '$pkj_i', phs_i = '$phs_i', alamat = '$alamat'
WHERE santri_id = $santri1[id]";

if (isset($_POST['simpan'])) {
    mysqli_query($connect, $query1);
    mysqli_query($connect, $query2);

    ob_end_clean();
    header("Location:detail.php?id=$santri1[id]");
}
?>
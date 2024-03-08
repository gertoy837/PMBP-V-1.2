<?php
// configurasai
require "config.php";
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="https://petik.or.id/wp-content/uploads/2023/11/photo1699426632.jpeg   ">
    <title>
        PBMP - PeTIK
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/2bb9122efe.js" crossorigin="anonymous"></script>
    <!-- CSS Files -->
    <link id="pagestyle" href="assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-100">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3  navbar-transparent mt-4">
        <div class="container">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-white" href="pages/dashboards/default.html">
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon mt-2">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </span>
            </button>
        </div>
    </nav>
    <!-- End Navbar -->
    <section class="min-vh-100 mb-8">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image:url(https://lh3.googleusercontent.com/p/AF1QipMin5f9o2Qfw7Jd6eQbPSGIRGVqHYfhTWI2Zuux=s680-w680-h510); background-position:0 50rem;">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 text-center mx-auto">
                        <h1 class="text-white mb-2 mt-5">Pendaftaran!</h1>
                        <p class="text-lead text-white">Penerimaan Mahasantri Baru Tahun Angkatan 2024/2025</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10">
                <div class="col-xl-8 col-lg-5 col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 mb-3" style="text-align:center;">
                                    <img src="photo_2023-12-28_08-45-25-removebg-preview.png" alt="" width="30%">
                                </div>
                                <div class="col-12">
                                    <div class="d-flex justify-content-between ">
                                        <a href="sign-up.php"><button type="button" class="btn bg-gradient-dark my-4 mb-2"><i class="fa fa-caret-left"></i> back</button></a>
                                    </div>
                                    <div>
                                        <h5>Data Wali Santri</h5>
                                    </div>
                                    <form method="post">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <label for="">Nama Ayah</label>
                                                    <input type="text" class="form-control" name="nama_a">
                                                </div>
                                                <div class="col-6">
                                                    <label for="">Tempat Lahir Ayah</label>
                                                    <input type="text" class="form-control" name="tmp_a">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <label for="">Tanggal Lahir Ayah</label>
                                                    <input type="date" class="form-control" name="tgl_a">
                                                </div>
                                                <div class="col-6">
                                                    <label for="">Nomor Telpon Ayah</label>
                                                    <input type="text" class="form-control" name="no_hp_a">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <label for="">Pekerjaan Ayah</label>
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
                                                <div class="col-6">
                                                    <label for="">Penghasilan Ayah</label>
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
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <label for="">Nama Ibu</label>
                                                        <input type="text" class="form-control" name="nama_i">
                                                    </div>
                                                    <div class="col-6">
                                                        <label for="">Tempat Lahir Ibu</label>
                                                        <input type="text" class="form-control" name="tmp_i">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <label for="">Tanggal Lahir Ibu</label>
                                                        <input type="date" class="form-control" name="tgl_i">
                                                    </div>
                                                    <div class="col-6">
                                                        <label for="">Nomor Telpon Ibu</label>
                                                        <input type="text" class="form-control" name="no_hp_i">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <label for="">Pekerjaan Ibu</label>
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
                                                    <div class="col-6">
                                                        <label for="">Penghasilan Ibu</label>
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
                                                <label for="">Alamat <i class="fa fa-location-dot"></i></label>
                                                <textarea name="alamat" id="" cols="20" rows="5" class="form-control" placeholder="Alamat Domisili"></textarea>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" name="daftar" class="btn bg-gradient-dark w-100 my-4 mb-2">Daftar</button>
                                        </div>
                                        <p class="text-sm mt-3 mb-0">Sudah Memiliki Akun? <a href="/Z Login/sign-in.php" class="text-dark font-weight-bolder">Login</a></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer my-4">
        <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
            <a href="#" target="_blank" class="text-secondary me-xl-4 me-4">
                <span class="text-lg fab fa-chrome"></span>
            </a>
            <a href="#" target="_blank" class="text-secondary me-xl-4 me-4">
                <span class="text-lg fa-brands fa-x-twitter"></span>
            </a>
            <a href="#" target="_blank" class="text-secondary me-xl-4 me-4">
                <span class="text-lg fab fa-instagram"></span>
            </a>
            <a href="#" target="_blank" class="text-secondary me-xl-4 me-4">
                <span class="text-lg fab fa-linkedin"></span>
            </a>
            <a href="#" target="_blank" class="text-secondary me-xl-4 me-4">
                <span class="text-lg fab fa-facebook"></span>
            </a>
        </div>

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
</body>

</html>

<?php

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

$alamat = $_POST['alamat'];
$daftar = $_POST['daftar'];

if (isset($daftar)) {
    $sanid = mysqli_query($connect, "SELECT MAX(id) AS san FROM santri");
    $id = mysqli_fetch_assoc($sanid);
    $idd = $id['san'];

    $query = "INSERT INTO wali_santri (nama_ayah, tmp_lahir_a, tgl_lahir_a, no_hp_a, pkj_a, phs_a, nama_ibu, tmp_lahir_i, tgl_lahir_i, no_hp_i, pkj_i, phs_i, alamat, santri_id) 
    VALUES ('$nama_ayah', '$tmp_lahir_a', '$tgl_lahir_a','$nom_tlp_ayah','$pekerjaan_ayah','$penghasilan_ayah','$nama_ibu', '$tmp_lahir_i', '$tgl_lahir_i', '$nom_tlp_ibu','$pekerjaan_ibu','$penghasilan_ibu','$alamat', '$idd')";

    mysqli_query($connect, $query);

    ob_clean();
    header("Location:sign-in.php");
}

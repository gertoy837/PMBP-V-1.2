<?php

require "config.php";

ob_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-100">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3  navbar-transparent mt-4">
        <div class="container">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-white" href=pages/dashboards/default.html">
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
    <section class="min-vh-100 mb-5">
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
                                <form method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div>
                                            <h5>Registrasi Akun</h5>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="">Username</label>
                                                <input type="username" class="form-control" name="username">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="">Email</label>
                                                <input type="email" class="form-control" name="email">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="">Password</label>
                                                <input type="password" class="form-control" name="password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div>
                                            <h5>Data Santri</h5>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <label for="">Nama Lengkap</label>
                                                    <input type="text" name="nama" class="form-control" id="">
                                                </div>
                                                <div class="col-6">
                                                    <label for="">Nama Panggilan</label>
                                                    <input type="text" name="panggil" class="form-control" id="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <label for="">NIK</label>
                                                    <input type="text" name="nik" class="form-control" id="">
                                                </div>
                                                <div class="col-6">
                                                    <label for="">NISN</label>
                                                    <input type="text" name="nisn" class="form-control" id="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <label for="">Tempat Lahir</label>
                                                    <input type="text" name="tmp" class="form-control" id="">
                                                </div>
                                                <div class="col-6">
                                                    <label for="">Tanggal Lahir</label>
                                                    <input type="date" name="tgl" class="form-control" id="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <label for="">Nomor Telpon</label>
                                                    <input type="text" name="hp" class="form-control" id="">
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <h5>Unggah Berkas</h5>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <label for="">Kartu Keluarga</label>
                                                    <input type="file" class="form-control" name="kk">
                                                </div>
                                                <div class="col-6">
                                                    <label for="">Foto Santri</label>
                                                    <input type="file" class="form-control" name="foto">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <label for="">Ijazah/ SKL <span class="text-secondary fa-sm">(Surat keterangan Lulus)</span></label>
                                                    <input type="file" class="form-control" name="ijazah">
                                                </div>
                                                <div class="col-6">
                                                    <label for="">Rapor <span class="fa-sm text-secondary">(Semester Akhir)</span></label>
                                                    <input type="file" class="form-control" name="rapot">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between ">
                                            <a href="sign-in.php"><button type="button" class="btn bg-gradient-white my-4 mb-2"><span class=" text-dark"><i class="fa fa-caret-left"></i> back</span></button></a>
                                            <button class="btn bg-gradient-dark my-4 mb-2" type="submit" name="kirim">next <i class="fa fa-caret-right"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <footer class="footer mt-7 mb-4">
        <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
            <a href="#" class="text-secondary me-xl-4 me-4">
                <span class="text-lg fab fa-chrome"></span>
            </a>
            <a href="#" class="text-secondary me-xl-4 me-4">
                <span class="text-lg fa-brands fa-x-twitter"></span>
            </a>
            <a href="#" class="text-secondary me-xl-4 me-4">
                <span class="text-lg fab fa-instagram"></span>
            </a>
            <a href="#" class="text-secondary me-xl-4 me-4">
                <span class="text-lg fab fa-linkedin"></span>
            </a>
            <a href="#" class="text-secondary me-xl-4 me-4">
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

$user = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];
$ps = md5($pass);
$kat_id = 2;

$nik = $_POST['nik'];
$nisn = $_POST['nisn'];
$nama = $_POST['nama'];
$panggil = $_POST['panggil'];
$tmp = $_POST['tmp'];
$tgl = $_POST['tgl'];
$hp = $_POST['hp'];

$kk = $_FILES['kk'];
$foto = $_FILES['foto'];
$ijazah = $_FILES['ijazah'];
$rapot = $_FILES['rapot'];

$nama_kk = $kk['name'];
$nama_foto = $foto['name'];
$nama_ijazah = $ijazah['name'];
$nama_rapot = $rapot['name'];

move_uploaded_file($kk['tmp_name'], '../../img/'.$nama_kk);
move_uploaded_file($foto['tmp_name'], '../../img/'.$nama_foto);
move_uploaded_file($ijazah['tmp_name'], '../../img/'.$nama_ijazah);
move_uploaded_file($rapot['tmp_name'], '../../img/'.$nama_rapot);

$kirim = $_POST['kirim'];

$gel = rand(1, 2);

$query2 = "INSERT INTO santri (nik,nisn,nama_lengkap,nama_panggil,tmp_lahir,tgl_lahir,no_hp,kk,foto,ijazah,rapot,gel_id)
VALUES ('$nik','$nisn','$nama','$panggil','$tmp','$tgl','$hp','$nama_kk','$nama_foto','$nama_ijazah','$nama_rapot','$gel')";

if (isset($kirim)) {
    mysqli_query($connect, $query2);
    $sanid = mysqli_query($connect, "SELECT MAX(id) AS san FROM santri");
    $id = mysqli_fetch_assoc($sanid);
    $idd = $id['san'];
    $query1 = "INSERT INTO login (username, email, password, kat_id, santri_id) VALUES ('$user','$email','$ps', $kat_id, '$idd')";
    mysqli_query($connect, $query1);

    ob_clean();
    header("Location:sign-up2.php");
}
?>
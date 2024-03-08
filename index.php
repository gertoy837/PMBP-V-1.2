<?php
require "config.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PMBP - Petik</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/logopetik.jpeg" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top  header-transparent " style="background-color: #87C4FF;">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html"><img src="./img/lgPetik-removebg-preview.png" alt=""></a></h1>
      </div>

      <nav id="navbar" class="navbar ">
        <ul class="">

          <li><a class="nav-link  scrollto" href="#">Home</a></li>
          <li><a class="nav-link  scrollto" href="./about.php">About</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>

          <li class="dropdown"><a href="#"><span> More Info</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link  scrollto" href="#features">Syarat dan Ketentuan</a></li>
              <li><a class="nav-link  scrollto" href="#lampiran">lampiran berkas</a></li>
              <li><a class="nav-link  scrollto" href="#alur">Alur Pendaftaran</a></li>
              <li><a class="nav-link  scrollto" href="#formulir">Formulir Pendaftaran</a></li>
              <li><a class="nav-link  scrollto" href="#pricing">Seleksi Tes</a></li>
            </ul>
          </li>
          <li><a class="getstarted scrollto" style="background-color: #39A7FF;" href="/page/login/sign-in.php">login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center mt-5">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
          <div>
            <h1 class="fw-bold" style="color: #5588A3;">PMBP - PeTIK</h1>
            <h2>Penerimaan Mahasantri Baru Tahun Agkatan 2023/2024</h2>
            <a href="/page/login/sign-up.php" class="download-btn"><i class="bx bx-clipboard"></i> Daftar Sekarang</a>
          </div>
        </div>
        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">

          <img src="assets/img/hero-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">


    <!-- ======= App Features Section ======= -->
    <section id="hero" style="background-color: #39A7FF;" class="d-flex text-center text-white  align-items-center mt-0 mb-5">

      <div class="container mt-0">
        <h3>
          "Pencetak Mahasantri Berakhlak Mulia dan Ahli Teknologi."
        </h3>
      </div>
    </section>
    <!-- End App Features Section -->

    <section id="" class="d-flex text- text-white  align-items-center">

      <div class="container">
        <div class="row">

          <div class="col-md-12">
            <div class="card" style=" color:#5588A3">
              <div class="card-header">
                <h3 class="card-title text-dark fw-bold">Data Sementara Calon Mahasantri PeTIK</h3>
              </div>

              <div class="card-body">
                <table class="table table-bordered" style="table-layout:auto;">
                  <thead>
                    <tr>
                      <th scope="col" class="text-center">No.</th>
                      <th scope="col" class="text-center">Nama</th>
                      <th scope="col" class="text-center">Alamat</th>
                      <th scope="col" class="text-center">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $batas = 10;

                    $query = "SELECT COUNT(*) AS total FROM santri";
                    $result = mysqli_query($connect, $query);
                    $row = mysqli_fetch_assoc($result);
                    $totalData = $row['total'];

                    $totalPage = ceil($totalData / $batas);

                    $page = isset($_GET['page']) ? $_GET['page'] : 1;
                    $offset = ($page - 1) * $batas;

                    $query2 = "SELECT * FROM santri LIMIT $batas OFFSET $offset";

                    $santri = mysqli_query($connect, $query2);

                    $no = 1;
                    foreach ($santri as $san) {
                    ?>
                      <tr>
                        <th scope="row" class="text-center"><?= $no++ ?></th>
                        <td><?= $san['nama_lengkap'] ?></td>
                        <?php
                        $wali = mysqli_query($connect, "SELECT * FROM wali_santri WHERE santri_id = $san[id]");
                        foreach ($wali as $ws) {
                        ?>
                          <td><?php
                              if (empty($ws["alamat"])) {
                                echo "-";
                              } else {
                                if (strlen($ws["alamat"]) > 100) {
                                  echo substr($ws['alamat'], 0, 100) . "...";
                                } else {
                                  echo $ws["alamat"];
                                }
                              }
                              ?>
                          </td>
                          <?php
                        }
                        if (!empty($san['nik']) && !empty($san['nisn']) && !empty($san['nama_lengkap']) && !empty($san['nama_panggil']) && !empty($san['tmp_lahir']) && !empty($san['tgl_lahir']) && !empty($san['no_hp']) && !empty($san['kk']) && !empty($san['foto']) && !empty($san['ijazah']) && !empty($san['rapot'])) {
                          foreach ($wali as $ws) {
                            if (!empty($ws['nama_ayah']) && !empty($ws['tmp_lahir_a']) && !empty($ws['tgl_lahir_a']) && !empty($ws['no_hp_a']) && !empty($ws['pkj_a']) && !empty($ws['phs_a']) && !empty($ws['nama_ibu']) && !empty($ws['tmp_lahir_i']) && !empty($ws['tgl_lahir_i']) && !empty($ws['no_hp_i']) && !empty($ws['pkj_i']) && !empty($ws['phs_i']) && !empty($ws['alamat'])) {
                          ?>
                              <td><span class="badge bg-success">Lulus</span></td>
                          <?php
                            }
                          }
                        } else {
                          ?>
                          <td><span class="badge bg-danger">Tidak Lulus</span></td>
                        <?php
                        }
                        ?>
                      </tr>
                    <?php
                    }
                    ?>
                  </tbody>
                </table>
              </div>

              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <?php
                  for ($i = 1; $i <= $totalPage; $i++) {
                  ?>
                    <li class="page-item"><a class="page-link" href="?page=<?= $i ?>'"><?= $i ?></a></li>
                  <?php
                  }
                  ?>
                </ul>

              </div>
            </div>


          </div>
        </div>
        <div class="col-md-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">

        </div>
      </div>
    </section>

    <!-- ======= Details Section ======= -->
    <section id="features" class="features">
      <div class="container">
        <section id="details" class="details">
          <div class="container">

            <div class="row content">
              <div class="col-md-4" data-aos="fade-right">
                <img src="assets/img/details-1.png" class="img-fluid" alt="">
              </div>
              <div class="col-md-8 pt-4" data-aos="fade-up">
                <h2 class="fw-bold">Syarat & Ketentuan</h2>
                <p class="fst-italic">
                  Syarat dan Ketentuan Calon Mahasantri PeTIK sebagai berikut :
                </p>
                <ul>
                  <li><i class="bi bi-check"></i> <strong>Antusias Tinggi,</strong> untuk mempelajari teknologi informasi dan komunikasi <br> <span style="margin-left: 30px;"> jurusan(Pengembangan Perangkat Lunak atau Digital Marketing).</span></li>
                  <li><i class="bi bi-check"></i> Berasal dari <strong> Keluarga sultan ternama.</strong></li>
                  <li><i class="bi bi-check"></i>Dikhususkan untuk <strong>Laki-Laki Muslim</strong> dengan lulusan <strong>(SMA / SMK / MA) tahun angkatan 2021,2022,2023.</strong></li>
                  <li><i class="bi bi-check"></i> <strong>Sehat</strong> jasmani dan rohani.</li>
                  <li><i class="bi bi-check"></i><strong> Mampu stmembaca Al Qur’an</strong> dengan baik dan bersedia menambah hafalan Al Qur'an minimal 2 Juz.</li>
                  <li><i class="bi bi-check"></i> <strong>Bersedia mengikuti peraturan</strong> yang ditetapkan oleh pihak Pesantren.</li>

                </ul>

              </div>
            </div>
            <section id="lampiran" class="lampiran">
              <div class="row content">
                <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
                  <img src="assets/img/details-2.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
                  <h1 class="fw-bold"> Lampiran Berkas
                  </h1>
                  <ul>
                    <span><i class="bi bi-check"></i> <strong> Surat Keterangan Keturunan Keluarga Sultan (SKKS) </strong>dari pihak Kerajaam atau <strong>Kartu Arab Sultan (KAS)</strong> <br><span style="margin-left: 30px;"></span>atau surat resmi sejenis yang menunjukkan bahwa berasal dari Keluarga Sultan.</span></li>
                    <li><i class="bi bi-check"></i> <strong> Surat Keterangan Sehat dari PUSKESMAS</strong> atau <strong>Klinik</strong> setempat.</li>
                    <li><i class="bi bi-check"></i><strong> Salinan Kartu Keluarga Sultan</strong> dan <strong>Kartu Tanda Penduduk Arab</strong> atau <strong>Kartu Pelajar.</strong></li>
                    <li><i class="bi bi-check"></i> <strong>Salinan ijazah (SMA / SMK / MA)</strong> atau <strong>Surat Keterangan Aktif (SMA / SMK / MA)</strong> <br><span style="margin-left: 30px;"></span>dari pihak Sekolah (jika belum memiliki ijazah).</span></li>

                  </ul>
                </div>
              </div>
            </section>

            <section id="alur" class="alur">
              <div class="row content">
                <div class="col-md-4" data-aos="fade-right">
                  <img src="assets/img/details-3.png" class="img-fluid " width="80%" alt="">
                </div>
                <div class="col-md-8 " data-aos="fade-up">
                  <h1 class="fw-bold">Alur Pendaftaran</h1>
                  <p>Alur pendaftaran Calon Mahasantri PeTIK Jombang sebagai berikut :</p>
                  <ul>
                    <li><i class="bi bi-check"></i> Siapkan berkas-berkas persyaratan yang telah ditentukan.</li>
                    <li><i class="bi bi-check"></i>Mengisi formulir pendaftaran secara online dengan akses <br>
                      <span style="margin-left: 28px;"> link <a href="">pmb.petik.com</a> atau dengan melalui 2 cara :</span>
                      <ol type="">
                        <li>Upload berkas secara online dalam bentuk format <strong> (JPG / PNG / PDF),</strong> lalu disatukan menjadi format <strong> (ZIP atau RAR)</strong> dengan nama folder <strong> (Nama_Lengkap)</strong> melalui link akses <a href="">pmb.petik.com</a> atau menggunakan via Email : <a href="">pmb.petik.com</a> </li>
                        <li>Atau bisa kirim dengan kurir atau datang langsung ke alamat ini <strong> Jl. Mandor Basar No.54, Rangkapan Jaya, Kec. Pancoran Mas, Kota Depok, Jawa Barat 16434.</strong></li>
                        <li>Dan untuk via email maupun via kurir diwajibkan mengisi formulir pada akses link <a href="">pmb.petik.com</a> dan bukti pengiriman diuploadkan pada berkas yang sesuai pada pengiriman.</li>

                      </ol>
                    </li>
                    <li><i class="bi bi-check"></i>Calon Mahasantri yang sudah mengisi formulir pendaftaran akan dimasukkan ke dalam grup Whatsapp <strong> “Pendaftar PeTIK 2023/2024”.</strong></li>
                    <li><i class="bi bi-check"></i> Verifikasi Panitia , Panitia akan mengumumkan hasil seleksi melalui website dan grup Whatsapp.</li>
                    <li><i class="bi bi-check"></i> <strong>Batas pengisian formulir dan penyerahan berkas persyaratan paling lambat tanggal 30 Juni 2023.</strong></li>
                    <li><i class="bi bi-check"></i> Pendaftaran terbagi menjadi dua gelombang, pada gelombang pertama dilakukan pada <strong>tanggal 15 Desember 2022 - 15 Maret 2023.</strong> Pada gelombang kedua akan dilakukan pada <strong> tanggal 16 Maret 2023 - 30 Juni 2023.</strong></li>

                  </ul>

                </div>
              </div>
            </section>

            <section id="formulir" class="formulir">
              <div class="row content">
                <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
                  <img src="assets/img/details-4.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
                  <h1 class="fw-bold">Formulir Pendaftaran</h1>
                  <p class="fst-italic">
                    Siapkan berkas persyaratan dan silahkan isi formulir pendaftaran dalam link <a href="">pmb.petik.com.</a>
                  </p>
                  <p>
                    <strong> Catatan :</strong> Bagi yang akan mengirimkan berkas via online maka diharapkan menyiapkan
                    semua berkas yang dibutuhkan terlebih dahulu dalam bentuk <strong>(JPG / PNG / PDF)</strong> lalu
                    disatukan menjadi format <strong> (ZIP atau RAR)</strong> dengan nama folder <strong> (Nama_Lengkap)</strong> sebelum
                    mengisi formulir. Bagi yang akan mengirimkan berkas via email atau jasa kirim maka
                    diwajibkan mengisi formulir terlebih dahulu dan upload foto bukti pengiriman untuk
                    pada formulir, Kemudian kirimkan berkas tersebut pada alamat Pesantren.
                  </p>
                  <p>Formulir pendaftaran : PMB PeTIK Jombang akan ditutup pada tanggal <strong>30 Juni 2023.</strong> </p>
                </div>
              </div>
            </section>
          </div>
        </section><!-- End Details Section -->
      </div>
    </section>

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <section class="bg-white" id="waktu">
        <div class="container px-5">
          <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
            <div class="col-12 col-lg-5 mb-5">
              <div class="row gx-5">
                <div class="col-md-6 mb-5">



                  <div class="text-center">
                    <!-- <i class="fa-solid fa-file-circle-check icon-feature  d-block mb-3 fa-3x"></i> -->
                    <!-- <i class="fa-solid fa-1 icon-feature d-block mb-3 fa-3x"></i> -->
                    <i class="fa-solid fa-book-bookmark mb-1 fa-3x"></i>
                    <h4 class="fs-5 fw-bold m-0">Tes Akademik</h4>
                    <p class=" mb-lg-0"><strong>3 Juli 2023</strong></p>

                    <!-- <a href="#Syarat&Ketentuan" class="stretched-link">Selengkapnya</a> -->
                  </div>
                </div>
                <div class="col-md-6 mb-5">
                  <div class="text-center">
                    <!-- <i class="fa-solid fa-shoe-prints icon-feature  d-block mb-3 fa-3x"></i> -->
                    <!-- <i class="fa-solid fa-2 icon-feature d-block mb-3 fa-3x"></i> -->
                    <i class="fa-solid fa-book-quran mb-1 fa-3x"></i>
                    <h4 class="fs-5 fw-bold m-0">Tes Al Qur'an</h4>
                    <p class="mb-lg-0"><strong>3 Juli 2023</strong></p>
                    <!-- <a href="#AlurPendaftaran" class="stretched-link">Selengkapnya</a> -->
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-5 mb-md-0">

                  <div class="text-center">
                    <!-- <i class="fa-solid fa-file-lines icon-feature  d-block mb-3 fa-3x"></i> -->
                    <!-- <i class="fa-solid fa-3 icon-feature d-block mb-3 fa-3x"></i> -->
                    <i class="fa-solid fa-user-check mb-1 fa-3x"></i>
                    <h4 class="fs-5 fw-bold m-0">Tes Tanya Jawab</h4>
                    <p class="mb-lg-0"><strong>3 Juli 2023</strong></p>
                    <!-- <a href="#LampiranBerkas" class="stretched-link">Selengkapnya</a> -->
                  </div>
                </div>
                <div class="col-md-6">

                  <div class="text-center">
                    <!-- <i class="fa-solid fa-file-pen icon-feature  d-block mb-3 fa-3x"></i> -->
                    <!-- <i class="fa-solid fa-4 icon-feature d-block mb-3 fa-3x"></i> -->
                    <i class="fa-solid fa-user-group mb-1 fa-3x"></i>
                    <h4 class="fs-5 fw-bold m-0">Tes Survei</h4>
                    <p class="mb-lg-0"><strong>3 Juli 2023</strong></p>
                    <!-- <a href="#FormulirPendaftaran" class="stretched-link">Selengkapnya</a> -->
                  </div>
                </div>
              </div>


            </div>
            <div class="col-sm-9 col-md-6 mb-5">

              <img class="" src="http://pmb.petikjombang.com/foto/Date.svg" height="80%" width="90%" alt="">



            </div>
          </div>
        </div>
      </section>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->

    <!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Contact</h2>
          <p>
            PeTIK (Pesantren Teknologi Informasi dan komunikasi) adalah lembaga pendidikan Islam modern yang mengintegrasikan kurikulum agama dan teknologi informasi. menyediakan fasilitas asrama dan masjid bagi para santri untuk menunjang kegiatan ibadah dan pembelajaran. Mari berkenalan lebih jauh dengan Pesantren IT untuk mewujudkan harapan besar umat dalam menyongsong masa depan gemilang.

          </p>
        </div>

        <div class="row">
          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info" style="text-align:left;">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>
                  Jl. Mandor Basar No.54, Rangkapan Jaya, Kec. Pancoran Mas, Kota Depok, Jawa Barat 16434
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>pmbpetik@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+62 895635903776</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4504.287967701885!2d106.7778979482661!3d-6.388358101363431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e92c0df5da9d%3A0x8499222ee6779470!2sPeTIK%20(Pesantren%20Teknologi%20Informasi%20dan%20Komunikasi)%20Program%20Kuliah%20IT%20Gratis%20Binaan%20YBM%20PLN!5e0!3m2!1sid!2sid!4v1704857700718!5m2!1sid!2sid" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form class="email-form" style="border-top: 3px solid #39A7FF; border-bottom: 3px solid #39A7FF;">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Nama</label>
                  <input type="text" name="name" class="form-control" id="name" required />
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Email</label>
                  <input type="email" class="form-control" name="email" id="email" required />
                </div>
              </div>
              <div class="form-group">
                <label for="name">subjek</label>
                <input type="text" class="form-control" name="subject" id="subject" required />
              </div>
              <div class="form-group">
                <label for="name">Pesan</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="text-center">
                <button type="submit" style="background-color:#39A7FF">Kirim</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
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
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
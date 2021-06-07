<?php
session_start();
require_once "config.php";
if (!isset($_SESSION["is_logged"])) {
  header('location: login.php');
}
?>


<!DOCTYPE html>
<html lang="en">
 
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bs5/dist/css/bootstrap.min.css" />

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css" />

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- CSS Lainnya -->
    <link rel="stylesheet" href="css/navbar.css" />
    <link rel="stylesheet" href="css/body.css" />
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.0/css/all.css">
    
    <title>SPK-SAW | Beasiswa</title>
  </head>

  <body id="home">
    <!-- navbar menu -->

    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="assets/beasiswa.png" height="100%" />
        </a>
        <button class="navbar-toggler mb-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="nav nav-pills">
            <li class="nav-item">
              <a class="nav-link link tebel-sedang" href="?page=home">Beranda &nbsp;&nbsp;</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link link tebel-sedang" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Perhitungan &nbsp;&nbsp;</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php $query = $connection->query("SELECT * FROM beasiswa"); while ($row = $query->fetch_assoc()): ?>
                <li><a href="?page=perhitungan&beasiswa=<?=$row["kd_beasiswa"]?>"><?=$row["nama"]?></a></li>
              <?php endwhile; ?>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link link tebel-sedang" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Input&nbsp;&nbsp;</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a href="?page=beasiswa">Data Beasiswa</a></li>
                <li class="divider"></li>
                <li><a href="?page=mahasiswa">Data Mahasiswa</a></li>
                <li><a href="?page=kriteria">Kriteria</a></li>
                <li><a href="?page=model">Model</a></li>
                <li><a href="?page=penilaian">Penilaian</a></li>
                <li class="divider"></li>
                <li><a href="?page=nilai">Persyaratan</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link link tebel-sedang" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Laporan&nbsp;&nbsp; </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a href="?page=lap_seluruh">Seluruh Mahasiswa</a></li>
                <li><a href="?page=lap_permahasiswa">Per Mahasiswa</a></li>
                <li><a href="?page=lap_pendaftaran">Pendaftaran</a></li>
              </ul>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link link tebel-sedang" href="#">About &nbsp;&nbsp;</a>
            </li> -->

            <li class="nav-item">
              <a class="nav-link link tebel-sedang" href="#contact">Kontak &nbsp;&nbsp;</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active tebel-sedang rounded-pill bg-ungu shadow" href="logout.php">Keluar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- konten -->
   
    <div class="row mt-5 mb-5">
            <div class="col-md-12">
              <?php include page($_PAGE); ?>
            </div>
        </div>
    <br />
    <br />
    <br />
    <br />
    <br />

    <!-- akhir -->

    <!-- contact -->
    <section id="contact">
      <div class="container" >
        <div class="row text-center mb-3">
          <div class="col" data-aos="fade-up" data-aos-duration="4000">
            <h2>Hubungi Kami</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6">
          <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
            <strong>Terima Kasih!</strong> Pesan anda sudah kami terima.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
            <form name="beasiswa-contact-form">
              <div class="mb-3" data-aos="fade-up" data-aos-duration="3000">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" name="nama" />
              </div>
              <div class="mb-3" data-aos="fade-up" data-aos-duration="2500">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="email" name="email" />
              </div>
              <div class="mb-3" data-aos="fade-up" data-aos-duration="2000">
                <label for="pesan" class="form-label">Pesan</label>
                <textarea class="form-control" id="pesan" rows="3" name="pesan"></textarea>
              </div>
              <button type="submit" class="btn btn-primary btn-kirim" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="1000">Kirim</button>
              <button class="btn btn-primary btn-loading d-none" type="button" disabled>
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                Loading...
              </button>
            </form>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill=" rgb(165, 160, 250)"
          fill-opacity="1"
          d="M0,96L48,133.3C96,171,192,245,288,240C384,235,480,149,576,133.3C672,117,768,171,864,197.3C960,224,1056,224,1152,208C1248,192,1344,160,1392,144L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>

    <!-- akhir contact -->

    <!-- back to top -->
              <button id="back-to-top-btn"><i class="fas fa-angle-double-up"></i></button>
    <!-- akhir back to top -->

    <!-- footer -->
    <footer class="bg-ungu text-center pb-5">
      <p>Created with <i class="bi bi-suit-heart-fill text-danger"></i> by Kelompok 3 
      <a href="https://www.instagram.com/gilang_a011/" class="text-white fw-normal">Gilang aditya</a>
      <a href="https://instagram.com/rasqqq_?utm_medium=copy_link" class="text-white fw-normal">Roni AS</a>
      <a href="https://instagram.com/galihchandr02?utm_medium=copy_link" class="text-white fw-normal">Galih Chandra</a>
      <a href="https://instagram.com/gilangkan_?utm_medium=copy_link" class="text-white fw-normal">Gilang Tomi A</a>
      <a href="https://instagram.com/lesmana_paw?utm_medium=copy_link" class="text-white fw-normal">Nova lesmana</a>
      </p>
    </footer>
    <!-- akhir footer -->

    

    <!-- tophover -->
    <script>
              const backToTopBtn = document.querySelector("#back-to-top-btn");

              window.addEventListener("scroll", scrollFunction);

              function scrollFunction(){
                if (window.pageYOffset > 300) {
                  //tampilkan totopbutton
                  backToTopBtn.style.display = "block";
                }
                else {
                  //sembunyikan totopbutton
                  backToTopBtn.style.display = "none";
                }
              }

              backToTopBtn.addEventListener("click", backToTop);

              function backToTop() {
                window.scrollTo(0, 0);
              }
    </script>
    <!-- akhr top hover -->
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="bs5/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a64b4dd75e.js" crossorigin="anonymous"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
              <script>
                gsap.from('.navbar', {duration:1.5, y: '-100', opacity:0, delay:1, ease: 'back' });
              </script>
    <script>
      const scriptURL = 'https://script.google.com/macros/s/AKfycbx7hFQ8ZeNYfeHawwxVReE31ZKnYet8aHw5zAUmNcA9wN1e-4us78Q13vvb0xJLpX2_/exec'
      const form = document.forms['beasiswa-contact-form']
      const btnKirim = document.querySelector('.btn-kirim');
      const btnLoading = document.querySelector('.btn-loading');
      const myAlert = document.querySelector('.my-alert');

      form.addEventListener('submit', e => {
        e.preventDefault()
        //ketika tombol submit diklik
        // tampilkan tombol loading hilangkan tombol kirim
        btnLoading.classList.toggle('d-none');
        btnKirim.classList.toggle('d-none');
        fetch(scriptURL, { method: 'POST', body: new FormData(form)})
          .then(response => {
            // tampilkan tombol kirim hilangkan tombol loading
            btnLoading.classList.toggle('d-none');
            btnKirim.classList.toggle('d-none');
            //tampilkan alert
            myAlert.classList.toggle('d-none');
            //reset formnya
            form.reset();
            console.log('Success!', response);
          
          })
          .catch(error => console.error('Error!', error.message))
      })
    </script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>

    AOS.init({
      once: true,
    });
  </script>



  </body>
</html>

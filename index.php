<?php
include "koneksi.php"; 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DREAM()SCAPE</title>
    <link rel="icon" href="img/logo.jpg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>

  <body>
    <!-- nav begin -->
     <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top bg-white">
  <div class="container">
    <a class="navbar-brand" href="#">DREAM()SCAPE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#articel">Articel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#gallery">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#schedule">Schedule</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#profile">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Log In</a>
        </li>
        <li class="nav-item">

          <button id="dark" class="btn btn-secondary"><i class="bi bi-moon-stars-fill"></i></button>

          <button id="light" class="btn btn-success"><i class="bi bi-brightness-high"></i></button>

          <script type="text/javascript">
            document.getElementById("dark").onclick = function(){
              document.body.classList.add("bg-dark");

              const hero = document.getElementById("hero");
                hero.classList.remove("bg-success-subtle", "text-black");
                hero.classList.add("bg-secondary", "text-white");

              const articel = document.getElementById("articel");
              articel.classList.remove("bg-white", "text-dark");
              articel.classList.add("bg-dark", "text-white");

              const cards = document.querySelectorAll(".card");
              cards.forEach(card => {
                card.classList.remove("bg-white");
                card.classList.add("bg-secondary", "text-white");
              });

              const gallery = document.getElementById("gallery");
                gallery.classList.remove("bg-success-subtle", "text-black");
                gallery.classList.add("bg-secondary", "text-white");

              const icons = document.querySelectorAll("footer i");
              icons.forEach(icon => {
                icon.classList.remove("text-dark");
                icon.classList.add("text-light");

              });
              
              const schedule = document.getElementById("schedule");
                schedule.classList.remove("bg-white", "text-dark");
                schedule.classList.add("bg-dark", "text-white");

              const profile = document.getElementById("profile");
                profile.classList.remove("bg-success-subtle", "text-dark");
                profile.classList.add("bg-secondary", "text-white");

              const profileCard = document.getElementById("profileCard");
              profileCard.classList.remove("bg-white", "text-dark"); 
              profileCard.classList.add("bg-dark", "text-white");

              const footer = document.getElementById("footer");
                footer.classList.remove("bg-white", "text-dark");
                footer.classList.add("bg-dark", "text-white");
            }

            document.getElementById("light").onclick = function(){
              document.body.classList.add("bg-white");

              const hero = document.getElementById("hero");
                hero.classList.remove("bg-secondary", "text-white");
                hero.classList.add("bg-success-subtle", "text-black");

              const articel = document.getElementById("articel");
              articel.classList.remove("bg-dark", "text-white");
              articel.classList.add("bg-light", "text-dark");

              const cards = document.querySelectorAll(".card");
              cards.forEach(card => {
                card.classList.remove("bg-secondary", "text-white");
                card.classList.add("bg-white", "text-dark");
              });

              const gallery = document.getElementById("gallery");
                gallery.classList.remove("bg-secondary", "text-white");
                gallery.classList.add("bg-success-subtle", "text-black");

              const schedule = document.getElementById("schedule");
                schedule.classList.remove("bg-secondary", "text-white");
                schedule.classList.add("bg-white", "text-black");

              const profile = document.getElementById("profile");
                profile.classList.remove("bg-secondary", "text-white");
                profile.classList.add("bg-success-subtle", "text-black");
              
              const profileCard = document.getElementById("profileCard");
              profileCard.classList.remove("bg-dark", "text-white"); 
              profileCard.classList.add("bg-white", "text-dark");

              const icons = document.querySelectorAll("footer i");
              icons.forEach(icon => {
                icon.classList.remove("text-light");
                icon.classList.add("text-dark");
              });

              const footer = document.getElementById("footer");
              footer.classList.remove("bg-dark", "text-white");
              footer.classList.add("bg-white", "text-dark");
            }
          </script>
        </li>
      </ul>
    </div>  
  </div>
</nav>
    <!-- nav end -->

    <!-- hero begin -->
    <section id="hero" class="bg-success-subtle text-center p-5 text-sm-start text-black">
      <div class="container">
        <div class="d-sm-flex flex-sm-row-reverse align-items-center">
          <img src="img/nctdream.jpg" alt="" class="img-fluid" width="300">
          <div>
            <h1>DREAM()SCAPE</h1>
            <h4>Mengenal anggota NCT DREAM lebih dalam, bukan hanya dengan karirnya tetapi juga lewat kisah, dan perjalana hidup mereka.</h4>
            <h6>
              <span id="tanggal"></span>
              <span id="jam"></span>
            </h6>
            <script type="text/javascript">
              window.setTimeout("tampilWaktu()",1000);

              function tampilWaktu(){
                var waktu = new Date();
                var bulan = waktu.getMonth() + 1;

                setTimeout("tampilWaktu()",1000);
                document.getElementById("tanggal").innerHTML = 
                  waktu.getDate() + "/" + bulan + "/" + waktu.getFullYear();
                document.getElementById("jam").innerHTML = 
                  waktu.getHours() +
                  ":" +
                  waktu.getMinutes() + 
                  ":" +
                  waktu.getSeconds();
              }
            </script>
          </div>
        </div>
      </div>
    </section>
    <!-- hero end -->

    <!-- articel begin -->
    <section id="article" class="text-center p-5">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3">article</h1>
          <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
        <?php
          $sql = "SELECT * FROM article ORDER BY tanggal DESC";
          $hasil = $conn->query($sql); 

          while($row = $hasil->fetch_assoc()){
        ?>
        <div class="col">
          <div class="card h-100">
            <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
            }
          ?> 
        </div>
      </div>
    </section>
    <!-- artikel end -->

    <!-- galeri begin -->
    <section id="gallery" class="text-center p-5 bg-success-subtle">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3">Gallery</h1>
        <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/nct dream 1.jpg" class="d-block w-100" alt="img/">
    </div>
    <div class="carousel-item">
      <img src="img/nct dream 2.jpg" class="d-block w-100" alt="img/">
    </div>
    <div class="carousel-item">
      <img src="img/nct dream 3.jpg" class="d-block w-100" alt="img/">
    </div>
    <div class="carousel-item">
      <img src="img/nct dream 4.jpg" class="d-block w-100" alt="img/">
    </div>
    <div class="carousel-item">
      <img src="img/nct dream 5.jpg" class="d-block w-100" alt="img/">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
      </div>
    </section>
    <!-- gallery end -->

    <!-- schedule begin -->
<section id="schedule" class="text-center p-5 text-dark">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3">Jadwal Kuliah & Kegiatan Mahasiswa</h1>
        <div class="row g-4 justify-content-center">
          
      <div class="col-12 col-sm-10 col-md-5 col-lg-3"> 
<div class="card border-success mb-3" style="max-width: 18rem; ">
  <div class="card-header bg-success-subtle text-dark">Senin</div>
    <div class="card-body">
    <h5 class="card-title">09.30-12.00</h5>
    <p class="card-text">Logika Informatika <br> Ruang H.5.12</p>
    
    <h5 class="card-title">14.10-15.50</h5>
    <text class="card-text">Basis Data <br> Ruang H.5.10</text>
    </div>
  </div>
</div>

<div class="col-12 col-sm-10 col-md-5 col-lg-3">  
<div class="card border-success mb-3" style="max-width: 18rem;">
    <div class="card-header bg-success-subtle text-dark">Selasa</div>
    <div class="card-body">
      <h5 class="card-title">12.30-15.00</h5>
      <p class="card-text">Rekayasa Perangkat Lunak <br> Ruang H.5.10 </p>
      
      <h5 class="card-title">15.30-18.00</h5>
      <p class="card-text">Sistem Operasi <br> Ruang H.3.2 </p>
    </div>
  </div>
</div>

<div class="col-12 col-sm-10 col-md-5 col-lg-3"> 
<div class="card border-success mb-3" style="max-width: 18rem;">

  <div class="card-header bg-success-subtle text-dark">Rabu</div>
  <div class="card-body">
    <h5 class="card-title">09.30-12.00</h5>
    <p class="card-text">Kripto <br> Ruang H.5.13</p>
    
    <h5 class="card-title">12.30-14.10</h5>
    <p class="card-text">Pemograman Berbasis Web <br> Ruang D.2.J</p>
  </div>
</div>
</div>

<div class="col-12 col-sm-10 col-md-5 col-lg-3"> 
  <div class="card border-success mb-3" style="max-width: 18rem;">
    <div class="card-header bg-success-subtle text-dark">Kamis</div>
    <div class="card-body">
      <h5 class="card-title">14.10-15.50</h5>
      <p class="card-text">Basis Data <br> Ruang D.2.K</p>
    </div>
  </div>
</div>

<div class="col-12 col-sm-10 col-md-5 col-lg-3"> 
  <div class="card border-success mb-3" style="max-width: 18rem;">
  <div class="card-header bg-success-subtle text-dark">Jumat</div>
  <div class="card-body">
    <h5 class="card-title">09.30-12.00</h5>
    <p class="card-text">Probabilitas dan Statistik <br> Ruang H.3.2</p>
    
    <h5 class="card-title">13.00-15.00</h5>
    <p class="card-text">Data Mining <br> Ruang H.4.3</p>
  </div>
</div>
</div>

<div class="col-12 col-sm-10 col-md-5 col-lg-3"> 
<div class="card border-success mb-3" style="max-width: 18rem;">
  <div class="card-header bg-success-subtle text-dark">Sabtu</div>
  <div class="card-body">
    <h5 class="card-title">Tidak Ada Jadwal</h5>
  </div>
</div>
</div>

<div class="col-12 col-sm-10 col-md-5 col-lg-3"> 
<div class="card border-success mb-3" style="max-width: 18rem;">
  <div class="card-header bg-success-subtle text-dark">Minggu</div>
  <div class="card-body">
    <h5 class="card-title">Tidak Ada Jadwal</h5>
  </div>
</div>
</div>
</div>
</div>
</section>
    <!-- schedule end -->

    <!-- profile begin -->
  <section id="profile" class="text-center p-5 bg-success-subtle">
      <h1 class="fw-bold display-4 pb-3">Profile Mahasiswa</h1>
      <div class="row align-items-start justify-content-center">
            
            <div class="col-12 col-md-8 col-lg-2 mb-4 mb-md-0 text-center text-md-start mt-md-5">
                
                <img src="img/nadjwa.jpg" 
                     alt="Foto Profil" 
                     class="img-fluid rounded-circle border  " 
                     style="width: 180px; height: 180px; object-fit: cover;">
            </div>

            <div class="col-12 col-md-8 col-lg-6">
                <div id="profileCard" class="card shadow-sm p-4">
                    <h4 class="card-title fw-bold mb-1">Nadjwa Salsabila Wirawanti</h4>
                    <p class="card-subtitle text-muted mb-3">Mahasiswa Teknik Informatika</p>

                    <table class="table table-borderless table-sm mx-auto mx-md-0" style="max-width: 400px;">
                        <tbody>
                            <tr>
                                <th scope="row" class="text-start" style="width: 150px;">NIM</th>
                                <td class="text-start">: A11.2024.15670</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-start">Program Studi</th> 
                                <td class="text-start">: Teknik Informatika</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-start">Email</th>
                                <td class="text-start">: 111202415670@mhs.dinus.ac.id</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-start">Telepon</th>
                                <td class="text-start">: +62 813 9146 7460 </td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-start">Alamat</th>
                                <td class="text-start">: Graha mukti timur No.283, Semarang</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- profile end -->

    <!-- footer begin -->
    <footer id="footer" class="text-center p-5">
      <div>
        <a href="https://www.instagram.com/nct_dream/?hl=id"><i class="bi bi-instagram h2 p-2 text-dark"></i></a>
        <a href="https://x.com/nctsmtown_dream?lang=id"><i class="bi bi-twitter-x h2 p-2 text-dark"></i></a>
        <a href="https://www.youtube.com/channel/UCXURHJRGr4-EB3l87kcbElw"><i class="bi bi-youtube h2 p-2 text-dark"></i></a>
      </div>
      <div>
        Nadjwa Salsabila &copy; 2025
      </div>
    </footer>
    <!-- footer end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
   
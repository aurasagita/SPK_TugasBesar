<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="assets/dist/img/polinema_logo.png">
    <title> SPK (Sistem Pendukung Keputusan)</title>
    
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/95c066a903.js" crossorigin="anonymous"></script>
    <!-- JS -->
    <script src="assets/js/script.js" defer></script>

</head>
<body>
  <!-- Navbar -->
  <section id="beranda">
    <div class="beranda">
      <header>
        <a href="#" class="logo"><img src="assets/dist/img/polinema_logo.png" alt="logo" width="80"></a>
        <ul>
          <li><a href="#beranda">Beranda</a></li>
          <li><a href="#tentang-kami">Tentang Metode</a></li>
          <li><a href="#sampah">Tahapan Metode CPI</a></li>
          <li><a href="#temukan-kami">Temukan Kami</a></li>
          <li><a href="#gabung">Ketentuan Tugas Akhir</a></li>
          <li><a href="{{ url('/login') }}">Login</a></li>
        </ul>
      </header>
      <div class="head-content">
        <div class="textBox">
          <h2>Tugas Besar <br><span>SPK (Sistem Pendukung Keputusan)</span></h2>
          <p>Bagian dari sistem informasi berbasis komputer (termasuk sistem
            berbasis pengetahuan (manajemen pengetahuan)) yang ditujukan
            untuk mendukung pengambilan keputusan dalam suatu organisasi
            atau perusahaan.
          </p>
          <a href="{{ url('/login') }}">Login Admin</a>
        </div>
        <div class="imgBox">
          <img src="assets/dist/img/login5.png" alt="" width="650px">
        </div>
      </div>
    </div>
  </section>

  <!--Tentang Kami-->
  <section id="tentang-kami">
    <div class="tentang-kami-container">
      <h3>Tentang Metode </h3>
      <img src="assets/dist/img/SPK FIXXX.png" alt="">
      <br><span class="judul-isi">Metode Yang Kami Ambil adalah CPI</span><br>
      <p>Indeks Kinerja Gabungan (Composite Performance Indeks) merupakan indeks gabungan (Composite Index) yang dapat digunakan untuk menentukan penilaian atau peringkat dari berbagai alternatif berdasarkan beberapa kriteria . 
      <br> <br> Metode CPI ini dapat digunakan untuk penilaian dengan 
      kriteria yang tidak seragam yaitu kriteria tren positif (+) dan kriteria tren negatif (-).Hasil dari penelitian adalah menghasilkan perankingan yang akan menentukan Kinerja guru yang 
      dapat berfungi sebagai alternatif untuk mengambil keputusan.
      </p>
      <div class="clearfix"></div>
    </div>
    <div class="layanan-container" id="layanan">
      <div class="icons">
        <img src="assets/dist/img/Nabila.svg" alt="">
        <div class="info">
          <h6>Nabilah Amaalina</h6>
          <span>2141720198 | 27</span>
        </div>
      </div>
      <div class="icons">
        <img src="assets/dist/img/Marsa.svg" alt="">
        <div class="info">
          <h6>Marsa Mawaddah H.</h6>
          <span>2141720257 | 16</span>
        </div>
      </div>
      <div class="icons">
        <img src="assets/dist/img/Aura.svg" alt="">
        <div class="info">
          <h6>Aura Sagita Ashilah</h6>
          <span>2141720102 | 10</span>
        </div>
      </div>
    </div>
  </section>

  <!-- CPI -->
  <section id="sampah">
    <div class="sampah-container">
      <h3>Tahapan Metode CPI</h3>
      <div class="sampah">
        <div class="box" data-name="s1">
          <img src="assets/dist/img/kelompok.jpeg" alt="">
          <h5>Langkah 1</h5>
          <h6>Menetukan Nilai Minimum Setiap Kriteria</h6>
        </div>
        <div class="box" data-name="s2">
          <img src="assets/dist/img/metode.jpeg" alt="">
          <h5>Langkah 2</h5>
          <h6>Normalisasi Matriks</h6>
        </div>
        <div class="box" data-name="s3">
          <img src="assets/dist/img/kasus.jpeg" alt="">
          <h5>Langkah 3</h5>
          <h6>Perkalian Bobot dan Normalisasi Matriks</h6>
        </div>
        <div class="box" data-name="s4">
          <img src="assets/dist/img/cost&benefit.jpeg" alt="">
          <h5>Langkah 4</h5>
          <h6>Jumlah Seluruh Hasil Perkalian setiap alternatif</h6>
        </div>
        <div class="box" data-name="s5">
          <img src="assets/dist/img/jurnal.jpeg" alt="">
          <h5>Langkah 5</h5>
          <h6>Rangking Keputusan</h6>
        </div>
      </div>
    </div>

    <!-- Sampah Preview -->
    <div class="sampah-preview">
      <div class="preview" data-target="s1">
        <i class="fas fa-times"></i>
        <img src="assets/dist/img/kelompok.jpeg" alt="">
        <h5>Langkah 1</h5>
          <h6>Menentukan Nilai Minimum</h6>
        <p>Menetukan Nilai Minimum Setiap Kriteria</p>
      </div>
      <div class="preview" data-target="s2">
        <i class="fas fa-times"></i>
        <img src="assets/dist/img/metode.jpeg" alt="">
        <h5>Langkah 2</h5>
          <h6>Normalisasi Matriks</h6>
        <p>Menentukan data positif dan negatif</p>
        <p>Jika data positif => Nilai N / Nilai Min * 100%</p>
        <p>Jika data negatif => Nilai Min / Nilai N * 100%</p>

      </div>
      <div class="preview" data-target="s3">
        <i class="fas fa-times"></i>
        <img src="assets/dist/img/kasus.jpeg" alt="">
        <h5>Langkah 3</h5>
          <h6>Perkalian Bobot dan Normalisasi Matriks</h6>
        <p>Bobot * Nilai Normalisasi Matriks</p>
      </div>
      <div class="preview" data-target="s4">
        <i class="fas fa-times"></i>
        <img src="assets/dist/img/cost&benefit.jpeg" alt="">
        <h5>Langkah 4</h5>
          <h6>Jumlah Seluruh Hasil Perkalian setiap alternatif</h6>
        <p>Jumlah keseluruhan hasil dari tiap alternatif</p>
      </div>
      <div class="preview" data-target="s5">
        <i class="fas fa-times"></i>
        <img src="assets/dist/img/jurnal.jpeg" alt="">
        <h5>Langkah 5</h5>
        <h6>Rangking Keputusan</h6>
        <p>Hasil Akhir yang dapat menciptakan rangking keputusan</p>
      </div>
      </div>
  </section>

   
  <!-- Temukan Kami -->
  <section id="temukan-kami">
    <div class="temukan-kami-container">
      <h3>Temukan Kami</h3>
      <iframe src="https://www.google.com/maps/dir//Jl.+Soekarno+Hatta+No.9,+Jatimulyo,+Kec.+Lowokwaru,+Kota+Malang,+Jawa+Timur+65141/@-7.9467055,112.5332665,12z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x2e78827687d272e7:0x789ce9a636cd3aa2!2m2!1d112.6156684!2d-7.9467136?entry=ttu" 
      width="1100" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="clearfix"></div>
  </section>

  <!--Ketentuan Tugas Akhir-->
  <section id="gabung">
    <div class="gabung">
      <div class="container">
        <h3>Ketentuan Tugas Akhir</h3>
        <div class="row">
          <div class="col-12">
            <div class="gabung-content">
              <div class="gabung-content-kiri">
                <h4 class="text-white">Tugas Akhir SPK </h4>
                <p class="text-white"> Ketentuan : </p>
                <ul class="text-white">
                  <b>1. Jumlah Kelompok</b>
                  <li>Kelompok 2-3 Orang</li>
                  <b>2. Penentuan Metode</b>
                  <li>Menggunakan Kombinasi metode atau metode yang belum pernah diajarkan di Semester ini</li>
                  <b>3. Penentuan Kriteria dan Alternatif</b>
                  <li>Dari Kasus yang diangkat dari Jurnal Tiap kelompok dapat menentukan minimal ada 10 kriteria dan 20 alternatif</li>
                  <b>4. Penentuan Kriteria</b>
                  <li>Kriteria Terdiri Dari Cost dan benefit</li>
                  <b>5. Penentuan Jurnal</b>
                  <li>Kasus dan data yang digunakan mengacu dari artikel penelitian orang lain. Sehingga Hasilnya Bisa Dibandingkan jika menggunakan Metode lain Yaitu Berupa Jurnal</li>
                </ul>
              </div>
              <img src="assets/dist/img/daftar.svg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg text-center text-white">
    <div class="container p-4 pb-0">
      <section class="mb-4">
        <a class="btn btn-outline-success btn-floating m-1" href="https://wa.me/6282234519963" role="button">
          <i class="fab fa-whatsapp"></i>
        </a>
        <a class="btn btn-outline-success btn-floating m-1" href="mailto:aurasagita2122@gmail.com" role="button">
          <i class="far fa-envelope"></i>
        </a>
        <a class="btn btn-outline-success btn-floating m-1" href="tel:+6285755252327" role="button">
          <i class="fas fa-phone"></i>
        </a>
      </section>
    </div>
    <div class="copyright text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      Copyright ©2023 <strong> SPK(Sistem Pendukung Keputusan).</strong>
    </div>
  </footer>
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>
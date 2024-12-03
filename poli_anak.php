<?php
// Mulai sesi jika diperlukan
session_start();

// Masukkan koneksi ke database
include('dbconn.php');
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Poli Anak</title>
    <link rel="stylesheet" href="poli.css" />
    <!-- Font dan Icon -->
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
    />
  </head>
  <body>
    <!-- Header -->
    <header>
      <div class="logo">
        <img
          src="Images/LogoNumberOneHealth.png"
          alt="Logo Number One Health"
        />
        <a href="#">Number<span>ONE</span>Health</a>
      </div>
      <nav class="navbar">
        <a href="index.php">Beranda</a>
        <div class="dropdown">
          <a href="#">Layanan Kami</a>
          <div class="dropdown-menu">
            <a href="poli_gigi.php">Poli Gigi</a>
            <a href="poli_anak.php">Poli Anak</a>
            <a href="poli_kandungan.php">Poli Kandungan</a>
            <a href="poli_bedah.php">Poli Bedah</a>
            <a href="poli_jantung.php">Poli Jantung</a>
            <a href="poli_tht.php">Poli THT</a>
            <a href="poli_kulit_dan_kelamin.php">Poli Kulit</a>
            <a href="poli_penyakit_dalam.php">Poli Penyakit Dalam</a>
          </div>
      </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
      <div class="hero-content">
        <h1>Poli Anak</h1>
        <p>
          Memberikan pelayanan terbaik untuk kesehatan bayi, balita, dan anak
          dengan dokter spesialis yang berpengalaman.
        </p>
      </div>
    </section>

    <!-- Deskripsi Poli -->
    <section id="poli-info" class="poli-container">
      <div class="poli-box">
        <img src="Images/poli_anak.jpg" alt="Poli Anak" />
        <div class="poli-content">
          <h2>Deskripsi Poli Anak</h2>
          <p>
            Poli Anak menawarkan pelayanan kesehatan menyeluruh untuk bayi dan
            anak usia hingga 12 tahun. Dengan tenaga medis berpengalaman serta
            fasilitas modern, kami berkomitmen untuk menjaga kesehatan buah hati
            Anda.
          </p>
          <h3>Jadwal Layanan</h3>
          <ul>
            <li><i class="fa fa-calendar"></i> Senin - Jumat: 08.00 - 14.00</li>
            <li><i class="fa fa-calendar"></i> Sabtu: 09.00 - 12.00</li>
          </ul>
          <div class="Home-btn">
            <a href="appointment.php">
              <i class="fa-regular fa-calendar-days"></i>
              Buat Janji Temu</a
            >
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
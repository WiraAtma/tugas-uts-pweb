<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
<<<<<<< HEAD
=======
  <title>Solo Villas & Retreat — Informasi Hotel</title>
>>>>>>> 09b8351669c52a9008e4e5d1808b9669a3060b19
=======
  <title>Ganti Title Disini</title>
>>>>>>> 562777d0b68b11a59cd51859c25549aa89195b19
  <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
    crossorigin="anonymous"
  >
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../assets/global-style.css">
<<<<<<< HEAD

  <style>
    /* ── HERO ── */
    .hero-img {
      width: 100%;
<<<<<<< HEAD
      height: 450px;
=======
      height: 480px;
>>>>>>> 09b8351669c52a9008e4e5d1808b9669a3060b19
      object-fit: cover;
      border-radius: 16px;
    }

    .hero-text-col {
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding-left: 2rem;
    }

    .hotel-badge {
      display: inline-block;
      font-size: 11px;
      letter-spacing: 2px;
      text-transform: uppercase;
      color: #b8962e;
      border: 1px solid #d4af3766;
      padding: 4px 14px;
      border-radius: 50px;
      margin-bottom: 12px;
    }

    .hotel-title {
      font-size: 2rem;
      font-weight: 700;
      color: #1a2e1a;
      line-height: 1.2;
      margin-bottom: 6px;
    }

    .hotel-subtitle {
      font-size: 14px;
      color: #7a6e5f;
      letter-spacing: 0.5px;
      margin-bottom: 16px;
    }

    .gold-divider {
      width: 40px;
      height: 3px;
      background: #d4af37;
      border-radius: 2px;
      margin-bottom: 16px;
    }

    .hotel-desc {
      font-size: 15px;
      color: #4a4035;
      line-height: 1.8;
      margin-bottom: 20px;
    }

    .info-item {
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 14px;
      color: #3b2f1e;
      margin-bottom: 8px;
    }

    .info-item i {
      color: #b8962e;
      font-size: 16px;
      width: 20px;
    }

    /* ── SECTION HEADER ── */
    .section-label {
      font-size: 11px;
      letter-spacing: 2.5px;
      text-transform: uppercase;
      color: #b8962e;
      margin-bottom: 4px;
    }

    .section-title {
      font-size: 1.6rem;
      font-weight: 700;
      color: #1a2e1a;
      margin-bottom: 1.5rem;
    }

    /* ── FACILITY CARD ── */
    .facility-card {
      border: 1px solid #e8e0d0;
      border-radius: 14px;
      overflow: hidden;
      transition: box-shadow 0.25s ease, transform 0.25s ease;
      background: #fff;
      height: 100%;
    }

    .facility-card:hover {
      box-shadow: 0 8px 24px rgba(26,46,26,0.12);
      transform: translateY(-4px);
    }

    .facility-card img {
      width: 100%;
      height: 160px;
      object-fit: cover;
    }

    .facility-card .card-body {
      padding: 1rem 1.1rem;
    }

    .facility-icon-circle {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: #e8f0e8;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 10px;
    }

    .facility-icon-circle i {
      font-size: 18px;
      color: #2d4a2d;
    }

    .facility-card .card-title {
      font-size: 15px;
      font-weight: 600;
      color: #1a2e1a;
      margin-bottom: 4px;
    }

    .facility-card .card-text {
      font-size: 13px;
      color: #7a6e5f;
      line-height: 1.6;
    }

    /* ── GALLERY CARD ── */
    .gallery-card {
      border: 1px solid #e8e0d0;
      border-radius: 14px;
      overflow: hidden;
      transition: box-shadow 0.25s ease, transform 0.25s ease;
      background: #fff;
      height: 100%;
    }

    .gallery-card:hover {
      box-shadow: 0 8px 24px rgba(26,46,26,0.12);
      transform: translateY(-4px);
    }

    .gallery-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .gallery-card .card-body {
      padding: 1rem 1.1rem;
    }

    .gallery-card .card-title {
      font-size: 14px;
      font-weight: 600;
      color: #1a2e1a;
      margin-bottom: 4px;
    }

    .gallery-card .card-text {
      font-size: 13px;
      color: #7a6e5f;
      line-height: 1.6;
      margin: 0;
    }

    /* ── INFO BOX ── */
    .info-box {
      background: #309822;
      border-radius: 16px;
      padding: 2rem;
      color: #f5f0e8;
    }

    .info-box .info-row {
      display: flex;
      align-items: flex-start;
      gap: 14px;
      padding: 12px 0;
      border-bottom: 1px solid rgba(212,175,55,0.15);
    }

    .info-box .info-row:last-child {
      border-bottom: none;
      padding-bottom: 0;
    }

    .info-icon-box {
      width: 38px;
      height: 38px;
      border-radius: 8px;
      background: rgba(212,175,55,0.12);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .info-icon-box i {
      font-size: 17px;
      color: #d4af37;
    }

    .info-box .info-lbl {
      font-size: 11px;
      letter-spacing: 1.5px;
      text-transform: uppercase;
      color: rgba(245,240,232,0.45);
      margin-bottom: 2px;
    }

    .info-box .info-val {
      font-size: 15px;
      font-weight: 500;
      color: #f5f0e8;
      margin: 0;
    }

    /* ── CTA BUTTON ── */
    .btn-gold {
      background: #d4af37;
      color: #1a2e1a;
      font-weight: 600;
      font-size: 14px;
      padding: 10px 28px;
      border-radius: 50px;
      border: none;
      transition: background 0.2s ease;
      text-decoration: none;
    }

    .btn-gold:hover {
      background: #b8962e;
      color: #fff;
    }

    /* ── RESPONSIVE ── */
    @media (max-width: 767px) {
      .hero-text-col {
        padding-left: 0;
        padding-top: 1.5rem;
      }

      .hero-img {
        height: 260px;
      }
    }
  </style>
=======
>>>>>>> 562777d0b68b11a59cd51859c25549aa89195b19
</head>
<body>
  <?php include "../components/nav.php"; ?>
  <main class="container py-2" style="max-width: 700px;">

    <!-- Kembali -->
    <div class="text-center mb-4">
      <a href="../index.php" class="text-decoration-none text-muted" style="font-size: 14px; letter-spacing: 1px;">
        ← Kembali ke Home
      </a>
    </div>

<<<<<<< HEAD
<<<<<<< HEAD
    
    <div class="row justify-content-center">
      <div class="col-md-11">

        <!-- HERO — Gambar kiri, teks kanan-->
=======
    <div class="row justify-content-center">
      <div class="col-md-11">

        <!-- ================================================
             HERO — Gambar kiri, teks kanan
        ================================================ -->
>>>>>>> 09b8351669c52a9008e4e5d1808b9669a3060b19
        <div class="row align-items-center mb-5">

          <!-- Gambar -->
          <div class="col-md-6">
            <img src="https://static.thehoneycombers.com/wp-content/uploads/sites/4/2022/06/Aksari-Resort-Ubud-Bali-hotel.jpeg" class="hero-img" alt="Solo Villas & Retreat">
=======
    <!-- ── HERO SUMMARY CARD ── -->
    <div class="card border-0 shadow-sm rounded-4 overflow-hidden d-flex flex-row mb-5" style="height: 160px;">
      <img 
        src="https://static.thehoneycombers.com/wp-content/uploads/sites/4/2022/06/Aksari-Resort-Ubud-Bali-hotel.jpeg"
        alt="Solo Villas & Retreat"
        style="width: 220px; object-fit: cover; flex-shrink: 0;"
      >
      <div class="card-body d-flex flex-row p-0">
        <div class="d-flex flex-column justify-content-center px-4 flex-grow-1">
          <h5 class="fw-bold mb-1">Solo Villas &amp; Retreat</h5>
          <p class="text-muted mb-2" style="font-size: 13px;">
            <i class="bi bi-geo-alt me-1"></i>Jl. Adi Sucipto No. 47, Ubud, Bali
          </p>
          <div class="d-flex align-items-center gap-1 mb-2">
            <span class="text-warning fs-5">★★★★★</span>
            <span class="fw-bold text-dark ms-1" style="font-size: 13px;">4.9</span>
            <span class="text-muted" style="font-size: 13px;">Luar Biasa</span>
>>>>>>> 562777d0b68b11a59cd51859c25549aa89195b19
          </div>
          <p class="mb-0" style="font-size: 14px;">
            Mulai dari <strong>Rp 850.000</strong> / malam
          </p>
        </div>
        <div class="d-flex flex-column align-items-center justify-content-center px-4 gap-1" style="background-color: #f5f5f5; min-width: 150px; border-left: 1px solid #eee;">
          <p class="text-muted mb-0" style="font-size: 11px;">Gratis Makan Pagi</p>
          <p class="fw-bold mb-0" style="font-size: 22px;">Rp 850K</p>
          <p class="text-success mb-2" style="font-size: 11px;">Gratis Biaya Batal Booking</p>
          <a href="#booking" class="btn btn-dark w-100" style="font-size: 13px;">Pesan Sekarang</a>
        </div>
      </div>
    </div>

<<<<<<< HEAD
          <!-- Teks -->
          <div class="col-md-6 hero-text-col">
            <span class="hotel-badge">★ Solo Villas — Ubud, Denpasar Utara ★</span>
<<<<<<< HEAD
            <h1 class="hotel-title">Solo Villas &amp; Retreat</h1>
=======
            <h1 class="hotel-title">Solo Villas<br>&amp; Retreat</h1>
>>>>>>> 09b8351669c52a9008e4e5d1808b9669a3060b19
            <p class="hotel-subtitle">Kemewahan Autentik di Jantung Desa Ubud</p>
            <div class="gold-divider"></div>
            <p class="hotel-desc">
              Solo Villas &amp; Retreat menghadirkan pengalaman menginap mewah yang memadukan 
              keindahan arsitektur Ubud tradisional dengan kenyamanan modern. Terletak di 
              kawasan strategis Kota Denpasar Utara, hotel ini menjadi pilihan ideal bagi wisatawan 
              yang ingin menikmati kekayaan budaya sekaligus beristirahat dalam suasana 
              yang tenang dan elegan.
            </p>
=======
    <!-- ── JUDUL ── -->
    <h1 class="fw-bold text-center mb-4" style="font-size: 32px;">Solo Villas &amp; Retreat</h1>
>>>>>>> 562777d0b68b11a59cd51859c25549aa89195b19

    <!-- ── BANNER UTAMA ── -->
    <img 
      src="https://static.thehoneycombers.com/wp-content/uploads/sites/4/2022/06/Aksari-Resort-Ubud-Bali-hotel.jpeg"
      alt="Solo Villas & Retreat"
      class="img-fluid rounded-3 w-100 mb-5"
      style="height: 280px; object-fit: cover;"
    >

    <!-- ── DESKRIPSI KIRI + GAMBAR KANAN ── -->
    <div class="row align-items-start g-4 mb-5">
      <div class="col-5">
        <img 
          src="https://www.bemytravelmuse.com/wp-content/uploads/2023/08/Element-Bali-Ubud-768x512.jpg"
          alt="Solo Villas Lobi"
          class="img-fluid rounded-3"
          style="height: 200px; width: 100%; object-fit: cover;"
        >
      </div>
      <div class="col-7">
        <h5 class="fw-bold mb-2">Kemewahan Autentik di Jantung Ubud</h5>
        <p class="text-muted" style="font-size: 14px; line-height: 1.8;">
          Solo Villas &amp; Retreat menghadirkan pengalaman menginap mewah yang memadukan keindahan arsitektur Bali tradisional dengan kenyamanan modern. Pilihan ideal bagi wisatawan yang ingin merasakan budaya sekaligus beristirahat dalam suasana tenang dan elegan.
        </p>
        <p class="text-muted" style="font-size: 14px; line-height: 1.8;">
          <i class="bi bi-clock me-1"></i><strong>Check-in:</strong> 14:00 &nbsp;|&nbsp; <strong>Check-out:</strong> 12:00
        </p>
      </div>
    </div>

    <!-- ── GAMBAR KIRI + LOKASI KANAN ── -->
    <div class="row align-items-start g-4 mb-5">
      <div class="col-7">
        <h5 class="fw-bold mb-2">Lokasi Strategis di Ubud</h5>
        <p class="text-muted" style="font-size: 14px; line-height: 1.8;">
          Terletak di Jl. Adi Sucipto, hotel ini berada di kawasan Ubud yang tenang namun dekat dengan berbagai destinasi wisata utama Monkey Forest, Ubud Palace, dan Pasar Seni Tradisional semuanya bisa dijangkau dalam hitungan menit.
        </p>
        <p class="text-muted" style="font-size: 14px; line-height: 1.8;">
          Jaraknya sekitar 60 menit berkendara dari Bandara Internasional Ngurah Rai.
        </p>
      </div>
      <div class="col-5">
        <img 
          src="https://www.cimbniaga.co.id/content/dam/cimb/inspirasi/wanna-jungle-pool.webp"
          alt="Solo Villas Pool"
          class="img-fluid rounded-3"
          style="height: 200px; width: 100%; object-fit: cover;"
        >
      </div>
    </div>

    <!-- ── FOTO TENGAH ── -->
    <div class="text-center mb-5">
      <img 
        src="https://i.pinimg.com/736x/1d/9a/9c/1d9a9c57f7d5bc210443914c722c9207.jpg"
        alt="Solo Villas Taman"
        class="img-fluid rounded-3"
        style="height: 220px; width: 70%; object-fit: cover;"
      >
    </div>

    <!-- ── FASILITAS ── -->
    <div class="mb-5">
      <h5 class="fw-bold mb-3">Fasilitas Unggulan</h5>
      <div class="row g-2">
        <div class="col-6">
          <div class="d-flex align-items-center gap-2 p-2 rounded-3" style="background-color: #f9f9f9;">
            <i class="bi bi-water text-muted"></i>
            <span style="font-size: 14px;">Kolam Renang Infinity</span>
          </div>
        </div>
<<<<<<< HEAD

<<<<<<< HEAD
        <!-- FASILITAS — Card dengan gambar -->
=======
        <!-- ================================================
             FASILITAS — Card dengan gambar
        ================================================ -->
>>>>>>> 09b8351669c52a9008e4e5d1808b9669a3060b19
        <div class="mb-5">
          <p class="section-label">Apa yang Kami Tawarkan</p>
          <h2 class="section-title">Fasilitas Unggulan</h2>

          <div class="row g-4">

            <!-- Kolam Renang -->
            <div class="col-md-3 col-sm-6">
              <div class="facility-card">
                <img src="https://www.cimbniaga.co.id/content/dam/cimb/inspirasi/wanna-jungle-pool.webp" alt="Kolam Renang">
                <div class="card-body">
                  <div class="facility-icon-circle">
                    <i class="bi bi-water"></i>
                  </div>
                  <h5 class="card-title">Kolam Renang</h5>
                  <p class="card-text">Kolam renang infinity outdoor dengan pemandangan taman hijau yang asri dan menyegarkan.</p>
                </div>
              </div>
            </div>

            <!-- Spa & Sauna -->
            <div class="col-md-3 col-sm-6">
              <div class="facility-card">
                <img src="https://baliventur.b-cdn.net/wp-content/uploads/2023/10/ubud-spa-and-wellness-1024x585.jpg.webp" alt="Spa & Sauna">
                <div class="card-body">
                  <div class="facility-icon-circle">
                    <i class="bi bi-flower1"></i>
                  </div>
                  <h5 class="card-title">Spa &amp; Sauna</h5>
                  <p class="card-text">Nikmati terapi relaksasi tubuh dengan teknik tradisional Jawa oleh terapis berpengalaman.</p>
                </div>
              </div>
            </div>

            <!-- Restoran -->
            <div class="col-md-3 col-sm-6">
              <div class="facility-card">
                <img src="https://tse4.mm.bing.net/th/id/OIP.7ssFd5567fdBbzaXA7cFJwHaE8?w=990&h=660&rs=1&pid=ImgDetMain&o=7&rm=3" alt="Restoran">
                <div class="card-body">
                  <div class="facility-icon-circle">
                    <i class="bi bi-cup-hot-fill"></i>
                  </div>
                  <h5 class="card-title">Restoran</h5>
                  <p class="card-text">Sajian kuliner autentik khas Solo dan menu internasional yang disiapkan oleh chef berbintang.</p>
                </div>
              </div>
            </div>

            <!-- Free WiFi -->
            <div class="col-md-3 col-sm-6">
              <div class="facility-card">
                <img src="https://img.freepik.com/premium-photo/free-wifi-message-round-wooden-sign-sign-outdoor-garden-coffee-shop_1243034-756.jpg" alt="Free WiFi">
                <div class="card-body">
                  <div class="facility-icon-circle">
                    <i class="bi bi-wifi"></i>
                  </div>
                  <h5 class="card-title">Free WiFi</h5>
                  <p class="card-text">Koneksi internet super cepat tersedia di seluruh area hotel, gratis untuk semua tamu.</p>
                </div>
              </div>
            </div>

          </div>
        </div>

<<<<<<< HEAD
        <!-- GALERI — Card foto + keterangan -->
=======
        <!-- ================================================
             GALERI — Card foto + keterangan
        ================================================ -->
>>>>>>> 09b8351669c52a9008e4e5d1808b9669a3060b19
        <div class="mb-5">
          <p class="section-label">Lihat Lebih Dekat</p>
          <h2 class="section-title">Galeri Hotel</h2>

          <div class="row g-4">

            <!-- Kamar Deluxe -->
            <div class="col-md-4">
              <div class="gallery-card">
                <img src="https://tse3.mm.bing.net/th/id/OIP.3dNDG_sN-w6bt_bU98fFhAHaE8?rs=1&pid=ImgDetMain&o=7&rm=3" alt="Kamar Deluxe">
                <div class="card-body">
                  <h6 class="card-title">Kamar Deluxe</h6>
                  <p class="card-text">Kamar berdesain modern dengan tempat tidur king-size, AC, dan pemandangan taman yang indah.</p>
                </div>
              </div>
            </div>

            <!-- Lobi Utama -->
            <div class="col-md-4">
              <div class="gallery-card">
                <img src="https://www.bemytravelmuse.com/wp-content/uploads/2023/08/Element-Bali-Ubud-768x512.jpg" alt="Area Lobi">
                <div class="card-body">
                  <h6 class="card-title">Lobi Utama</h6>
                  <p class="card-text">Sambut kedatangan Anda dengan lobi megah berhiaskan ornamen batik dan ukiran kayu jati asli.</p>
                </div>
              </div>
            </div>

            <!-- Taman Tropis -->
            <div class="col-md-4">
              <div class="gallery-card">
                <img src="https://i.pinimg.com/736x/1d/9a/9c/1d9a9c57f7d5bc210443914c722c9207.jpg" alt="Taman Tropis">
                <div class="card-body">
                  <h6 class="card-title">Taman Tropis</h6>
                  <p class="card-text">Taman tropis seluas 2 hektar dengan koleksi tanaman eksotis, cocok untuk bersantai di pagi hari.</p>
                </div>
              </div>
            </div>

          </div>
        </div>

<<<<<<< HEAD
        <!-- INFORMASI LENGKAP — Box dark -->
=======
        <!-- ================================================
             INFORMASI LENGKAP — Box dark
        ================================================ -->
>>>>>>> 09b8351669c52a9008e4e5d1808b9669a3060b19
        <div class="mb-5">
          <p class="section-label">Detail</p>
          <h2 class="section-title">Informasi Penting</h2>

          <div class="info-box">
            <div class="row g-0">

              <div class="col-md-6">
                <div class="info-row">
                  <div class="info-icon-box">
                    <i class="bi bi-geo-alt-fill"></i>
                  </div>
                  <div>
                    <p class="info-lbl">Lokasi</p>
<<<<<<< HEAD
                    <p class="info-val">Jl. Adi Sucipto No. 47, Ubud, Denpasar Utara</p>
=======
                    <p class="info-val">Jl. Adi Sucipto No. 47, Surakarta</p>
>>>>>>> 09b8351669c52a9008e4e5d1808b9669a3060b19
                  </div>
                </div>
                <div class="info-row">
                  <div class="info-icon-box">
                    <i class="bi bi-cash-coin"></i>
                  </div>
                  <div>
                    <p class="info-lbl">Harga Mulai</p>
                    <p class="info-val">Rp 850.000 / malam</p>
                  </div>
                </div>
                <div class="info-row">
                  <div class="info-icon-box">
                    <i class="bi bi-telephone-fill"></i>
                  </div>
                  <div>
                    <p class="info-lbl">Nomor Telepon</p>
                    <p class="info-val">+62 271 123 4567</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="info-row">
                  <div class="info-icon-box">
                    <i class="bi bi-box-arrow-in-right"></i>
                  </div>
                  <div>
                    <p class="info-lbl">Check-in</p>
                    <p class="info-val">Pukul 14:00 WIB</p>
                  </div>
                </div>
                <div class="info-row">
                  <div class="info-icon-box">
                    <i class="bi bi-box-arrow-right"></i>
                  </div>
                  <div>
                    <p class="info-lbl">Check-out</p>
                    <p class="info-val">Pukul 12:00 WIB</p>
                  </div>
                </div>
                <div class="info-row">
                  <div class="info-icon-box">
                    <i class="bi bi-envelope-fill"></i>
                  </div>
                  <div>
                    <p class="info-lbl">Email</p>
                    <p class="info-val">info@solovillas.id</p>
                  </div>
                </div>
              </div>

            </div>
=======
        <div class="col-6">
          <div class="d-flex align-items-center gap-2 p-2 rounded-3" style="background-color: #f9f9f9;">
            <i class="bi bi-flower1 text-muted"></i>
            <span style="font-size: 14px;">Spa &amp; Sauna Tradisional</span>
          </div>
        </div>
        <div class="col-6">
          <div class="d-flex align-items-center gap-2 p-2 rounded-3" style="background-color: #f9f9f9;">
            <i class="bi bi-cup-hot text-muted"></i>
            <span style="font-size: 14px;">Restoran Chef Berbintang</span>
          </div>
        </div>
        <div class="col-6">
          <div class="d-flex align-items-center gap-2 p-2 rounded-3" style="background-color: #f9f9f9;">
            <i class="bi bi-wifi text-muted"></i>
            <span style="font-size: 14px;">WiFi Gratis</span>
>>>>>>> 562777d0b68b11a59cd51859c25549aa89195b19
          </div>
        </div>
        <div class="col-6">
          <div class="d-flex align-items-center gap-2 p-2 rounded-3" style="background-color: #f9f9f9;">
            <i class="bi bi-egg-fried text-muted"></i>
            <span style="font-size: 14px;">Sarapan Tersedia</span>
          </div>
        </div>
        <div class="col-6">
          <div class="d-flex align-items-center gap-2 p-2 rounded-3" style="background-color: #f9f9f9;">
            <i class="bi bi-p-circle text-muted"></i>
            <span style="font-size: 14px;">Parkir Gratis</span>
          </div>
        </div>
        <div class="col-6">
          <div class="d-flex align-items-center gap-2 p-2 rounded-3" style="background-color: #f9f9f9;">
            <i class="bi bi-person-arms-up text-muted"></i>
            <span style="font-size: 14px;">Kelas Yoga Pagi</span>
          </div>
        </div>
        <div class="col-6">
          <div class="d-flex align-items-center gap-2 p-2 rounded-3" style="background-color: #f9f9f9;">
            <i class="bi bi-tree text-muted"></i>
            <span style="font-size: 14px;">Taman Tropis 2 Hektar</span>
          </div>
        </div>
      </div>
    </div>

    <!-- ── PILIHAN KAMAR ── -->
    <div class="mb-5" id="booking">
      <h5 class="fw-bold mb-3">Pilihan Kamar</h5>

      <!-- Kamar Deluxe -->
      <div class="card border-0 shadow-sm rounded-4 overflow-hidden d-flex flex-row mb-3" style="height: 130px;">
        <img 
          src="https://tse3.mm.bing.net/th/id/OIP.3dNDG_sN-w6bt_bU98fFhAHaE8?rs=1&pid=ImgDetMain&o=7&rm=3"
          alt="Kamar Deluxe"
          style="width: 150px; object-fit: cover; flex-shrink: 0;"
        >
        <div class="card-body d-flex flex-row p-0">
          <div class="d-flex flex-column justify-content-center px-3 flex-grow-1">
            <h6 class="fw-bold mb-1" style="font-size: 14px;">Kamar Deluxe</h6>
            <p class="text-muted mb-1" style="font-size: 12px;"><i class="bi bi-people me-1"></i>Maks. 2 Tamu</p>
            <p class="text-muted mb-0" style="font-size: 12px;"><i class="bi bi-check2 me-1 text-success"></i>Sarapan Termasuk</p>
          </div>
          <div class="d-flex flex-column align-items-center justify-content-center px-3 gap-1" style="background-color: #f5f5f5; min-width: 130px; border-left: 1px solid #eee;">
            <p class="fw-bold mb-0" style="font-size: 18px;">Rp 850K</p>
            <p class="text-muted mb-1" style="font-size: 11px;">/ malam</p>
            <a href="#" class="btn btn-outline-dark btn-sm w-100" style="font-size: 12px;">Pilih</a>
          </div>
        </div>
      </div>

      <!-- Villa Suite -->
      <div class="card border-0 shadow-sm rounded-4 overflow-hidden d-flex flex-row mb-3" style="height: 130px;">
        <img 
          src="https://baliventur.b-cdn.net/wp-content/uploads/2023/10/ubud-spa-and-wellness-1024x585.jpg.webp"
          alt="Villa Suite"
          style="width: 150px; object-fit: cover; flex-shrink: 0;"
        >
        <div class="card-body d-flex flex-row p-0">
          <div class="d-flex flex-column justify-content-center px-3 flex-grow-1">
            <h6 class="fw-bold mb-1" style="font-size: 14px;">Villa Suite</h6>
            <p class="text-muted mb-1" style="font-size: 12px;"><i class="bi bi-people me-1"></i>Maks. 2 Tamu</p>
            <p class="text-muted mb-0" style="font-size: 12px;"><i class="bi bi-check2 me-1 text-success"></i>Sarapan + Akses Spa</p>
          </div>
          <div class="d-flex flex-column align-items-center justify-content-center px-3 gap-1" style="background-color: #f5f5f5; min-width: 130px; border-left: 1px solid #eee;">
            <p class="fw-bold mb-0" style="font-size: 18px;">Rp 1,5 Jt</p>
            <p class="text-muted mb-1" style="font-size: 11px;">/ malam</p>
            <a href="#" class="btn btn-outline-dark btn-sm w-100" style="font-size: 12px;">Pilih</a>
          </div>
        </div>
      </div>

      <!-- Villa Private Pool -->
      <div class="card border-0 shadow-sm rounded-4 overflow-hidden d-flex flex-row" style="height: 130px;">
        <img 
          src="https://www.cimbniaga.co.id/content/dam/cimb/inspirasi/wanna-jungle-pool.webp"
          alt="Villa Private Pool"
          style="width: 150px; object-fit: cover; flex-shrink: 0;"
        >
        <div class="card-body d-flex flex-row p-0">
          <div class="d-flex flex-column justify-content-center px-3 flex-grow-1">
            <h6 class="fw-bold mb-1" style="font-size: 14px;">Villa Private Pool</h6>
            <p class="text-muted mb-1" style="font-size: 12px;"><i class="bi bi-people me-1"></i>Maks. 4 Tamu</p>
            <p class="text-muted mb-0" style="font-size: 12px;"><i class="bi bi-check2 me-1 text-success"></i>Kolam Renang Pribadi</p>
          </div>
          <div class="d-flex flex-column align-items-center justify-content-center px-3 gap-1" style="background-color: #f5f5f5; min-width: 130px; border-left: 1px solid #eee;">
            <p class="fw-bold mb-0" style="font-size: 18px;">Rp 2,8 Jt</p>
            <p class="text-muted mb-1" style="font-size: 11px;">/ malam</p>
            <a href="#" class="btn btn-dark btn-sm w-100" style="font-size: 12px;">Pilih</a>
          </div>
        </div>
      </div>
    </div>

    <!-- ── INFORMASI HOTEL ── -->
    <div class="mb-5">
      <h5 class="fw-bold mb-3">Informasi Hotel</h5>
      <p class="text-muted" style="font-size: 14px; line-height: 1.8;">
        <i class="bi bi-geo-alt me-2"></i><strong>Alamat:</strong> Jl. Adi Sucipto No. 47, Ubud, Gianyar, Bali
      </p>
      <p class="text-muted" style="font-size: 14px; line-height: 1.8;">
        <i class="bi bi-clock me-2"></i><strong>Check-in / Check-out:</strong> 14:00 / 12:00
      </p>
      <p class="text-muted" style="font-size: 14px; line-height: 1.8;">
        <i class="bi bi-telephone me-2"></i><strong>Telepon:</strong> +62 271 123 4567
      </p>
      <p class="text-muted" style="font-size: 14px; line-height: 1.8;">
        <i class="bi bi-envelope me-2"></i><strong>Email:</strong> info@solovillas.id
      </p>
      <p class="text-muted" style="font-size: 14px; line-height: 1.8;">
        <i class="bi bi-car-front me-2"></i><strong>Transportasi:</strong> ~60 menit dari Bandara Ngurah Rai. Tersedia airport shuttle dan concierge.
      </p>
      <p class="text-muted" style="font-size: 14px; line-height: 1.8;">
        <i class="bi bi-info-circle me-2"></i><strong>Catatan:</strong> Tamu diharapkan membawa kartu identitas dan kartu kredit saat check-in.
      </p>
    </div>

    <!-- Kembali -->
    <div class="text-center my-4">
      <a href="../index.php" class="text-decoration-none text-muted" style="font-size: 14px; letter-spacing: 1px;">
        ← Kembali ke Home
      </a>
    </div>

  </main>

<<<<<<< HEAD
  <?php include "../components/footer.php"; ?>
=======
  <?php include "../components/footer.php"; ?>

  <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" 
    crossorigin="anonymous">
  </script>
</body>
</html>
>>>>>>> 562777d0b68b11a59cd51859c25549aa89195b19

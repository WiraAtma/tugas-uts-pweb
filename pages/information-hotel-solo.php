<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Solo Villas & Retreat — Informasi Hotel</title>
  <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
    crossorigin="anonymous"
  >
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../assets/global-style.css">

  <style>
    /* ── HERO ── */
    .hero-img {
      width: 100%;
      height: 480px;
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
</head>
<body>
  <?php include "../components/nav.php"; ?>

  <main class="container py-4">

    <!-- Kembali ke Home -->
    <div class="text-center mb-4">
      <a href="../index.php" class="text-decoration-none text-muted" style="font-size: 14px; letter-spacing: 1px;">
        ← Kembali ke Home
      </a>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-11">

        <!-- ================================================
             HERO — Gambar kiri, teks kanan
        ================================================ -->
        <div class="row align-items-center mb-5">

          <!-- Gambar -->
          <div class="col-md-6">
            <img src="https://static.thehoneycombers.com/wp-content/uploads/sites/4/2022/06/Aksari-Resort-Ubud-Bali-hotel.jpeg" class="hero-img" alt="Solo Villas & Retreat">
          </div>

          <!-- Teks -->
          <div class="col-md-6 hero-text-col">
            <span class="hotel-badge">★ Solo Villas — Ubud, Denpasar Utara ★</span>
            <h1 class="hotel-title">Solo Villas<br>&amp; Retreat</h1>
            <p class="hotel-subtitle">Kemewahan Autentik di Jantung Desa Ubud</p>
            <div class="gold-divider"></div>
            <p class="hotel-desc">
              Solo Villas &amp; Retreat menghadirkan pengalaman menginap mewah yang memadukan 
              keindahan arsitektur Ubud tradisional dengan kenyamanan modern. Terletak di 
              kawasan strategis Kota Denpasar Utara, hotel ini menjadi pilihan ideal bagi wisatawan 
              yang ingin menikmati kekayaan budaya sekaligus beristirahat dalam suasana 
              yang tenang dan elegan.
            </p>

            <!-- Info singkat -->
            <div class="info-item">
              <i class="bi bi-geo-alt-fill"></i>
              <span>Jl. Adi Sucipto No. 47, Ubud, Denpasar Utara</span>
            </div>
            <div class="info-item">
              <i class="bi bi-star-fill"></i>
              <span>Rating 4.9 / 5 — Hotel Bintang 5</span>
            </div>
            <div class="info-item">
              <i class="bi bi-currency-dollar"></i>
              <span>Mulai dari Rp 850.000 / malam</span>
            </div>

            <div class="mt-3">
              <a href="#" class="btn-gold">Pesan Sekarang</a>
            </div>
          </div>
        </div>

        <!-- ================================================
             FASILITAS — Card dengan gambar
        ================================================ -->
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

        <!-- ================================================
             GALERI — Card foto + keterangan
        ================================================ -->
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

        <!-- ================================================
             INFORMASI LENGKAP — Box dark
        ================================================ -->
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
                    <p class="info-val">Jl. Adi Sucipto No. 47, Surakarta</p>
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
          </div>
        </div>

      </div><!-- /col -->
    </div><!-- /row -->

    <!-- Kembali ke Home -->
    <div class="text-center my-4">
      <a href="../index.php" class="text-decoration-none text-muted" style="font-size: 14px; letter-spacing: 1px;">
        ← Kembali ke Home
      </a>
    </div>

  </main>

  <?php include "../components/footer.php"; ?>
  <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" 
    crossorigin="anonymous">
  </script>
</body>
</html>
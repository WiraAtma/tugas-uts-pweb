<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ganti Title Disini</title>
  <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
    crossorigin="anonymous"
  >
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../assets/global-style.css">
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

    <!-- ── JUDUL ── -->
    <h1 class="fw-bold text-center mb-4" style="font-size: 32px;">Solo Villas &amp; Retreat</h1>

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

  <?php include "../components/footer.php"; ?>

  <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" 
    crossorigin="anonymous">
  </script>
</body>
</html>
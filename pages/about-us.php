<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tentang Kami — Travel Ubud</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Nunito:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../assets/global-style.css">

  <style>
    :root {
      --green-deep:   #1B3A2D;
      --green-mid:    #2D5A42;
      --green-light:  #E8F2EB;
      --terra:        #C4622D;
      --terra-light:  #F5E8DF;
      --gold:         #B8872A;
      --cream:        #F7F3EC;
      --cream-dark:   #EDE7DA;
      --text-dark:    #1A1A18;
      --text-mid:     #4A4A45;
      --text-muted:   #888880;
    }

    * { box-sizing: border-box; }

    body {
      background-color: var(--cream);
      color: var(--text-dark);
      font-family: 'Nunito', sans-serif;
      font-weight: 400;
    }

    h1, h2, h3, h4 {
      font-family: 'Playfair Display', serif;
    }

    /* ── HERO ── */
    .hero-about {
      background-color: var(--green-deep);
      position: relative;
      overflow: hidden;
      padding: 100px 0 80px;
      text-align: center;
    }

    .hero-about::before {
      content: '';
      position: absolute;
      inset: 0;
      background:
        radial-gradient(ellipse 60% 60% at 20% 50%, rgba(44,90,66,0.6) 0%, transparent 70%),
        radial-gradient(ellipse 50% 70% at 80% 30%, rgba(196,98,45,0.15) 0%, transparent 60%);
    }

    .hero-about h1 {
      color: #fff;
      font-size: clamp(2.4rem, 5vw, 3.8rem);
      font-weight: 700;
      line-height: 1.15;
      max-width: 680px;
      margin: 0 auto 20px;
    }

    .hero-about h1 em {
      color: #D4A84B;
      font-style: italic;
    }

    .hero-about p.lead {
      color: rgba(255,255,255,0.72);
      font-size: 1.05rem;
      font-weight: 300;
      max-width: 560px;
      margin: 0 auto;
      line-height: 1.75;
    }

    .hero-scroll-indicator {
      margin-top: 48px;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      color: rgba(255,255,255,0.4);
      font-size: 13px;
      letter-spacing: 1px;
    }

    .hero-scroll-indicator span.line {
      display: block;
      width: 40px;
      height: 1px;
      background: rgba(255,255,255,0.25);
    }

    /* ── SECTION BASE ── */
    section { padding: 80px 0; }

    .section-label {
      font-family: 'Nunito', sans-serif;
      font-size: 11px;
      font-weight: 700;
      letter-spacing: 3px;
      text-transform: uppercase;
      color: var(--terra);
      margin-bottom: 12px;
    }

    .section-title {
      font-size: clamp(1.8rem, 3vw, 2.6rem);
      font-weight: 600;
      color: var(--green-deep);
      line-height: 1.25;
      margin-bottom: 20px;
    }

    .section-body {
      color: var(--text-mid);
      font-size: 1rem;
      line-height: 1.85;
    }

    /* ── DIVIDER ── */
    .ornament-divider {
      display: flex;
      align-items: center;
      gap: 16px;
      margin: 16px 0 28px;
    }
    .ornament-divider span.line {
      flex: 1;
      height: 1px;
      background: var(--cream-dark);
    }
    .ornament-divider span.dot {
      width: 6px;
      height: 6px;
      border-radius: 50%;
      background: var(--gold);
    }

    /* ── STORY SECTION ── */
    #story {
      background: #fff;
    }

    .story-img-block {
      position: relative;
    }

    .story-img-block img {
      width: 100%;
      height: 500px;
      object-fit: cover;
      border-radius: 16px;
    }

    .story-img-block .year-badge {
      position: absolute;
      bottom: -20px;
      right: -16px;
      background: var(--green-deep);
      color: #fff;
      border-radius: 14px;
      padding: 18px 24px;
      text-align: center;
      box-shadow: 0 8px 24px rgba(27,58,45,0.25);
    }

    .story-img-block .year-badge strong {
      display: block;
      font-family: 'Playfair Display', serif;
      font-size: 2rem;
      font-weight: 700;
      color: #D4A84B;
    }

    .story-img-block .year-badge span {
      font-size: 11px;
      font-weight: 600;
      letter-spacing: 1.5px;
      text-transform: uppercase;
      color: rgba(255,255,255,0.65);
    }

    /* ── STATS STRIP ── */
    .stats-strip {
      background: var(--green-deep);
      padding: 56px 0;
    }

    .stat-item {
      text-align: center;
      padding: 0 16px;
    }

    .stat-item .stat-number {
      font-family: 'Playfair Display', serif;
      font-size: 2.8rem;
      font-weight: 700;
      color: #D4A84B;
      line-height: 1;
    }

    .stat-item .stat-label {
      font-size: 13px;
      font-weight: 500;
      color: rgba(255,255,255,0.6);
      letter-spacing: 0.5px;
      margin-top: 6px;
    }

    .stat-divider {
      width: 1px;
      height: 48px;
      background: rgba(255,255,255,0.12);
      margin: auto;
    }

    /* ── VALUES SECTION ── */
    #values {
      background: var(--cream);
    }

    .value-card {
      background: #fff;
      border-radius: 16px;
      padding: 32px 28px;
      border: 1px solid var(--cream-dark);
      height: 100%;
      transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    .value-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 16px 40px rgba(27,58,45,0.1);
    }

    .value-card .icon-wrap {
      width: 52px;
      height: 52px;
      border-radius: 14px;
      background: var(--green-light);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 22px;
      margin-bottom: 18px;
    }

    .value-card h4 {
      font-size: 1.1rem;
      font-weight: 600;
      color: var(--green-deep);
      margin-bottom: 10px;
    }

    .value-card p {
      font-size: 0.92rem;
      color: var(--text-mid);
      line-height: 1.75;
      margin: 0;
    }

    /* ── TEAM SECTION ── */
    #team {
      background: #fff;
    }

    .team-card {
      text-align: center;
    }

    .team-card .team-photo {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      border: 4px solid var(--cream-dark);
      margin-bottom: 16px;
    }

    .team-card .team-photo-placeholder {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      background: var(--green-light);
      border: 4px solid var(--cream-dark);
      margin: 0 auto 16px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Playfair Display', serif;
      font-size: 2rem;
      color: var(--green-mid);
      font-weight: 700;
    }

    .team-card h4 {
      font-size: 1.05rem;
      color: var(--green-deep);
      margin-bottom: 4px;
    }

    .team-card .role {
      font-size: 0.85rem;
      color: var(--terra);
      font-weight: 600;
      letter-spacing: 0.5px;
      margin-bottom: 8px;
    }

    .team-card p {
      font-size: 0.88rem;
      color: var(--text-muted);
      line-height: 1.6;
    }

    /* ── VISI MISI ── */
    #visi-misi {
      background: var(--terra-light);
    }

    .visi-box, .misi-box {
      background: #fff;
      border-radius: 16px;
      padding: 36px 32px;
      height: 100%;
      border: 1px solid rgba(196,98,45,0.12);
    }

    .visi-box h3, .misi-box h3 {
      color: var(--green-deep);
      font-size: 1.4rem;
      margin-bottom: 16px;
    }

    .visi-box p {
      font-size: 1rem;
      color: var(--text-mid);
      line-height: 1.85;
      font-style: italic;
    }

    .misi-list {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .misi-list li {
      display: flex;
      gap: 12px;
      align-items: flex-start;
      font-size: 0.95rem;
      color: var(--text-mid);
      line-height: 1.7;
      margin-bottom: 14px;
    }

    .misi-list li:last-child { margin-bottom: 0; }

    .misi-list li .bullet {
      flex-shrink: 0;
      width: 20px;
      height: 20px;
      border-radius: 50%;
      background: var(--green-deep);
      color: #fff;
      font-size: 11px;
      font-weight: 700;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-top: 2px;
    }

    /* ── CTA ── */
    .cta-section {
      background: var(--green-deep);
      padding: 80px 0;
      text-align: center;
      position: relative;
      overflow: hidden;
    }

    .cta-section::before {
      content: '';
      position: absolute;
      inset: 0;
      background: radial-gradient(ellipse 70% 80% at 50% 50%, rgba(196,98,45,0.12) 0%, transparent 70%);
    }

    .cta-section h2 {
      color: #fff;
      font-size: clamp(1.8rem, 3vw, 2.8rem);
      margin-bottom: 16px;
    }

    .cta-section p {
      color: rgba(255,255,255,0.65);
      font-size: 1rem;
      max-width: 480px;
      margin: 0 auto 36px;
      line-height: 1.75;
    }

    .btn-cta-primary {
      background: var(--terra);
      color: #fff;
      border: none;
      border-radius: 100px;
      padding: 14px 36px;
      font-family: 'Nunito', sans-serif;
      font-size: 15px;
      font-weight: 600;
      text-decoration: none;
      display: inline-block;
      transition: background 0.2s ease, transform 0.2s ease;
    }

    .btn-cta-primary:hover {
      background: #A8521F;
      color: #fff;
      transform: translateY(-2px);
    }

    .btn-cta-outline {
      background: transparent;
      color: rgba(255,255,255,0.85);
      border: 1px solid rgba(255,255,255,0.3);
      border-radius: 100px;
      padding: 14px 36px;
      font-family: 'Nunito', sans-serif;
      font-size: 15px;
      font-weight: 500;
      text-decoration: none;
      display: inline-block;
      margin-left: 12px;
      transition: border-color 0.2s ease, color 0.2s ease;
    }

    .btn-cta-outline:hover {
      border-color: rgba(255,255,255,0.7);
      color: #fff;
    }

    /* ── QUOTE PULL ── */
    .pull-quote {
      border-left: 3px solid var(--gold);
      padding: 4px 0 4px 24px;
      margin: 28px 0;
    }

    .pull-quote p {
      font-family: 'Playfair Display', serif;
      font-size: 1.15rem;
      font-style: italic;
      color: var(--green-deep);
      line-height: 1.65;
      margin: 0;
    }

    /* ── LOKASI ── */
    #lokasi {
      background: var(--cream);
    }

    .location-card {
      background: #fff;
      border-radius: 20px;
      overflow: hidden;
      border: 1px solid var(--cream-dark);
      display: flex;
      align-items: stretch;
      box-shadow: 0 8px 32px rgba(27,58,45,0.07);
    }

    .location-map-thumb {
      flex: 0 0 340px;
      background: var(--green-light);
      position: relative;
      overflow: hidden;
    }

    .location-map-thumb iframe {
      width: 100%;
      height: 100%;
      min-height: 280px;
      border: none;
      display: block;
      filter: saturate(0.85);
    }

    .location-info {
      padding: 40px 40px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      gap: 20px;
    }

    .location-detail-row {
      display: flex;
      align-items: flex-start;
      gap: 14px;
    }

    .loc-icon {
      flex-shrink: 0;
      width: 38px;
      height: 38px;
      border-radius: 10px;
      background: var(--green-light);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 16px;
      margin-top: 2px;
    }

    .loc-detail-label {
      font-size: 11px;
      font-weight: 700;
      letter-spacing: 1.5px;
      text-transform: uppercase;
      color: var(--text-muted);
      margin-bottom: 3px;
    }

    .loc-detail-value {
      font-size: 0.95rem;
      color: var(--text-dark);
      font-weight: 500;
      line-height: 1.5;
    }

    .btn-maps {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: var(--green-deep);
      color: #fff;
      text-decoration: none;
      padding: 12px 24px;
      border-radius: 100px;
      font-size: 14px;
      font-weight: 600;
      transition: background 0.2s ease, transform 0.2s ease;
      align-self: flex-start;
      margin-top: 4px;
    }

    .btn-maps:hover {
      background: var(--green-mid);
      color: #fff;
      transform: translateY(-2px);
    }

    .btn-maps svg {
      width: 16px;
      height: 16px;
      fill: currentColor;
    }

    /* ── RESPONSIVE ── */
    @media (max-width: 768px) {
      section { padding: 56px 0; }
      .story-img-block .year-badge { right: 8px; }
      .btn-cta-outline { margin-left: 0; margin-top: 12px; }
      .location-card { flex-direction: column; }
      .location-map-thumb { flex: none; height: 220px; }
      .location-info { padding: 28px 24px; }
    }
  </style>
</head>
<body>

<?php include "../components/nav.php"; ?>

<!-- ═══════════════════════════════
     HERO
═══════════════════════════════ -->
<section class="hero-about">
  <div class="container position-relative">
    <div>
      <h1>Menghadirkan Ubud yang<br><em>Sesungguhnya</em> untuk Anda</h1>
      <p class="lead">
        Bukan sekadar tur wisata — kami mengajak Anda masuk lebih dalam, merasakan
        jiwa Ubud yang autentik bersama orang-orang lokal yang mencintainya.
      </p>
    </div>
    <div class="hero-scroll-indicator">
      <span class="line"></span>
      <span style="font-size:11px; letter-spacing:2px; text-transform:uppercase;">Kenali Kami</span>
      <span class="line"></span>
    </div>
  </div>
</section>


<!--STORY-->
<section id="story">
  <div class="container">
    <div class="row align-items-center g-5">

      <!-- GAMBAR -->
      <div class="col-lg-5">
        <div class="story-img-block ps-2">
          <img src="https://tse1.mm.bing.net/th/id/OIP.uw2BOF-lZ-BpL3LT_i-hhgHaE8?cb=thfvnext&rs=1&pid=ImgDetMain&o=7&rm=3" alt="Pemandangan Ubud" class="story-img">
          <div class="year-badge">
            <strong>2015</strong>
            <span>Berdiri Sejak</span>
          </div>
        </div>
      </div>

      <!-- TEKS -->
      <div class="col-lg-7 ps-lg-5 pt-4 pt-lg-0">
        <h2 class="section-title">Lahir dari Cinta,<br>Tumbuh dari Kepercayaan</h2>


        <p class="section-body">
          Travel Ubud lahir dari sebuah percakapan sederhana di warung kopi pinggir sawah.
          Ketika dua pemuda Ubud — Wira dan Marcelino — menyadari bahwa wisatawan yang datang
          sering melewatkan bagian terbaik dari kampung halaman mereka sendiri.
        </p>

        <div class="pull-quote">
          <p>"Ubud bukan sekadar Monkey Forest dan rice terrace. Ubud adalah orang-orangnya,
          ritualnya, dan cerita yang terjalin setiap harinya."</p>
        </div>

        <p class="section-body">
          Sejak 2015, kami telah membawa ribuan wisatawan dari seluruh dunia untuk merasakan
          pengalaman yang melampaui itinerary biasa — dari belajar memasak di dapur keluarga Bali,
          mengikuti upacara desa, hingga treking subuh menembus kabut Campuhan Ridge.
        </p>

        <p class="section-body">
          Semua pemandu kami adalah warga Ubud asli. Karena kami percaya, tidak ada yang lebih
          mengenal Ubud selain mereka yang lahir dan besar di sini.
        </p>
      </div>

    </div>
  </div>
</section>


<!-- ═══════════════════════════════
     STATS STRIP
═══════════════════════════════ -->
<div class="stats-strip">
  <div class="container">
    <div class="row align-items-center text-center g-4">
      <div class="col-6 col-md-3">
        <div class="stat-item">
          <div class="stat-number">8.500+</div>
          <div class="stat-label">Wisatawan Dilayani</div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="stat-item">
          <div class="stat-number">9+</div>
          <div class="stat-label">Tahun Pengalaman</div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="stat-item">
          <div class="stat-number">30+</div>
          <div class="stat-label">Paket Wisata</div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="stat-item">
          <div class="stat-number">★★★★★</div>
          <div class="stat-label">Rating TripAdvisor</div>
        </div>
      </div>
    </div>
  </div>
</div>


<!--VISI & MISI-->
<section id="visi-misi">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="section-title">Visi &amp; Misi Kami</h2>
    </div>
    <div class="row g-4">
      <div class="col-lg-5">
        <div class="visi-box">
          <div class="section-label mb-2">Visi</div>
          <h3>Menjadi Jembatan Terpercaya antara Dunia dan Jiwa Ubud</h3>
          <div class="ornament-divider">
            <span class="line"></span>
            <span class="dot"></span>
          </div>
          <p>
            Kami bermimpi agar setiap orang yang mengunjungi Ubud pulang membawa lebih dari
            sekadar foto — mereka membawa pemahaman, rasa syukur, dan koneksi mendalam dengan
            budaya serta alam Bali yang sesungguhnya.
          </p>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="misi-box">
          <div class="section-label mb-2">Misi</div>
          <h3>Langkah-Langkah Kami Setiap Hari</h3>
          <div class="ornament-divider">
            <span class="line"></span>
            <span class="dot"></span>
          </div>
          <ul class="misi-list">
            <li>
              <span class="bullet">1</span>
              <span>Menyediakan pengalaman wisata yang autentik, aman, dan berkesan bagi setiap tamu.</span>
            </li>
            <li>
              <span class="bullet">2</span>
              <span>Memberdayakan pemandu dan pelaku UMKM lokal sebagai ujung tombak pariwisata Ubud.</span>
            </li>
            <li>
              <span class="bullet">3</span>
              <span>Menjalankan pariwisata berkelanjutan yang menjaga kelestarian alam dan tradisi Bali.</span>
            </li>
            <li>
              <span class="bullet">4</span>
              <span>Membangun kepercayaan tamu melalui transparansi harga, keamanan, dan pelayanan tulus.</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>


<!--KEUNGGULAN / VALUES-->
<section id="values">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="section-title">Yang Membuat Kami Berbeda</h2>
    </div>
    <div class="row g-4">

      <div class="col-md-6 col-lg-3">
        <div class="value-card">
          <div class="icon-wrap">🌿</div>
          <h4>100% Lokal & Autentik</h4>
          <p>Semua pemandu, mitra, dan destinasi kami adalah warga dan tempat asli Ubud — bukan paket turis massal.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="value-card">
          <div class="icon-wrap">🏛️</div>
          <h4>Berbasis Budaya</h4>
          <p>Kami tidak hanya mengantar ke tempat wisata. Kami menjelaskan makna, nilai, dan cerita di baliknya.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="value-card">
          <div class="icon-wrap">🌱</div>
          <h4>Ramah Lingkungan</h4>
          <p>Setiap paket kami dirancang untuk meminimalkan dampak lingkungan dan mendukung ekosistem lokal.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="value-card">
          <div class="icon-wrap">🤝</div>
          <h4>Terpercaya & Transparan</h4>
          <p>Harga jelas, tanpa biaya tersembunyi. Lisensi resmi dari Dinas Pariwisata Provinsi Bali.</p>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- TEAM-->
<section id="team" class="pb-5">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="section-title">Tim Travel Ubud</h2>
      <p class="section-body mx-auto" style="max-width:500px;">
        Kami adalah orang-orang Ubud yang bangga dengan tanah kelahiran kami dan
        senang berbagi keindahannya dengan dunia.
      </p>
    </div>
    <div class="row g-4 justify-content-center">

      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="team-card">
          <img src="../assets/wira-atmaja.jpeg" alt="Wira Atmaja" class="team-photo">
          <h4>Wira Atmaja</h4>
          <div class="role">Co-Founder & CEO</div>
          <p>Lahir & besar di Ubud. 12 tahun pengalaman memandu di hutan dan sawah Bali.</p>
        </div>
      </div>

      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="team-card">
          <img src="../assets/ivan-marcelino.jpeg" alt="Ivan Marcelino" class="team-photo">
          <h4>Ivan Marcelino</h4>
          <div class="role">Co-Founder & Head Guide</div>
          <p>Spesialis budaya dan upacara adat Bali. Anggota aktif Sanggar Seni Ubud.</p>
        </div>
      </div>

      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="team-card">
          <img src="../assets/maria-faradhicya.png" alt="Maria Faradhicya" class="team-photo">
          <h4>Maria Faradhicya</h4>
          <div class="role">Tour Operations Manager</div>
          <p>Memastikan setiap perjalanan berjalan mulus dari awal hingga akhir.</p>
        </div>
      </div>

      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="team-card">
          <img src="../assets/lidya-dwima.jpeg" alt="Lidya Dwima" class="team-photo">
          <h4>Lidya Dwima</h4>
          <div class="role">Senior Nature Guide</div>
          <p>Ahli treking Campuhan Ridge, Tegalalang, dan rute alam tersembunyi Ubud.</p>
        </div>
      </div>

    </div>


<!--LOKASI-->
<section id="lokasi">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="section-title">Lokasi Kantor Kami</h2>
      <p class="section-body mx-auto" style="max-width:460px;">
        Mampir langsung ke kantor kami atau hubungi kami terlebih dahulu.
        Kami siap menyambut Anda!
      </p>
    </div>

    <div class="location-card">

      <!-- PETA EMBED -->
      <div class="location-map-thumb">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d246.85!2d115.18804770000001!3d-8.6410798!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd238b2ba74943b%3A0x5bb93f301e0811a0!2sJl.%20Cemp.%20Elok%20No.B-8%2C%20Padangsambian%20Kaja%2C%20Kec.%20Denpasar%20Bar.%2C%20Kota%20Denpasar%2C%20Bali%2080118!5e0!3m2!1sid!2sid!4v1"
          loading="lazy"
          allowfullscreen
          referrerpolicy="no-referrer-when-downgrade"
          title="Lokasi Kantor Travel Ubud">
        </iframe>
      </div>

      <!-- INFO -->
      <div class="location-info">

        <div>
          <div class="section-label mb-1">Kantor Pusat</div>
          <h3 style="font-family:'Playfair Display',serif; font-size:1.4rem; color:var(--green-deep); margin:0;">
            Travel Ubud
          </h3>
        </div>

        <div class="location-detail-row">
          <div class="loc-icon">📍</div>
          <div>
            <div class="loc-detail-label">Alamat</div>
            <div class="loc-detail-value">
              Jl. Cemp. Elok No.B-8<br>
              Padangsambian Kaja, Kec. Denpasar Bar.<br>
              Kota Denpasar, Bali 80118
            </div>
          </div>
        </div>

        <div class="location-detail-row">
          <div class="loc-icon">🕐</div>
          <div>
            <div class="loc-detail-label">Jam Operasional</div>
            <div class="loc-detail-value">
              Senin – Sabtu: 08.00 – 17.00 WITA<br>
              Minggu: 09.00 – 14.00 WITA
            </div>
          </div>
        </div>

        <div class="location-detail-row">
          <div class="loc-icon">📞</div>
          <div>
            <div class="loc-detail-label">Telepon / WhatsApp</div>
            <div class="loc-detail-value">+62 812-XXXX-XXXX</div>
          </div>
        </div>

        <a
          href="https://www.google.com/maps/place/?q=place_id:ChIJcUjturI40i0RGBEIHjA_uVs"
          target="_blank"
          rel="noopener noreferrer"
          class="btn-maps">
          <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
          </svg>
          Buka di Google Maps
        </a>

      </div>
    </div>
  </div>
</section>


<!--CTA-->
<section class="cta-section">
  <div class="container position-relative">
    <h2>Siap Merasakan Ubud<br>yang Sesungguhnya?</h2>
    <p>
      Hubungi kami hari ini dan biarkan kami meracik pengalaman Ubud yang
      tak terlupakan, sesuai irama dan minat Anda.
    </p>
    <div>
      <a href="../paket-wisata.php" class="btn-cta-primary">Lihat Paket Wisata</a>
      <a href="../kontak.php" class="btn-cta-outline">Hubungi Kami</a>
    </div>
  </div>
</section>


<?php include "../components/footer.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Semua Destinasi</title>
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

  <main class="container py-5" style="max-width: 1000px;">
    <a href="../index.php" class="text-decoration-none text-muted d-inline-block mb-4" style="font-size: 14px;">
      ← Back To Home
    </a>

    <h2 class="fw-bold mb-2">Semua Destinasi</h2>
    <p class="text-muted mb-5">Jelajahi tempat-tempat wisata terbaik di Ubud, Bali.</p>

    <div class="d-flex flex-column gap-4">

      <a class="text-decoration-none text-dark" href="information-monkey-forest.php">
        <div class="card border-0 shadow-sm rounded-4 overflow-hidden d-flex flex-row" style="height: 160px;">
          <img 
            src="https://ubudtourism.com/wp-content/uploads/elementor/thumbs/Sacred-monkey-forest-sanctuary-ubud-bali-15-qpr03cilrefvjb4s945fxfkwzykhvheh78tzbein0g.jpg" 
            alt="monkey-forest-ubud"
            style="width: 220px; object-fit: cover; flex-shrink: 0;"
          >
          <div class="card-body d-flex flex-column justify-content-center px-4">
            <h5 class="fw-bold mb-1">Monkey Forest</h5>
            <p class="text-muted mb-2" style="font-size: 13px;">
              <i class="bi bi-geo-alt me-1"></i>Ubud, Bali
            </p>
            <p class="text-muted mb-0" style="font-size: 14px; line-height: 1.6;">
              Sebagai rumah bagi ratusan monyet ekor panjang yang lincah, Suaka Monkey Forest Ubud adalah tempat yang wajib dikunjungi.
            </p>
          </div>
        </div>
      </a>

      <a class="text-decoration-none text-dark" href="information-art-market.php">
        <div class="card border-0 shadow-sm rounded-4 overflow-hidden d-flex flex-row" style="height: 160px;">
          <img 
            src="https://ubudtourism.com/wp-content/uploads/elementor/thumbs/Ubud-bali-art-market-qprxt4hwyq0do21xn9z96n1vz20kgz0hqvuvtgu680.jpg" 
            alt="art-market"
            style="width: 220px; object-fit: cover; flex-shrink: 0;"
          >
          <div class="card-body d-flex flex-column justify-content-center px-4">
            <h5 class="fw-bold mb-1">Art Market Ubud</h5>
            <p class="text-muted mb-2" style="font-size: 13px;">
              <i class="bi bi-geo-alt me-1"></i>Ubud, Bali
            </p>
            <p class="text-muted mb-0" style="font-size: 14px; line-height: 1.6;">
              Art Market Ubud adalah pusat yang ramai dengan kerajinan lokal, suvenir, dan karya seni khas Bali yang memukau.
            </p>
          </div>
        </div>
      </a>

      <a class="text-decoration-none text-dark" href="information-ubud-palace.php">
        <div class="card border-0 shadow-sm rounded-4 overflow-hidden d-flex flex-row" style="height: 160px;">
          <img 
            src="https://ubudtourism.com/wp-content/uploads/elementor/thumbs/water-palace-ubud-bali-qpry8y440bo53r2j94765nb7yk101jttx774n5dlhc.jpg" 
            alt="ubud-palace"
            style="width: 220px; object-fit: cover; flex-shrink: 0;"
          >
          <div class="card-body d-flex flex-column justify-content-center px-4">
            <h5 class="fw-bold mb-1">Ubud Palace</h5>
            <p class="text-muted mb-2" style="font-size: 13px;">
              <i class="bi bi-geo-alt me-1"></i>Ubud, Bali
            </p>
            <p class="text-muted mb-0" style="font-size: 14px; line-height: 1.6;">
              Ubud Palace, juga dikenal sebagai Puri Saren Agung, adalah landmark bersejarah di pusat Ubud yang penuh nilai budaya.
            </p>
          </div>
        </div>
      </a>

      <a class="text-decoration-none text-dark" href="information-tirta-empul-temple.php">
        <div class="card border-0 shadow-sm rounded-4 overflow-hidden d-flex flex-row" style="height: 160px;">
          <img 
            src="https://ubudtourism.com/wp-content/uploads/elementor/thumbs/Tirta-Empul-Temple-ubud-bali-guide-qps18vwwtffibqa6yruvheqrpg0dyac6rg4el1c2yo.jpg" 
            alt="tirta-empul"
            style="width: 220px; object-fit: cover; flex-shrink: 0;"
          >
          <div class="card-body d-flex flex-column justify-content-center px-4">
            <h5 class="fw-bold mb-1">Tirta Empul Temple</h5>
            <p class="text-muted mb-2" style="font-size: 13px;">
              <i class="bi bi-geo-alt me-1"></i>Tampaksiring, Bali
            </p>
            <p class="text-muted mb-0" style="font-size: 14px; line-height: 1.6;">
              Salah satu pura air paling suci di Bali, dikenal dengan ritual pemurnian diri di kolam air suci yang telah ada sejak 962 M.
            </p>
          </div>
        </div>
      </a>
    </div>

    <a href="../index.php" class="text-decoration-none text-muted d-inline-block my-4" style="font-size: 14px;">
      ← Back To Home
    </a>
  </main>

  <?php include "../components/footer.php"; ?>
  <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" 
    crossorigin="anonymous">
  </script>
</body>
</html>
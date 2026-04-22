<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubud Palace</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../assets/global-style.css">
</head>
<body>

  <?php include "../components/nav.php"; ?>

  <main class="container mt-4">
    <div class="row justify-content-center">
      <div class="col-lg-7">

        <!-- HEADER (Back kiri + Judul center) -->
        <div class="position-relative d-flex align-items-center mb-4">

          <!-- Back dalam kotak -->
          <div class="bg-white border rounded px-3 py-2 shadow-sm">
            <a href="../index.php" class="text-decoration-none text-dark">
              <i class="bi bi-arrow-left"></i> Back To Home
            </a>
          </div>

          <!-- Judul -->
          <h2 class="position-absolute start-50 translate-middle-x mb-0">
            Ubud Palace
          </h2>

        </div>

        <!-- Gambar utama -->
        <div class="text-center my-4">
          <img src="https://tse3.mm.bing.net/th/id/OIP.PDCDAlncy4AKuUKVH6oPngHaE7?w=2500&h=1666&rs=1&pid=ImgDetMain&o=7&rm=3" 
          class="img-fluid rounded w-100" style="max-height: 450px; object-fit: cover;">
        </div>

        <!-- Deskripsi -->
        <p>
          Ubud Palace, also known as Puri Saren Agung, is a historical building complex located 
          in the center of Ubud, Bali. It is the official residence of the royal family of Ubud 
          and serves as an important cultural landmark in the area.
        </p>
        <p>
          The palace is well-known for its traditional Balinese architecture, featuring intricate 
          carvings, detailed stonework, and beautifully designed courtyards that reflect the rich 
          artistic heritage of Bali.
        </p>
        <p>
          Visitors can explore parts of the palace and experience its unique atmosphere, which 
          combines history, culture, and local traditions in one place.
        </p>
        <p>
          In the evening, the palace becomes a lively cultural venue where traditional Balinese 
          dance performances are held regularly, attracting both local and international tourists.
        </p>
        <p>
          Because of its central location, Ubud Palace is also surrounded by art markets, cafes, 
          and other attractions, making it a must-visit destination for anyone traveling to Ubud.
        </p>

        <!-- History -->
        <h2 class="mt-4">History and Culture</h2>

        <div class="row align-items-start my-4">

          <!-- TEXT -->
          <div class="col-md-6">
            <p>
              The Ubud Palace has a long history as the residence of the royal family of Ubud. 
              It reflects traditional Balinese architecture and cultural values that have been 
              preserved for generations.
            </p>
            <p>
              The palace complex consists of several traditional buildings featuring intricate 
              carvings, stone gates, and beautifully designed courtyards that represent the 
              artistic heritage of Bali.
            </p>
            <p>
              The palace is also a center for art and culture, where traditional dance performances 
              are held regularly for visitors, especially during the evening.
            </p>
            <p>
              Visitors can enjoy famous Balinese dances such as Legong and Barong, which provide 
              a unique cultural experience and attract tourists from around the world.
            </p>
            <p>
              Today, Ubud Palace remains not only a historical landmark but also a living cultural 
              site that continues to preserve and promote Balinese traditions.
            </p>
            <p>
              The palace grounds are open to the public during the day, allowing visitors to walk 
              through its sacred courtyards and admire the detailed stone sculptures and ornamental gates.
            </p>
          </div>

          <!-- 3 GAMBAR ke bawah -->
          <div class="col-md-6 d-flex flex-column gap-3">
            <img src="https://tse2.mm.bing.net/th/id/OIP.rxZ1qeI8Y-_IpfbizAmV_QHaE6?rs=1&pid=ImgDetMain&o=7&rm=3" 
                 class="img-fluid rounded w-100" style="object-fit: cover; height: 180px;">
            <img src="https://cdn.getyourguide.com/image/format=auto,fit=crop,gravity=auto,quality=60,width=1920,dpr=1/tour_img/cd89e0eef21a02e4a66d9257461d65d4eac60f3cc8ecedc6b89668c7cd2c5a42.jpg" 
                 class="img-fluid rounded w-100" style="object-fit: cover; height: 180px;">
            <img src="https://cdn.getyourguide.com/image/format=auto,fit=crop,gravity=auto,quality=60,width=1920,dpr=1/tour_img/7524f666bc681c38be16e67f52f4f774f1fea464e32a8f76bd4285eea751e481.jpg" 
                 class="img-fluid rounded w-100" style="object-fit: cover; height: 180px;">
          </div>

        </div>

        <!-- Visitor -->
        <h2 class="mt-4">Visitor Information</h2>
        <p>📍 Location: Ubud, Gianyar, Bali</p>
        <p>🕒 Open daily from morning until night</p>
        <p>🎭 Traditional dance performances are usually held in the evening.</p>

      </div>
    </div>
  </main>

  <?php include "../components/footer.php"; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
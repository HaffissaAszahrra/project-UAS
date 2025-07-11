<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Galeri - AramiSweets</title>
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>
  <header>
    <h1>Galeri AramiSweets</h1>
    <nav>
      <a href="index.php">Home</a>
      <a href="gallery.php">Galeri</a>
      <a href="order_form.php">Pesan</a>
      <a href="login.php">Login Admin</a>
    </nav>
  </header>

  <main class="gallery-page">
    <section class="gallery">
      <h2>Galeri Dessert Kami</h2>
      <p>Nikmati tampilan berbagai dessert manis yang kami tawarkan. Klik pada foto untuk melihat nama dessert.</p>
      <div class="gallery-grid">
        <img src="images/dessert1.jpg" alt="Dessert 1" onclick="showDessertName('Flakers 1')" />
        <img src="images/dessert2.jpg" alt="Dessert 2" onclick="showDessertName('Flakers 2')" />
        <img src="images/dessert3.jpg" alt="Dessert 3" onclick="showDessertName('Flakers 3')" />
        <img src="images/dessert4.jpg" alt="Dessert 4" onclick="showDessertName('Flakers')" />
        <img src="images/dessert5.jpg" alt="Dessert 5" onclick="showDessertName('Triffle Chocolate')" />
      </div>
    </section>
  </main>

  <!-- Overlay -->
  <div class="overlay" id="dessertOverlay">
    <div class="overlay-content">
      <span class="close-btn" onclick="closeOverlay()">&times;</span>
      <div id="dessertName">Nama Dessert</div>
    </div>
  </div>

  <script>
    function showDessertName(name) {
      document.getElementById("dessertName").textContent = name;
      document.getElementById("dessertOverlay").style.display = "flex";
    }

    function closeOverlay() {
      document.getElementById("dessertOverlay").style.display = "none";
    }

    window.onclick = function(e) {
      const overlay = document.getElementById("dessertOverlay");
      if (e.target === overlay) {
        closeOverlay();
      }
    };
  </script>
</body>
</html>

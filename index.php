<?php
require_once('getdata.php');
$uploads_path_uri = "uploads/";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bank 28 | Brewing Co. | Varberg</title>
  <link rel="stylesheet" href="assets/css/styles.css" />
  <link rel="icon" type="image/png" href="favicon.png">
  <meta property="og:title" content="BANK 28 Brewing Co." />
  <meta property="og:description" content="Pub in Varberg. Kungsgatan 28." />
  <meta property="og:image" content="https://bank28.se/bank28-og.jpg" />
</head>

<body>
  <header>
    <div class="logotype">
      <img src="assets/images/SVG/bank28-logo.svg" alt="Bank 28 logo" />
    </div>
    <div class="book-table">
      <a href="#" aria-label="Link to book a table" class="btn" id="bookTableBtn">Grab a Table</a>
    </div>
  </header>
  <main>
    <div class="logotype-type">
      <img src="assets/images/SVG/bank-logo-type.svg" alt="Bank 28 type" />
    </div>
    <div class="links">
      <?php if (show_file_option('menueat')): ?>
        <div>
          <a href="<?php echo get_file('menueat') . "?" . rand(100, 999); ?>" target="_blank">Eat</a> /
        </div>
      <?php endif; ?>
      <?php if (show_file_option('menudrink')): ?>
        <div>
          <a href="<?php echo get_file('menudrink') . "?" . rand(100, 999); ?>" target="_blank">Drink</a>
        </div>
      <?php endif; ?>
      <!-- / <a href="#" aria-label="Link to events">Event</a> -->
    </div>
    <div class="beer-symbols">
      <img src="assets/images/SVG/beer-symbols.svg" alt="Beer symbols" />
    </div>
  </main>

  <!-- Modal -->
  <div id="bookTableModal" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <h2>Grab a table</h2>
        <span class="close">&times;</span>
      </div>
      <div class="modal-body">
        <p>
          <iframe style="height:600px; width:100%; max-width:750px; display: block; margin: 0 auto; overflow:auto; border:none;" src="https://3.bordsbokaren.se/?i=3081&k=fGsvHtZY"></iframe>
          <space></space>
        </p>
      </div>
    </div>
  </div>

  <footer>
    <div class="footer-content">
      <div class="footer-left">
        <div class="opening-hours">
          <p>
            TUESDAY - THURSDAY 17 - 00<br />
            FRIDAY - SATURDAY 12 - 00
          </p>
        </div>
        <div class="contact-info">
          <p>
            KUNGSGATAN 28, Varberg<br />
            +46 (0)340 - 20 56 58 |
            <a href="mailto:info@bank28.se">info@bank28.se</a>
          </p>
        </div>
      </div>
      <div class="footer-right">
        <div class="social-media">
          <a href="https://www.instagram.com/bank28varberg/" aria-label="Link to Instagram" target="_blank"><ion-icon name="logo-instagram"></ion-icon></a>
          <a href="https://www.facebook.com/profile.php?id=61571629866911" aria-label="Link to Facebook" target="_blank"><ion-icon name="logo-facebook"></ion-icon></a>
        </div>
      </div>
    </div>
  </footer>
  <script
    type="module"
    src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script
    nomodule
    src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="assets/js/modal.js"></script>
</body>

</html>
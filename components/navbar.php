<?php
session_start();
?>
<header class="grid">
  <!-- Top Navigation -->
  <nav class="s-12 grid background-none background-primary-hightlight">
    <!-- logo -->
    <a href="/bba/index.php" class="m-12 l-3 padding-2x logo">
      <img src="/bba/img/logo.svg">
    </a>
    <div class="top-nav s-12 l-9">
      <ul class="top-ul right chevron">
        <li><a href="/bba/index.php">Home</a></li>
        <li><a href="/bba/about-us.php">About Us</a></li>
        <li><a href="/bba/gallery.php">Gallery</a></li>
        <li><a href="/bba/contact.php">Contact</a></li>

        <?php if (isset($_SESSION['level'])) {
          if ($_SESSION['level'] == "2") { ?>
            <li><a href="backend.php">เจ้าของ</a></li>
          <?php } else if ($_SESSION['level'] == "1") { ?>
              <li><a href="profile.php"><?php echo $_SESSION['fullname']; ?></a></li>
          <?php }
        } else { ?>
          <li><a href="/bba/auth/login.php">Log in</a></li>
        <?php }
        if (isset($_SESSION['level'])) { ?>
          <li><a href="/bba/auth/logout.php">Log out</a></li>
        <?php } ?>
      </ul>
    </div>
  </nav>
</header>

<script type="text/javascript" src="/bba/js/responsee.js"></script>
<script type="text/javascript" src="/bba/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript" src="/bba/js/template-scripts.js"></script>
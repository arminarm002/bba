<header class="grid">
  <!-- Top Navigation -->
  <nav class="s-12 grid background-none background-primary-hightlight">
    <!-- logo -->
    <a href="../index.php" class="m-12 l-3 padding-2x logo">
      <img src="../img/logo.png">
    </a>
    <div class="top-nav s-12 l-9">
      <ul class="top-ul right chevron">
        <li><a href="../index.php">หน้าหลัก</a></li>
        <li><a href="../about-us.php">เกี่ยวกับเรา</a></li>
        <li><a href="../gallery.php">Gallery</a></li>

        <?php if (isset($_SESSION['level'])) {
          if ($_SESSION['level'] == "2") { ?>
            <li><a href="../auth/record.php">เจ้าของ</a></li>
          <?php } else if ($_SESSION['level'] == "1") { ?>
              <li><a href="../auth/record.php">
                บันทึกข้อมูล
                </a></li>

          <?php } ?>
          <li><a href="../auth/showscan.php">แสดงผล</a></li>
          <li><a href="../auth/logout.php">ออกจากระบบ</a></li>
          <?php
        } else { ?>
          <li><a href="../auth/login.php">เข้าสู่ระบบ</a></li>
        <?php } ?>

      </ul>
    </div>
  </nav>
</header>

<script type="text/javascript" src="/bba/js/responsee.js"></script>
<script type="text/javascript" src="/bba/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript" src="/bba/js/template-scripts.js"></script>
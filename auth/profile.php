<?php
session_start();
if (isset($_SESSION['level'])) {
    include($_SERVER['DOCUMENT_ROOT'] . '/bba/auth/connectdb.php');
    ?>
    <!DOCTYPE html>
    <html lang="en-US">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Free responsive business website template</title>
        <link rel="stylesheet" href="/bba/css/components.css">
        <link rel="stylesheet" href="/bba/css/icons.css">
        <link rel="stylesheet" href="/bba/css/responsee.css">
        <link rel="stylesheet" href="/bba/css/show.css">
        <link rel="stylesheet" href="/bba/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="/bba/owl-carousel/owl.theme.css">
        <!-- CUSTOM STYLE -->
        <link rel="stylesheet" href="/bba/css/template-style.css">
        <link rel="stylesheet" href="/bba/theme/css/self.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&display=swap" rel="stylesheet">
        <script type="text/javascript" src="/bba/js/jquery-1.8.3.min.js"></script>
        <script type="text/javascript" src="/bba/js/jquery-ui.min.js"></script>
    </head>

    <body class="size-1520 primary-color-red background-dark font-noto">
        <?php
        include($_SERVER['DOCUMENT_ROOT'] . '/bba/components/navbar.php');
        ?>
        <!-- MAIN -->
        <main role="main">
            <!-- TOP SECTION -->
            <header class="grid">
                <div class="s-12 padding-2x">
                    <h2 class="text-strong text-white text-center center text-size-60 text-uppercase margin-bottom-20">
                        <?php echo $_SESSION['fullname']; ?>
                    </h2>
                </div>
            </header>

            <section class="grid margin-bottom-20">
                <div class="m-12 l-7 center">
                    <form action="scan.php" class="scan" method="POST">
                        <h2 style="color: black;">สแกนร่างกาย วันที่
                            <?php $date1 = date("Y-m-d");
                            echo $date1; ?>
                        </h2>
                        <p style="display:none;">ID
                            <input type="text" name="id" value="<?php echo $_SESSION['id']; ?>">
                        </p>
                        <p style="display:none;">วันที่
                            <input type="text" name="date" value="<?php echo $date1; ?>">
                        </p>
                        <p style="color: #002633;">น้ำหนัก (กก.)
                            <input type="text" name="weight" placeholder="Weight" required>
                        </p>
                        <p style="color: #002633;">ไขมันในร่างกาย (%)
                            <input type="text" name="fat" placeholder="Fat">
                        </p>
                        <p style="color: #002633;">ไขมันในช่องท้อง (หน่วย)
                            <input type="text" name="vfat" placeholder="Visceral Fat">
                        </p>
                        <p style="color: #002633;">กล้ามเนื้อ (%)
                            <input type="text" name="muscle" placeholder="Muscle">
                        </p>
                        <p style="color: #002633;">อายุเซลล์ในร่างกาย (ปี)
                            <input type="text" name="bage" placeholder="Body Age">
                        </p>
                        <p style="color: #002633;">อัตราการเผาผลาญ (kcal)
                            <input type="text" name="metabolism" placeholder="Metabolic Rate">
                        </p>
                        <p style="color: #002633;">ดัชนีมวลร่างกายโดยรวม (BMI)
                            <input type="text" name="bmi" placeholder="BMI">
                        </p>
                        <button type="submit" class="bubbly-button" name="scan"
                            style="background-color: #31a533;">ยืนยัน</button>
                    </form>

                    <!-- <img src="/bba/img/scan.jpg"> -->
                </div>
            </section>
        </main>
        <?php
        include($_SERVER['DOCUMENT_ROOT'] . '/bba/components/footer.html');
        ?>
        <script>
            let today = new Date().toISOString().slice(0, 10);
            document.getElementById("date").innerHTML = today;
        </script>
    </body>

    </html>
<?php } else {
    header("refresh: 1; url=login.php");
} ?>
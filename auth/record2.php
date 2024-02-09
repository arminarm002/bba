<?php
include($_SERVER['DOCUMENT_ROOT'] . '/bba/auth/connectdb.php');
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta name='description' content='เว็บไซต์ให้คำปรึกษาผู้ที่ต้องการลดน้ำหนักหรือดูแลตัวเอง'>
    <meta name='copyright' content='BBA Team'>
    <meta name='robots' content='index,follow'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>body health & wellness</title>
    <link rel="stylesheet" href="../css/components.css">
    <link rel="stylesheet" href="../css/icons.css">
    <link rel="stylesheet" href="../css/responsee.css">
    <link rel="stylesheet" href="../owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="../owl-carousel/owl.theme.css">
    <!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="../css/template-style.css">
    <link rel="stylesheet" href="../theme/css/self.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&display=swap" rel="stylesheet">
    <script type="text/javascript" src="../js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="../js/jquery-ui.min.js"></script>
</head>

<body class="size-1520 primary-color-red background-dark font-noto">
    <?php
    include('../components/navbar.php');
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
                <form action="showscan2.php" class="scan" method="POST">
                    <h2 style="color: black;">สแกนร่างกาย วันที่
                        <?php $date1 = date("Y-m-d");
                        echo $date1; ?>
                    </h2>
                    <p style="color: #002633;">ชื่อ
                        <input type="text" name="name" placeholder="Name" required>
                    </p>
                    <br>
                        <label style="color: #002633;">กรุณาระบุเพศ:</label>
                        <select name="gender" required>
                            <option value="" disabled selected>เพศ</option>
                            <option value="male">ชาย</option>
                            <option value="female">หญิง</option>
                        </select>
                    <p style="display:none;">วันที่
                        <input type="text" name="date" value="<?php echo $date1; ?>">
                    </p>
                    <p style="color: #002633;">น้ำหนัก (กก.)
                        <input type="number" step="0.01" name="weight" placeholder="Weight" required>
                    </p>
                    <p style="color: #002633;">ไขมันในร่างกาย (%)
                        <input type="number" step="0.01" name="fat" placeholder="Fat">
                    </p>
                    <p style="color: #002633;">ไขมันในช่องท้อง (หน่วย)
                        <input type="number" name="vfat" placeholder="Visceral Fat">
                    </p>
                    <p style="color: #002633;">กล้ามเนื้อ (%)
                        <input type="number" step="0.01" name="muscle" placeholder="Muscle">
                    </p>
                    <p style="color: #002633;">อายุเซลล์ในร่างกาย (ปี)
                        <input type="number" name="bage" placeholder="Body Age">
                    </p>
                    <p style="color: #002633;">อัตราการเผาผลาญ (kcal)
                        <input type="number" name="metabolism" placeholder="Metabolic Rate">
                    </p>
                    <p style="color: #002633;">ดัชนีมวลร่างกายโดยรวม (BMI)
                        <input type="number" step="0.01" name="bmi" placeholder="BMI">
                    </p>
                    <button type="submit" class="bubbly-button" name="scan2"
                        style="background-color: #31a533;">ยืนยัน</button>
                </form>

            </div>
        </section>
    </main>
    <?php
    include('../components/footer.html');
    ?>
    <script>
        let today = new Date().toISOString().slice(0, 10);
        document.getElementById("date").innerHTML = today;
    </script>
</body>

</html>
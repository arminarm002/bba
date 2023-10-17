<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Free responsive business website template</title>
   <link rel="stylesheet" href="css/components.css">
   <link rel="stylesheet" href="css/icons.css">
   <link rel="stylesheet" href="css/responsee.css">
   <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
   <link rel="stylesheet" href="owl-carousel/owl.theme.css">
   <!-- CUSTOM STYLE -->
   <link rel="stylesheet" href="css/template-style.css">
   <link href="https://fonts.googleapis.com/css?family=Barlow:100,300,400,700,800&amp;subset=latin-ext"
      rel="stylesheet">
   <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
   <script type="text/javascript" src="js/jquery-ui.min.js"></script>
</head>

<body class="size-1520 primary-color-red background-dark">
   <?php
   include($_SERVER['DOCUMENT_ROOT'] . '/bba/components/navbar.php');
   ?>
   <!-- MAIN -->
   <main role="main">
      <!-- TOP SECTION -->
      <header class="grid">
         <div class="s-12 padding-2x">
            <h1 class="text-strong text-white text-center center text-size-60 text-uppercase margin-bottom-20">Our
               References</h1>
            <p class="text-size-20 text-white text-center center text-uppercase">Con nonummy sem integer interdum
               volutpat dis eget eligendi aliquip dolorum magnam. Iriure duis autem vel<br> eum dolor in hendrerit in
               vulputate velit esse molestie consequat.</p>
         </div>
      </header>

      <section class="grid margin">
         <img class="s-12 m-6 margin-bottom" src="img/portfolio/thumb-01.jpg" alt="" />
         <img class="s-12 m-6 margin-bottom" src="img/portfolio/thumb-02.jpg" alt="" />
         <img class="s-12 m-6 margin-bottom" src="img/portfolio/thumb-03.jpg" alt="" />
         <img class="s-12 m-6 margin-bottom" src="img/portfolio/thumb-04.jpg" alt="" />
         <img class="s-12 m-6 margin-bottom" src="img/portfolio/thumb-05.jpg" alt="" />
         <img class="s-12 m-6 margin-bottom" src="img/portfolio/thumb-06.jpg" alt="" />
         <img class="s-12 m-6 margin-bottom" src="img/portfolio/thumb-07.jpg" alt="" />
         <img class="s-12 m-6 margin-bottom" src="img/portfolio/thumb-08.jpg" alt="" />
      </section>

   </main>
   <?php
   include($_SERVER['DOCUMENT_ROOT'] . '/bba/components/footer.html');
   ?>
</body>

</html>
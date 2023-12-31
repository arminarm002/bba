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
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&display=swap" rel="stylesheet">
  <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui.min.js"></script>
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
        <h1 class="text-strong text-white text-center center text-size-60 text-uppercase margin-bottom-20">About Us</h1>
        <p class="text-size-20 text-white text-center center text-uppercase">Con nonummy sem integer interdum volutpat
          dis eget eligendi aliquip dolorum magnam. Iriure duis autem vel<br> eum dolor in hendrerit in vulputate velit
          esse molestie consequat.</p>
      </div>
    </header>


    <!-- SECTION 1 -->
    <section class="grid">
      <div class="m-12 l-6 padding-2x background-white">
        <h2 class="text-dark">Nonummy nibh euismod tincidunt ut laoreet</h2>
        <p>Sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit
          amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
          erat volutpat.<br><br></p>
        <h2 class="text-dark">Wisi malesuada scelerisque praesent mi accumsan</h2>
        <p>Tortor massa nec orci accusamus auctor aute euismod lacus ipsam culpa earum beatae fugiat. Wisi malesuada
          scelerisque praesent mi accumsan euismod ea penatibus felis lacinia maiores dolorum optio officia. Nonummy
          libero adipiscing vel nulla dis tristique torquent sollicitudin felis inceptos eligendi molestiae omnis
          aspernatur.
        <p>
      </div>

      <!-- Image-->
      <img class="l-6 hide-s hide-m" src="img/img-01.jpg">
    </section>

    <!-- SECTION 2 -->
    <section class="grid margin margin-bottom padding-2x background-primary">
      <div class="s-12 m-6 l-3">
        <span class="timer text-size-50 text-white text-strong">1500</span>
        <h3 class="text-uppercase text-strong">Ultricies eros sociis</h3>
        <p class="text-size-16 margin-m-bottom-20">Eodem modo typi nonummy maecenas ultricies eros sociis hendrerit
          dictum.</p>
      </div>

      <div class="s-12 m-6 l-3">
        <span class="timer text-size-50 text-white text-strong">95</span> <span
          class="text-size-50 text-white text-strong">%</span>
        <h3 class="text-uppercase text-strong">Magna condimentum suspendisse</h3>
        <p class="text-size-16 margin-m-bottom-20">Duis autem libero ullam magna condimentum suspendisse pellentesque.
        </p>
      </div>

      <div class="s-12 m-6 l-3">
        <span class="timer text-size-50 text-white text-strong">287</span>
        <h3 class="text-uppercase text-strong">Consequat phasellus orci</h3>
        <p class="text-size-16 margin-m-bottom-20">Mirum est notare dolor consequat phasellus orci pellentesque
          hendrerit.</p>
      </div>

      <div class="s-12 m-6 l-3">
        <span class="timer text-size-50 text-white text-strong">7</span> <span
          class="text-size-50 text-white text-strong">milion</span>
        <h3 class="text-uppercase text-strong">Augue et venenatis</h3>
        <p class="text-size-16 margin-m-bottom-20">Nam liber tempor erat augue et venenatis lorem ipsum dolor si amet.
        </p>
      </div>
    </section>

    <!-- SECTION 3 -->
    <section class="grid margin">
      <h2
        class="s-12 text-white text-thin text-size-30 text-white text-uppercase margin-top-bottom-20 center text-center">
        Our <b>Dream Team</b></h2>
      <div class="s-12 m-6 l-2 margin-bottom">
        <img src="img/team-01.jpg" />
        <h4 class="background-primary padding text-strong">Frank Star</h4>
        <p class="margin-bottom-10 text-primary text-uppercase">Boss</p>
      </div>
      <div class="s-12 m-6 l-2 margin-bottom">
        <img src="img/team-02.jpg" />
        <h4 class="background-primary padding text-strong">Jane Naismith</h4>
        <p class="margin-bottom-10 text-primary text-uppercase">Graphic Designer</p>
      </div>
      <div class="s-12 m-6 l-2 margin-bottom">
        <img src="img/team-03.jpg" />
        <h4 class="background-primary padding text-strong">Mark Stoner</h4>
        <p class="margin-bottom-10 text-primary text-uppercase">Web Designer</p>
      </div>
      <div class="s-12 m-6 l-2 margin-bottom">
        <img src="img/team-04.jpg" />
        <h4 class="background-primary padding text-strong">Steve Carpenter</h4>
        <p class="margin-bottom-10 text-primary text-uppercase">Web Developer</p>
      </div>
      <div class="s-12 m-6 l-2 margin-bottom">
        <img src="img/team-05.jpg" />
        <h4 class="background-primary padding text-strong">Steff Kingston</h4>
        <p class="margin-bottom-10 text-primary text-uppercase">Account Manager</p>
      </div>
      <div class="s-12 m-6 l-2 margin-bottom">
        <img src="img/team-06.jpg" />
        <h4 class="background-primary padding text-strong">John Sandman</h4>
        <p class="margin-bottom-10 text-primary text-uppercase">Account Manager</p>
      </div>
    </section>
    <header class="grid">
      <div class="s-12 padding-2x">
        <h1 class="text-strong text-white text-center center text-size-60 text-uppercase margin-bottom-20">Our Services
        </h1>
        <p class="text-size-20 text-white text-center center text-uppercase">Con nonummy sem integer interdum volutpat
          dis eget eligendi aliquip dolorum magnam. Iriure duis autem vel<br> eum dolor in hendrerit in vulputate velit
          esse molestie consequat.</p>
      </div>
    </header>


    <!-- SECTION 1 -->
    <section class="grid">
      <div class="m-12 l-6 padding-2x background-white">
        <p class="text-strong text-size-80 text-red">01</p>

        <h2 class="text-size-50 text-line-height-1 text-dark"><b>Nonummy nibh euismod tincidunt ut laoreet</b></h2>

        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
          dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
          nonummy.</p>
        <p>Libero malesuada varius leo mollis laoreet error occaecat unde nostra harum. A morbi hymenaeos rhoncus
          ridiculus temporibus consectetur ducimus exercitation. Integer arcu adipiscing augue iusto nam duis facilisi
          senectus iaculis proin repudiandae nemo cupidatat. Ipsum donec enim leo ultricies pulvinar aute semper dolores
          habitant impedit harum. </p>
      </div>

      <!-- Image-->
      <img class="m-12 l-6" src="img/img-06.jpg">
    </section>

    <!-- SECTION 2 -->
    <section class="grid">
      <!-- Image-->
      <img class="m-12 l-6" src="img/img-01.jpg">

      <div class="m-12 l-6 padding-2x background-dark">
        <p class="text-strong text-size-80 text-red">02</p>

        <h2 class="text-size-50 text-line-height-1 margin-bottom-30 text-white"><b>Libero malesuada varius leo mollis
            tincidunt</b></h2>

        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
          dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
          nonummy.</p>
        <p>Libero malesuada varius leo mollis laoreet error occaecat unde nostra harum. A morbi hymenaeos rhoncus
          ridiculus temporibus consectetur ducimus exercitation. Integer arcu adipiscing augue iusto nam duis facilisi
          senectus iaculis proin repudiandae nemo cupidatat. Ipsum donec enim leo ultricies pulvinar aute semper dolores
          habitant impedit harum. </p>
      </div>
    </section>

    <section class="grid margin text-center" style="margin-top:2rem;">
      <div class="m-12 l-4 padding-2x background-dark margin-bottom text-right">
        <h3 class="text-strong text-size-25 text-uppercase margin-bottom-10">Let's keep in touch</h3>
        <p>Deleniti pertinacia eu est, te his soluta quaestio pericula illum vulputate lobortis facilisis.</p>
      </div>
      <a href="/" class="s-12 m-6 l-2 padding vertical-center margin-bottom facebook hover-zoom">
        <i class="icon-sli-social-facebook text-size-60 text-white center"></i>
      </a>
      <a href="/" class="s-12 m-6 l-2 padding vertical-center margin-bottom twitter hover-zoom">
        <i class="icon-sli-social-twitter text-size-60 text-white center"></i>
      </a>
      <a href="/" class="s-12 m-6 l-2 padding vertical-center margin-bottom youtube hover-zoom">
        <i class="icon-sli-social-youtube text-size-60 text-white center"></i>
      </a>
      <a href="/" class="s-12 m-6 l-2 padding vertical-center margin-bottom linkedin hover-zoom">
        <i class="icon-sli-social-linkedin text-size-60 text-white center"></i>
      </a>
    </section>

  </main>
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/bba/components/footer.html');
  ?>
</body>

</html>
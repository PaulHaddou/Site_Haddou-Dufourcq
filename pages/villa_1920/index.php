<?php
    $title = 'Villa 1920';
    $metaname = '';
    $css = 'styles/villa_1920.css';
    $fonts = '../../fonts/MyFontsWebfontsKit.css';
    include '../../head.php';
?>
  <body>
  <?php
    $hrefProjects = '../../index.php';
    $hrefAbout = '../../about/';
    $hrefPublications = '../../publications/';
    $hrefContact = '../../contact/';
    include '../../header.php';
  ?>

    <div class="title">
      <a href="../../index.php">
      <p> kim haddou & </p>
      <p> florent dufourcq </p>
      </a>
    </div>
    <div class="container">
      <div class="slideshow-container">
        <div class="mySlides fade">
          <img src="../../images/projets/villa_1920/kim-haddou-florent-dufourcq-villa-1.png" style="width:100%">
        </div>
        <div class="mySlides fade">
          <img src="../../images/projets/villa_1920/kim-haddou-florent-dufourcq-villa-2.png" style="width:100%">
        </div>
        <div class="mySlides fade">
          <img src="../../images/projets/villa_1920/kim-haddou-florent-dufourcq-villa-3.png" style="width:100%">
        </div>
        <div class="mySlides fade">
          <img src="../../images/projets/villa_1920/kim-haddou-florent-dufourcq-villa-4.png" style="width:100%">
        </div>
        <div class="mySlides fade">
          <img src="../../images/projets/villa_1920/kim-haddou-florent-dufourcq-villa-5.png" style="width:100%">
        </div>
        <div class="mySlides fade">
          <img src="../../images/projets/villa_1920/kim-haddou-florent-dufourcq-villa-6.jpg" style="width:100%">
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <div class="dotDiv">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
        <span class="dot" onclick="currentSlide(6)"></span>
      </div>
      <div class="description">
        <h2>villa 1920</h2>
        <div class="line"></div>
        <div class="text">
          <p>2018</p>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="../../scripts/hamburger.js"></script>
    <script type="text/javascript" src="../../scripts/slider.js"></script>
  </body>
</html>

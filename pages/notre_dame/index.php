<?php
    $title = 'Notre Dame';
    $metaname = '';
    $css = 'styles/notre_dame.css';
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
          <img src="../../images/projets/notre_dame/florent-dufourcq-hotel-notre-dame-1.png" style="width:100%">
        </div>
        <div class="mySlides fade">
          <img src="../../images/projets/notre_dame/florent-dufourcq-hotel-notre-dame-2.png" style="width:100%">
        </div>
        <div class="mySlides fade">
          <img src="../../images/projets/notre_dame/florent-dufourcq-hotel-notre-dame-3.png" style="width:100%">
        </div>
        <div class="mySlides fade">
          <img src="../../images/projets/notre_dame/florent-dufourcq-hotel-notre-dame-4.png" style="width:100%">
        </div>
        <div class="mySlides fade">
          <img src="../../images/projets/notre_dame/florent-dufourcq-hotel-notre-dame-5.png" style="width:100%">
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
      </div>
      <div class="description">
        <h2>hôtel notre-dame</h2>
        <div class="line"></div>
        <div class="text">
          <p>Projet de diplôme en architecture intérieure, félicitations du jury - Florent Dufourcq - 2015</p>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="../../scripts/hamburger.js"></script>
    <script type="text/javascript" src="../../scripts/slider.js"></script>
  </body>
</html>
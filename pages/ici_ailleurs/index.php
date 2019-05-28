<?php
    $title = 'Ici et Ailleurs';
    $metaname = '';
    $css = '../../styles/projectsPages.css';
    $cssHeader = '../../styles/header.css';
    $fonts = '../../fonts/MyFontsWebfontsKit.css';
    include '../../head.php';
?>
  <body>
  <?php
    $hrefProjects = '../../index.php';
    $hrefAbout = '../about/';
    $hrefPublications = '../publications/';
    $hrefContact = '../contact/';
    include '../../header.php';
  ?>
    <div class="container">
      <div class="slideshow-container">
        <div class="mySlides fade">
          <img src="../../images/projets/ici_ailleurs/kim-haddou-florent-dufourcq-ici-et-ailleurs-1.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
          <img src="../../images/projets/ici_ailleurs/kim-haddou-florent-dufourcq-ici-et-ailleurs-2.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
          <img src="../../images/projets/ici_ailleurs/kim-haddou-florent-dufourcq-ici-et-ailleurs-3.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
          <img src="../../images/projets/ici_ailleurs/kim-haddou-florent-dufourcq-ici-et-ailleurs-4.jpg" style="width:100%">
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <div class="dotDiv">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
      </div>
      <div class="description">
        <h2>ici et ailleurs</h2>
        <div class="line"></div>
        <div class="text">
          <p>2016</p>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="../../scripts/hamburger.js"></script>
    <script type="text/javascript" src="../../scripts/slider.js"></script>
  </body>
</html>
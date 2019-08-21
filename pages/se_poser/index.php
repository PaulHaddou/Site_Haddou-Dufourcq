<?php
    $title = 'Se poser';
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
  <main>
    <div class="container">
      <div class="slideshow-container">
        <div class="mySlides fade">
          <img src="../../images/projets/se_poser/kim-haddou-se-poser-3.jpg" class="img1">
        </div>
        <div class="mySlides fade">
          <img src="../../images/projets/se_poser/kim-haddou-se-poser-4.jpg" class="img2">
        </div>
        <div class="mySlides fade">
          <img src="../../images/projets/se_poser/kim-haddou-se-poser-5.jpg" class="img3">
        </div>
        <div class="mySlides fade">
          <img src="../../images/projets/se_poser/kim-haddou-se-poser-6.jpg" class="img4">
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
        <h2>se poser</h2>
        <div class="line"></div>
        <div class="text">
          <p>Projet de diplôme en design, félicitations du jury - Kim Haddou - 2015</p>
        </div>
      </div>
    </div>
  </main>  
  <script type="text/javascript" src="../../scripts/burger.js"></script>
  <script type="text/javascript" src="../../scripts/slider.js"></script>
  </body>
</html>

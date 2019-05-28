<?php
    $title = 'grotto';
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
          <img src="../../images/projets/grotto/kim-haddou-florent-dufourcq-design-parade-toulon-2018-10.JPG" style="width:100%">
        </div>
        <div class="mySlides fade">
          <img src="../../images/projets/grotto/kim-haddou-florent-dufourcq-design-parade-toulon-2018-3.JPG" style="width:100%">
        </div>
        <div class="mySlides fade">
          <img src="../../images/projets/grotto/kim-haddou-florent-dufourcq-design-parade-toulon-2018-8.JPG" style="width:100%">
        </div>
        <div class="mySlides fade">
          <img src="../../images/projets/grotto/kim-haddou-florent-dufourcq-design-parade-toulon-2018-9.JPG" style="width:100%">
        </div>
        <div class="mySlides fade">
          <img src="../../images/projets/grotto/kim-haddou-florent-dufourcq-design-parade-toulon-2018-2.JPG" style="width:100%">
        </div>
        <div class="mySlides fade">
          <img src="../../images/projets/grotto/kim-haddou-florent-dufourcq-design-parade-toulon-2018-4.JPG" style="width:100%">
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
        <h2>grotto</h2>
        <div class="line"></div>
        <div class="text">
          <p class="texttitle">Concours Design Parade Toulon, France, 2018 - Projet lauréat -</p>
          <p class="texttxt">Grotto est un petit salon de lecture imaginé pour le concours Design Parade Toulon organisé par la Villa Noailles.</p>
          <p class="texttxt">Un endroit à part, où lire, écrire réfléchir à l'abri du tumulte du monde extérieur. Une bibliothèque faite de niches creusées à même le mur fait écho à une architecture méditerranéenne séculaire. </p>
          <p class="texttxt">Projet récompensé par le Grand Prix Van Cleef & Arpels, Design Parade Toulon 2018.</p>
          <p class="texttxt">Avec le soutien précieux de: Galerie Desprez Breheret, Mosaic del Sur, Céramiques du Beaujolais, Pierre Frey, Wilo & Grove, Debeaulieu, Poterie Ravel, Make’s concept.</p>
          <p class="credits"> Photos: Luc Bertrand, Kim Haddou
        </div>
      </div>
    </div>
    <script type="text/javascript" src="../../scripts/hamburger.js"></script>
    <script type="text/javascript" src="../../scripts/slider.js"></script>
  </body>
</html>
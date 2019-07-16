<?php
    $title = 'élise djo-bourgeois';
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
          <img src="../../images/projets/elise_djo_bourgeois/kim-haddou-florent-dufourcq-elise-djo-bourgeois-emile-kirsch-1.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
          <img src="../../images/projets/elise_djo_bourgeois/kim-haddou-florent-dufourcq-elise-djo-bourgeois-emile-kirsch-2.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
          <img src="../../images/projets/elise_djo_bourgeois/kim-haddou-florent-dufourcq-elise-djo-bourgeois-emile-kirsch-3.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
          <img src="../../images/projets/elise_djo_bourgeois/kim-haddou-florent-dufourcq-elise-djo-bourgeois-emile-kirsch-4.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
          <img src="../../images/projets/elise_djo_bourgeois/kim-haddou-florent-dufourcq-elise-djo-bourgeois-emile-kirsch-6.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
          <img src="../../images/projets/elise_djo_bourgeois/kim-haddou-florent-dufourcq-elise-djo-bourgeois-emile-kirsch-7.jpg" style="width:100%">
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
        <h2>élise djo-bourgeois</h2>
        <div class="line"></div>
        <div class="text">
          <p class="texttitle">2019</p>
          <p class="texttxt">Scénographie de l’exposition consacrée à la designer textile Elise Djo-Bourgeois.</p>
          <p class="texttxt">Villa Noailles, Hyères.</p>
          <p class="credits"> Photos: Emile Kirsch.
        </div>
      </div>
    </div>
    <script type="text/javascript" src="../../scripts/hamburger.js"></script>
    <script type="text/javascript" src="../../scripts/slider.js"></script>
  </body>
</html>
<?php
    $title = 'fenêtres sur cours';
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
          <img src="../../images/projets/fenetre_sur_cours/Studio-Haddou-Dufourcq_fenetre-sur-cours_J.Oppenheim_1.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
          <img src="../../images/projets/fenetre_sur_cours/Studio-Haddou-Dufourcq_fenetre-sur-cours_J.Oppenheim_2.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
          <img src="../../images/projets/fenetre_sur_cours/Studio-Haddou-Dufourcq_fenetre-sur-cours_Luc-Bertrand_3.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
          <img src="../../images/projets/fenetre_sur_cours/Studio-Haddou-Dufourcq_fenetre-sur-cours_J.Oppenheim_4.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
          <img src="../../images/projets/fenetre_sur_cours/Studio-Haddou-Dufourcq_fenetre-sur-cours_Luc-Bertrand_5.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
          <img src="../../images/projets/fenetre_sur_cours/Studio-Haddou-Dufourcq_fenetre-sur-cours_Luc-Bertrand_6.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
          <img src="../../images/projets/fenetre_sur_cours/Studio-Haddou-Dufourcq_fenetre-sur-cours_Luc-Bertrand_7.jpg" style="width:100%">
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
        <span class="dot" onclick="currentSlide(7)"></span>
      </div>
      <div class="description">
        <h2>fenêtres sur cours</h2>
        <div class="text">
          <p class="texttitle">Design Parade Toulon, France, 2019</p>
          <p class="texttxt">Avec le soutien précieux de: Villa Noailles, Pierre Frey, Codimat, Gubi, Galerie</p>
          <p class="texttxt">Desprez Breheret, Atelier de la Mousse, Atelier Lorenzi, Centre archéologique du Var, </p>
          <p class="texttxt">Degrés 960, FRAC PACA, Capag.</p>
          <p class="credits"> Photos: Luc Bertrand, Julien Oppenheim.
        </div>
      </div>
    </div>
  </main>
  <script type="text/javascript" src="../../scripts/burger.js"></script>
  <script type="text/javascript" src="../../scripts/slider.js"></script>
  </body>
</html>
<?php
    $title = 'hyéres 34';
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
          <img src="../../images/projets/hyeres_34/Villa_Jury-Ministère_de_la_Culture_1.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
          <img src="../../images/projets/hyeres_34/Villa_Jury-Ministère_de_la_Culture_2.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
          <img src="../../images/projets/hyeres_34/Villa_Jury-Ministère_de_la_Culture_3.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
          <img src="../../images/projets/hyeres_34/Villa_Jury-Ministère_de_la_Culture_4.jpg" style="width:100%">
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
        <h2>hyères 34</h2>
        <div class="line"></div>
        <div class="text">
          <p class="texttitle">2019</p>
          <p class="texttxt">Scénographie pour la soirée de lancement du 34e Festival International de Mode, de Photographie et d’Accessoire de mode d’Hyères organisé par la Villa Noailles.</p>
          <p class="texttxt">Ministère de la Culture, Paris.</p>
          <p class="credits"> Photos: Luc Bertrand.
        </div>
      </div>
    </div>
  </main>
  <script type="text/javascript" src="../../scripts/burger.js"></script>
  <script type="text/javascript" src="../../scripts/slider.js"></script>
  </body>
</html>
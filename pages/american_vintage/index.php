<?php
    $title = 'american vintage';
    $metaname = 'Scénographie pour l’exposition « coalescence » de la photographe Sarah Mei Herman. Boutique American Vintage rue Vieille du Temple, Paris.';
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
          <img src="../../images/projets/american_vintage/Sarah_Mei_Herman-Studio_Haddou_Dufourcq-American_Vintage-Luc Bertrand1.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
          <img src="../../images/projets/american_vintage/Sarah_Mei_Herman-Studio_Haddou_Dufourcq-American_Vintage-Luc Bertrand2.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
          <img src="../../images/projets/american_vintage/Sarah_Mei_Herman-Studio_Haddou_Dufourcq-American_Vintage-Luc Bertrand3.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
          <img src="../../images/projets/american_vintage/Sarah_Mei_Herman-Studio_Haddou_Dufourcq-American_Vintage-Luc Bertrand4.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
          <img src="../../images/projets/american_vintage/Sarah_Mei_Herman-Studio_Haddou_Dufourcq-American_Vintage-Luc Bertrand5.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
          <img src="../../images/projets/american_vintage/Sarah_Mei_Herman-Studio_Haddou_Dufourcq-American_Vintage-Luc Bertrand6.jpg" style="width:100%">
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
        <h2>american vintage</h2>
        <div class="line"></div>
        <div class="text">
          <p class="texttitle">2018 </p>
          <p class="texttxt">Scénographie pour l’exposition « coalescence » de la photographe Sarah Mei Herman.</p>
          <p class="texttxt">Boutique American Vintage rue Vieille du Temple, Paris.</p>
          <p class="credits"> Photos: Luc Bertrand
        </div>
      </div>
    </div>
  </main>
  <script type="text/javascript" src="../../scripts/burger.js"></script>
  <script type="text/javascript" src="../../scripts/slider.js"></script>
  </body>
</html>
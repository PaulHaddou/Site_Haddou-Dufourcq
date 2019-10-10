<?php
    $title = 'Kim Haddou & Florent Dufourcq';
    $metaname = 'Studio de design d\'intérieur basé à Paris, dirigé par Kim Haddou et Florent Dufourcq - Grand Prix Van Cleef and Arpels - Design Parade Toulon 2018 - Villa Noailles';
    $css = 'styles/projects.css';
    $cssHeader = 'styles/header.css';
    $fonts = 'fonts/MyFontsWebfontsKit.css';
    include 'head.php';
?>
  <body>
  <!-------------- HEADER---------------->
  <?php
    $hrefProjects = 'https://www.haddou-dufourcq.com';
    $hrefAbout = 'pages/about/';
    $hrefPublications = 'pages/publications/';
    $hrefContact = 'pages/contact/';
    include 'header.php';
  ?>
  <!---------- CONTAINER --------->
    <main>
      <div class="container">
          <div class="grotto">
              <img src="images/miniatures/grotto-1.JPG" alt="">
              <a class="textGrotto" href="pages/grotto/">
                  <p>grotto</p>
                  <p>design parade 2018</p>
              </a>
          </div>
          <div class="americanVintage">
              <img src="images/miniatures/Sarah_Mei_Herman-Studio_Haddou_Dufourcq-American_Vintage-Luc_Bertrand1.jpg" alt="">
              <a class="textAmericanVintage small" href="pages/american_vintage/">
                  <p>american vintage</p>
                  <p>coalescence</p>
              </a>
          </div>
          <div class="eliseDjoBourjoie">
              <img src="images/miniatures/kim-haddou-florent-dufourcq-elise-djo-bourgeois-emile-kirsch-1.jpg" alt="">
              <a class="texteliseDjoBourjoie" href="pages/elise-djo_bourgeois/">
                  <p>élise djo-bourgeois</p>
                  <p>villa noailles</p>
              </a>
          </div>
          <div class="fenetre">
              <img src="images/miniatures/fenetre-sur-cours.jpg" alt="">
              <a class="textfenetre" href="pages/fenetre_sur_cours/">
                  <p>fenêtres sur cours</p>
                  <p>design parade 2019</p>
              </a>
          </div>
          <div class="iciEtAilleur">
              <img src="images/miniatures/ici-et-ailleurs.jpg" alt="">
              <a class="textIciEtAilleur small" href="pages/ici_ailleurs/">
                  <p>ici et ailleurs</p>
              </a>
          </div>
          <div class="hyeres34">
              <img src="images/miniatures/Villa_Jury-Ministere_de_la_Culture_1.jpg" alt="">
              <a class="textHyeres34" href="pages/hyeres_34/">
                  <p>hyères 34</p>
                  <p>palais royal</p>
              </a>
          </div>
          <div class="songeEte">
              <img src="images/miniatures/songe-ete.jpg" alt="">
              <a class="textSongeEte small" href="pages/songe_ete/">
                  <p>songe d'un jour d'été</p>
              </a>
          </div>
          <div class="villa">
              <img src="images/miniatures/villa.jpg" alt="">
              <a class="textVilla small" href="pages/villa_1920/">
                  <p>villa 1920</p>
              </a>
          </div>
          <div class="display">
              <img src="images/miniatures/display.jpg" alt="">
              <a class="textDisplay small" href="pages/display/">
                  <p>display</p>
              </a>
          </div>
          <div class="louvre">
              <img src="images/miniatures/louvre.jpg" alt="">
              <a class="textLouvre small" href="pages/louvre/">
                  <p>louvre</p>
              </a>
          </div>
          <div class="notreDame">
              <img src="images/miniatures/notre-dame.jpg" alt="">
              <a class="textNotreDame small" href="pages/notre_dame/">
                  <p>notre-dame</p>
              </a>
          </div>
      </div>
    </main>
  <script type="text/javascript" src="scripts/burger.js"></script>
  </body>
</html>
		
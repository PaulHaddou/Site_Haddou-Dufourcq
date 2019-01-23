<?php
    $title = 'Louvre';
    $metaname = '';
    $css = 'styles/louvre.css';
    $fonts = '../fonts/MyFontsWebfontsKit.css';
    include '../head.php';
?>
  <body>
  <?php
    $hrefProjects = '../index.php';
    $hrefAbout = '../about/';
    $hrefPublications = '../publications/';
    $hrefContact = '../contact/';
    include '../header.php';
  ?>

    <div class="title">
      <a href="../index.php">
      <h1> kim haddou & florent dufourcq</h1>
      </a>
    </div>
    <div class="container">
      <div class="slideshow-container">
        <div class="mySlides fade">
          <img src="../images/projets/louvre/florent-dufourcq-hotel-du-louvre-1.png" style="width:100%">
        </div>
      </div>
      <div class="description">
        <h2>hôtel du louvre</h2>
        <div class="line"></div>
        <div class="text">
          <p>Concours Hyatt et Andaz hôtels pour la rénovation de l'Hôtel du Louvre à Paris, 2013</p>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="scripts/hamburger.js"></script>
    <script type="text/javascript" src="scripts/slider.js"></script>
  </body>
</html>

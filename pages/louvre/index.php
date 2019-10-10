<?php
    $title = 'Louvre';
    $metaname = '';
    $css = '../../styles/projectsPages.css';
    $cssHeader = '../../styles/header.css';
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
          <img src="../../images/projets/louvre/florent-dufourcq-hotel-du-louvre-1.png" style="width:100%">
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
  </main>
  <script type="text/javascript" src="../../scripts/burger.js"></script>
  <script type="text/javascript" src="../../scripts/slider.js"></script>
  </body>
</html>

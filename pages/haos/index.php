<?php
    $pathToImages = 'haos';
    $nameOfTheProject = 'haos';
    $dateOfTheProject = '2020';
    $textOfTheProject = 'Set design pour la présentation de la nouvelle collection de la marque de mobilier HAOS lors du salon Collectible à Bruxelles.';
    $localisationOfTheProject = 'Bruxelles, Belgique.';
    $creditsOfTheProject = 'Evenbeeld.';


    $title = $nameOfTheProject;
    $metaname = $textOfTheProject;
    $css = '../../styles/projectsPages/projectsPages.css';
    $cssNavbar = '../../styles/navbar/navbar.min.css';
    $cssNavbarMobile = '../../styles/navbarMobile/navbarMobile.min.css';
    $fonts = '../../fonts/MyFontsWebfontsKit.css';
    $slider = '../../styles/slider/slider.min.css';
    include '../../head.php';
?>
  <body>
  <?php
    $hrefProjects = '../../index.php';
    $hrefAbout = '../about/';
    $hrefPublications = '../publications/';
    $hrefContact = '../contact/';
    include '../../navbar.php';
    include '../../navbarMobile.php';
  ?>
  <main>
    <div class="container">
        <div class="carousel">
          <div class="previous">
                <div class ="left-arrow"></div>
            </div>
            <div class="carousel--imgs">
                <div class="imgs--all">
                    <div>
                        <img src="../../images/projets/<?= $pathToImages ?>/studio-haddou-dufourcq-<?= $pathToImages ?>-1.jpg" alt="">
                    </div>
                    <div>
                        <img src="../../images/projets/<?= $pathToImages ?>/studio-haddou-dufourcq-<?= $pathToImages ?>-2.jpg" alt="">
                    </div>
                    <div>
                        <img src="../../images/projets/<?= $pathToImages ?>/studio-haddou-dufourcq-<?= $pathToImages ?>-3.jpg" alt="">
                    </div>
                    <div>
                        <img src="../../images/projets/<?= $pathToImages ?>/studio-haddou-dufourcq-<?= $pathToImages ?>-4.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="next">
                <div class ="right-arrow"></div>
            </div>
        </div>
        <div class="container--pagination">
        </div>
        <div class="description">
          <h2 class="descriptionTitle"><?= $nameOfTheProject ?></h2>
          <div class="descriptionContent">
            <p class="descriptionContentDate"><?= $dateOfTheProject ?></p>
            <p class="descriptionContentText"><?= $textOfTheProject ?></p>
            <p class="descriptionContentLocalisation"><?= $localisationOfTheProject ?></p>
            <p class="descriptionContentCredits"> Photos: <?= $creditsOfTheProject ?></p>
          </div>
        </div>
    </div>
  </main>
  <script type="text/javascript" src="../../scripts/burger.js"></script>
  <script src="../../scripts/slider.js"></script>
  </body>
</html>
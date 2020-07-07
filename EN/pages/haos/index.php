<?php

    if (strpos($_SERVER['REQUEST_URI'], "EN") !== false)
    {
        include '../../../includes/textsEN.php';
    } else {
        include '../../../includes/textsFR.php';
    }

    $title = $nameOfTheProjectHaos;
    $metaname = $textOfTheProjectHaos1;
    $css = '../../../styles/projectsPages/projectsPages.css';
    $cssNavbar = '../../../styles/navbar/navbar.min.css';
    $cssNavbarMobile = '../../../styles/navbarMobile/navbarMobile.min.css';
    $fonts = '../../../fonts/MyFontsWebfontsKit.css';
    $slider = '../../../styles/slider/slider.min.css';
    include '../../../head.php';
?>
  <body>
  <?php
    $hrefProjects = '../../';
    $hrefAbout = '../about/';
    $hrefPublications = '../press/';
    $hrefContact = '../contact/';

    include '../../../navbar.php';
    include '../../../navbarMobile.php';
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
                        <img src="../../../images/projets/<?= $pathToImagesHaos ?>/studio-haddou-dufourcq-<?= $pathToImagesHaos ?>-1.jpg" alt="<?= $imageAltHaos ?>">
                    </div>
                    <div>
                        <img src="../../../images/projets/<?= $pathToImagesHaos ?>/studio-haddou-dufourcq-<?= $pathToImagesHaos ?>-2.jpg" alt="<?= $imageAltHaos ?>">
                    </div>
                    <div>
                        <img src="../../../images/projets/<?= $pathToImagesHaos ?>/studio-haddou-dufourcq-<?= $pathToImagesHaos ?>-3.jpg" alt="<?= $imageAltHaos ?>">
                    </div>
                    <div>
                        <img src="../../../images/projets/<?= $pathToImagesHaos ?>/studio-haddou-dufourcq-<?= $pathToImagesHaos ?>-4.jpg" alt="<?= $imageAltHaos ?>">
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
          <h2 class="descriptionTitle"><?= $nameOfTheProjectHaos ?></h2>
          <div class="descriptionContent">
            <p class="descriptionContentDate"><?= $dateOfTheProjectHaos ?></p>
            <p class="descriptionContentText"><?= $textOfTheProjectHaos1 ?></p>
            <p class="descriptionContentLocalisation"><?= $localisationOfTheProjectHaos ?></p>
            <p class="descriptionContentCredits"><?= $creditsOfTheProjectHaos ?></p>
          </div>
        </div>
    </div>
  </main>
  <script type="text/javascript" src="../../../scripts/burger.js"></script>
  <script src="../../../scripts/slider.js"></script>
  </body>
</html>
<?php

    if (strpos($_SERVER['REQUEST_URI'], "EN") !== false)
    {
        include '../../../includes/textsEN.php';
    } else {
        include '../../../includes/textsFR.php';
    }

    $title = $nameOfTheProjectHyeres34;
    $metaname = $textOfTheProjectHyeres341;
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
                        <img src="../../../images/projets/<?= $pathToImagesHyeres34 ?>/studio-haddou-dufourcq-<?= $pathToImagesHyeres34 ?>-1.jpg" alt="<?= $imageAltHyeres34 ?>">
                    </div>
                    <div>
                        <img src="../../../images/projets/<?= $pathToImagesHyeres34 ?>/studio-haddou-dufourcq-<?= $pathToImagesHyeres34 ?>-2.jpg" alt="<?= $imageAltHyeres34 ?>">
                    </div>
                    <div>
                        <img src="../../../images/projets/<?= $pathToImagesHyeres34 ?>/studio-haddou-dufourcq-<?= $pathToImagesHyeres34 ?>-3.jpg" alt="<?= $imageAltHyeres34 ?>">
                    </div>
                    <div>
                        <img src="../../../images/projets/<?= $pathToImagesHyeres34 ?>/studio-haddou-dufourcq-<?= $pathToImagesHyeres34 ?>-4.jpg" alt="<?= $imageAltHyeres34 ?>">
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
          <h2 class="descriptionTitle"><?= $nameOfTheProjectHyeres34 ?></h2>
          <div class="descriptionContent">
            <p class="descriptionContentDate"><?= $dateOfTheProjectHyeres34 ?></p>
            <p class="descriptionContentText"><?= $textOfTheProjectHyeres341 ?></p>
            <p class="descriptionContentLocalisation"><?= $localisationOfTheProjectHyeres34 ?></p>
            <p class="descriptionContentCredits"><?= $creditsOfTheProjectHyeres34 ?></p>
          </div>
        </div>
    </div>
  </main>
  <script type="text/javascript" src="../../../scripts/burger.js"></script>
  <script src="../../../scripts/slider.js"></script>
  </body>
</html>
<?php

    if (strpos($_SERVER['REQUEST_URI'], "EN") !== false)
    {
        include '../../../includes/textsEN.php';
    } else {
        include '../../../includes/textsFR.php';
    }

    $title = $nameOfTheProjectEliseDjoBourgeois;
    $metaname = $textOfTheProjectEliseDjoBourgeois1;
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
    $hrefPublications = '../publications/';
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
                        <img src="../../../images/projets/<?= $pathToImagesEliseDjoBourgeois ?>/studio-haddou-dufourcq-<?= $pathToImagesEliseDjoBourgeois ?>-1.jpg" alt="<?= $imageAltEliseDjoBourgeois ?>">
                    </div>
                    <div>
                        <img src="../../../images/projets/<?= $pathToImagesEliseDjoBourgeois ?>/studio-haddou-dufourcq-<?= $pathToImagesEliseDjoBourgeois ?>-2.jpg" alt="<?= $imageAltEliseDjoBourgeois ?>">
                    </div>
                    <div>
                        <img src="../../../images/projets/<?= $pathToImagesEliseDjoBourgeois ?>/studio-haddou-dufourcq-<?= $pathToImagesEliseDjoBourgeois ?>-3.jpg" alt="<?= $imageAltEliseDjoBourgeois ?>">
                    </div>
                    <div>
                        <img src="../../../images/projets/<?= $pathToImagesEliseDjoBourgeois ?>/studio-haddou-dufourcq-<?= $pathToImagesEliseDjoBourgeois ?>-4.jpg" alt="<?= $imageAltEliseDjoBourgeois ?>">
                    </div>
                    <div>
                        <img src="../../../images/projets/<?= $pathToImagesEliseDjoBourgeois ?>/studio-haddou-dufourcq-<?= $pathToImagesEliseDjoBourgeois ?>-5.jpg" alt="<?= $imageAltEliseDjoBourgeois ?>">
                    </div>
                    <div>
                        <img src="../../../images/projets/<?= $pathToImagesEliseDjoBourgeois ?>/studio-haddou-dufourcq-<?= $pathToImagesEliseDjoBourgeois ?>-6.jpg" alt="<?= $imageAltEliseDjoBourgeois ?>">
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
          <h2 class="descriptionTitle"><?= $nameOfTheProjectEliseDjoBourgeois ?></h2>
          <div class="descriptionContent">
            <p class="descriptionContentDate"><?= $dateOfTheProjectEliseDjoBourgeois ?></p>
            <p class="descriptionContentText"><?= $textOfTheProjectEliseDjoBourgeois1 ?></p>
            <p class="descriptionContentLocalisation"><?= $localisationOfTheProjectEliseDjoBourgeois ?></p>
            <p class="descriptionContentCredits"><?= $creditsOfTheProjectEliseDjoBourgeois ?></p>
          </div>
        </div>
    </div>
  </main>
  <script type="text/javascript" src="../../../scripts/burger.js"></script>
  <script src="../../../scripts/slider.js"></script>
  </body>
</html>
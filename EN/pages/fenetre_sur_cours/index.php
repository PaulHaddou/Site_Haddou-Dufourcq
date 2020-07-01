<?php

    if (strpos($_SERVER['REQUEST_URI'], "EN") !== false)
    {
        include '../../../includes/textsEN.php';
    } else {
        include '../../../includes/textsFR.php';
    }

    $title = $nameOfTheProjectFenetreSurCours;
    $metaname = $localisationOfTheProjectFenetreSurCours;
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
                        <img src="../../../images/projets/<?= $pathToImagesFenetreSurCours ?>/studio-haddou-dufourcq-<?= $pathToImagesFenetreSurCours ?>-1.jpg" alt="<?= $imageAltFenetreSurCours ?>">
                    </div>
                    <div>
                        <img src="../../../images/projets/<?= $pathToImagesFenetreSurCours ?>/studio-haddou-dufourcq-<?= $pathToImagesFenetreSurCours ?>-2.jpg" alt="<?= $imageAltFenetreSurCours ?>">
                    </div>
                    <div>
                        <img src="../../../images/projets/<?= $pathToImagesFenetreSurCours ?>/studio-haddou-dufourcq-<?= $pathToImagesFenetreSurCours ?>-3.jpg" alt="<?= $imageAltFenetreSurCours ?>">
                    </div>
                    <div>
                        <img src="../../../images/projets/<?= $pathToImagesFenetreSurCours ?>/studio-haddou-dufourcq-<?= $pathToImagesFenetreSurCours ?>-4.jpg" alt="<?= $imageAltFenetreSurCours ?>">
                    </div>
                    <div>
                        <img src="../../../images/projets/<?= $pathToImagesFenetreSurCours ?>/studio-haddou-dufourcq-<?= $pathToImagesFenetreSurCours ?>-5.jpg" alt="<?= $imageAltFenetreSurCours ?>">
                    </div>
                    <div>
                        <img src="../../../images/projets/<?= $pathToImagesFenetreSurCours ?>/studio-haddou-dufourcq-<?= $pathToImagesFenetreSurCours ?>-6.jpg" alt="<?= $imageAltFenetreSurCours ?>">
                    </div>
                    <div>
                        <img src="../../../images/projets/<?= $pathToImagesFenetreSurCours ?>/studio-haddou-dufourcq-<?= $pathToImagesFenetreSurCours ?>-7.jpg" alt="<?= $imageAltFenetreSurCours ?>">
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
          <h2 class="descriptionTitle"><?= $nameOfTheProjectFenetreSurCours?></h2>
          <div class="descriptionContent">
            <p class="descriptionContentDate"><?= $dateOfTheProjectFenetreSurCours ?></p>
            <p class="descriptionContentText"><?= $textOfTheProjectFenetreSurCours1 ?></p>
            <p class="descriptionContentLocalisation"><?= $localisationOfTheProjectFenetreSurCours ?></p>
            <p class="descriptionContentCredits"> <?= $creditsOfTheProjectFenetreSurCours ?></p>
          </div>
        </div>
    </div>
  </main>
  <script type="text/javascript" src="../../../scripts/burger.js"></script>
  <script src="../../../scripts/slider.js"></script>
  </body>
</html>
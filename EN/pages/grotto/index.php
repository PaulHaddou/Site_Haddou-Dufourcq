<?php
    if (strpos($_SERVER['REQUEST_URI'], "EN") !== false)
    {
        include '../../../includes/textsEN.php';
    } else {
        include '../../../includes/textsFR.php';
    }

    $title = $nameOfTheProjectGrotto;
    $metaname = $textOfTheProjectGrotto1.$textOfTheProjectGrotto2;
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
                        <img src="../../../images/projets/<?= $pathToImagesGrotto ?>/studio-haddou-dufourcq-<?= $pathToImagesGrotto ?>-1.jpg" alt="<?= $imageAltGrotto ?>">
                    </div>
                    <div>
                        <img src="../../../images/projets/<?= $pathToImagesGrotto ?>/studio-haddou-dufourcq-<?= $pathToImagesGrotto ?>-2.jpg" alt="<?= $imageAltGrotto ?>">
                    </div>
                    <div>
                        <img src="../../../images/projets/<?= $pathToImagesGrotto ?>/studio-haddou-dufourcq-<?= $pathToImagesGrotto ?>-3.jpg" alt="<?= $imageAltGrotto ?>">
                    </div>
                    <div>
                        <img src="../../../images/projets/<?= $pathToImagesGrotto ?>/studio-haddou-dufourcq-<?= $pathToImagesGrotto ?>-4.jpg" alt="<?= $imageAltGrotto ?>">
                    </div>
                    <div>
                        <img src="../../../images/projets/<?= $pathToImagesGrotto ?>/studio-haddou-dufourcq-<?= $pathToImagesGrotto ?>-5.jpg" alt="<?= $imageAltGrotto ?>">
                    </div>
                    <div>
                        <img src="../../../images/projets/<?= $pathToImagesGrotto ?>/studio-haddou-dufourcq-<?= $pathToImagesGrotto ?>-6.jpg" alt="<?= $imageAltGrotto ?>">
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
          <h2 class="descriptionTitle"><?= $nameOfTheProjectGrotto ?></h2>
          <div class="descriptionContent">
            <p class="descriptionContentDate"><?= $dateOfTheProjectGrotto ?></p>
            <p class="descriptionContentText"><?= $textOfTheProjectGrotto1 ?></p>
            <p class="descriptionContentText"><?= $textOfTheProjectGrotto2 ?></p>
            <p class="descriptionContentText"><?= $textOfTheProjectGrotto3 ?></p>
            <p class="descriptionContentLocalisation"><?= $localisationOfTheProjectGrotto ?></p>
            <p class="descriptionContentCredits"> <?= $creditsOfTheProjectGrotto ?></p>
          </div>
        </div>
    </div>
  </main>
  <script type="text/javascript" src="../../../scripts/burger.js"></script>
  <script src="../../../scripts/slider.js"></script>
  </body>
</html>
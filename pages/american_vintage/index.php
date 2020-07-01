<?php
    if (strpos($_SERVER['REQUEST_URI'], "EN") !== false)
    {
        include '../../includes/textsEN.php';
    } else {
        include '../../includes/textsFR.php';
    }

    $title = $nameOfTheProjectAmericanVintage;
    $metaname = $textOfTheProjectAmericanVintage1;
    $css = '../../styles/projectsPages/projectsPages.css';
    $cssNavbar = '../../styles/navbar/navbar.min.css';
    $cssNavbarMobile = '../../styles/navbarMobile/navbarMobile.min.css';
    $fonts = '../../fonts/MyFontsWebfontsKit.css';
    $slider = '../../styles/slider/slider.min.css';
    include '../../head.php';
?>
  <body>
  <?php
    $hrefProjects = '../../';
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
                        <img src="../../images/projets/<?= $pathToImagesAmericanVintage ?>/studio-haddou-dufourcq-<?= $pathToImagesAmericanVintage ?>-1.jpg" alt="<?= $altImageAmericanVintage ?>">
                    </div>
                    <div>
                        <img src="../../images/projets/<?= $pathToImagesAmericanVintage ?>/studio-haddou-dufourcq-<?= $pathToImagesAmericanVintage ?>-2.jpg" alt="<?= $altImageAmericanVintage ?>">
                    </div>
                    <div>
                        <img src="../../images/projets/<?= $pathToImagesAmericanVintage ?>/studio-haddou-dufourcq-<?= $pathToImagesAmericanVintage ?>-3.jpg" alt="<?= $altImageAmericanVintage ?>">
                    </div>
                    <div>
                        <img src="../../images/projets/<?= $pathToImagesAmericanVintage ?>/studio-haddou-dufourcq-<?= $pathToImagesAmericanVintage ?>-4.jpg" alt="<?= $altImageAmericanVintage ?>">
                    </div>
                    <div>
                        <img src="../../images/projets/<?= $pathToImagesAmericanVintage ?>/studio-haddou-dufourcq-<?= $pathToImagesAmericanVintage ?>-5.jpg" alt="<?= $altImageAmericanVintage ?>">
                    </div>
                    <div>
                        <img src="../../images/projets/<?= $pathToImagesAmericanVintage ?>/studio-haddou-dufourcq-<?= $pathToImagesAmericanVintage ?>-6.jpg" alt="<?= $altImageAmericanVintage ?>">
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
          <h2 class="descriptionTitle"><?= $nameOfTheProjectAmericanVintage ?></h2>
          <div class="descriptionContent">
            <p class="descriptionContentDate"><?= $dateOfTheProjectAmericanVintage ?></p>
            <p class="descriptionContentText"><?= $textOfTheProjectAmericanVintage1 ?></p>
            <p class="descriptionContentLocalisation"><?= $localisationOfTheProjectAmericanVintage ?></p>
            <p class="descriptionContentCredits"><?= $creditsOfTheProjectAmericanVintage ?></p>
          </div>
        </div>
    </div>
  </main>
  <script type="text/javascript" src="../../scripts/burger.js"></script>
  <script src="../../scripts/slider.js"></script>
  </body>
</html>
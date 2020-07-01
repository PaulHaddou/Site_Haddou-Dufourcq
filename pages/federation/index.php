<?php   

    if (strpos($_SERVER['REQUEST_URI'], "EN") !== false)
    {
        include '../../includes/textsEN.php';
    } else {
        include '../../includes/textsFR.php';
    }

    $title = $nameOfTheProjectFederation;
    $metaname = $textOfTheProjectFederation1;
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
                        <img src="../../images/projets/<?= $pathToImagesFederation ?>/studio-haddou-dufourcq-<?= $pathToImagesFederation ?>-1.jpg" alt="<?= $imageAltFederation ?>">
                    </div>
                    <div>
                        <img src="../../images/projets/<?= $pathToImagesFederation ?>/studio-haddou-dufourcq-<?= $pathToImagesFederation ?>-2.jpg" alt="<?= $imageAltFederation ?>">
                    </div>
                    <div>
                        <img src="../../images/projets/<?= $pathToImagesFederation ?>/studio-haddou-dufourcq-<?= $pathToImagesFederation ?>-3.jpg" alt="<?= $imageAltFederation ?>">
                    </div>
                    <div>
                        <img src="../../images/projets/<?= $pathToImagesFederation ?>/studio-haddou-dufourcq-<?= $pathToImagesFederation ?>-4.jpg" alt="<?= $imageAltFederation ?>">
                    </div>
                    <div>
                        <img src="../../images/projets/<?= $pathToImagesFederation ?>/studio-haddou-dufourcq-<?= $pathToImagesFederation ?>-5.jpg" alt="<?= $imageAltFederation ?>">
                    </div>
                    <div>
                        <img src="../../images/projets/<?= $pathToImagesFederation ?>/studio-haddou-dufourcq-<?= $pathToImagesFederation ?>-6.jpg" alt="<?= $imageAltFederation ?>">
                    </div>
                    <div>
                        <img src="../../images/projets/<?= $pathToImagesFederation ?>/studio-haddou-dufourcq-<?= $pathToImagesFederation ?>-7.jpg" alt="<?= $imageAltFederation ?>">
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
          <h2 class="descriptionTitle"><?= $nameOfTheProjectFederation ?></h2>
          <div class="descriptionContent">
            <p class="descriptionContentDate"><?= $dateOfTheProjectFederation ?></p>
            <p class="descriptionContentText"><?= $textOfTheProjectFederation1 ?></p>
            <p class="descriptionContentText"><?= $textOfTheProjectFederation2 ?></p>
            <p class="descriptionContentLocalisation"><?= $localisationOfTheProjectFederation ?></p>
            <p class="descriptionContentCredits"><?= $creditsOfTheProjectFederation ?></p>
          </div>
        </div>
    </div>
  </main>
  <script type="text/javascript" src="../../scripts/burger.js"></script>
  <script src="../../scripts/slider.js"></script>
  </body>
</html>
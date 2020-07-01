<?php

    if (strpos($_SERVER['REQUEST_URI'], "EN") !== false)
    {
        include '../../includes/textsEN.php';
    } else {
        include '../../includes/textsFR.php';
    }

    $title = $nameOfTheProjectJeanHugo;
    $metaname = $textOfTheProjectJeanHugo1;
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
                        <img src="../../images/projets/<?= $pathToImagesJeanHugo ?>/studio-haddou-dufourcq-<?= $pathToImagesJeanHugo ?>-1.jpg" alt="<?= $imageAltJeanHugo ?>">
                    </div>
                    <div>
                        <img src="../../images/projets/<?= $pathToImagesJeanHugo ?>/studio-haddou-dufourcq-<?= $pathToImagesJeanHugo ?>-2.jpg" alt="<?= $imageAltJeanHugo ?>">
                    </div>
                    <div>
                        <img src="../../images/projets/<?= $pathToImagesJeanHugo ?>/studio-haddou-dufourcq-<?= $pathToImagesJeanHugo ?>-3.jpg" alt="<?= $imageAltJeanHugo ?>">
                    </div>
                    <div>
                        <img src="../../images/projets/<?= $pathToImagesJeanHugo ?>/studio-haddou-dufourcq-<?= $pathToImagesJeanHugo ?>-4.jpg" alt="<?= $imageAltJeanHugo ?>">
                    </div>
                    <div>
                        <img src="../../images/projets/<?= $pathToImagesJeanHugo ?>/studio-haddou-dufourcq-<?= $pathToImagesJeanHugo ?>-5.jpg" alt="<?= $imageAltJeanHugo ?>">
                    </div>
                    <div>
                        <img src="../../images/projets/<?= $pathToImagesJeanHugo ?>/studio-haddou-dufourcq-<?= $pathToImagesJeanHugo ?>-6.jpg" alt="<?= $imageAltJeanHugo ?>">
                    </div>
                    <div>
                        <img src="../../images/projets/<?= $pathToImagesJeanHugo ?>/studio-haddou-dufourcq-<?= $pathToImagesJeanHugo ?>-7.jpg" alt="<?= $imageAltJeanHugo ?>">
                    </div>
                    <div>
                        <img src="../../images/projets/<?= $pathToImagesJeanHugo ?>/studio-haddou-dufourcq-<?= $pathToImagesJeanHugo ?>-8.jpg" alt="<?= $imageAltJeanHugo ?>">
                    </div>
                    <div>
                        <img src="../../images/projets/<?= $pathToImagesJeanHugo ?>/studio-haddou-dufourcq-<?= $pathToImagesJeanHugo ?>-9.jpg" alt="<?= $imageAltJeanHugo ?>">
                    </div>
                    <div>
                        <img src="../../images/projets/<?= $pathToImagesJeanHugo ?>/studio-haddou-dufourcq-<?= $pathToImagesJeanHugo ?>-10.jpg" alt="<?= $imageAltJeanHugo ?>">
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
          <h2 class="descriptionTitle"><?= $nameOfTheProjectJeanHugo ?></h2>
          <div class="descriptionContent">
            <p class="descriptionContentDate"><?= $dateOfTheProjectJeanHugo ?></p>
            <p class="descriptionContentText"><?= $textOfTheProjectJeanHugo1 ?></p>
            <p class="descriptionContentLocalisation"><?= $localisationOfTheProjectJeanHugo ?></p>
            <p class="descriptionContentCredits"><?= $creditsOfTheProjectJeanHugo ?></p>
          </div>
        </div>
    </div>
  </main>
  <script type="text/javascript" src="../../scripts/burger.js"></script>
  <script src="../../scripts/slider.js"></script>
  </body>
</html>
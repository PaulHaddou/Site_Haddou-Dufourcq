<?php
    $pathToImages = 'elise_djo_bourgeois';
    $nameOfTheProject = 'élise djo bourgeois';
    $dateOfTheProject = '2018';
    $textOfTheProject = 'Scénographie de l’exposition consacrée à la designer textile Elise Djo-Bourgeois.';
    $localisationOfTheProject = 'Villa Noailles, Hyères.';
    $creditsOfTheProject = 'Emile Kirsch.';


    $title = 'élise djo-bourgeois';
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
                    <div>
                        <img src="../../images/projets/<?= $pathToImages ?>/studio-haddou-dufourcq-<?= $pathToImages ?>-5.jpg" alt="">
                    </div>
                    <div>
                        <img src="../../images/projets/<?= $pathToImages ?>/studio-haddou-dufourcq-<?= $pathToImages ?>-6.jpg" alt="">
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
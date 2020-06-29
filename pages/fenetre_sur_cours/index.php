<?php
    $pathToImages = 'fenetre_sur_cours';
    $nameOfTheProject = 'fenêtre sur cours';
    $dateOfTheProject = '2019';
    $textOfTheProject = 'Avec le soutien précieux de: Villa Noailles, Pierre Frey, Codimat, Gubi, Galerie Desprez Breheret, Atelier de la Mousse, Atelier Lorenzi, Centre archéologique du Var, Degrés 960, FRAC PACA, Capag.';
    $localisationOfTheProject = 'Design Parade Toulon, France.';
    $creditsOfTheProject = 'Luc Bertrand, Julien Oppenheim.';


    $title = 'fenêtre sur cours';
    $metaname = 'Design Parade, Toulon 2019.';
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
                    <div>
                        <img src="../../images/projets/<?= $pathToImages ?>/studio-haddou-dufourcq-<?= $pathToImages ?>-7.jpg" alt="">
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
          <h2 class="descriptionTitle"><?= $nameOfTheProject?></h2>
          <div class="descriptionContent">
            <p class="descriptionContentDate"><?= $dateOfTheProject ?></p>
            <p class="descriptionContentText"><?= $textOfTheProject ?></p>
            <p class="descriptionContentLocalisation"><?= $localisationOfTheProject ?></p>
            <p class="descriptionContentCredits"> <?= $creditsOfTheProject ?></p>
          </div>
        </div>
    </div>
  </main>
  <script type="text/javascript" src="../../scripts/burger.js"></script>
  <script src="../../scripts/slider.js"></script>
  </body>
</html>
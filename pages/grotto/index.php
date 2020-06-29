<?php
    $pathToImages = 'grotto';
    $nameOfTheProject = 'grotto';
    $dateOfTheProject = '2018';
    $textOfTheProject = 'Grotto est un petit salon de lecture imaginé pour le concours Design Parade Toulon organisé par la Villa Noailles. Un endroit à part, où lire, écrire réfléchir à l\'abri du tumulte du monde extérieur. Une bibliothèque faite de niches creusées à même le mur fait écho à une architecture méditerranéenne séculaire.';
    $localisationOfTheProject = 'Design Parade Toulon, France.';
    $creditsOfTheProject = 'Luc Bertrand, Kim Haddou.';


    $title = $nameOfTheProject;
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
            <p class="descriptionContentText">Projet récompensé par le Grand Prix Van Cleef & Arpels, Design Parade Toulon 2018.</p>
            <p class="descriptionContentText">Avec le soutien précieux de: Galerie Desprez Breheret, Mosaic del Sur, Céramiques du Beaujolais, Pierre Frey, Atelier Lorenzi, Wilo & Grove, Debeaulieu, Poterie Ravel, Make’s concept.</p>
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
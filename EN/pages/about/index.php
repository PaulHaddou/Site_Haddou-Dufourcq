<?php

    if (strpos($_SERVER['REQUEST_URI'], "EN") !== false)
    {
        include '../../../includes/textsEN.php';
    } else {
        include '../../../includes/textsFR.php';
    }

    $title = $aboutTitle; 
    $metaname = $aboutMetaName;
    $css = '../../../styles/about/about.min.css';
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
        <div class="aboutDescription">
          <p class="aboutDescriptionTexts">
            <?= $aboutParagraph1 ?>
          </p>
          <p class="aboutDescriptionTexts aboutDescriptionEN">
            <?= $aboutParagraph2 ?>
          </p>
          <p class="aboutDescriptionTexts">
            <?= $aboutParagraph3 ?>
          </p>
          <p class="aboutDescriptionTexts">
            <?= $aboutParagraph4 ?>
          </p>
          <p class="aboutDescriptionTexts">
            <?= $aboutCredits ?>
          </p>
        </div>
        <img class="aboutImg" class="image" src="../../../images/a_propos/studio-haddou-dufourcq-kim-haddou-florent-dufourcq.jpg" alt="<?= $aboutPictureAlt ?>">
      </div>
    </main>
      <script type="text/javascript" src="../../../scripts/burger.js"></script>
  </body>
</html>

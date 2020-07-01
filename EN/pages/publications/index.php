<?php

    if (strpos($_SERVER['REQUEST_URI'], "EN") !== false)
    {
        include '../../../includes/textsEN.php';
    } else {
        include '../../../includes/textsFR.php';
    }

    $title = $publicationsTitle;
    $metaname = $publicationsMetaName;
    $css = 'styles/publications.css';
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
        <div class="article">
        <?php
          $length = count($publicationsArray);
          for ($i = 0; $i < $length; $i++) 
          {
            ?>
              <p><a href="<?= $publicationsArray[$i][0] ?>"> <?= $publicationsArray[$i][1] ?> <i><?= $publicationsArray[$i][2] ?></i> </a></p>
            <?php
          }
        ?>

        </div>
      </div>
    </main>
    <script type="text/javascript" src="../../../scripts/burger.js"></script>
  </body>
</html>
		
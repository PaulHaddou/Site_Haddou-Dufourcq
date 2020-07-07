<?php

    if (strpos($_SERVER['REQUEST_URI'], "EN") !== false)
    {
        include '../../../includes/textsEN.php';
    } else {
        include '../../../includes/textsFR.php';
    }

    $title = $page404Title;
    $metaname = $page404MetaName;
    $css = '../../../styles/404/404.min.css';
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
          <p class="errorText">
            <?= $page404Message ?>
          </p>
          <a class="linkBackToSite" href="../../"> <?= $page404BackHomeLink?></a>
      </div>
    </main>
      <script type="text/javascript" src="../../../scripts/burger.js"></script>
  </body>
</html>

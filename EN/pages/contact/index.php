<?php

    if (strpos($_SERVER['REQUEST_URI'], "EN") !== false)
    {
        include '../../../includes/textsEN.php';
    } else {
        include '../../../includes/textsFR.php';
    }

    $title = $contactTitle;
    $metaname = $contactMetaName;
    $css = '../../../styles/contact/contact.min.css';
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
        <div class="content">
          <div class="contentContact">
            <p class="contentContactTitle"><?= $contactMail ?></p>
            <a class="contentContactMail" href="mailto:studio@haddou-dufourcq.com">studio@haddou-dufourcq.com</a>
          </div>
          <div class="contentInstagram">
            <p class="contentInstagramTitle"><?= $contactInsta ?></p>
            <a class="contentInstagramLink" href="https://www.instagram.com/studio_haddou_dufourcq/" class="insta">instagram</a>
          </div>
        </div>
      </div>
    </main>
    <script type="text/javascript" src="../../../scripts/burger.js"></script>
  </body>
</html>
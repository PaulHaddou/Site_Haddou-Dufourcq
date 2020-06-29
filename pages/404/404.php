<?php
    $title = 'Erreur 404';
    $metaname = 'Error 404.';
    $css = '../../styles/404/404.min.css';
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
          <p class="errorText">
            malheureusement la page que vous recherchez est introuvable.
          </p>
          <a class="linkBackToSite" href="../../">retour sur le site</a>
      </div>
    </main>
      <script type="text/javascript" src="../../scripts/burger.js"></script>
  </body>
</html>

<?php
    $title = 'A propos';
    $metaname = 'Selectionnés en 2018 par la Villa Noailles pour le concours Design Parade Toulon, ils reçoivent le Grand Prix du Jury Van Cleef and Arpels pour "Grotto", une petite pièce d\'inspiration méditérranéenne exposée tout l\'été dans l\'ancien évêché de la ville.';
    $css = '../../styles/about/about.min.css';
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
        <div class="aboutDescription">
          <p class="aboutDescriptionTexts">
            Diplomés de l'école Camondo en 2015 avec les félicitations du jury, Kim Haddou et Florent Dufourcq vivent et travaillent à Paris.
          </p>
          <p class="aboutDescriptionTexts">
            Sélectionnés en 2018 par la Villa Noailles pour le concours Design Parade Toulon, ils reçoivent le Grand Prix du Jury Van Cleef and Arpels pour leur projet "Grotto", une petite pièce d'inspiration méditerranéenne.
          </p>
          <p class="aboutDescriptionTexts">
            Ils conçoivent des espaces publics et privés, scénographies d'expositions, installations, ainsi que du mobilier.
          </p>
          <p class="aboutDescriptionTexts">
            Le rêve et l'esprit des lieux comme points de départ à chacun de leurs projets, leur travail laisse une grande place à l'imaginaire et au pouvoir de l'évocation.
          </p>
          <p class="aboutDescriptionTexts">
            Photos: Valentin Le Cron.
          </p>
        </div>
        <img class="aboutImg" class="image" src="../../images/a_propos/studio-haddou-dufourcq-kim-haddou-florent-dufourcq.jpg" alt="image de Kim Haddou et Florent Dufourcq">
      </div>
    </main>
      <script type="text/javascript" src="../../scripts/burger.js"></script>
  </body>
</html>

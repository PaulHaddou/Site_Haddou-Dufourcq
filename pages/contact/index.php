<?php
    $title = 'Contact';
    $metaname = '';
    $css = 'styles/contact.css';
    $cssHeader = '../../styles/header.css';
    $fonts = '../../fonts/MyFontsWebfontsKit.css';
    include '../../head.php';
?>
  <body>
  <?php
    $hrefProjects = '../../index.php';
    $hrefAbout = '../about/';
    $hrefPublications = '../publications/';
    $hrefContact = '../contact/';
    include '../../header.php';
  ?>
    <main>
      <div class="container">
        <img src="../../images/contact/kim-haddou-florent-dufourcq-clouds.jpg" alt="fond contact" class="background">
        <div class="text">
          <div class="contact">
            <p>contact us</p>
            <a href="mailto:studio@haddou-dufourcq.com">studio@haddou-dufourcq.com</a>
          </div>
          <div class="follow">
            <p>follow us</p>
            <a href="https://www.instagram.com/studio_haddou_dufourcq/" class="insta">instagram</a>
          </div>
        </div>
      </div>
    </main>
    <script type="text/javascript" src="../../scripts/burger.js"></script>
  </body>
</html>
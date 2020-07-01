<?php
    $title = 'Kim Haddou & Florent Dufourcq';
    $metaname = 'Interior design studio based in Paris, France - Grand Prix Van Cleef and Arpels - Design Parade Toulon 2018 - Villa Noailles';
    $css = '../styles/projects/projects.min.css';
    $cssNavbar = '../styles/navbar/navbar.min.css';
    $cssNavbarMobile = '../styles/navbarMobile/navbarMobile.min.css';
    $fonts = '../fonts/MyFontsWebfontsKit.css';
    $slider = '../styles/slider/slider.min.css';
    include '../head.php';
?>
    <body>
    <!-------------- Navbars---------------->
    <?php
      $hrefProjects = '#';
      $hrefAbout = 'pages/about/';
      $hrefPublications = 'pages/publications/';
      $hrefContact = 'pages/contact/';

    if (strpos($_SERVER['REQUEST_URI'], "EN") !== false)
    {
        include '../includes/textsEN.php';
    } else {
        include '../includes/textsFR.php';
    }
    include '../navbar.php';
    include '../navbarMobile.php';
    ?>
    <!---------- CONTAINER --------->
        <main>
            <div class="container">
                <div class="grotto">
                    <img class="grottoImage" src="../images/miniatures/studio-haddou-dufourcq-grotto.jpg" alt="Photo illustrant le projet grotto réalisé pour la design parade 2018">
                    <a class="grottoTitles" href="pages/grotto/">
                        <p class="grottoTitlesMain">grotto</p>
                        <p class="grottoTitlesSubtitles">design parade 2018</p>
                    </a>
                </div>
                <div class="americanVintage">
                    <img class="americanVintageImage" src="../images/miniatures/studio-haddou-dufourcq-american_vintage.jpg" alt="Photo illustrant le projet american vintage">
                    <a class="americanVintageTitles" href="pages/american_vintage/">
                        <p class="americanVintageTitlesMain">american vintage</p>
                        <p class="americanVintageTitlesSubtitles">coalescence</p>
                    </a>
                </div>
                <div class="eliseDjoBourjoie">
                    <img class="eliseDjoBourjoieImage" src="../images/miniatures/studio-haddou-dufourcq-elise_djo_bourgeois.jpg" alt="Photo illustrant le projet élise djo bourgeois réalisé pour la villa noailles">
                    <a class="eliseDjoBourjoieTitles" href="pages/elise-djo_bourgeois/">
                        <p class="eliseDjoBourjoieTitlesMain">élise djo-bourgeois</p>
                        <p class="eliseDjoBourjoieTitlesSubtitles">villa noailles</p>
                    </a>
                </div>
                <div class="fenetre">
                    <img class="fenetreImage" src="../images/miniatures/studio-haddou-dufourcq-fenetre_sur_cours.jpg" alt="Photo illustrant le projet fenêtres sur cours réalisé pour la design parade 2019">
                    <a class="fenetreTitles" href="pages/fenetre_sur_cours/">
                        <p class="fenetreTitlesMain">fenêtres sur cours</p>
                        <p class="fenetreTitlesSubtitles">design parade 2019</p>
                    </a>
                </div>
                <div class="federation">
                    <img class="federationImage" src="../images/miniatures/studio-haddou-dufourcq-federation.jpg" alt="Photo illustrant le projet de la fédération de la haute couture exposé au palais de tokyo">
                    <a class="federationTitles" href="pages/federation/">
                        <p class="federationTitlesMain">fédération de la haute couture</p>
                        <p class="federationTitlesSubtitles">palais de tokyo</p>
                    </a>
                </div>
                <div class="haos">
                    <img class="haosImage" src="../images/miniatures/studio-haddou-dufourcq-haos.jpg" alt="Photo illustrant le projet HAOS">
                    <a class="haosTitles" href="pages/haos/">
                        <p class="haosTitlesMain">haos</p>
                        <p class="haosTitlesSubtitles">collectible</p>
                    </a>
                </div>
                <div class="jeanHugo">
                    <img class="jeanHugoImage" src="../images/miniatures/studio-haddou-dufourcq-jean_hugo.jpg" alt="Photo illustrant le projet jean hugo pour la villa noailles">
                    <a class="jeanHugoTitles" href="pages/jean_hugo/">
                        <p class="jeanHugoTitlesMain">jean hugo</p>
                        <p class="jeanHugoTitlesSubtitles">villa noailles</p>
                    </a>
                </div>
                <div class="hyeres34">
                    <img class="hyeres34Image" src="../images/miniatures/studio-haddou-dufourcq-hyeres34.jpg" alt="Photo illustrant le projet hyères 34 réalisé pour le palais royal">
                    <a class="hyeres34Titles" href="pages/hyeres34/">
                        <p class="hyeres34TitlesMain">hyères 34</p>
                        <p class="hyeres34TitlesMain">palais royal</p>
                    </a>
                </div>
            </div>
        </main>
        <script type="text/javascript" src="../scripts/burger.js"></script>
    </body>
</html>
		
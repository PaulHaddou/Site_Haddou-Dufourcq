<?php
    $title = 'Kim Haddou & Florent Dufourcq';
    $metaname = 'Studio de design d\'intérieur basé à Paris, dirigé par Kim Haddou et Florent Dufourcq - Grand Prix Van Cleef and Arpels - Design Parade Toulon 2018 - Villa Noailles';
    $css = 'styles/projects/projects.min.css';
    $cssNavbar = 'styles/navbar/navbar.min.css';
    $cssNavbarMobile = 'styles/navbarMobile/navbarMobile.min.css';
    $fonts = 'fonts/MyFontsWebfontsKit.css';
    include 'head.php';
?>
    <body>
    <!-------------- Navbars---------------->
    <?php
      $hrefProjects = 'https://www.haddou-dufourcq.com';
      $hrefAbout = 'pages/about/';
      $hrefPublications = 'pages/publications/';
      $hrefContact = 'pages/contact/';
      include 'navbar.php';
      include 'navbarMobile.php';
    ?>
    <!---------- CONTAINER --------->
        <main>
            <div class="container">
                <div class="grotto">
                    <img class="grottoImage" src="images/miniatures/grotto-1.JPG" alt="">
                    <a class="grottoTitles" href="pages/grotto/">
                        <p class="grottoTitlesMain">grotto</p>
                        <p class="grottoTitlesSubtitles">design parade 2018</p>
                    </a>
                </div>
                <div class="americanVintage">
                    <img class="americanVintageImage" src="images/miniatures/Sarah_Mei_Herman-Studio_Haddou_Dufourcq-American_Vintage-Luc_Bertrand1.jpg" alt="">
                    <a class="americanVintageTitles" href="pages/american_vintage/">
                        <p class="americanVintageTitlesMain">american vintage</p>
                        <p class="americanVintageTitlesSubtitles">coalescence</p>
                    </a>
                </div>
                <div class="eliseDjoBourjoie">
                    <img class="eliseDjoBourjoieImage" src="images/miniatures/kim-haddou-florent-dufourcq-elise-djo-bourgeois-emile-kirsch-1.jpg" alt="">
                    <a class="eliseDjoBourjoieTitles" href="pages/elise-djo_bourgeois/">
                        <p class="eliseDjoBourjoieTitlesMain">élise djo-bourgeois</p>
                        <p class="eliseDjoBourjoieTitlesSubtitles">villa noailles</p>
                    </a>
                </div>
                <div class="fenetre">
                    <img class="fenetreImage" src="images/miniatures/fenetre-sur-cours.jpg" alt="">
                    <a class="fenetreTitles" href="pages/fenetre_sur_cours/">
                        <p class="fenetreTitlesMain">fenêtres sur cours</p>
                        <p class="fenetreTitlesSubtitles">design parade 2019</p>
                    </a>
                </div>
                <div class="federation">
                    <img class="federationImage" src="images/miniatures/studio_haddou_dufourcq_palais_de_tokyo_1.jpg" alt="">
                    <a class="federationTitles" href="pages/federation/">
                        <p class="federationTitlesMain">fédération de la haute couture</p>
                        <p class="federationTitlesSubtitles">palais de tokyo</p>
                    </a>
                </div>
                <div class="hoas">
                    <img class="hoasImage" src="images/miniatures/studio-haddou-dufourcq-HOAS-Collectible-evenbeeld-1.jpg" alt="">
                    <a class="hoasTitles" href="pages/hoas/">
                        <p class="hoasTitlesMain">hoas</p>
                        <p class="hoasTitlesSubtitles">collectible</p>
                    </a>
                </div>
                <div class="jeanHugo">
                    <img class="jeanHugoImage" src="images/miniatures/studio-haddou-dufourcq-jean_hugo-1.jpg" alt="">
                    <a class="jeanHugoTitles" href="pages/jeanHugo/">
                        <p class="jeanHugoTitlesMain">jean hugo</p>
                        <p class="jeanHugoTitlesSubtitles">villa noailles</p>
                    </a>
                </div>
                <div class="hyeres34">
                    <img class="hyeres34Image" src="images/miniatures/Villa_Jury-Ministere_de_la_Culture_1.jpg" alt="">
                    <a class="hyeres34Titles" href="pages/hyeres_34/">
                        <p class="hyeres34TitlesMain">hyères 34</p>
                        <p class="hyeres34TitlesMain">palais royal</p>
                    </a>
                </div>
            </div>
        </main>
        <script type="text/javascript" src="scripts/burger.js"></script>
    </body>
</html>
		
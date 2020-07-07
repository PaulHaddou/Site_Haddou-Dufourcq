<?php
///Navbar

$projects = 'projects';
$about = 'about';
$publications = 'press';
$contact = 'contact';
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$url = parse_url($actual_link);
$switchLanguage = str_replace(array("EN/","press"),array("", "publications"), $url['path']);



$language = '<a href="'.$switchLanguage.'"class="languageNotChoosen">fr</a><p>/</p><a href="#" class="languageChoosen">en</a>';


// About

$aboutTitle = 'about';
$aboutMetaName = 'Selected in 2018 by the Villa Noailles for the Design Parade Toulon competition, they were awarded the Grand Prix du Jury Van Cleef and Arpels for "Grotto", a small piece of Mediterranean inspiration exhibited all summer in the city\'s former bishopric.';

$aboutParagraph1 = 'Kim Haddou and Florent Dufourcq both graduated in interior design from Camondo School in 2015.';
$aboutParagraph2 = 'They live and work in Paris.';
$aboutParagraph3 = 'They conceive public and private spaces, scenographies and they design bespoke furniture for residential projects.';
$aboutParagraph4 = 'They were awarded in 2018 by French Institution Villa Noailles for their « Grotto » project during Design Parade Toulon festival and received the « Grand Prix Van Cleef & Arpels » from a jury presided by Pierre Yovanovitch.';
$aboutCredits = '© Valentin Le Cron.';

$aboutPictureAlt = 'picture of Kim Haddou and Florent Dufourcq';


// Contact

$contactTitle = 'contact';
$contactMetaName = 'Different ways to contact the Haddou / Dufourcq studio.';

$contactMail = 'contact us';
$contactInsta = 'follow us';


// Publications

$publicationsTitle = 'press';
$publicationsMetaName = 'Find the different press publications about Studio Haddou / Dufourcq\'s projects.';



$urlPath = "https:/";
$pdfPath = "../../../pdf";

$publicationsArray = array (

    //array("link","name","date"),

    array("$pdfPath/AD100-Mai-2020.pdf","AD 100 -","may 2020"),
    array("$pdfPath/ELLE-DECORATION-Mai-2020.pdf","ELLE DECORATION -","may 2020"),
    array("$pdfPath/ELLE-DECORATION-Sweden-Mai-2020.pdf","ELLE DECORATION Sweden -","may 2020"),
    array("$pdfPath/95_homestyle.pdf","HOMESTYLE New Zealand -","march 2020"),
    array("$pdfPath/INTERIOR+DESIGN-Russia-février-2020.pdf","INTERIOR + DESIGN Russia -","february 2020"),
    array("$urlPath/www.marieclaire.fr/maison/pourquoi-les-murs-a-la-chaux-sont-partout,1339330.asp","MARIE-CLAIRE MAISON -","february 2020"),
    array("$urlPath/www.domino.com/content/recessed-wall-shelves/","DOMINO -","december 2019"),
    array("$pdfPath/ELLE DECORATION Design Parade Toulon Novembre 2019.pdf","ELLE DECORATION -","november 2019"),
    array("$pdfPath/IDEAT-American_Vintage.pdf","IDEAT -","september 2019"),
    array("$pdfPath/MILK_DECORATION-Design_Parade.pdf","MILK DECORATION -","september 2019"),
    array("$urlPath/www.yellowtrace.com.au/the-design-parade-festival-toulon-hyeres-2019-art-design-installations/","YELLOWTRACE -","august 2019"),
    array("$urlPath/www.admagazine.fr/design/actualite-design/diaporama/design-parade-2019-nos-coups-de-coeur/58329","AD France -","july 2019"),
    array("$urlPath/www.sightunseen.com/2019/07/the-2019-design-parade-festival-is-a-total-visual-overload-in-the-best-possible-way/ ","SIGHT UNSEEN -","july 2019"),
    array("$urlPath/www.elledecor.com/es/decoracion/a26760842/instagram-estanteria-obra-gotele/","ELLE DECOR Spain -","march 2019"),
    array("$pdfPath/marie-claire-Octobre-2018-kim-haddou-florent-dufourcq.pdf","MARIE-CLAIRE MAISON -","october 2018"),
    array("$urlPath/www.architecturaldigest.com/story/ultimate-built-in-bookshelf-diy","ARCHITECTURAL DIGEST -","october 2018"),
    array("$pdfPath/MILK Decoration Design Parade Toulon Septembre 2018.pdf","MILK DECORATION -","september 2018"),
    array("$urlPath/www.ad-magazin.de/article/design-parade-toulon-haddou-dufourcq","AD Germany -","september 2018"),
    array("$pdfPath/IDEAT Design Parade Toulon Septembre 2018.pdf","IDEAT -","september 2018"),
    array("$pdfPath/ELLE-DECORATION-septembre-2018-kim-haddou-florent-dufourcq.pdf","ELLE DECORATION -","september 2018"),
    array("$pdfPath/IDEAT Design Parade Toulon Juillet-Aout 2018.pdf","IDEAT -","july 2018"),
    array("$pdfPath/grazia-Juillet-2018-kim-haddou-florent-dufourcq.pdf","GRAZIA -","july 2018"),
    array("$urlPath/www.admagazine.fr/design/actualite-design/diaporama/le-meilleur-de-la-design-parade-2018/51808#le-meilleur-de-la-design-parade-2018_image3","AD France -","july 2018"),
    array("$urlPath/mobile.lemonde.fr/m-design-deco/article/2018/07/05/design-parade-toulon-sur-les-traces-de-la-mysterieuse-mlle-oops_5326504_4497702.html","LE MONDE -","july 2018"),
    array("$urlPath/www.telerama.fr/scenes/design-parade-toulon-eloge-de-lhedonisme,n5713606.php","TELERAMA -","july 2018"),
    array("$urlPath/www.sightunseen.com/2018/07/design-parade-villa-noailles-philippe-malouin-pierre-yovanovitch/","SIGHT UNSEEN -","july 2018"),
  );


// 404

$page404Title = '404';
$page404MetaName = 'Error 404 - if you get here, the link is currently unavailable or incorrect.';

$page404Message = 'unfortunately the page you are looking for cannot be found.';
$page404BackHomeLink = 'back to website';




// Projects

//// Grotto

$pathToImagesGrotto = 'grotto';
$imageAltGrotto = 'Picture showing the Grotto project';

$nameOfTheProjectGrotto = 'grotto';
$dateOfTheProjectGrotto = '2018';

$textOfTheProjectGrotto1 = 'Scenography - Design Parade Festival, Villa Noailles.';
$textOfTheProjectGrotto2 = 'Project awarded by the Grand Prix Van Cleef & Arpels.';
$textOfTheProjectGrotto3 = 'Many thanks to: Villa Noailles, Galerie Desprez Breheret, Mosaic del Sur, Céramiques du Beaujolais, Pierre Frey, Atelier Lorenzi, Wilo & Grove, Debeaulieu, Poterie Ravel, Make’s concept.';
$localisationOfTheProjectGrotto = 'Toulon, France.';

$creditsOfTheProjectGrotto = '© Luc Bertrand, Kim Haddou.';


//// American Vintage

$pathToImagesAmericanVintage = 'american_vintage';
$imageAltAmericanVintage = 'Picture showing the American Vintage project';

$nameOfTheProjectAmericanVintage = 'american vintage';
$dateOfTheProjectAmericanVintage = '2018';

$textOfTheProjectAmericanVintage1 = 'Scenography for the exhibition of photographer Sarah Mei Herman. ';
$textOfTheProjectAmericanVintage2 = 'American Vintage store, rue Vielle du Temple.';
$localisationOfTheProjectAmericanVintage = 'Paris, France.';


$creditsOfTheProjectAmericanVintage = '© Luc Bertrand';

//// Fenêtres sur cours

$pathToImagesFenetreSurCours = 'fenetre_sur_cours';
$imageAltFenetreSurCours = 'Picture showing the Fenetre sur Cours project';

$nameOfTheProjectFenetreSurCours = 'fenêtres sur cours';
$dateOfTheProjectFenetreSurCours = '2019';

$textOfTheProjectFenetreSurCours1 = 'Scenography - Design Parade Festival, Villa Noailles';
$textOfTheProjectFenetreSurCours2 = 'Many thanks to: Villa Noailles, Pierre Frey, Codimat, Gubi, Galerie Desprez Breheret, Atelier de la mousse, Atelier Lorenzi, Centre archéologique du Var, Degrés 960, FRAC PACA, Capag.';
$localisationOfTheProjectFenetreSurCours = 'Toulon, France';

$creditsOfTheProjectFenetreSurCours = '© Luc Bertrand, Julien Oppenheim.';

//// elise djo-bourgeois

$pathToImagesEliseDjoBourgeois = 'elise_djo_bourgeois';
$imageAltEliseDjoBourgeois = 'Picture showing the project for Elise Djo-Bourgeois';

$nameOfTheProjectEliseDjoBourgeois = 'élise djo-bourgeois';
$dateOfTheProjectEliseDjoBourgeois = '2018';

$textOfTheProjectEliseDjoBourgeois1 = 'Scenography for the exhibition "Elise Djo-Bourgeois", Villa Noailles.';
$localisationOfTheProjectEliseDjoBourgeois = 'Hyères, France';

$creditsOfTheProjectEliseDjoBourgeois = '© Emile Kirsch.';

//// federation

$pathToImagesFederation = 'federation';
$imageAltFederation = 'Picture showing the project for the "fédération de la haute couture"';

$nameOfTheProjectFederation = 'fédération de la haute couture';
$dateOfTheProjectFederation = '2020';

$textOfTheProjectFederation1 = 'Scenography for french «  Fédération de la Haute Couture et de la Mode »  during menswear fashion week.';
$textOfTheProjectFederation2 = 'Flowers: Debeaulieu.';
$localisationOfTheProjectFederation = 'Palais de Tokyo, Paris, France.';

$creditsOfTheProjectFederation = '© Valentin Le Cron.';

//// Haos

$pathToImagesHaos = 'haos';
$imageAltHaos = 'Picture showing the haos project';

$nameOfTheProjectHaos = 'haos';
$dateOfTheProjectHaos = '2020';

$textOfTheProjectHaos1 = 'Set design for french furniture brand HAOS at Collectible fair.';
$localisationOfTheProjectHaos = 'Brussels, Belgium.';

$creditsOfTheProjectHaos = '© Evenbeeld.';

//// Hyeres 34

$pathToImagesHyeres34 = 'hyeres34';
$imageAltHyeres34 = 'Picture showing the Hyères 34 project';

$nameOfTheProjectHyeres34 = 'hyères 34';
$dateOfTheProjectHyeres34 = '2019';

$textOfTheProjectHyeres341 = 'Set design for Hyères 34th Festival launch party, Villa Noailles.';
$localisationOfTheProjectHyeres34 = 'Ministère de la Culture, Paris, France.';

$creditsOfTheProjectHyeres34 = '© Luc Bertrand.';


//// Jean Hugo

$pathToImagesJeanHugo = 'jean_hugo';
$imageAltJeanHugo = 'Picture showing the project for Jean Hugo';

$nameOfTheProjectJeanHugo = 'jean hugo';
$dateOfTheProjectJeanHugo = '2019';

$textOfTheProjectJeanHugo1 = 'Scenography of the exhibition "Jean Hugo", Villa Noailles.';
$localisationOfTheProjectJeanHugo = 'Hyères, France';

$creditsOfTheProjectJeanHugo = '© Julie Liger, Luc Bertrand.';
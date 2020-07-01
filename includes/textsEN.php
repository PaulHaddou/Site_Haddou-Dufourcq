<?php
///Navbar

$projects = 'projects';
$about = 'about';
$publications = 'publications';
$contact = 'contact';
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$url = parse_url($actual_link);
$switchLanguage = str_replace('EN/', '', $url['path']);
$language = '<a href="'.$switchLanguage.'"class="languageNotChoosen">fr</a><p>/</p><a href="#" class="languageChoosen">en</a>';


// About

$aboutTitle = 'about';
$aboutMetaName = 'Selected in 2018 by the Villa Noailles for the Design Parade Toulon competition, they were awarded the Grand Prix du Jury Van Cleef and Arpels for "Grotto", a small piece of Mediterranean inspiration exhibited all summer in the city\'s former bishopric.';

$aboutParagraph1 = 'Diplomés de l\'école Camondo en 2015 avec les félicitations du jury, Kim Haddou et Florent Dufourcq vivent et travaillent à Paris.';
$aboutParagraph2 = 'Sélectionnés en 2018 par la Villa Noailles pour le concours Design Parade Toulon, ils reçoivent le Grand Prix du Jury Van Cleef and Arpels pour leur projet "Grotto", une petite pièce d\'inspiration méditerranéenne.';
$aboutParagraph3 = 'Ils conçoivent des espaces publics et privés, scénographies d\'expositions, installations, ainsi que du mobilier.';
$aboutParagraph4 = 'Le rêve et l\'esprit des lieux comme points de départ à chacun de leurs projets, leur travail laisse une grande place à l\'imaginaire et au pouvoir de l\'évocation.';

$aboutCredits = 'Picture: Valentin Le Cron.';

$aboutPictureAlt = 'picture of Kim Haddou and Florent Dufourcq';


// Contact

$contactTitle = 'contact';
$contactMetaName = 'Different ways to contact the Haddou / Dufourcq studio.';

$contactMail = 'contact us';
$contactInsta = 'follow us';


// Publications

$publicationsTitle = 'publications';
$publicationsMetaName = 'Find the different publications about Studio Haddou / Dufourcq\'s projects.';

$urlPath = "https:/";
$pdfPath = "../../../pdf";

$publicationsArray = array (

    //array("link","name","date"),

    array("$pdfPath/AD100-Mai-2020.pdf","AD100 -","may 2020"),
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
    array("$pdfPath/IDEAT Design Parade Toulon Juillet-Aout 2018.pdf","IDEAT -","july-august 2018"),
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
$imageAltGrotto = 'Photo montrant le projet Grotto';

$nameOfTheProjectGrotto = 'grotto';
$dateOfTheProjectGrotto = '2018';

$textOfTheProjectGrotto1 = 'Grotto est un petit salon de lecture imaginé pour le concours Design Parade Toulon organisé par la Villa Noailles. Un endroit à part, où lire, écrire réfléchir à l\'abri du tumulte du monde extérieur. Une bibliothèque faite de niches creusées à même le mur fait écho à une architecture méditerranéenne séculaire.';
$textOfTheProjectGrotto2 = 'Projet récompensé par le Grand Prix Van Cleef & Arpels, Design Parade Toulon 2018.';
$textOfTheProjectGrotto3 = 'Avec le soutien précieux de: Galerie Desprez Breheret, Mosaic del Sur, Céramiques du Beaujolais, Pierre Frey, Atelier Lorenzi, Wilo & Grove, Debeaulieu, Poterie Ravel, Make’s concept.';
$localisationOfTheProjectGrotto = 'Design Parade Toulon, France.';

$creditsOfTheProjectGrotto = 'Pictures: Luc Bertrand, Kim Haddou.';


//// American Vintage

$pathToImagesAmericanVintage = 'american_vintage';
$imageAltAmericanVintage = 'Photo montrant le projet American Vintage';

$nameOfTheProjectAmericanVintage = 'american vintage';
$dateOfTheProjectAmericanVintage = '2018';

$textOfTheProjectAmericanVintage1 = 'Scénographie pour l’exposition « coalescence » de la photographe Sarah Mei Herman.';
$localisationOfTheProjectAmericanVintage = 'Boutique American Vintage rue Vieille du Temple, Paris.';

$creditsOfTheProjectAmericanVintage = 'Pictures: Luc Bertrand';

//// Fenêtres sur cours

$pathToImagesFenetreSurCours = 'fenetre_sur_cours';
$imageAltFenetreSurCours = 'Photo montrant le projet Fenetre sur Cours';

$nameOfTheProjectFenetreSurCours = 'fenêtre sur cours';
$dateOfTheProjectFenetreSurCours = '2019';

$textOfTheProjectFenetreSurCours1 = 'Avec le soutien précieux de: Villa Noailles, Pierre Frey, Codimat, Gubi, Galerie Desprez Breheret, Atelier de la Mousse, Atelier Lorenzi, Centre archéologique du Var, Degrés 960, FRAC PACA, Capag.';
$localisationOfTheProjectFenetreSurCours = 'Design Parade Toulon, France.';

$creditsOfTheProjectFenetreSurCours = 'Pictures: Luc Bertrand, Julien Oppenheim.';

//// elise djo-bourgeois

$pathToImagesEliseDjoBourgeois = 'elise_djo_bourgeois';
$imageAltEliseDjoBourgeois = 'Photo montrant le projet pour Elise Djo-Bourgeois';

$nameOfTheProjectEliseDjoBourgeois = 'élise djo bourgeois';
$dateOfTheProjectEliseDjoBourgeois = '2018';

$textOfTheProjectEliseDjoBourgeois1 = 'Scénographie de l’exposition consacrée à la designer textile Elise Djo-Bourgeois.';
$localisationOfTheProjectEliseDjoBourgeois = 'Villa Noailles, Hyères.';

$creditsOfTheProjectEliseDjoBourgeois = 'Pictures: Emile Kirsch.';

//// federation

$pathToImagesFederation = 'federation';
$imageAltFederation = 'Photo montrant le projet pour la fédération de la haute couture';

$nameOfTheProjectFederation = 'fédération de la haute couture';
$dateOfTheProjectFederation = '2020';

$textOfTheProjectFederation1 = 'Scénographie du Showroom Sphère organisé par la Fédération de la Haute Couture et de la Mode.';
$textOfTheProjectFederation2 = 'Compositions florales: Debeaulieu';
$localisationOfTheProjectFederation = 'Palais de Tokyo, Paris.';

$creditsOfTheProjectFederation = 'Pictures: Valentin Le Cron.';

//// Haos

$pathToImagesHaos = 'haos';
$imageAltHaos = 'Photo montrant le projet haos';

$nameOfTheProjectHaos = 'haos';
$dateOfTheProjectHaos = '2020';

$textOfTheProjectHaos1 = 'Set design pour la présentation de la nouvelle collection de la marque de mobilier HAOS lors du salon Collectible à Bruxelles.';
$localisationOfTheProjectHaos = 'Bruxelles, Belgique.';

$creditsOfTheProjectHaos = 'Pictures: Evenbeeld.';

//// Hyeres 34

$pathToImagesHyeres34 = 'hyeres34';
$imageAltHyeres34 = 'Photo montrant le projet Hyères 34';

$nameOfTheProjectHyeres34 = 'hyères 34';
$dateOfTheProjectHyeres34 = '2019';

$textOfTheProjectHyeres341 = 'Scénographie pour la soirée de lancement du 34e Festival International de Mode, de Photographie et d’Accessoire de mode d’Hyères organisé par la Villa Noailles.';
$localisationOfTheProjectHyeres34 = 'Ministère de la Culture, Paris.';

$creditsOfTheProjectHyeres34 = 'Pictures: Luc Bertrand.';


//// Jean Hugo

$pathToImagesJeanHugo = 'jean_hugo';
$imageAltJeanHugo = 'Photo montrant le projet pour Jean Hugo';

$nameOfTheProjectJeanHugo = 'jean hugo';
$dateOfTheProjectJeanHugo = '2019';

$textOfTheProjectJeanHugo1 = 'Scénographie de l’exposition consacrée à l’artiste Jean Hugo.';
$localisationOfTheProjectJeanHugo = 'Villa Noailles, Hyères.';

$creditsOfTheProjectJeanHugo = 'Pictures: Julie Liger, Luc Bertrand.';
<?php
/**
 * Created by PhpStorm.
 * User: Riccardo Schula
 * Date: 3/2/18
 * Time: 8:32 PM
 */
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset='utf-8'>
		<meta name="keywords" content="Fahrrad, Rally, Ellwangen, Bistro, Fahrrad-Rally-Ellwangen, Fahrradrally-Ellwangen, Fahrradrally,">
		<meta name="discription" content="Informationen zur Fahrradrally Ellwangen. Alte Bilder und Strecken so wie die Ergebnisse der letzten Jahre sind hier auch zu Finden.">
		<meta name="author" content="Riccardo Schula">
		<link rel="icon" href="/Pictures/titel_icon/favicon.png" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="/css/style.css">
		<link rel="stylesheet" type="text/css" href="/css/hamburgers.css">
		<!-- Start Cookie Plugin -->
		<script type="text/javascript">
		  window.cookieconsent_options = {
		  message: 'Diese Webseite verwendet cookies um ihnen die bestmöglichste erfahrung zu gewährleisten',
		  dismiss: 'Ok, verstanden!',
		  learnMore: 'Lerne mehr',
		  link: 'https://www.spain.info/de/pie-pagina/cookies.html',
			target: '_blank',
		  theme: 'dark-top'
		 };
		</script>
		<script type="text/javascript" src="//s3.amazonaws.com/valao-cloud/cookie-hinweis/script-v2.js"></script>
		<!-- Ende Cookie Plugin -->
		<script type="application/ld+json">
		{
  		"@context": "https://fahrrad-rally-ellwangen.de",
  		"@type": "Fahrrad Tour",
  		"url": "https://www.fahrrad-rally-ellwangen.de",
  		"name": "Fahrradrally in Ellwangen",
  		"author": "Riccardo Schula"
			"contactPoint": {
				"@type": "ContactPoint",
				"email": "Riccardo.Schula@gmx.de"
			}
		}
		</script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script src="/script/hamburgerscript.js"></script>
		<?php if ($thisPage == 'New Pictures' || $thisPage == 'Old Pictures') echo '<script src="/script/picture_gallery.js"></script>' ?>
		<script src="/script/scroll_to_top.js"></script>
		<title>Fahrrad-Rally <?php if ($thisPage == 'Home') { echo '';}else { echo ' - '.$thisPage; } ?></title>
	</head>
	<body>

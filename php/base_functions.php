<?php

	function getHeader($actif, $entete = true, $nav = true) {
		$acActif = ($actif == "acceuil") ? 'class="onglet_actif"' : '';
		$apActif = ($actif == "apropos") ? 'class="onglet_actif"' : '';
		$prActif = ($actif == "projets") ? 'class="onglet_actif"' : '';
		$jpActif = ($actif == "jeux") ? 'class="onglet_actif"' : '';
		$ctActif = ($actif == "contact") ? 'class="onglet_actif"' : '';

		$entete = $entete ? '
			<div class="relative">
				<ul class="floatHD">
					<li>
						<button>FR</button>
					</li>
					<li>
						<button>ANG</button>
					</li>
				</ul>
			</div>
			<div>
				<h1>
					Alexys Dussier
				</h1>
				<h3>
					Engineering Student, Aspiring Game Designer
				</h3>
			</div>
		' : '';

		$sousMenuProjets = '';
		/*
						<ul class="sous_menu">
							<li>
								<a href="sss.php">Speed Skill Style</a>
							</li>
							<li>
								<a href="ir2.php">Icon Rush 2</a>
							</li>
							<li>
								<a href="sss.php">Clicker</a>
							</li>
						</ul>
		*/

		$nav = $nav ? '
			<nav>
				<ul>
					<li ' . $acActif . '>
						<a href="acceuil.php">Accueil</a>
					</li>
					<li ' . $apActif . '>
						<a href="a_propos.php">À propos</a>
					</li>
					<li ' . $prActif . '>
						<a href="projets.php">Projets</a>
						' . $sousMenuProjets . '
					</li>
					<li ' . $jpActif . '>
						<a href="jeux_preferes.php">Jeux préférés</a>
					</li>
					<li ' . $ctActif . '>
						<a href="contact.php">Contact</a>
					</li>
				</ul>
			</nav>
		' :  '';

		$script = '
		<script type="text/javascript">
$(document).ready( function () {
     $(".sous_menu").hide();    

     $("span").each( function () {
     $(this).replaceWith(\'<a href="" title="Afficher le sous-menu">\' + $(this).text() + \'<\/a>\') ;
     } ) ;

	 $(".sous_menu > a").click( function () {
	 if ($(this).next(".sous_menu:visible").length != 0) {
	     $(this).next(".sous_menu").slideUp("normal");
	 }
	 else {
	     $(".sous_menu").slideUp("normal");
	     $(this).next(".sous_menu").slideDown("normal");
	 }
	 return false;
	 });    
} ) ;
</script>
		';

		$header = '
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Alexys Dussier</title>
		<meta charset="UTF-8">
		<meta name="description" content="Page d\'Acceuil">
		<meta name="keywords" content="Alexys, Dussier, CV, jeux, game, design">
		<meta name="author" content="Alexys Dussier">
		<!--<meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
		<style type="style.css"></style>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="reset.css">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<!--<link rel="stylesheet" type="text/css" href="visionneuse.css"> -->
	</head>

	<body>
		<header>
			' . $entete . '
		</header>
			' . $nav . '
		';

		return $header;
	}

	function getFooter() {

		$footer = '
		<footer>
			<div>
				<h1>Alexys Dussier</h1>
			</div>
			<div>
				<p>
					alexys.dussier@gmail.com
				</p>
			</div>
			<div>
				<p>
					(+33) 6 51 02 42 43
				</p>
			</div>
			<div>
				<p>
					34 rue de l\'étoile, 31000 Toulouse, France
				</p>
			</div>
			<aside class="relative">
				<p class="floatBD">
					V 1.0
				<p>
			<aside>
		</footer>
	</body>
</html>
		';

		return $footer;
	}

	function getCV() {

		$cv = '
			<iframe src="images/cv/Alexys_Dussier_CV_FR.pdf" width="100%" height="100%" align="middle"></iframe>
		';

		return $cv;
	}
?>
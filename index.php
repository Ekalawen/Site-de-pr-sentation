<?php
	require_once("php/base_functions.php");

	echo getHeader("acceuil");

	echo getTextAcceuil();

	echo getFooter();

	function getText1() {
		$text = '
			Alexys Dussier
			Je suis ingénieur en formation à l\'N7 et ma plus grande passion, c\'est le Game Design !
			Créer des jeux est mon passe temps depuis que je suis tout petit ! D\'ailleurs vous en trouverez une partie dans la section "Mes Projets" !
		';

		return $text;
	}

	function getPunchLine() {
		return '
			"A good idea is something that does not solve just one problem, but rather can solve multiple problems at once.” Shigeru Miyamoto
		';
	}

	function getMeCaractériserEn3Mots () {
		return '
			Esprit Critique
			Innovant et Créatif
			Autonome
			Rigoureux

			Théoricien (des jeux)
			Programmeur (de jeux)
			Joueur (try hard)
		';
	}

	function getCoupsDeCoeurs () {
		return '
			SC2 (le jeu le plus difficile à maîtriser du monde, tout en ayant du sens)
			Ori and the blind Forest (une immersion émmotionnelle totale, un design du déplacement époustouflant)
			Magicka (un algorithme de combinaison infinie de possibilités intégré au jeu !)
			Dofus (mmo qui met l\'accent sur la connaissance plutôt que sur le temps de jeu)
			Speluncky (un des meilleurs usages de la génération aléatoire de cartes ! et j\'adore les RogueLikes !)
			SuperHexagon (Un principe simple et des moyens limités pour créer quelque chose de différent + super hard core !)
			Coockie Clicker (un jeu qui assume d\'abuser du concept de la boîte de Skinner jusqu\'au bout !)
		';
	}


	function getTextAcceuil() {
		$text = '
		<section class="theme1">
			<h1>
				Titre génial !
			</h1>
			<p>
				Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique informatique, sans que son contenu n\'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.
			</p>
			<p>
				Bonjour
			</p>
			<h1>
				Titre génial !
			</h1>
			<p>
				Bonjour
			</p>
		</section>
		<section class="theme3">
			<h1>
				Titre génial !
			</h1>
			<section class="theme2">
				<p>
				Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique informatique, sans que son contenu n\'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.
				</p>
			</section>
			<p>
				Bonjour
			</p>
			<h1>
				Titre génial !
			</h1>
			<p>
				Bonjour
			</p>
		</section>
		<section class="theme2">
			<h1>
				Titre génial !
			</h1>
			<p>
				Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique informatique, sans que son contenu n\'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.
			</p>
			<p>
				Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique informatique, sans que son contenu n\'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.
			</p>
			<p>
				Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique informatique, sans que son contenu n\'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.
			</p>
			<p>
				Bonjour
			</p>
			<h1>
				Titre génial !
			</h1>
			<p>
				Bonjour
			</p>
		</section>
		';

		return $text;	 
	}
 ?>


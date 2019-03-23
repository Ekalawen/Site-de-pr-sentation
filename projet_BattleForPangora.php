<?php
	require_once("php/base_functions.php");

	echo getHeader("");

	echo getTextProjet_BattleForPangora();

	echo getEndProjet();

	echo getFooter();

	function getTextProjet_BattleForPangora() {
		$text = '
		<section class="theme1 colonne">
				<h1>
					Battle for Pangora
				</h1>
				<h3>
					Battle for Pangora is a 3D multiplayer asymetric video game.
				</h3>
				<h3>
					4 Heros are playing together to defeat the Grand Demon Davros !
				</h3>
				<section class="theme2 inlineBlock">
					<img class="size500" src="images/BattleForPangora/neelf.png" alt="I am an image :D">
					<img class="size500" src="images/BattleForPangora/kiara.png" alt="I am an image :D">
					<img class="size500" src="images/BattleForPangora/shanyl.png" alt="I am an image :D">
					<img class="size500" src="images/BattleForPangora/aeres.png" alt="I am an image :D">
					<img class="size500" src="images/BattleForPangora/davros.png" alt="I am an image :D">
					<p>
						Here are some screeshots of the game :)<br>
						They directly come from Paragon.
					</p>
				</section>
		</section>
		<section class="theme2 colonne">
			<h1>
				Description
			</h1>
			<p class="justifyText">
				Battle for Pangora is a video game developped in 3-4 months in a team of 7 persons at the DDJV (Double Diplome en Jeu vidéos).<br>
				This game is currently under development, so I won\'t go into details here.<br>
				However you can find our Document Design and our first presentation here and here :<br>
			</p>
			<a href="images/BattleForPangora/Document_Design___VioletMurder.pdf" class="" target="_blank">
				<div>
					<section class="theme3 colonne redirection pb3">
						<h3 class="resetPaddingMargin">
							Document Design
						</h3>
					</section>
				</div>
			</a>
			<a href="images/BattleForPangora/Présentation VioletMurder.pdf" class="" target="_blank">
				<div>
					<section class="theme3 colonne redirection pb3">
						<h3 class="resetPaddingMargin">
							PowerPoint
						</h3>
					</section>
				</div>
			</a>
			<p class="justifyText">
				You can also find a link the design of the AI and a starting global UML :
			</p>
			<a href="images/BattleForPangora/VioletMurder___IA.pdf" class="" target="_blank">
				<div>
					<section class="theme3 colonne redirection pb3">
						<h3 class="resetPaddingMargin">
							Design AI
						</h3>
					</section>
				</div>
			</a>
			<a href="images/BattleForPangora/UML_general.pdf" class="" target="_blank">
				<div>
					<section class="theme3 colonne redirection pb3">
						<h3 class="resetPaddingMargin">
							First UML
						</h3>
					</section>
				</div>
			</a>
			<p class="justifyText">
				You can also find a link to the DDJV herer :
			</p>
			<a href="https://www.usherbrooke.ca/cefti/futurs-etudiants/diplome-detudes-superieures-specialisees-de-2e-cycle-en-developpement-du-jeu-video/" class="" target="_blank">
				<div>
					<section class="theme3 colonne redirection pb3">
						<h3 class="resetPaddingMargin">
							DDJV
						</h3>
					</section>
				</div>
			</a>
			<section class="theme3 inlineBlock">
				<img class="size500" src="images/BattleForPangora/environment.png" alt="I am an image :D">
				<p>
					The theme of the game :)
				</p>
			</section>
		</section>
			';

		return $text;
	}

 ?>
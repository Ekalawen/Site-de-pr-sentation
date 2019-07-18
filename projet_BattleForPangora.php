<?php
	require_once("php/base_functions.php");

	echo getHeader("", "Battle For Pangora");

	echo getTextProjet_BattleForPangora();

	echo getEndProjet();

	echo getFooter();

	function getTextProjet_BattleForPangora() {
		$text = '
		<section class="theme1 colonne">
				<h1>
					Battle for Pangora
				</h1>
				<h2 class="fontSize200">
					Battle for Pangora is a 3D multiplayer asymetric video game.
				</h2>
				<h2 class="fontSize200">
					4 Heros are playing together to defeat the Grand Demon Davros !
				</h2>
				<section class="theme2 inlineBlock">
					<img class="size500 resp_extend" src="images/BattleForPangora/images/neelf.jpg" alt="Neelf">
					<img class="size500 resp_extend" src="images/BattleForPangora/images/kiara.jpg" alt="Kiara">
					<img class="size500 resp_extend" src="images/BattleForPangora/images/shanyl.jpg" alt="Shanyl">
					<img class="size500 resp_extend" src="images/BattleForPangora/images/aeres.jpg" alt="Aeres">
					<img class="size500 resp_extend" src="images/BattleForPangora/images/davros.jpg" alt="Davros">
					<p>
						Here are some screeshots of the game :)<br>
						They directly come from Paragon.
					</p>
				</section>
		</section>
		'.
		//- présentation de l\'équipe : DDJV + agile + 4 mois à 7
		//- partie explicative du jeu
		//- conception globale : thinking of the game + UML
		//- partie IA
		//- partie gameplay : combat
		//- partie gameplay : sorts
		//- partie network
		//- tous les documents à insérer à la fin de chaque partie : GDD, rapports
		//- insérer gitlab : https://gitlab.com/RiedelAndreas/violetmurder_battleforpangora_codefinal
		'
		<section class="theme2 colonne">
			<h2>
				Presentation
			</h2>
			<p class="justifyText">
				Battle for Pangora is a video game developped in 4 months in a team of 7 persons at the DDJV (Double Diplome en Jeu vidéos).<br>
				We put all our work and energy into it as it was our last school project, the one that we had to be proud of !<br>
				<br>
			</p>
			<h3>
				Agile methods
			</h3>
			<p class="justifyText">
				We choose to use agile methods in order to implements as fast as possible the early features of the game and then iterating to 
				add the less importants features.<br>
				We had the chance to be working all together in the same space day and night so we could always discuss with each other about 
				how to implements features, bugs and things of life ! It was a real advantage as it allows us to understand clearly each other
				and to tackle socials issues in the right way.<br>
				We used to make 1 week sprints.<br>
				At the beginning of each sprint, we were evaluating tasks, how hard they were, how important they were also, and then distributing them among us.
				Then, when one of us had finished, he was going to help one of the others.<br>
				We also have a daily meeting everyday (as it\'s a daily meeting !) in order to keep in touch about what we have done since last time.<br>
				And most important, at the end of each and every sprint, we made Retrospectives in order to understand what was going well and what was going bad. And
				that in order to improve our team, to be happier and to implement faster and better !
			</p>
			<h3>
				Ours frameworks
			</h3>
			<p class="justifyText">
				To develop our game, we used several external tools.<br>
				- Unreal was our game engine<br>
				- GitLab was our version manager<br>
				- Trello was our project gestion tool<br>
				- And somes other tools were used in a smaller extent for a lot of extra works !<br>
			</p>
		</section>
		<section class="theme1 colonne">
			<h2>
				The Game
			</h2>
			<h3>
				4 versus 1
			</h3>
			<p class="justifyText">
				In Battle For Pangora you can either play one of 4 valorous Heroes, or you can decide to play the lord of the Deamons ... Davros !<br>
				Heroes must play together in order to have a chance to defeat the evil Davros. To do that they have 2 solutions, either kill Davros which is
				very complicated, either take the control of enought Control Points. The only way for Davros to win is to eradicate all four Heroes.<br>
				<br>
				Each Heroes is unique and have its own abilities. Here are what they are :<br>
				- Neelf is a warrior and a tank. She is at her best in the middle of the battle, surrounded with ennemies.<br>
				- Kiara is the assassin (my favorite one ! <3). She is at her best when she can prepare a big attack in the back of her opponents.<br>
				- Aeres is the healer of the team. She is at her best when she is grouped with others Heroes to boost their strenght.<br>
				- Shanyl is the magus. He is at his best at mid-range distance when he can unlish all his area-of-effect spells.<br>
				<br>
				- And of course Davros, which is the evil Lord. He is at his best ... everywhere and all the time ! Mouhahaha :)
			</p>
			<h3>
				Gameplay and Combat
			</h3>
			<p class="justifyText">
				All characters (Heroes and Davros, but also Artificial Intelligences) can do a lot actions, here is a short list :<br>
				- Use simple attacks and combo in melee
				- Use heavy attacks in melee that hit harder but are slower
				- Use roulade to dodge opponent\'s attacks
				- Use parade to prevent an important amounts of opponent\'s damages
				- Use the sprint mode to go faster, which disable all previous actions
				- Use the lock to always look in the direction of an opponent
				- Use from 2 to 3 spells that are customs for each characters
				- Use the map to have strategic informations about the game
			</p>
			<h3>
				Gameplay and Control Points
			</h3>
			<p class="justifyText">
				All characters (Heroes and Davros, but also Artificial Intelligences) can do a lot
			</p>
			<h3>
				Map
			</h3>
			<p class="justifyText">
			</p>
			<h3>
				Squads
			</h3>
			<p class="justifyText">
			</p>
		</section>
		<section class="theme2 colonne">
			<h2>
				Description
			</h2>
			<p class="justifyText">
				Battle for Pangora is a video game developped in 3-4 months in a team of 7 persons at the DDJV (Double Diplome en Jeu vidéos).<br>
				This game is currently under development, so I won\'t go into details here.<br>
				However you can find our Document Design and our first presentation here and here :<br>
			</p>
			<a href="images/BattleForPangora/pdf/Document_Design___VioletMurder.pdf" class="" target="_blank">
				<div>
					<section class="theme3 colonne redirection pb3">
						<h3 class="resetPaddingMargin">
							Document Design
						</h3>
					</section>
				</div>
			</a>
			<a href="images/BattleForPangora/pdf/Présentation VioletMurder.pdf" class="" target="_blank">
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
			<a href="images/BattleForPangora/pdf/VioletMurder___IA.pdf" class="" target="_blank">
				<div>
					<section class="theme3 colonne redirection pb3">
						<h3 class="resetPaddingMargin">
							Design AI
						</h3>
					</section>
				</div>
			</a>
			<a href="images/BattleForPangora/schemas/UML_general.pdf" class="" target="_blank">
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
				<img class="size500 resp_extend" src="images/BattleForPangora/images/environment.jpg" alt="Environment">
				<p>
					The theme of the game :)
				</p>
			</section>
		</section>
			';

		return $text;
	}

 ?>
<?php
	require_once("php/base_functions.php");

	echo getHeader("", "ParanoCrisis");

	echo getTextProjet_ParanoCrisis();

	echo getEndProjet();

	echo getFooter();

	function getTextProjet_ParanoCrisis() {
		$text = '
		<section class="theme1 colonne">
				<h1>
					ParanoCrisis
				</h1>
				<h2 class="fontSize200">
					ParanoCrisis is an hybrid board game using a computer device.
				</h2>
				<h2 class="fontSize200">
					It\'s a bluff and cooperation card game.
				</h2>
				<h2 class="fontSize200">
					The game is intended to be edited and publish soon, so I won\'t go to much into details here.
				</h2>
				<section class="theme2 inlineBlock">
					<img class="size500 resp_extend" src="images/ParanoCrisis/main_screen.jpg" alt="Main screen">
					<p>
						Greetings 	!
					</p>
				</section>
		</section>
		<section class="theme2 colonne">
			<h2>
				Description
			</h2>
			<h3>
				Datasheet
			</h3>
			<p class="justifyText">
				- Game title : ParanoCrisis<br>
				- Duration of the game : 15-30 minutes<br>
				- Number of players : 4-10<br>
				- Game genre : Bluff and Cooperation Card game<br>
				- Targeted audience : 7-77 years, with a preference to rational players<br>
				- Difficulty of the game : 3/10 because rules are very easy to understand<br>
				- Depth of the game : 9/10 because there is not a single obvious choice<br>
			</p>
			<h3>
				The speech
			</h3>
			<p class="justifyText">
				In ParanoCrisis, players are victims of a Psychopath who imprisoned them.<br>
				The Psychopath give them an unique glimpse of hope : if a player survive for long enough OR if he is the last alive, then it will be released.<br>
				Players will have to participate to a series of polls where they will kill each others.<br>
				<br>
				All polls represents fundamentally different gameplay mechanics. There is currently more than 25 polls.<br>
				<br>
				You start with 5 hearts, if you ever go to 0, you are dead. And trust me when I say that hearts aren\'t lost one by one ... !<br>
				<br>
				Will you try to survive together ? Or will you be rational and betray what you dare call "your friends" ?<br>
				<br>
				<mark>ParanoCrisis goal is to represent the perpetual tension that exists between empathy and rationality.</mark><br>
				<br>
				This game is largely inspired by Game Theory such as Prisoner\'s Dilemma and Nash Equilibrium.
			</p>
			<section class="theme3 inlineBlock">
				<img class="size500 resp_extend" src="images/ParanoCrisis/attention.jpg" alt="Attention">
				<p>
					We take games very seriously.<br>
					Especially when friendship can be at stake.<br>
				</p>
			</section>
		</section>
			';

		return $text;
	}

 ?>
<?php
	require_once("php/base_functions.php");

	echo getHeader("");

	echo getTextProjet_ParanoCrisis();

	echo getEndProjet();

	echo getFooter();

	function getTextProjet_ParanoCrisis() {
		$text = '
		<section class="theme1 colonne">
				<h1>
					ParanoCrisis
				</h1>
				<h3>
					ParanoCrisis is an hybrid board game using a computer device.
				</h3>
				<h3>
					It\'s a bluff and cooperation card game.
				</h3>
				<h3>
					The game is intended to be edited and publish soon, so I won\'t go to much into details here.
				</h3>
				<section class="theme2 inlineBlock">
					<img class="size500" src="images/ParanoCrisis/main_screen.png" alt="I am an image :D">
					<p>
						Greetings !
					</p>
				</section>
		</section>
		<section class="theme2 colonne">
			<h1>
				Description
			</h1>
			<h3>
				Datasheet
			</h3>
			<p class="justifyText">
				- Game title : ParanoCrisis<br>
				- Duration of the game : 15-30 minutes<br>
				- Number of players : 4-10<br>
				- Game genre : Bluff and Cooperation Card game<br>
				- Targeted audience : 7-77 years, with a preference to rational players<br>
				- Difficulty of the game : 3/10 (rules are very easy to understand)<br>
				- Depth of the game : 9/10 (there is not a single obvious choice)<br>
			</p>
			<h3>
				The speech
			</h3>
			<p class="justifyText">
				In ParanoCrisis, players are victims of a Psychopath who imprisoned them.<br>
				However, the Psychopath give them a glimpse of hope : if a player survive for long enough OR if he is the last alive, then it will be released.<br>
				Players will have to participate to a series of about 12 polls where they will kill each others. You start with 5 hearts, if you ever go to 0, you are dead.
				And trust me when I say that hearts aren\'t lost one by one ... !<br>
				All polls represents fundamentally different gameplay mechanics. There is currently more than 25 polls.<br>
				Will you try to survive together ? Or will you be rational and betray what you dare call "your friends" ?<br>
				<br>
				<mark>ParanoCrisis goal is to represent the perpetual tension that exists between empathy and rationality.</mark><br>
				<br>
				This game is largely inspired by Doubt and Judge from Yoshiki Tonogai.
			</p>
			<section class="theme3 inlineBlock">
				<img class="size500" src="images/ParanoCrisis/attention.png" alt="I am an image :D">
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
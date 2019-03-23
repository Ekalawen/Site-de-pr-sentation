<?php
	require_once("php/base_functions.php");

	echo getHeader("");

	echo getTextProjet_GJ2018();

	echo getEndProjet();

	echo getFooter();

	function getTextProjet_GJ2018() {
		$text = '
		<section class="theme1 colonne">
				<h1>
					Game Jame 2018
				</h1>
				<h3>
					This was an intern Game Jam into my internship company : ImmersiveFactory.
				</h3>
				<h3>
					The subject was "An alive world".
				</h3>
				<h3>
					You can find a link to what I have done at Immersive Factory just below :
				</h3>
				<a href="projet_ImmersiveFactory.php" class="" target="_blank">
					<div>
						<section class="theme3 colonne redirection pb3">
							<h3 class="resetPaddingMargin">
								Immersive Factory
							</h3>
						</section>
					</div>
				</a>
				<section class="theme2 inlineBlock">
					<img class="size500" src="images/GJ2018/worm.png" alt="I am an image :D">
					<img class="size500" src="images/GJ2018/VR_view.png" alt="I am an image :D">
					<p>
						Here are some screeshots of the game :)
					</p>
				</section>
		</section>
		<section class="theme2 colonne">
			<h1>
				Description
			</h1>
			<h3>
				The idea
			</h3>
			<p class="justifyText">
				The idea was rather original. We designed a worm eating the inside of an human. The human, terrified and suffering painfully, has a lot of syringes at his
				disposal. He can use them to inject himself in order to, maybe, cure himself.<br>
			</p>
			<h3>
				2 players
			</h3>
			<p class="justifyText">
				The worm is controlled by one player with classical computer inputs.<br>
				The human is sitting on a chair with Virtual Reality helmet (HTC Vive).
			</p>
		</section>
		<section class="theme1 colonne">
			<h1>
				The Worm player
			</h1>
			<h3>
				Eating muscles
			</h3>
			<p class="justifyText">
				The goal of the worm player is to eat as much muscles of the human player as possible.<br>
				The game is rather similar to Snake : we are controlling a growing worm that will grow by eating muscles and becoming longer and longer !<br>
				However, if the worm take dammages (by antybody or soothing), if the head is touched then the entire worm is destroyed, if the body is touched 
				then the worm is cut in two and the player will control them simultaneously ! There is no limit to the number of worms the worm player can control,
				be ready to spread your plague anywhere you can !<br>
			</p>
			<h3>
				Designing the body : the Map
			</h3>
			<p class="justifyText">
				To generate the project, we used the shape of a human body and we fill it with either muscles, either bones, either nothing. I used a cellular 
				automata technique to generate the map. As bones in the human body are symetricals, I only generated the left part of the body and his right 
				part is the symetric of the left one. This gives an impression of well ordered placement. However, muscles are generate for the entire body 
				and aren\'t symetricals because they are more flabby ^^
			</p>
			<section class="theme3 inlineBlock">
				<img class="size500" src="images/GJ2018/map.png" alt="I am an image :D">
				<p>
					The map ... or the body, as you wish :)
				</p>
			</section>
		</section>
		<section class="theme2 colonne">
			<h1>
				The Human player
			</h1>
			<h3>
				Understanding the pain
			</h3>
			<p class="justifyText">
				When the human player starts the game, he is in a little control booth, with 3 screens in front of him.<br>
				Here are they :<br>
			</p>
			<section class="theme3 inlineBlock">
				<img class="size500" src="images/GJ2018/first_screen.png" alt="I am an image :D">
				<img class="size500" src="images/GJ2018/second_screen.png" alt="I am an image :D">
				<img class="size500" src="images/GJ2018/third_screen.png" alt="I am an image :D">
				<p>
					The 3 screens of control.<br>
				</p>
			</section>
			<p class="justifyText">
				- the leftmost shows the life points of each parts of the body of the player.<br>
				- the middle one shows, with a beautiful diagram, how to use syringes to heal himself.<br>
				- the rightmost shows where the worm actually is inside your own body !<br>
			</p>
			<h3>
				"Cure" himself !
			</h3>
			<p class="justifyText">
				By using all these useful informations, the players will be able to use all the syringes he can found and plant them at the right places !<br>
				However each syringes is different and will have differents effects ! And the player have to read the diagram carefully to understand them !<br>
				Syringes all haves a different effect and a precise zone of predilection, if the player don\'t use the good syringe for the good part of his body,
				he will suffers from side effects and boosting the worm !<br>
				<br>
				To use syringes, the player have to grab them into the VR environment and plant them into his members to activate them ! Of course they all have 
				rigidbodys with physics attached so that they will fall on the ground !<br>
				Be ready to really live your worst nightmare !!!<br>
				(Personnally, this part of the game really make me uncomfortable ^^)
			</p>
		</section>
			';

		return $text;
	}

 ?>
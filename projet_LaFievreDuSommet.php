<?php
	require_once("php/base_functions.php");

	echo getHeader("", "La Fievre du Sommet");

	echo getTextProjet_LaFievreDuSommet();

	echo getEndProjet();

	echo getFooter();

	function getTextProjet_LaFievreDuSommet() {
		$text = '
		<section class="theme1 colonne">
				<h1>
					La Fievre du Sommet
				</h1>
				<h2 class="fontSize200">
					La Fievre du Sommet (Fever of the Summit) is the game we made during the Global Game Jam 2019 !
				</h2>
				<h2 class="fontSize200">
					It\'s a plaformer game made in 2 days.
				</h2>
				<section class="theme2 inlineBlock">
					<img class="size500 resp_extend" src="images/LaFievreDuSommet/icon.png" alt="I am an image :D">
					<p>
						Here is what the game look like :)
					</p>
				</section>
				<p>
					You can find us here :
				</p>
				<a href="https://globalgamejam.org/2019/games/la-fi%C3%A8vre-du-sommet" class="" target="_blank">
					<div>
						<section class="theme3 colonne redirection pb3">
							<h3 class="resetPaddingMargin">
								GGJ 2019
							</h3>
						</section>
					</div>
				</a>
		</section>
		<section class="theme2 colonne">
			<h2>
				The subject of the Jam
			</h2>
			<p class="justifyText">
				The subject was "What Home means to you" !<br>
				We were rather ambitious, but after some hours of open and active debate in a team of 7, we came to the following idea : our main character was
				an hermit living at the top of a mountain, but one day a violent wind made him fall to the very bottom of the moutain ! In order to go back to Home
				he will collect wood and stone to build constructions that will allow him to climb the mountain back ! However, when he finally reach the summit, he
				realises that all the constructions he has done to reach his forgotten house was in fact his real home as it\'w where the player lived for the
				entire game :)<br>
			</p>
		</section>
		<section class="theme1 colonne">
			<h2>
				The Gameplay
			</h2>
			<h3>
				Movements
			</h3>
			<p class="justifyText">
				We wanted that almost all movements of the character was enabled by constructions, as we really wanted that the player has the feeling of building his
				own home. To achieve that goal we kept the movements of the character minimalists : left, right and a little jump.<br>
				<br>
				However, it\'s in the constructions that all the movement potential come from !<br>
				<br>
				What\'s more, the player can also interact with his environment. We wanted to keep that as simple as possible, so we can do all actions with only the E key :)
			</p>
			<h3>
				Constructions
			</h3>
			<p class="justifyText">
				We wanted to have a lot of constructions to give the feeling of the player to be able to customize his house. However, for level design reasons, we didn\'t
				allow him to built them anywhere, because it could have been too powerful and we wouldn\'t have been able to set up good puzzles. So we fixed the positions
				of all constructions.<br>
				<br>
				The most basic construction is a pallet. It\'s just a pallet on the top of block on which you can jump on. This is minimalist, but when we start to combine
				them we can create some kinda cool stuff like stairs, bridges, filling holes and so on !
				<br>
			</p>
			<section class="theme3 inlineBlock">
				<img class="size500 resp_extend" src="images/LaFievreDuSommet/bridge.png" alt="I am an image :D">
				<p>
					A bridge and 2 different stairs :)<br>
					The power of the pallet !
				</p>
			</section>
			<p class="justifyText">
				The second most basic construction was the ladder. If the pallets were really helpful for horizontal movement, the ladder was really useful for vertical ones.
				Well, I will assume that you know what a ladder is and keep going.<br>
				<br>
				Then we have the fancy constructions ... the elevator ! The real interest here is that the elevator is really fast, so it can be used to create
				shortcuts ! In fact, it is the core of the gameplay. You are taking winding path all the time until you reach an elevator that will allow you to travel
				to the same point much faster and much more easily :)<br>
				<br>
				As ladder was the horizontal version of pallet, the yodel is the horizontal version of the elevator ! It can be used to reach inaccessible places and is
				also very practicle to create shortcuts. Is it very fun when all the shortcuts are overlapping each other as you can really decide, as a player, which 
				path you want to take :) <br>
				<br>
				However, none of this constructions are free ! You need to built them with ressources !
			</p>
			<h3>
				Ressources
			</h3>
			<p class="justifyText">
				Ressources are the sinews of war. If you don\'t have them, you have nothing.<br>
				We decided that we only wanted to produce 2 kind of ressources : the wood as the aboundant and common ressource, and the iron as the more rare and precious
				one.<br>
				Sometimes (ok, often ... OK all the time !) you have to build construction that will allow you to have a better access to ressources. Thoses ressources
				will then allow you to unlock better shortcuts and constructions to find better ressources and so on ! :)<br>
				<br>
				There is a last kind of construction that I haven\'t talk to you yet, it\'s the chest one. Chest can reward you with all sort of things, like improving
				your backpack size, improving day duration, improving the speed at which you can collect ressources, or even at the end of the game you can unlock a 
				super jump which is needed to finish the game.<br>
				<br>
				We start the game with a small backpack so we can not carry a lot of ressources at the same time ! This is very useful for level design, as you can\'t
				build a construction of 20 wood if your backpack can only carry 15 at the time ! This gameplay mecanics will force the player to make a lot goings and
				comings, which will even more emphasizes the usefulness of shortcuts. And it\'s by this goings and comings that we hope and expect the player to get
				familier with the environment, with his Home.<br>
			</p>
			<section class="theme3 inlineBlock">
				<img class="resp_extend" src="images/LaFievreDuSommet/full_level_design.png" alt="I am an image :D">
				<p>
					Here is the complete Level Design !<br>
					I think, we get the better game life time of the Game Jam ;)
				</p>
			</section>
		</section>
		<section class="theme2 colonne">
			<h2>
				You can get a windows build of the game here ! :)
			</h2>
			<a href="images/LaFievreDuSommet/LaFievreDuSommet_Windows.zip" class="" target="_blank">
				<div>
					<section class="theme3 colonne redirection pb3">
						<h3 class="resetPaddingMargin">
							Windows Build
						</h3>
					</section>
				</div>
			</a>
			<h2>
				And if you don\'t have time, there is a little video here :)
			</h2>
			<video controls class="m3 size500">
			  <source src="images/LaFievreDuSommet/video.mp4" type="video/mp4">
			  Your browser does not support HTML5 video.
			</video>
		</section>
			';

		return $text;
	}

 ?>
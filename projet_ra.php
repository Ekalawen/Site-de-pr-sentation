<?php
	require_once("php/base_functions.php");

	echo getHeader("", "RagnArcane");

	echo getTextProjet_ra();

	echo getEndProjet();
	
	echo getFooter();

	function getTextProjet_ra() {
		$text = '
		<section class="theme1 colonne">
				<h1>
					RagnArcane
				</h1>
				<h2 class="fontSize200">
					I love HearthStone, I love Magic, I love strategic card games !
				</h2>
				<h2 class="fontSize200">
					So I made my own.
				</h2>
				<section class="theme2 colonne">
				<img class="resp_extend" src="images/ra/symbole.jpg" alt="I am an image :D">
				</section>
				<p>
					Here is it, the RagnArcane.<br>
					It\'s also nammed, the God Apocalypse !
				</p>
		</section>
		<section class="theme2 colonne">
			<h2>
				A Card Game, for the first time !
			</h2>
			<h3>
				Collectible card game ?
			</h3>
			<p class="justifyText">
				I wanted to create a new card game.<br>
				I wanted to create a non collectible card game where player could find the same feeling and the same experience as in a
				famous collectible card game (as HearthStone and Magic).<br>
				This is a big challenge, but also market to conquer.
			</p>
			<h3>
				Questionning every card game designs
			</h3>
			<p class="justifyText">
				If I want to make sensation, my game has to be unique, so I needed to experiment all the possibilities that offer a card game.<br>
				Why do we draw one card at the beginning of our turn ?<br>
				Why we always wins by reducing some life total to 0 ?<br>
				Why do we intensively use numbers ?<br>
				Why don\'t we use events instead ?<br>
				Soooooo many question I wonder.<br>
				And I anwsered them.<br>
			</p>
			<section class="theme1 colonne">
				<img class="resp_extend" src="images/ra/arcanes.jpg" alt="I am an image :D">
				<p class="centreText">
					Some cards of the game !
				</p>
			</section>
		</section>
		<section class="theme1 colonne">
			<h2>
				Key elements
			</h2>
			<p class="centerText">
				Feel free to only read sections that interest you ;)
			</p>
			<h3>
				A game of choice. A game of skill.
			</h3>
			<p class="justifyText">
				If I wanted to reach the level of intense reflexion that collectible games have, I had to be smart.<br>
				Because I will lack something fondamental, something attaching, something emotionnal, something that will make the player say
				"It\'s me who did it !". I will lack all the DeckBuilding part !<br>
				For this reason, if all the cards were static, all the games would look alike. Cards had to be dynamic. They had to offer some 
				choice for the player. That\'s why, on every card, we can choose between 3 differents effects !<br>
				And this, is what bring the most diversity to this game.
			</p>
			<section class="theme3 colonne">
				<div class="ligne">
					<div class="colonne">
						<img class="resp_extend" src="images/ra/feu.jpg" alt="I am an image :D">
						<p class="centreText">
							A typical Fire card !<br>
							But they are all differents !
						</p>
					</div>
					<div class="colonne">
						<img class="resp_extend" src="images/ra/eau.jpg" alt="I am an image :D">
						<p class="centreText">
							Kind of it\'s Water opposite !<br>
							And still not symetrical ;)
						</p>
					</div>
				</div>
				<p class="centerText mt2">
					Sorry, it\'s french :/
				</p>
			</section>
			<h3>
				Players like power. Players love winning.
			</h3>
			<p class="centerText">
				Or at least, feel that they could have win.
			</p>
			<p class="justifyText">
				In order to achieve that goal, I wanted that each card could look like a game breaking card. I wanted to put power in each of them.
				However, this is dangerous, the game will be unbalanced quickly with this strategy. So I had to lock this power behind conditions.<br>
				My final objectiv is that at the end of the game, all players are happy because they made good plays, even if they could have win.
			</p>
			<h3>
				Unique and differents strategies !
			</h3>
			<p class="justifyText">
				I wanted to create an unique and different experience in each and every game.<br>
				So I had to create several strategies : here come the elements ! There are 4 : Fire, Water, Air, Earth. And each one have his
				own strategy to lead the player to victory.<br>
				I applied myself to create unique, simple and intuitive strategies for each elements that could define their identity !<br>
				In this way, players can sentimentaly attach themselves to a part of the game and feel like incarnate the will of the game.
			</p>
			<h3>
				Why always numbers ? Why always HP ?
			</h3>
			<p class="justifyText">
				Because. That\'s the most common and easy answer.<br>
				But I am not satisfied.<br>
				I want to test, I want to prove, I want to show that\'s it\'s the best thing to do.<br>
				And so I tried. But every time I fall back to the numbers field. The reason ? It\'s a soooooooo powerful tool to help the 
				Game Designer to balance his game. And it help showing the power of an action.<br>
				And even if we don\'t want number in our game, there are here anyway : we are X players, we have Y cards in hand, there are Z turns !<br>
				However, I succeed in making diverse win-conditions (still number-based !) that could fluctuate over the game !
			</p>
			<h3>
				Why does creatures stay on the board ?
			</h3>
			<p class="justifyText">
				Yes, why ?<br>
				Because they create a state of the game. They help situate who is ahead, who is behind. They help visualise the next few turn.<br>
				They construct the Strategy of the game. They make all his depth !<br>
				In order to achieve the same goal, I had creat two type of cards, the Avatars thay give a permanent advantage, and the Arcanes
				(or the spells) that create quick and powerful advantages !
			</p>
			<section class="theme2 colonne">
				<img class="resp_extend" src="images/ra/avatars.jpg" alt="I am an image :D">
				<p class="centreText">
					Say "Hello !" to the Avatars !
				</p>
			</section>
			<h3>
				Player interactions is important !
			</h3>
			<p class="justifyText">
				As we don\'t like playing parallel games (we could both do it at home), it\'s primordial that my opponent can disrupt my plays !<br>
				To achieve that, I made 3 things :<br>
				- the opportunity to counter opponents spells with any card but at a big cost
				- if a player is countered, he is frustrated ! So he can play another spell. For free !
				- each spell effect have an opposite spell effect that can balance him !
			</p>
			<h3>
				When does the game finish ?
			</h3>
			<p class="justifyText">
				I learn in my early test that it was really important that everybody finish the game at the same time. At least if we want everyone
				to enjoy the game ... !<br>
				Soooo, the game finish at a precise moment, and we compare the situation of each player. The one with the better one (the most
				Avatars) wins ! In that way, everyone stay focused until the last minute of the game.<br>
				And when the game finish ? When a special card, the RagnArcane, is drawn for the 3rd time ! Because yes, dead cards go under the
				deck so that the deck cycle automatically ! And yes, the deck is common to all players ! I am sorry I can\'t explain everything 
				here, I just expose my design thought.<br>
				Thanks to this mecanism, everyone can see how far we are from the end of the game, and they can even try to speed it up or slow it
				down for their own interest ! :D
			</p>
			<h3>
				Why do we draw an unique card at the beginning of our turn ?
			</h3>
			<p class="justifyText">
				This is a very important question and I tried several version of drawing step before feeling satisfied of one of them. In fact I
				didn\'t want to use the classical "draw one at the beginning of your turn" !<br>
				<br>
				Why at least one at the beginning ?<br>
				Because we need to fill our hand to play every turn.<br>
				Because it add a random part to the game. Which add fun.<br>
				Because it offer a new opportunity each turn.<br>
				<br>
				Why only one ?<br>
				For no reason ! Let\'s draw 2 :D<br>
				(I test 3, but it\'s too much, no one ever feel in difficulty, which is important)
			</p>
			<h3>
				Balance ... !
			</h3>
			<p class="justifyText">
				WoW ! This was (and is !) the real difficulty of this game.<br>
				To achieve it, I made a lot patches (more than 15), and I question myself everytime to understand if what I am doing is the right 
				thing to do. And it often wasn\'t ! But it\'s by making mistakes that we learn.<br>
				I am also simplifying my game all the time. I even reduced my game to the Minimal Viable Product (MVP) in order to extract the
				core of the game.<br>
				<br>
				Here is a sample of what I look when I am balancing this game :<br>
				- balance between elements<br>
				- balance between strategies<br>
				- balance between all the cards<br>
				- balance between cards effects<br>
				- balance of the interest of the effects<br>
				- all effects have to be counterable<br>
				- balance between card advantage effects and tempo advange effects<br>
				- the presence or not of infinite combo (because they exist !) (but they aren\'t game breaker)<br>
				- etc !<br>
			</p>
			<section class="theme2 colonne">
				<img class="resp_extend" src="images/ra/tout.jpg" alt="I am an image :D">
				<p class="centreText">
					It\'s hard to balance !<br>
					But it\'s what I love, I don\'t mind :D
				</p>
			</section>

		</section>
		';

		return $text;
	}

 ?>
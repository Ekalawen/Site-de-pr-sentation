<?php
	require_once("php/base_functions.php");

	echo getHeader("");

	echo getTextProjet_clicker();

	echo getFooter();

	function getTextProjet_clicker() {
		$text = '
		<section class="theme1 colonne">
				<h1>
					Pixel Clicker
				</h1>
				<h3>
					I am currently designing this game with a friend.
				</h3>
				<h3>
					We loved the famous Coockie Clicker, and wanted to create our own.<br>
					With some more features.
				</h3>
				<section class="theme2 colonne">
					<img src="images/clicker/clicker13.png" alt="I am an image :D">
				</section>
		</section>
		<section class="theme2 colonne">
			<h1>
				The Skinner Effect
			</h1>
			<p class="justifyText">
				As aspiring Game Designers, we both knew about the Skinner Box Effect. When you jailed a rat (or an human !) in a room with a button,
				if the button delivers food every time the subject push on it, then the subject will be ever more enthusiastic to press it if it only
				delivers food ... sometimes ! The frequence can be fix, or it can be random. It could even be after a fixed duration, or even a random
				duration ! And the more the subject will press the button, the more he we will be used to, and the more he will continue.<br>
				This is the fundamental basic of RPG\'s games to keep players in the game.<br>
				<br>
				We tried to make this kind of game. And we get trapped by ourselves more often than not !
			</p>
			<h3>
				So the concept is simple
			</h3>
			<p class="justifyText">
				To play the game, the player only have to push on the big Tesseract. Each time the player do that, he will be reward with one pixel.
				These pixels can be spend to buy Bots or Bot\'s Upgrades. And the Bots will click for you, so the more Bots you have, the more pixels
				you will have, and if you have more pixels you can bought better Bots !<br>
			</p>
			<section class="theme3 colonne">
				<p>
					How the game look like (it\'s an animation of a 3D Tesseract !)
				</p>
				<img src="images/clicker/clicker04.png" alt="I am an image :D">
				<p>
					After 15 minutes of playing ...
				</p>
				<img src="images/clicker/clicker07.png" alt="I am an image :D">
				<p>
					After sooo much time, finally buying my first Hexagon :D
				</p>
			</section>
			<h3>
				Why did we chose a Tesseract ? And why pixels ?
			</h3>
			<p class="justifyText">
				We searched a long time for a tiny cute thing that can represent the currency of the game. We thought about cats, letters, 
				the pages of a book, food, boyfriends/girlfriends (the idea was already taken) ... But we are in an IT School, so we decided
				to use the Pixel !<br>
				Soooo, with pixel you can create lines, with lines you can create ... let\'s say a Triangle, and then a Square, and then a 
				pentagon and so on ! So we decided to create the 10 first Bots from the Point to the Decagon.<br>
				But we wanted to go further, so we add 3D geometric shape with the Tetrahedron, the Cube, the Octahedron, the Dodecahedron,
				the Icosahedron and ... the Truncated Octahedron, the Truncated Icosahedron ... the Rhombic Triacontahedronand, the
				Truncated Icosidodecahedron and finally the Large Star Dodecahedron !<br>
				But it\'s an exagerating game, so we go even further with 4D geometric shapes ! We don\'t already know how to represent them
				but we would like to use the Pentachore, the Tesseract (obviously !), some others and the Hecatonicosachore ! (I love this 
				word !)<br>
			</p>
			<section class="theme3 colonne">
				<h3>
					As I always love squares, I made the background of the Shop a random generated background
				</h3>
				<p>
					At the beginning, each square start with a random color.<br>
					With a certain probability, a square will take the color of one of its neighbour.<br>
					We restart when all the square are close enough from all its neightbour colors !
				</p>
				<p>
					At the beginning ...
				</p>
				<img src="images/clicker/clicker08.png" alt="I am an image :D">
				<p>
					A few moments laters ...
				</p>
				<img src="images/clicker/clicker10.png" alt="I am an image :D">
				<p>
					They start to group together !
				</p>
				<img src="images/clicker/clicker11.png" alt="I am an image :D">
			</section>
		</section>
		';

		return $text;
	}
?>	

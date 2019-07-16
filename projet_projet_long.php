<?php
	require_once("php/base_functions.php");

	echo getHeader("", "RogueLike Game");

	echo getTextProjet_ra();

	echo getEndProjet();
	
	echo getFooter();

	function getTextProjet_ra() {
		$text = '
		<section class="theme1 colonne">
				<h1>
					A RogueLike Game !
				</h1>
				<h3>
					I created this in a group of 6 persons.
				</h3>
				<h3>
					I was both the Game Designer and the Development architect.
				</h3>
			<section class="theme2 colonne">
				<img class="resp_extend" src="images/projet_long/projet_long01.png" alt="I am an image :D">
				<p>
					It\'s dangerous to go alone.
				</p>
			</section>
		</section>
		<section class="theme2 colonne">
			<h1>
				The Random Map Generator
			</h1>
			<p class="justifyText">
				As in all RogueLike games, we were needed that the map was always different, but always interesting. In fact we have several
				criteria :<br>
				- the character can always reach the exit from its starting point<br>
				- the exit is as far as possible from the character<br>
				- the map has to have several paths that can lead or not to the exit<br>
				- the map have to contains patterns that seems like walls, corridors, rooms ...<br>
				- and we don\'t want to create these walls, corridors, rooms manually, so they have to be entirely generated !<br>
			</p>
			<section class="theme3 colonne">
				<img class="resp_extend" src="images/projet_long/exemple01.png" alt="I am an image :D">
				<p>
					But I never said : "we will place a room here !"
				</p>
				<img class="resp_extend" src="images/projet_long/symbole02.png" alt="I am an image :D">
				<p>
					It can generates BIG maps =)
				</p>
			</section>
			<h3>
				So, how does it work ?
			</h3>
			<p class="justifyText">
				We will first subdivises the big map into submaps.<br>
				We will empty (cells become accessible for the player) all the cells of the submaps.<br>
				We will fill (cell become not accessible) the 4 borders of all submaps.<br>
				We place the player in one submap.<br>
				We generate a Labyrinth with submaps : Starting from the submap of the player, we will "open" one of the walls from the submap that the 
				player can already reach except if when we open this map we create a cycle.<br>
				We continue until we can\'t open more walls.<br>
				Openning a wall is : for each pair of adjacent cells of the wall, we will empty both with a probability p, else wi will open only one
				of them or none of them. And we ensure that at least one pair will be open.<br>
				<br>
				Now we can reach the exit.<br>
				<br>
				For each submap, we will fill it.<br>
				To do that, we will apply the methods of cellular automata with precise inputs.<br>
				For each cells of the submap, we will fill if : it has strictly more than 4 close walls (distance <= 1) or it has strictly less
				than 3 distant walls (distance <= 2). Else we empty it !<br>
				We do that about 100 times !<br>
				<br>
				Now we have a realistic map.<br>
				<br>
				But maybe we broke the invariant : the character can always reache the exit.<br>
				So for each submap, we will joins the gates (a cell from where you can enter the submap) together.<br>
				We will start from one gate, create the set from all its accessible cells.<br>
				For each other gates, if it is not in the set, we will dig toward it until we reach it ! Then we update the set.<br>
				Now we are sure we can reach the exit !<br>

				Now we have a playable map.
			</p>
			<section class="theme3 colonne">
				<img class="resp_extend" src="images/projet_long/projet_long07.png" alt="I am an image :D">
				<p>
					Can you see the submaps ? (they look like squares)
				</p>
				<h3>
					And then we add monsters !<br>
					And items =)
				</h3>
				<img class="resp_extend" src="images/projet_long/projet_long09.png" alt="I am an image :D">
				<p>
					OMG, they are everywhere !
				</p>
			</section>
		</section>
		';

		return $text;
	}
?>

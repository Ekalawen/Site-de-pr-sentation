<?php
	require_once("php/base_functions.php");

	echo getHeader("", "Speed Skill Style");

	echo getTextProjet_sss();

	echo getEndProjet();

	echo getFooter();

	function getTextProjet_sss() {
		$text = '
		<section class="theme1 colonne">
				<h1>
					Speed Skill Style !
				</h1>
				<h3>
					Mirror\'s Edge was too slow. So I made my game.<br>
					A game of flow.
				</h3>
				<section class="theme2 colonne">
					<img class="resp_extend" src="images/sss/sss07.png" alt="I am an image :D">
					<p>
						Here is a Mirror\'s Edge theme.
					</p>
				</section>
		</section>
		<section class="theme2 colonne">
			<h1>
				The Game
			</h1>
			<p class="justifyText">
				In Speek Skill Style, you are a cube (I also love 3D square !), and you can move like an human, you can run, jump, grab walls and so on.<br>
				In fact, this strange universe is the inside of a data base, and you are a virus. You want to hack it by unlocking several doors and light walls. And by dodging ennemies !<br>
				I found that being only able to run like a simple human was boring. So I imagined 4 ways of moving, each with unique and powerful abilities but with big upsides to compensate.<br>
				I named the 4 forms : the Runner, the Destroyer, the Dasher and the Slider ! (I am french, so it may seems quit weird at first glance :p)
			</p>
		</section>
		<section class="theme1 colonne">
			<h1>
				The concept : two part
			</h1>
			<h3>
				Part one : Have you ever tried to make a 3D game ... in 2D ?
			</h3>
			<p class="justifyText">
				This was the real challenge of this game : I wanted to create a 3D running game, but I only mastered 2D at that time.<br>
				So I assumed that I would print everything in a 2D isometric vue, while my whole model was a 3D model !<br>
				I had one difficulty, how the player will understand a 3D environment if he can only observes it from just one standpoint ?<br>
				I tried some stuff, transparency, lower the blocks, 90° rotations ... none of them really shine. That\'s when I reallized that
				I had to create levels where the depth was less important, I had to create a corridor map ! And it works :D
			</p>
			<section class="theme3 colonne">
				<h1>
					Let\'s look the differents ways<br>
					of rendering this environment !
				</h1>
				<p>
					As you can see, you don\'s see. But it\'s beautiful :3
				</p>
				<img class="resp_extend" src="images/sss/sss03.png" alt="I am an image :D">
				<p>
					Trying transparency ... work a bit, but it\'s too hard to understand.
				</p>
				<img class="resp_extend" src="images/sss/sss02.png" alt="I am an image :D">
				<p>
					Playing with colors ... work a bit too.
				</p>
				<img class="resp_extend" src="images/sss/sss08.png" alt="I am an image :D">
				<p>
					Lowering blocks, not working :D
				</p>
				<img class="resp_extend" src="images/sss/sss11.png" alt="I am an image :D">
				<h3>
					That\'s why level design and engine programming<br>
					should always work together !<br>
					Let\'s build Labyrinths and corridors !
				</h3>
				<p>
					It\'s easier to understand, isn\'t it ?<br>
					(yeah this level is handmade)
				</p>
				<img class="resp_extend" src="images/sss/sss13.png" alt="I am an image :D">
				<p>
					I understand, and you ? are you sure ? :D
				</p>
				<img class="resp_extend" src="images/sss/sss12.png" alt="I am an image :D">
			</section>
			<h3 class="mt3">
				Part two : the procedural map generation !
			</h3>
			<p class="justifyText">
				I have a theory.<br>
				I think that the future of games is not inside the head of a Game Designer or a Programmer.<br>
				I think that the future of games is inside uncertainty.<br>
				And the two best ways of uncertainty are other players and randomness !<br>
				That\'s why I have chosen to make all these procedural map genration algorithm : <br>
				Labyrinths, donjons, gaussian filter (like on picutres !), cellular automata ... and even more ! :D
			</p>
			<section class="theme3 colonne">
				<h3>
					I will show you the Labyrinths.
				</h3>
				<p>
					It looks like that ;)
				</p>
				<img class="resp_extend" src="images/sss/sss09.png" alt="I am an image :D">
				<p>
					Let\'s raise up the walls !<br>
					And ... omg where I am ?!?<br>
					I NEED to found the exit =)
				</p>
				<img class="resp_extend" src="images/sss/sss15.png" alt="I am an image :D">
			</section>
		</section>
		';

		return $text;
	}

 ?>
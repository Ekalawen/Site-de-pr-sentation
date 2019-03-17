<?php
	require_once("php/base_functions.php");

	echo getHeader("");

	echo getTextProjet_DigitalWorld();

	echo getEndProjet();

	echo getFooter();

	function getTextProjet_DigitalWorld() {
		$text = '
		<section class="theme1 colonne">
				<h1>
					Digital World
				</h1>
				<h3>
					This is the follow up of my Speed Skill Style project, several years later.<br>
					But this time, I have access to 3D technology ! <3
				</h3>
				<h3>
					It\'s a real time parkour game, inspired my Mirror Edge.
				</h3>
				<a href="projet_sss.php" class="" target="_blank">
					<div>
						<section class="theme3 colonne redirection pb3">
							<h3 class="resetPaddingMargin">
								Speed Skill Style
							</h3>
						</section>
					</div>
				</a>
				<section class="theme2 inlineBlock">
					<img class="size500" src="images/DigitalWorld/icon.png" alt="I am an image :D">
					<img class="size500" src="images/DigitalWorld/img1.png" alt="I am an image :D">
					<img class="size500" src="images/DigitalWorld/img2.png" alt="I am an image :D">
					<img class="size500" src="images/DigitalWorld/img3.png" alt="I am an image :D">
					<p>
						Here are some screeshots of the game :)
					</p>
				</section>
		</section>
		<section class="theme2 colonne">
			<h1>
				Procedural Generated Map
			</h1>
			<p class="justifyText">
				In order to design a good parkour game, the most foundamental item is the map. Because it\'s where the player will be able to express his skills and 
				ability. If the map is boring, so is the game. If the map is well designed, then the player will be able to discover new moves and will, eventualy, 
				reach a point where the map is just a music that he can play as he wishes.<br>
				<br>
				Even if it might seems difficult and full of traps, I think that a procedural map generating system is better than a bunch of handcrafted maps.<br>
				I really think that a good 3D map couldn\'t realistically be designed by a human. Maybe it is possible for a 2D one, but in 3D there are to much
				shortcuts available, too much paths and too much eventualities that a human can\'t predict. Even so, a human couldn\'t produce a reasonnably sized map
				for a reasonnably amount of time/cost. Even so, the human is predictable and make errors.<br>
				For all of these reasons, I believe that it is worth investing time in a good procedural map generating system. If it is well designed, it could be rather
				easy to implement too.
			</p>
			<h3>
				The Cube Map
			</h3>
			<p class="justifyText">
				In order to craft a good map, what do we want ?<br>
				I believe that the most important thing is that the player could access any possible points of the map. I think it is important because we don\'t want
				to put restriction as not spawning object in certain location if the player can\'t reach them, it\'s rather boring to implement such function and can 
				be much more elegantly solved by game designing solution ! Which here is the invariant : we need to be able to access every point of the map.<br>
				<br>
				I believe that an other important aspect is to create dangers zones. The main role of this zones are to create a dynamic into the game, between safe
				spaces and unsafes ones. So, we need dangers zones.<br>
				<br>
				The third important aspect are the limits of the map. We need the player to know how far he can go.<br>
				<br>
				To solve this 3 problems, I create one kind of object for each of them. And putting them together we get a very reasonnable map ! :)
				<br>
				To solve the limits, I just created a huge cube in wich the player will be playing. The wall are smooths so that the player can\'t easly jump indefinitely 
				on them and escape by the top. However they are very helpful for the player to wall jump and go to other spaces.<br>
				<br>
				To solve the invariant "We can go anywhere", I have created bridges. A lot of bridges. Enough that almost all the map would be cover by them. A bridge is
				a succession of cubes that are next to each other in a linear way, and they are always going from one side of the map to the other. This way I am 
				creating avenue for the player to walk the entire map. And if they are enough of them, as the player movement set is rather effective and polyvalent, we
				can access any part of the map ! :)
				<br>
				Now our map is functional but rather boring. We need to create the dangers zones ! Dangers zones are zones where we just don\'t have information, where we
				don\'t know what is going to be after this block, where everything is so dense that it is very hard to predict anything. To achieve that, we need to 
				gather blocks in a sens that occlude the player vision. What I have done is to create full cubes of blocks (let\'s say 5 * 5 * 7 on a 25 * 25 * 25 map), and
				inside I create tunnels and cavities. I put in place invariant so that we can always cross from one side to another side of the block and here it is, we have
				our dangers zones ! :)
			</p>
			<h3>
				The Splines Maps
			</h3>
			<p class="justifyText">
				I already had a nice map, but I wanted others, I wanted a multitude of other maps !!! Maybe it was a bit optimistic haha !<br>
				As the first map was in a closed environment, I wanted to craft another in an open environment, but as I didn\'t respect the 3 things I explained earlier I
				didn\'t get a great experience while playing it.<br>
				<br>
				If everything was on fixed positions on the first map, I wanted to be more flexible. So I wanted to create a ground that would vary on all its surface. In
				order to do that I used B-splined and Lagrange interpolation. It was very "mind-opening" about everything we can create with map generation, but rather
				difficult to encapsulate all it\'s potential into controlled paterns. Here are my first results :<br>
			</p>
			<section class="theme3 inlineBlock">
				<img class="size500" src="images/DigitalWorld/trophe3.png" alt="I am an image :D">
				<img src="images/DigitalWorld/trophe.png" alt="I am an image :D">
				<img class="size500" src="images/DigitalWorld/trophe4.png" alt="I am an image :D">
				<img class="size500" src="images/DigitalWorld/trophe5.png" alt="I am an image :D">
				<p>
					As you can see, there are a lot of potential by combining all of these patterns ! <3<br>
					<br>
					On another iteration, I was planing on making everything move slowly and smoothly in order to create a wave feeling ! :)<br>
					This would have been insane :3
				</p>
			</section>
			<p class="justifyText">
				So I tried to combined them together into something playable. I ended up wanted to crafte something like a "virtual forest" where I defined that a tree 
				was a succession of "floors" connected by trunks. The main issue was that it was really difficult to climb trees and to pass from one to another.<br>
				Here are some examples :
			</p>
			<section class="theme3 inlineBlock">
				<img class="size500" src="images/DigitalWorld/tree1.png" alt="I am an image :D">
				<img class="size500" src="images/DigitalWorld/tree2.png" alt="I am an image :D">
				<p>
					It\'s esthetic but not-functional !
				</p>
			</section>
		</section>
		<section class="theme1 colonne">
			<h1>
				Gameplay
			</h1>
			<h3>
				Wall Jumping
			</h3>
			<p class="justifyText">
				Wall Jumping, it was the most important feature of this game. In fact I was planning of adding so much more movement option like in Speed Skill Style (that
				you can find with the link at the top), but after testing the wall jumping feature, I was convinced that it was sooooo powerful and amazing that nothing 
				more was needed in order to create a full movement set : we were already able to reach absolutely any point of the environment ! :)<br>
				<br>
				How does the wall jumping works ? Well, like in any other game, with the exception that here you can grab any surfaces all the time (not like in mirror edge)
				which means that if all the plateforms are closed enough you can keep jumping without ever stopping, without ever knowing where you are going ... because
				everything is so fast and smooth that you don\'t really have the time to think about it ! That was the feeling that I really wanted to obtain :)<br>
				The only restriction was that you canno\'t grab a wall from the same angle twice in a row : in order to prevent a player to just dumbly escalate a huge
				vertical wall, which would have break the fun.
			</p>
			<h3>
				Ennemies
			</h3>
			<p class="justifyText">
				Of course, there is a lot more stress and tension in a parkour game if they are ennemies ! And that\'s why they are here !<br>
				However I didn\'t wanted the player to "fight them". I wanted the player to fear them, but not being able to be killed, because it wasn\'t the core of the
				game. But how ? How to fear the player if I can\'t kill him ? Well, the answer that I came to was to just strongly push away the player if he ever collide
				with one ennemy ! Like that he would have been cancelled in what he was doing, and having to start everything again is not what he want :)<br>
				<br>
				In fact this "pushing system" was really a good idea because it has a double utility :<br>
				- it is used to disturb the player and make him fears the ennemies
				- but if the player is talented, he can use the push to make big jumps into the air, which is really useful !
			</p>
			<section class="theme3 inlineBlock">
				<img class="size500" src="images/DigitalWorld/ennemy.png" alt="I am an image :D">
				<p>
					I am both your friend and your ennemy, do you want to play with me ? <3
				</p>
			</section>
			<h3>
				Super Powers
			</h3>
			<p class="justifyText">
				Even if the wall jumping was enought, I still add some fun to the game.<br>
				I had 3 powers that the player could use anytime he wanted. However, the plan was to increase the level of defense of the map each and every time he would
				use his power, just to prevent him from doing non-sens things. But as I never implement this functionnality, the player is now hyper-busted, which somewhat
				cool and fun haha !<br>
				The powers are :<br>
				- Bridge Builder : target a point that isn\'t horizon, and a bridge will be built until this location. The bridge is built as fast as you so that you can
				surf on it, which is really cool :)<br>
				- Triple Dash : because every cool game need a triple dash ! :p This one stop time while your are using it so that you can more easily change the direction
				where you want to go.<br>
				- Explosive Bubble : cast a growing bubble in front of you. When it explodes, it destroy all the blocks around it and push back all ennemies far away ! :)
			</p>
			<section class="theme3 inlineBlock">
				<img class="size500" src="images/DigitalWorld/bridge1.png" alt="I am an image :D">
				<img class="size500" src="images/DigitalWorld/bridge2.png" alt="I am an image :D">
				<img class="size500" src="images/DigitalWorld/dash.png" alt="I am an image :D">
				<img class="size500" src="images/DigitalWorld/explosion.png" alt="I am an image :D">
				<p>
					1) & 2) Bridge Builder examples<br>
					3) Triple Dash time-freezing and visualisation of the range of the dash<br>
					4) Explosive Bubble : what your player do when you allow him to destroy your loved map :\'(
				</p>
			</section>
		</section>
		<section class="theme2 colonne">
			<h1>
				Some videos of gameplay ! :)
			</h1>
			<div class="">
				<h3>
					The tutorial !
				</h3>
				<video controls class="m3 size500">
				  <source src="images/DigitalWorld/tutorial.mp4" type="video/mp4">
				  Your browser does not support HTML5 video.
				</video>
			</div>
			<div class="">
				<h3>
					A classic Run !
				</h3>
				<video controls class="m3 size500">
				  <source class="size500" src="images/DigitalWorld/video.mp4" type="video/mp4">
				  Your browser does not support HTML5 video.
				</video>
				<p>
					The frame rate is slow because of the video ^^\'
				</p>
			</div>
		</section>
			';

		return $text;
	}

 ?>
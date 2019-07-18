<?php
	require_once("php/base_functions.php");

	echo getHeader("", "Find the Bear");

	echo getTextProjet_FindTheBear();

	echo getEndProjet();

	echo getFooter();

	function getTextProjet_FindTheBear() {
		$text = '
		<section class="theme1 colonne">
				<h1>
					Find the Bear
				</h1>
				<h2 class="fontSize200">
					Find the Bear is a Racing game that we made in a team of 5 persons in DDJV using agile methods.
				</h2>
				<h2 class="fontSize200">
					We coded the engine of the game from scratch and built the game with it ! :)
				</h2>
				<section class="theme2 colonne">
					<img class="size500 resp_extend" src="images/FindTheBear/oscillations.gif" alt="I am an image :D">
					<p>
						In this game we are controlling a little cloud which is constantly oscillating :)
					</p>
				</section>
				<p class="justifyText">
					If you want to know more about the game you can check our powerpoint here :
				</p>
				<a href="images/FindTheBear/presentation.pdf" class="" target="_blank">
					<div>
						<section class="theme3 colonne redirection pb3">
							<h3 class="resetPaddingMargin">
								Powerpoint
							</h3>
						</section>
					</div>
				</a>
		</section>
		<section class="theme2 colonne">
			<h2>
				The initial speech
			</h2>
			<p class="justifyText">
				In Find the Bear we are playing a dreaming child. However in his dream, not everything is going as wonderfully as we expect ... In fact the 
				child is trapped into his dream where he has to collect all of his cute Teddy Bear in order to wake up, or he will falls in limbo ...<br>
				What\'s more, he doesn\'t have enough time for it, so the child (which is represent by the cute cloud :)) will have to voluntary go into
				nightmare because it is the only way for him to extend his dream duration ! But in the nightmare, everything could kill you !<br>
				<br>
			</p>
			<section class="theme3 colonne">
				<img class="size500 resp_extend" src="images/FindTheBear/death.jpg" alt="I am an image :D">
				<p>
					Oh, you died :\'(<br>
					Maybe you need to restart the game ? :3
				</p>
			</section>
			<h3>
				Oscillations
			</h3>
			<p class="justifyText">
				We wanted our main character to be a child riding a cloud. However we didn\'t have the time to code the child, so we have a cloud :D<br>
				In order to give the feeling of floating, we decided to add vertical oscillations to the movement of the cloud. This was rather tricky
				as we wanted to be physic based but we wanted to force vertical oscillations also, so we had to make compromises.<br>
				We created a median height where we wanted the cloud to be on average. If the cloud is higher, than we applied proportionnaly to the difference to the
				median height a bottom force to the cloud. And symetrically if we are lower. With this technic we can ensure that the cloud will keep floating and 
				we aren\'t too hard on forcing the positions of the cloud so that we can still make incredible jump if we fall from an edge ! :)<br>
				One issue with that technic is that often we could violently touch the floor, which would break the immersion. To prevent that we add an exponential law
				to compute the power of the top force when we are lower than the median height. It wasn\'t perfect but it was OK.<br>
				<br>
				Finaly, the vertical axe was physic based with some forces added to the model, and the horizontal axes were render based in order to give good and responsive
				feedback to the input of the player :)<br>
				Here is a diagram to better understand it :
			</p>
			<section class="theme3 colonne">
				<img class="size500 resp_extend" src="images/FindTheBear/movement_decomposition.jpg" alt="I am an image :D">
				<p>
					Movements of the player
				</p>
			</section>
			<h3>
				Collectible items
			</h3>
			<p class="justifyText">
				They are 3 kinds of items :<br>
				- the Teddy Bears : you need to catch them all to win the game and escape your dream !<br>
				- the Speed Boosts : each time you catch one, for the rest of the game, your speed is increase by half of your starting speed ! :)<br>
				- the Time Flasks : when you catch one you get about 20 seconds more to finish the game. Remember that the initial timer is too short
				for you to gather all Teddy Bears in time, so you NEED Time Flasks !
			</p>
			<h3>
				The Nightmare
			</h3>
			<p class="justifyText">
				However, the only way of getting Time Flasks is by going into the Nightmare ! And in the Nightmare you can\'t catch Teddy Bears anymore. So you
				have to carefully chose when you are swaping ! What\'s more, if you chose to go into Nightmare (which you can do whenever you want), you will need to
				stay into it for about 25 secondes ! And in the Nightmare, every collision (walls, trees, borders) just instantly kills you ! So you better be
				carefull ! :)
			</p>
			<section class="theme3 colonne">
				<img class="size500 resp_extend" src="images/FindTheBear/nightmare.jpg" alt="I am an image :D">
				<p>
					Don\'t be scared ! Or maybe you should ?
				</p>
			</section>
		</section>
		<section class="theme1 colonne">
			<h2>
				The Map
			</h2>
			<p class="justifyText">
				We wanted to represent a child dream. So the map is a flying island in the sky, which is circular. The center of the map is "The Castel" and the exterior is 
				"The Forest" !
			</p>
			<section class="theme3 colonne">
				<img class="size500 resp_extend" src="images/FindTheBear/vue_terrain_haute.jpg" alt="I am an image :D">
				<p>
					The Castel in the center and the Forest arround.
				</p>
			</section>
			<h3>
				Perlin Noise
			</h3>
			<p class="justifyText">
					We wanted to capitalize on our oscillation effect so we wanted to add a lot of variations to the floor of the map. To achieve that we used Perlin Noise
					to simulate variations. When the floor is high, we use a grass texture, when the floor is low we use a sand texture. And in between we interpolate the 2
					textures. All of that is directely done on the GPU for gaining time speed.<br>
					<br>
					What\'s more the Perlin Noise of the map is precalculated offline so that we can generated a random map but still don\'t lose time at the main loading :)
			</p>
			<section class="theme2 colonne">
				<img class="size500 resp_extend" src="images/FindTheBear/perlin.jpg" alt="I am an image :D">
				<p>
					When can obtain some cool terrain variations !
				</p>
			</section>
			<h3>
				Walls
			</h3>
			<p class="justifyText">
				As the horizontal axes are render based we had to re-code collisions again ... To bypass this issue we implement a functionality that would swap the 
				control of the player from render based to physic based for a short duration when the player collide with something.
			</p>
			<h3>
				Borders of the Map
			</h3>
			<p class="justifyText">
				We wanted to prevent the player from escaping the flying island, so we add a soft bounce system when the player was too close of the exterior in order
				to force him coming back.
			</p>
		</section>
		<section class="theme2 colonne">
			<h2>
				A video of gameplay ! :)
			</h2>
			<div class="">
				<video controls class="m3 size500">
				  <source src="images/FindTheBear/video.mp4" type="video/mp4">
				  Your browser does not support HTML5 video.
				</video>
				<p>
					The frame rate is slow because of the video ^^\'
				</p>
			</div>
		</section>
	</section>
			';

		return $text;
	}

 ?>
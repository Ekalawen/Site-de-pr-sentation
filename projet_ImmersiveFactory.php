<?php
	require_once("php/base_functions.php");

	echo getHeader("", "Immersive Factory");

	echo getTextProjet_ImmersiveFactory();

	echo getEndProjet();

	echo getFooter();

	function getTextProjet_ImmersiveFactory() {
		$text = '
		<section class="theme1 colonne">
				<h1>
					Immersive Factory
				</h1>
				<h2 class="fontSize200 no_underline">
					I made an internship at Immersive Factory during 2018 summer, for 3 months.
				</h2>
				<h2 class="fontSize200 no_underline">
					It is a Virtual Reality company dealing with Serious Gaming.<br>
					The main topic was about Health, Safety and Environment.
				</h2>
				<section class="theme2 colonne">
					<iframe width="889" height="500" src="https://www.youtube.com/embed/TAu8WsAK-J4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<p>
						Here is a trailer of the project I was working on as the main Unity Developer.<br>
						It ended up being published :)
					</p>
				</section>
		</section>
		<section class="theme2 colonne">
			<h2>
				Hazard Spotting : Gameplay
			</h2>
			<p class="justifyText">
				The main goal of the project was to educate people about the potential dangers and good practice to prevent them in a Glass Factory environment.<br>
				<br>
				In order to to that, the idea is to immersed the player into a Virtual Reality environment because we think that he is more inclined to learn as his
				whole body and actions are directely mapped with his thoughts. It\'s like if he was really living this experience, and so it\'s a much better way of
				teaching.<br>
				<br>
				Then, the player has the mission to found and photographs all the hazard he can found. Like an electrical outlet next to a water valve. Once the player
				found it, the hazard is then corrected and the player can see what the good action would have been.<break>
			</p>
			<h3>
				You can find here the page of the project :
			</h3>
			<a href="https://immersivefactory.com/page-training/51-Immersive-Chasse-aux-risques---Site-de-fabrication-de-vitrage" class="" target="_blank">
				<div>
					<section class="theme3 colonne redirection pb3">
						<h3 class="resetPaddingMargin">
							Immersive Factory Web Site
						</h3>
					</section>
				</div>
			</a>
		</section>
		<section class="theme1 colonne">
			<h2>
				What I have done
			</h2>
			<p class="justifyText">
				I was in charge of the development on this project. Even if some of the architecture was already in place, because they are doing a lot of similar projects,
				there was still place for refactoring or redesigning some stuff. As an instance, I took care about the photo taking picture in order to make it more
				intuitive and more permissive than a single raycast (that often miss the target).<br>
				<br>
				I was also in charge of the level design of the environment. And here I learned that I don\'t particularly like that ... As placing walls, people and stuff
				isn\'t what really excites me in the job of programmer ^^ In fact I think that this isn\'t a programmer job at all.<br>
				<br>
				I had also the opportunity to take care of the back-end on the simulation. I had to instore a token security system in order to restrict access to the player
				... But also a sending rapport system from the simulation to the plateform, which was rather instructive. Even if I do not really like dealing with web haha.
			</p>
			<section class="theme3 colonne">
				<img class="resp_extend" src="images/ImmersiveFactory/screenshot2.jpg" alt="Screenshot2">
				<p>
					Can you find the hazard ? :p
				</p>
			</section>
		</section>
			';

		return $text;
	}

 ?>
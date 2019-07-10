<?php
	require_once("php/base_functions.php");

	echo getHeader("");

	echo getTextProjet_AIBootCamp();

	echo getEndProjet();

	echo getFooter();

	function getTextProjet_AIBootCamp() {
		$text = '
		<section class="theme1 colonne">
				<h1>
					AI Boot Camp
				</h1>
				<h3>
					AI Boot Camp is a AI coding challenges designed to teach the fundamentals of Symbolic AI.
				</h3>
				<h3>
					This is how I knew that AI would became one of my greatest passions.
				</h3>
				<section class="theme2 colonne">
					<img class="resp_extend" src="images/AIBootCamp/intro.gif" alt="I am an image :D">
				</section>
		</section>
		<section class="theme2 colonne">
				<h1>
					Description of the Challenge
				</h1>
				<h3>
					The Rules
				</h3>
				<p class="justifyText">
					In AIBootCamp we must design an Artificial Intelligence that will be able to lead numerous Non Player Characters (Npc) into
					somes maps until they eventualy reach theirs goals.<br>
					Maps are sets of hexagons, named tiles, and a Npc can go from one adjacent tile to an other each turns.<br>
					Unfortunately maps are strewed with obstacles such as walls between two adjacent tiles or tiles that can be walked.<br>
					Maps can even contains doors, which seems rather harmless, but it isn\'t. In fact it was the main challenge across the entire problem.<br>
					<br>
					What\'s more, our Npc don\'t always see all the map. In fact, most of the time, Npc have a vision range, this means that they only know of
					tiles that are near to them and that aren\'t behind walls. In that sens they act similarly to humans, and that\'s the whole point of this challenge.<br>
					<br>
					Oh ! And did I mentionned that is was a group of Npc that we have to lead to theirs goals tiles ? This is also an increadible obstacle as Npcs can\'t 
					walk onto another, so we have to create group behavior and politeness policy between them !<br>
					<br>
					If you want to know more about the challenge in details, here is the link to the website of the challenge ! :	)
					<a href="https://sites.google.com/view/aibootcamp/home" class="" target="_blank">
						<div>
							<section class="theme3 colonne redirection pb3">
								<h3 class="resetPaddingMargin">
									AIBootCamp
								</h3>
							</section>
						</div>
					</a>
				<p>

				<section class="theme3 colonne w100">
					<h1>
						Technical challenges
					</h1>
					<p class="leftAlignText">
						In AIBootCamp there a lot of different challenges that we had to overcome, here is a list of a few of them :<br>
						<br>
						- <mark>Modeling</mark> : In order to take good decision, we have to create a Model from our sensors in which we can think.<br>
						- <mark>Planning</mark> : We have to decide for each Npc what to do every turn. But we want them to have coherent actions in time, so we need to plan ahead.<br>
						- <mark>Pathfinding</mark> : We need ours Npcs to find a path to a target, whether it\'s a goal or not.<br>
						- <mark>Collaboration</mark> : We want that Npcs collaborate in a way that optimize time and efforts of them globaly.<br>
						- <mark>Politeness</mark> : We want that them to act inteligently and not rushing into each others.<br>
						- <mark>Exploration</mark> : As we don\'t know the map in advance, we need them to gather informations about the world in order to take better decisions.<br>
						- <mark>Oriented Exploration</mark> : But we need some informations more than others, so we prioritize exploration.<br>
						- <mark>Interaction</mark> : We need to be able to open doors, or to stay on door activator switch until another (or several) Npc cross the door.<br>
						- <mark>Adaptability</mark> : We needed to construct a model such that we can add new features easily. Maybe we now have to dodge some guards ? Well, it\'s doable in our model !<br>
						- <mark>Performance</mark> : As in every video game, we have time constraints, so we need to be lightning fast, even if we don\'t reach the best solution each time. That\'s heartbreaking to me, but at least we always find a solution (and very often one of the best !).
					</p>
				</section>

		</section>
		<section class="theme1 colonne">
				<h1 class="">
					Iterations of the project
				</h1>
				<p class="justifyText">
					We first start this project alone, then after a first iteration essentialy focusing on pathfinding, we merge into team of 3 peoples. The project was now focused on cooperation and multiple Npcs planning. We then split the team and merge again in teams of 5 peoples. I had the chance that we keep my code as a solid base to continue work together each time. Now the project was focusing on improving performances, up to 15 milliseconds ! Finaly, we had a last iteration focused both on optimisation - we have to go up to 5 milliseconds ! - and the integration of a nightmarish and beautiful element : the doors ! <3<br>
				</p>
				<section class="theme2 colonne">
					<img class="resp_extend" src="images/AIBootCamp/maze.png" alt="I am an image :D">
					<p>
						Here an example of a rather complicated map, espacialy because of his size ! :)<br>
						Our algorithm find an optimal solution, can you ? (don\'t forget vision range !)
					</p>
				</section>
		</section>
		<section class="theme2 colonne">
				<h1>
					How we solve it !
				</h1>
				<p class="justifyText">
					We had the chance to have testing maps, which you can observe on the website. They helped us to focused on what was a problem and to found edges cases. However the final goal of this entire project was to be able to achieve maps that we would <mark>never have seen before</mark> !!!<br>
					<br>
					In order to emphasize this our amazing teacher Carl Côté created 10 secrets maps and told us that we will never seen them until we try them for the final test ! This kind of approache motivate me a lot during all the course of the project, and I think this is why we made such good results in the end.<br>
					<br>
					Finaly, we would end up solving 9 out of 10 of the secrets maps !!! I was sooo happy ! <3 Especially when I noticed that our teacher only solved 8 of them ! Even if there is a rational explication to this (our teacher used the same algorithm as last year because of a lack of time, however he add an harder time constraint that he didn\'t have last year, that\'s why his algorithm wasn\'t fully apropriate), this event fulfilled me ! :)<br>
					<br>
					If you want to understand our algorithm in details, please go check our paper here :
					<a href="images/AIBootCamp/IA_Rapport_Final.pdf" class="" target="_blank">
						<div>
							<section class="theme3 colonne redirection pb3">
								<h3 class="resetPaddingMargin">
									Algorithm analyse
								</h3>
							</section>
						</div>
					</a>
					<p class="justifyText">
						You can also find our presentation here :
					</p>
					<a href="images/AIBootCamp/IA_powerpoint.pdf" class="" target="_blank">
						<div>
							<section class="theme3 colonne redirection pb3">
								<h3 class="resetPaddingMargin">
									Powerpoint
								</h3>
							</section>
						</div>
					</a>
				</p>
			<section class="theme3 colonne">
				<h1>
					Here are some examples of what our algorithm is capable of ! <3
				</h1>
				<div class="ligne w100 resp_colone">
					<div class="">
						<video controls class="m3 resp_extend">
						  <source src="images/AIBootCamp/example1.mp4" type="video/mp4">
						  Your browser does not support HTML5 video.
						</video>
						<p>
							Here is an example of cooperation.
						</p>
					</div>
					<div class="">
						<video controls class="m3 resp_extend">
						  <source src="images/AIBootCamp/example2.mp4" type="video/mp4">
						  Your browser does not support HTML5 video.
						</video>
						<p>
							If the Npcs slow down at the end, it\'s because we are time slicing the algorithm if it takes too much time.<br>
							Like that we never TIME_LIMIT_EXCEPTION :)
						</p>
						<p>
							Oh ! And did you notice that while the whole execution, Npcs didn\'t see that goal at the left hand corner ? ;)
						</p>
					</div>
				</div>
			</section>
		</section>
			';

		return $text;
	}

 ?>
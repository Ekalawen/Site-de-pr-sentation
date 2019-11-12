<?php
	require_once("php/base_functions.php");

	echo getHeader("", "Icon Rush 2");

	echo getTextProjet_ir2();

	echo getEndProjet();

	echo getFooter();

	function getTextProjet_ir2() {
		$text = '
		<section class="theme1 colonne">
				<h1>
					Icon Rush 2 !
				</h1>
				<h2 class="fontSize200 no_underline nocount">
					This is the first video game I created.
				</h2>
				<h2 class="fontSize200 no_underline nocount">
					It will, thanks to this, always be my favorite one.
				</h2>
				<section class="theme2 colonne">
					<img class="resp_extend" src="images/ir2/projet_IR_1.jpg" alt="Projet IR 1">
				</section>
		</section>
		<section class="theme2 colonne">
				<h2>
					The concept : two parts
				</h2>
				<h3>
					Part one : A color racing (rushing ?) game !
				</h3>
				<p class="justifyText">
					In Icon Rush 2 you are playing a square who represent an Icon. The Icons are usually emblematics : Google, Linux, StarCraft 2, Magic and so on. Yes I will have issues with copyright. No this game is not for sale, don\'t worry.<br> But you are not alone ! You can play up to 6 person on the same computer ! It\'s a local game, and it unleashes the Fun with friends !<br>
					Soooo, what is the goal ? You must convert the field to your own color. You achieve this by just moving. And by moving you create bonuses. Quickly catch them before your opponents in order to take the advantage. <br>
					And that\'s all ! =)
				</p>
				<section class="theme3 colonne">
					<h3>
						And it looks like that !
					</h3>
					<p>
						At the beginning of the game ...
					</p>
					<img class="resp_extend" src="images/ir2/projet_IR_7.jpg" alt="Projet IR 7">
					<p>
						A few seconds later ...
					</p>
					<img class="resp_extend" src="images/ir2/projet_IR_6.jpg" alt="Projet IR 6">
					<p>
						When everything go crazy !
					</p>
					<img class="resp_extend" src="images/ir2/projet_IR_5.jpg" alt="Projet IR 5">
				</section>
				<h3 class="mt3">
					Part two : I love squares !
				</h3>
				<p class="justifyText">
					I made this game when I was in middle School. Then I worked on it again in preparatory School (that\'s why "2").<br>
					And this time, I wanted to make it looks awesome ! But I am not a graphist. I am a programmer. So I thought to a way to look beautiful without any pictures, and I say "I master the squares, I will create fireworks with them !".<br>
					<br>
					Oh ! And did I say it\'s random ? Each time you go to this screen, the squares will follow a different pattern.
				</p>
				<section class="theme3 colonne">
					<h3>
						Next time I will add videos, just for you ;)
					</h3>
					<p>
						When you lauch the game ...
					</p>
					<img class="resp_extend" src="images/ir2/projet_IR_9.jpg" alt="Projet IR 9">
					<p>
						I delete the buttons for you ;)
					</p>
					<img class="resp_extend" src="images/ir2/projet_IR_16.jpg" alt="Projet IR 16">
					<p>
						When everything go crazy ! (again :p)
					</p>
					<img class="resp_extend" src="images/ir2/projet_IR_13.jpg" alt="Projet IR 13">
					<p>
						It could be softer and class too.
					</p>
					<img class="resp_extend" src="images/ir2/projet_IR_11.jpg" alt="Projet IR 11">
					<p>
						And it\'s the same algorithm, only inputs are differents.
					</p>
				</section>
		</section>
		';

		return $text;
	}

 ?>
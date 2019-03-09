<?php
	require_once("php/base_functions.php");

	echo getHeader("");

	echo getTextProjet_ra();

	echo getEndProjet();
	
	echo getFooter();

	function getTextProjet_ra() {
		$text = '
		<section class="theme1 colonne">
				<h1>
					Greed House Bus
				</h1>
				<h3>
					I created this game in 2 weeks for a School Geek Week.
				</h3>
				<h3>
					Our group decided to talk about bus pollution.
				</h3>
				<h3>
					So I made this game.
				</h3>
			<section class="theme2 colonne">
				<img src="images/bus/bus02.png" alt="I am an image :D">
				<p>
					Catch them all my bus !<br>
					Stop them from polluting !
				</p>
			</section>
		</section>
		';

		return $text;
	}
?>

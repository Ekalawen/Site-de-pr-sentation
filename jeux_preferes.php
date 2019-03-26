<?php
	require_once("php/base_functions.php");

	echo getHeader("jeux");

	echo getTextJeuxPreferes();

	echo getFooter();

	function getTextJeuxPreferes() {
	$text = '
			<section class="theme1 colonne">
				<h1>
					Favorite games !
				</h1>
				<div class="inlineBlock">
						<section class="theme2 inlineBlock m1 size600">
							<img class="size400" src="images/jeux_preferes/sc2_protoss.jpg" alt="I am an image :D">
							<p class="">
								StarCraft 2 ! Master Zerg player :)
							</p>
						</section>
						<section class="theme2 inlineBlock ma size600">
							<img class="size400" src="images/jeux_preferes/darksouls3.jpg" alt="I am an image :D">
							<p class="">
								DarkSouls 3 !
							</p>
						</section>
						<section class="theme2 inlineBlock ma size600">
							<img class="size400" src="images/jeux_preferes/ori.jpg" alt="I am an image :D">
							<p class="">
								Ori and the Blind Forest !
							</p>
						</section>
						<section class="theme2 inlineBlock ma size600">
							<img class="size400" src="images/jeux_preferes/magicka.jpg" alt="I am an image :D">
							<p class="">
								Magicka !
							</p>
						</section>
						<section class="theme2 inlineBlock ma size600">
							<img class="size400" src="images/jeux_preferes/leekwar.png" alt="I am an image :D">
							<p class="">
								Honorable mention : Leek War !
							</p>
						</section>
						<section class="theme2 inlineBlock ma size600">
							<img class="size400" src="images/jeux_preferes/beatsaber.jpg" alt="I am an image :D">
							<p class="">
								Honorable mention : Beat Saber !
							</p>
						</section>
				</div>
		</section>
			';

		return $text;
	}


 ?>
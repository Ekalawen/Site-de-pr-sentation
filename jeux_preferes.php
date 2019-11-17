<?php
	require_once("php/base_functions.php");

	echo getHeader("jeux", "Favorite Games");

	echo getTextJeuxPreferes();

	echo getFooter();

	function getTextJeuxPreferes() {
	$text = '
			<section class="theme1 colonne">
				<h1>
					Favorite games!
				</h1>
				<div class="inlineBlock">
						<section class="theme2 inlineBlock m1 size600">
							<img class="size400" src="images/jeux_preferes/sc2_protoss.jpg" alt="SC2 protoss">
							<p class="">
								StarCraft 2! Master Zerg player :)
							</p>
						</section>
						<section class="theme2 inlineBlock ma size600">
							<img class="size400" src="images/jeux_preferes/darksouls3.jpg" alt="Darksouls3">
							<p class="">
								DarkSouls 3!
							</p>
						</section>
						<section class="theme2 inlineBlock ma size600">
							<img class="size400" src="images/jeux_preferes/ori.jpg" alt="Ori and the blind forest">
							<p class="">
								Ori and the Blind Forest!
							</p>
						</section>
						<section class="theme2 inlineBlock ma size600">
							<img class="size400" src="images/jeux_preferes/magicka.jpg" alt="Magicka">
							<p class="">
								Magicka!
							</p>
						</section>
						<section class="theme2 inlineBlock ma size600">
							<img class="size400" src="images/jeux_preferes/leekwar.jpg" alt="LeekWar">
							<p class="">
								Honorable mention : Leek War!
							</p>
						</section>
						<section class="theme2 inlineBlock ma size600">
							<img class="size400" src="images/jeux_preferes/beatsaber.jpg" alt="Beat Saber">
							<p class="">
								Honorable mention : Beat Saber!
							</p>
						</section>
				</div>
		</section>
			';

		return $text;
	}


 ?>
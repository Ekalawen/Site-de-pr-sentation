<?php
	require_once("php/base_functions.php");

	echo getHeader("projets", "Projets");

	echo getTextProjets();

	echo getFooter();

	function getTextProjets() {
		$text = '
		<section class="theme1">
			<h1>
				Projects
			</h1>
			<h2 class="fontSize200 no_underline">
				'. getDescription() .'
			</h2>
			<a href="projet_AlphaChessZero.php">
				<div class="size300-200" id="projet_img_AlphaChessZero">
					<div class="ligne w100 h100">
						<p class="volatileText">
							AlphaChess Zero
						</p>
					</div>
				</div>
			</a>

			<a href="projet_BattleForPangora.php">
				<div class="size300-200" id="projet_img_BattleForPangora">
					<div class="ligne w100 h100">
						<p class="volatileText">
							Battle for Pangora
						</p>
					</div>
				</div>
			</a>
			
			<a href="projet_AIBootCamp.php">
				<div class="size300-200" id="projet_img_AI">
					<div class="ligne w100 h100">
						<p class="volatileText">
							AI Boot Camp
						</p>
					</div>
				</div>
			</a>
			
			<a href="projet_HadokeMDP.php">
				<div class="size300-200" id="projet_HadokeMDP">
					<div class="ligne w100 h100">
						<p class="volatileText">
							HadokeMDP
						</p>
					</div>
				</div>
			</a>
			
			<a href="projet_ParanoCrisis.php">
				<div class="size300-200" id="projet_img_ParanoCrisis">
					<div class="ligne w100 h100">
						<p class="volatileText">
							ParanoCrisis
						</p>
					</div>
				</div>
			</a>
			
			<a href="projet_PrinceDesVoleurs.php">
				<div class="size300-200" id="projet_img_PrinceDesVoleurs">
					<div class="ligne w100 h100">
						<p class="volatileText">
							Prince of Thieves
						</p>
					</div>
				</div>
			</a>
			
			<a href="projet_DigitalWorld.php">
				<div class="size300-200" id="projet_img_DigitalWorld">
					<div class="ligne w100 h100">
						<p class="volatileText">
							Digital World
						</p>
					</div>
				</div>
			</a>
			
			<a href="projet_LaFievreDuSommet.php">
				<div class="size300-200" id="projet_img_LaFievreDuSommet">
					<div class="ligne w100 h100">
						<p class="volatileText">
							La Fièvre du Sommet
						</p>
					</div>
				</div>
			</a>
			
			<a href="projet_FindTheBear.php">
				<div class="size300-200" id="projet_img_FindTheBear">
					<div class="ligne w100 h100">
						<p class="volatileText">
							Find the Bear
						</p>
					</div>
				</div>
			</a>
			
			<a href="projet_GJ2018.php">
				<div class="size300-200" id="projet_img_GJ2018">
					<div class="ligne w100 h100">
						<p class="volatileText">
							GameJam 2018
						</p>
					</div>
				</div>
			</a>
			
			<a href="projet_ImmersiveFactory.php">
				<div class="size300-200" id="projet_img_ImmersiveFactory">
					<div class="ligne w100 h100">
						<p class="volatileText">
							Immersive Factory
						</p>
					</div>
				</div>
			</a>
			
			<a href="projet_sss.php">
				<div class="size300-200" id="projet_img_sss">
					<div class="ligne w100 h100">
						<p class="volatileText">
							Speed Skill Style
						</p>
					</div>
				</div>
			</a>

			<a href="projet_ra.php">
				<div class="size300-200" id="projet_img_ra">
					<div class="ligne w100 h100">
						<p class="volatileText">
							RagnArcane
						</p>
					</div>
				</div>
			</a>

			<a href="projet_ir2.php">
				<div class="size300-200" id="projet_img_ir2">
					<div class="ligne w100 h100">
						<p class="volatileText">
							Icon Rush 2
						</p>
					</div>
				</div>
			</a>

			<a href="projet_projet_long.php">
				<div class="size300-200" id="projet_img_projet_long">
					<div class="ligne w100 h100">
						<p class="volatileText">
							RogueLike
						</p>
					</div>
				</div>
			</a>
			

			<a href="projet_clicker.php">
				<div class="size300-200" id="projet_img_clicker">
					<div class="ligne w100 h100">
						<p class="volatileText">
							Pixel Clicker
						</p>
					</div>
				</div>
			</a>

			<a href="projet_bus.php">
				<div class="size300-200" id="projet_img_bus">
					<div class="ligne w100 h100">
						<p class="volatileText">
							Greed house bus
						</p>
					</div>
				</div>
			</a>

		</section>
		<section class="theme2 colonne">
				<h2 class="fontSize200 no_underline">
					I have done some stuff.
				</h2>
				<h2 class="fontSize200 no_underline">
					None of them is imposing.
				</h2>
				<h2 class="fontSize200 no_underline">
					But I loved each part of them.
				</h2>
				<h2 class="fontSize200 no_underline">
					Find most of them on GitHub !
				</h2>
				<a href="https://github.com/Ekalawen" class="" target="_blank">
					<div>
						<section class="theme3 colonne redirection pb3">
							<h3 class="resetPaddingMargin">
								GitHub
							</h3>
						</section>
					</div>
				</a>
		</section>

		<a href="jeux_preferes.php">
			<section class="theme3 colonne redirection">
				<div class="ligne w50 resp_extend">
						<p class="redirection_p">
							Do you want to see what inspired me ?
						</p>
				</div>
			</section>
		</a>
		';

		return $text;
	}

 ?>
<?php
	require_once("php/base_functions.php");

	echo getHeader("projets");

	echo getTextProjets();

	echo getFooter();

	function getTextProjets() {
		$text = '
		<section class="theme1 colonne">
				<h3>
					I have done some stuff.
				</h3>
				<h3>
					None of them is imposing.
				</h3>
				<h3>
					But I loved each part of each of them.
				</h3>
		</section>
		<section class="theme3 colonne">
			<p>
				Click on them ! On each of them !
			</p>
		</section>
		<section class="theme2">

			<a href="index.php">
				<div class="size300-200" id="projet_img1">
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
			
			<a href="index.php">
				<div class="size300-200" id="projet_img1">
					<div class="ligne w100 h100">
						<p class="volatileText">
							HadokeMDP
						</p>
					</div>
				</div>
			</a>
			
			<a href="index.php">
				<div class="size300-200" id="projet_img1">
					<div class="ligne w100 h100">
						<p class="volatileText">
							ParanoCrisis
						</p>
					</div>
				</div>
			</a>
			
			<a href="index.php">
				<div class="size300-200" id="projet_img1">
					<div class="ligne w100 h100">
						<p class="volatileText">
							Le Prince des Voleurs
						</p>
					</div>
				</div>
			</a>
			
			<a href="index.php">
				<div class="size300-200" id="projet_img1">
					<div class="ligne w100 h100">
						<p class="volatileText">
							Digital World
						</p>
					</div>
				</div>
			</a>
			
			<a href="index.php">
				<div class="size300-200" id="projet_img1">
					<div class="ligne w100 h100">
						<p class="volatileText">
							La Fièvre du Sommet
						</p>
					</div>
				</div>
			</a>
			
			<a href="index.php">
				<div class="size300-200" id="projet_img1">
					<div class="ligne w100 h100">
						<p class="volatileText">
							Find the Bear
						</p>
					</div>
				</div>
			</a>
			
			<a href="index.php">
				<div class="size300-200" id="projet_img1">
					<div class="ligne w100 h100">
						<p class="volatileText">
							GameJam 2018
						</p>
					</div>
				</div>
			</a>
			
			<a href="index.php">
				<div class="size300-200" id="projet_img1">
					<div class="ligne w100 h100">
						<p class="volatileText">
							Immersive Factory ?
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

			<a href="index.php">
				<div class="size300-200" id="projet_img1">
					<div class="ligne w100 h100">
						<p class="volatileText">
							Coming soon !
						</p>
					</div>
				</div>
			</a>

			<a href="index.php">
				<div class="size300-200" id="projet_img1">
					<div class="ligne w100 h100">
						<p class="volatileText">
							Coming soon !
						</p>
					</div>
				</div>
			</a>
			<a href="index.php">
				<div class="size300-200" id="projet_img1">
					<div class="ligne w100 h100">
						<p class="volatileText">
							Coming soon !
						</p>
					</div>
				</div>
			</a>
			<a href="index.php">
				<div class="size300-200" id="projet_img1">
					<div class="ligne w100 h100">
						<p class="volatileText">
							Coming soon !
						</p>
					</div>
				</div>
			</a>
			<a href="index.php">
				<div class="size300-200" id="projet_img1">
					<div class="ligne w100 h100">
						<p class="volatileText">
							Coming soon !
						</p>
					</div>
				</div>
			</a>
		</section>

		<a href="jeux_preferes.php">
			<section class="theme3 colonne redirection">
				<div class="ligne w50">
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
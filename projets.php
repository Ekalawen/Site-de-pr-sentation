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
					But i loved each part of each of them.
				</h3>
		</section>

		<section class="theme2">
			<a href="projets.php">
				<div class="size300-200" id="projet_img1">
					<div class="ligne w100 h100">
						<p class="volatileText">
							bonjour
						</p>
					</div>
				</div>
			</a>
			<a href="projets.php">
				<div class="size300-200" id="projet_img1">
					<div class="ligne w100 h100">
						<p class="volatileText">
							bonjour
						</p>
					</div>
				</div>
			</a>
			<a href="projets.php">
				<div class="size300-200" id="projet_img1">
					<div class="ligne w100 h100">
						<p class="volatileText">
							bonjour
						</p>
					</div>
				</div>
			</a>
			<a href="projets.php">
				<div class="size300-200" id="projet_img1">
					<div class="ligne w100 h100">
						<p class="volatileText">
							bonjour
						</p>
					</div>
				</div>
			</a>
			<a href="projets.php">
				<div class="size300-200" id="projet_img1">
					<div class="ligne w100 h100">
						<p class="volatileText">
							bonjour
						</p>
					</div>
				</div>
			</a>
			<a href="projets.php">
				<div class="size300-200" id="projet_img1">
					<div class="ligne w100 h100">
						<p class="volatileText">
							bonjour
						</p>
					</div>
				</div>
			</a>
			<a href="projets.php">
				<div class="size300-200" id="projet_img1">
					<div class="ligne w100 h100">
						<p class="volatileText">
							bonjour
						</p>
					</div>
				</div>
			</a>
			<a href="projets.php">
				<div class="size300-200" id="projet_img1">
					<div class="ligne w100 h100">
						<p class="volatileText">
							bonjour
						</p>
					</div>
				</div>
			</a>
			<a href="projets.php">
				<div class="size300-200" id="projet_img1">
					<div class="ligne w100 h100">
						<p class="volatileText">
							bonjour
						</p>
					</div>
				</div>
			</a>
			<a href="projets.php">
				<div class="size300-200" id="projet_img1">
					<div class="ligne w100 h100">
						<p class="volatileText">
							bonjour
						</p>
					</div>
				</div>
			</a>
			<a href="projets.php">
				<div class="size300-200" id="projet_img1">
					<div class="ligne w100 h100">
						<p class="volatileText">
							bonjour
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
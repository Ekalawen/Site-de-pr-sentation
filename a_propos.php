<?php
	require_once("php/base_functions.php");

	echo getHeader("apropos");

	echo getTextA_propos();

	echo getFooter();

	function getTextA_propos() {
		$text = '
		<section class="theme1 colonne">
				<h3>
					What do I like the most in life ?
				</h3>
				<bouton>
					3 things
				</bouton>
		</section>
		<section class="theme2">
			<div class="grid-container">
				<div class="grid-33 centerText">
					<bouton>
						Game Design
					</bouton>
				</div>
				<div class="grid-33 centerText">
					<bouton>
						Programming
					</bouton>
				</div>
				<div class="grid-33 centerText">
					<bouton>
						Playing
					</bouton>
				</div>
			</div>
		</section>
		<a href="index.php">
			<section class="theme3 colonne redirection">
				<div class="ligne w50">
						<p class="redirection_p">
							Do you want to see what I have done ?
						</p>
				</div>
			</section>
		</a>
		';

		return $text;
	}

 ?>
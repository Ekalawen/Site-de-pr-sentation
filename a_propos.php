<?php
	require_once("php/base_functions.php");

	echo getHeader("apropos");

	echo getTextA_propos();

	echo getFooter();

	function getTextA_propos() {
		$text = '
		<section class="theme1 colonne">
				<p>
					What do I like the most in life ?
				</p>
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
		';

		return $text;
	}

 ?>
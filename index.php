<?php
	require_once("php/base_functions.php");

	echo getHeader("accueil");

	echo getTextAcceuil();

	echo getFooter();


	function getTextAcceuil() {
		$text = '
		<section class="theme4">
			<div class="ligne 66">
				<p>

					 Dear Visitor, my website is currently under construction.
					 Thank you for your understanding.
				</p>
			</div>
		</section>
		<section class="theme1">
			<div class="ligne w50">
				<div class="colonne">
					<h3>
						Who I am ?
					</h3>
					<p>
						I am an IT engineering student passionate about designing and creating games. My dream is to create the next generation gaming experience.
					</p>
				</div>
			</div>
		</section>
		';

		return $text;	 
	}
 ?>


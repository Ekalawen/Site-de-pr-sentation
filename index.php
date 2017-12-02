<?php
	require_once("php/base_functions.php");

	echo getHeader("accueil");

	echo getTextAcceuil();

	echo getFooter();


	function getTextAcceuil() {
		$text = '
		<section class="theme4">
			<div class="ligne">
				<p>
					 Dear Visitor, my website is currently under construction.
					 Thank you for your understanding.
				</p>
			</div>
		</section>
		<section class="theme1 colonne">
				<h3>
					Who am I ?
				</h3>
			<div class="w50 justifyText">
				<p>
					I am an IT engineering student passionate about designing and creating games. My dream is to create the next generation gaming experience.
				</p>
			</div>
			<img id="photo_profile" src="images/moi/photo_profile.jpg" alt="Vous ne me voyez pas ?" />
			<p id="text_photo_profile" class="centerText">
			</p>
		</section>
		<a href="a_propos.php">
			<section class="theme3 colonne redirection">
				<div class="ligne w50">
						<p class="redirection_p">
							Do you want to know more about me ?
						</p>
				</div>
			</section>
		</a>
		';

		return $text;	 
	}
 ?>


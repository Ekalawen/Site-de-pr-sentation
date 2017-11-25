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
					<img id="photo_profile" src="images/moi/photo_profile.jpg" alt="Vous ne me voyez pas ?" />
					<p id="text_photo_profile" class="centerText">
					</p>
				</div>
			</div>
		</section>
		<a href="a_propos.php">
			<section class="theme3" id="redirection_about_me">
				<div class="ligne w50">
						<p id="redirection_about_me_p">
							Do you want to know more about me ?
						</p>
				</div>
			</section>
		</a>
		';

		return $text;	 
	}
 ?>


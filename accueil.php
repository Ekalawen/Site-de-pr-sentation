<?php
	require_once("php/base_functions.php");

	echo getHeader("accueil", "Home");

	echo getTextAcceuil();

	echo getFooter();


	function getTextAcceuil() {
		$text = '
		<section class="theme1 colonne">
				<h1>
					Who am I ?
				</h1>
			<div class="w50 justifyText resp_extend">
				<p class="justifyText">
					I am an IT engineering student passionate about designing and creating games. My dream is to create the next generation gaming experience.<br>
					<br>
					Creating universes and gameplay concepts is what motivates me and makes me vibrate since forever.
					For this reason, I naturally became developer where achieving my dreams has never been easier.<br>
					<br>
					Imagining, visualizing, designing, developing, testing and balancing.<br>
					That\'s how I have already design and develop numerous board games and video games.<br>
					<br>
					However, I would currently prefer to focus on more technical aspects of computer sciences and I am therefore looking for more
					demanding challenges in algorithmics such as Machine Learning and Dynamic Programming.<br>
					<br>
					Participating to the development and progress in Artificial Intelligence is my today my most precious dream.
					<br>
					<br>
				</p>
			</div>
			<img id="photo_profile" class="resp_small_extend" src="images/moi/photo_profile.jpg" alt="photo de profile" />
			<p id="text_photo_profile" class="centerText">
			</p>
		</section>
		<section class="theme2 colonne">
			<h2 class="fontSize200">
				You can find more about me by checking my LinkedIn account :<br>
			</h2>
			<a href="https://www.linkedin.com/in/alexys-dussier/" class="" target="_blank">
				<div>
					<section class="theme3 colonne redirection pb3">
						<h3 class="resetPaddingMargin">
							LinkedIn
						</h3>
					</section>
				</div>
			</a>
		</section>
		<section class="theme1 colonne">
			<h2 class="fontSize200">
				And you can also find my CV here :<br>
			</h2>
			<a href="images/cv/CV_anglais_Google.pdf" class="" target="_blank">
				<div>
					<section class="theme3 colonne redirection pb3">
						<h3 class="resetPaddingMargin">
							CV
						</h3>
					</section>
				</div>
			</a>
		</section>
		<a href="a_propos.php">
			<section class="theme3 colonne redirection">
				<div class="ligne w50 centerText resp_extend">
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


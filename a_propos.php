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
				<bouton id="btn3Things">
					3 things
				</bouton>
		</section>
		<section class="theme2 hidden" id="btn3ThingsAppear">
			<div class="ligne resp_colone">
				<section class="theme1 w33 centerText colonne resp_extend">
					<bouton id="btnDesign">
						Designing
					</bouton>
					<section class="theme2 hidden colonne" id="btnDesignAppear">
						<bouton id="btnGames">
							Games
						</bouton>
						<section class="theme1 hidden p1" id="btnGamesAppear">
							<p class="m1">
								Creating and designing games has been one of my favorite hobby since forever !
							</p>
						</section>
						<bouton id="btnAIDesigning">
							AI
						</bouton>
						<section class="theme1 hidden p1" id="btnAIDesigningAppear">
							<p class="m1">
								AI design has become recently a major passion to me !<br>
								I wish I could help designing the first Strong AI <3
							</p>
						</section>
						<bouton id="btnSystems">
							Complex systems
						</bouton>
						<section class="theme1 hidden p1" id="btnSystemsAppear">
							<p class="m1">
								I only feel alive when I create, alone or with others, something that is complex enough to surpass it\'s creator !<br>
								It\'s even better if complex rhyme with beautiful.
							</p>
						</section>
					</section>
				</section>
				<section class="theme1 w33 centerText colonne resp_extend">
					<bouton id="btnProgramming">
						Programming
					</bouton>
					<section class="theme2 hidden colonne" id="btnProgrammingAppear">
						<bouton id="btnMathematics">
							Mathematics
						</bouton>
						<section class="theme1 hidden p1" id="btnMathematicsAppear">
							<p class="m1">
								I really do like when mathematical components are used in programming :)
							</p>
						</section>
						<bouton id="btnAIProgramming">
							AI
						</bouton>
						<section class="theme1 hidden p1" id="btnAIProgrammingAppear">
							<p class="m1">
								Programming AI is as fun as designing them ! <3
							</p>
						</section>
						<bouton id="btnArchitecture">
							Architecture
						</bouton>
						<section class="theme1 hidden p1" id="btnArchitectureAppear">
							<p class="m1">
								Thinking in advance to the future problems to overcome them even before they dare appear !
							</p>
						</section>
					</section>
				</section>
				<section class="theme1 w33	centerText colonne resp_extend">
					<bouton id="btnPlaying">
						Playing
					</bouton>
					<section class="theme2 hidden colonne" id="btnPlayingAppear">
						<bouton id="btnHardCore">
							HardCore games
						</bouton>
						<section class="theme1 hidden p1" id="btnHardCoreAppear">
							<p class="m1">
								I like challenge, I like to feel myself progress and overcome difficulties !
							</p>
						</section>
						<bouton id="btnCompetitive">
							Competitive games
						</bouton>
						<section class="theme1 hidden p1" id="btnCompetitiveAppear">
							<p class="m1">
								And I think other players are one of the best source of adversity !
							</p>
						</section>
						<bouton id="btnDeep">
							Deep games
						</bouton>
						<section class="theme1 hidden p1" id="btnDeepAppear">
							<p class="m1">
								Creating emergent strategies that designer didn\'t think of, if you can do this, then your game will drive me crazy ! <3
							</p>
						</section>
					</section>
				</section>
			</div>
		</section>
		<a href="index.php">
			<section class="theme3 colonne redirection">
				<div class="ligne w50 resp_extend">
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
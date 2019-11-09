<?php
	require_once("php/base_functions.php");

	echo getHeader("", "AlphaChess Zero");

	echo getTextProjet_AlphaChessZero();

	echo getEndProjet();

	echo getFooter();

	function getTextProjet_AlphaChessZero() {
		$text = '
		<section class="theme1 colonne">
				<h1>
					AlphaChess Zero
				</h1>
				<h2 class="fontSize200">
					AlphaChess Zero is an Artificial Intelligence algorithm that try to reproduce the well known
					AlphaGo Zero from DeepMind and adapt it to the Chess game.
				</h2>
				<section class="theme2 inlineBlock">
					<img class="size500 resp_extend" src="images/BDCG/images/classic_start_top_600px.png" alt="Classic_start_top_600px">
					<p>
						We use a homemade 3D Chess game for simulating our agent.
					</p>
				</section>
		</section>
		'.
		/// Plan du papier.
		// The initial idea : BDCGH
			// Mets des putains d'images pour tous tes concepts !
		// Code of the Chess game
		// The history feature
		// The fail : never succeed to import Keras
		// The challenge : code Keras + Numpy
			// Numpy
			// Keras ==> Miss optimisations + C# is slow (talk about C#optimisations)

		// MCTS
			// 4 steps
			// The heuristic : UCB1 or UCB

		// Penser à rajouter beaucoup de schémas !
		//- insérer github : https://gitlab.com/Ekalawen/balanceddungeonchessgenerator
		// Penser à insérer un sommaire qui va directement aux endroits visés
		'
		<section class="theme2 colonne">
			<h2>
				The original idea : Balanced Dungeon Chess Generator (BDCG)
			</h2>
			<p class="justifyText">
				The original idea of this project was name Balanced Dungeon Chess Generator. Its goal was to succeed to create an algorithm
				that could create a new random Chess board, with all sorts of features, while making sure that the game was still balanced
				between the two players.
			</p>
			<section class="theme1 inlineBlock">
				<img class="size500 resp_extend" src="images/BDCG/images/random_8x8_start_top.png" alt="random_8x8_start_top.png">
				<p>
					Here is a sample of what it could have look like.
				</p>
			</section>
			<p class="justifyText">
				Creating a random chess board isn\'t that hard, we only have to put random pieces and random tiles at random places, and that\'s it,
				we have a random board !<br>
				But the feature that is really interesting is to succeed to create a <mark>balanced</mark> chess board, where both player could have
				the same chances to win. And I think this was the feature that would make the difference between a boring board and an interesting one.<br>
				So this was the central part : balancing.
			</p>
			<h3>
				Plan of BDCG
			</h3>
			<p class="justifyText">
				So, how do we do that ? How could we achieve to create a board that is balanced for the two players ? I mean, even a chess master would have
				difficulties to be able to say if a board that he has never seen before is balanced or favored for one player, especially if we are adding new
				features that he is unfamiliar with (we will talk about that later) ! He would have to play from this board state again and again to start
				having a feeling of who "should" (assuming both players are playing perfectly) win in this game state.<br>
				<br>
				But in fact this is exactly the idea I wanted to implement ! Having a chess master that could tell whether or not the game is balanced !<br>
				<br>
				So here is the plan :<br>
				<br>
				1) Generate a random board state<br>
				2) Train an agent to become a chess master on this board, for white and black<br>
				3) Once the agent is fully trained, make the agent play against itself for a large number of games.<br>
					3)a) If the win ratio are not balanced, go back to step 1)<br>
					3)b) If the win ratio are balanced, congratulation ! You just created a new balanced board chess game !<br>
				<br>
				We will now discuss each of the 3 above point to see how to implement them and where are the difficulties.
			</p>
			<h4>
				What is the best way of generating a random board state ?
			</h4>
			<p class="justifyText">
				The main danger of our idea, is that we may never succeed to randomly create a balanced chess board, even if we can generate a lot of states !
				And this is mainly due to the fact that it is possible (I am not sure, but I think it is, and we have to take into account all possibilities) 
				that our space of existing boards is dense with non-balanced boards so that finding a balanced board is very unlikely to happend.<br>
				<br>
				In the same way as generating a random image is unlikely to give us the face of recognizable person, having a random board to be a balanced board
				is unlikely to happend. However, in image generation they succeed to found a technique that solves this problem, and we are gonna use the same
				technique !<br>
				<br>
				It is called Generative Adversarial Networks (or GAN) and the idea behind GAN, which I think is amazing, is the following : 2 neural networks 
				are competing with each other to outclass the other network, the first network is a generator which will create things, and the second network
				is a classifier which will try decide wether or not the thing created by the first network is valid or not. Both of them are rewarded if they
				succeed to beat the other : the first will be rewarded if it could create a thing that the second fail to classify and the second will be rewarded
				if it successfully classify the thing of the first network.<br>
				<br>
				In image face generation, they used to train GAN with a network generating face images and a second network that was a classifier of face 
				images. And that gave excellent results !<br>
				<br>
				Here, we are going to do the same thing by adapting GANs to our problem. We will have a first network that will generate random boards, and
				then we will have a second network which will be a master chess player that will try to "crack" the board and win every single games on it !
				If the second network succeed to win most of the time ("most" being defined with a treshold over the winrate) then the first network will be
				punished and have a bad reward. However, if the second network never succeed to find an optimal strategy on this board (that\'s what I meant by 
				"cracking") then we will reward the first network so that it will produces even more boards of this kind !
			</p>
			<h4>
				We need a chess master algorithm : let\'s use AlphaGo Zero !
			</h4>
			<p class="justifyText">
				If you are still with me, we need for the second network of our GAN an algorithm that could play state-of-the art games of chess so that
				he could really tell wether or not a board chess is balanced.<br>
				DeepMind at Google already address this problem with the state-of-the-art algorithm AlphaGo Zero that showed amazing results in 2017 by
				beating the precedent version of this algorithm, AlphaGo (that previously won against the World Champion Lee Se-dol), 100 games at 0 !<br>
				<br>
				They are 2 things that are absolutely amazing about this algorithm :<br>
				First, it use Reinforcement Learning, which means that it learns from only the rules of the game and without human knowledge to supervise it.
				The idea is to let play the algorithm (the agent) against itself so that it will learn from its own mistakes. This is amazing because it
				allows the agent to not being lead by human knowledge and to discover its own playstyle (and therefore its own intelligence) without being
				bounded by potential human mistakes and conventions.<br>
				Second, this algorithm don\'t need anything except the rules of the game. Which means that it is generalist enought to be easily adapted to 
				other perfect-information games such as Chess !<br>
				<br>
				And thoses are the two reason I chosed to reproduce this algorithm as the second network of the GAN.
			</p>
			<h4>
				Can we say that if an agent can\'t take over it\'s opponent, it is a proof of a balanced game ?
			</h4>
			<p class="justifyText">
				This is I think the more debatable part of the Plan.<br>
				First of all, in perfect-imformation game theory at two players, if we ignore the draw, each state of a game is either a winning state or
				a losing state. This means that if both players plays perfectly, one of them will always win from one fixed state of the game. This is
				called Zermelo\'s theorem. So, as a direct result of this theorem, a balanced board state at chess canno\'t exist ! Even our well known
				Chess is not balanced !<br>
				<br>
				However Chess is a really deep and complicated game. According to Shanon there exist about 10<sup>100</sup> different possible ends for
				the Chess game, which means that it is impossible to brute-force Chess to find the optimal strategy.<br>
				By the fact that Chess is so complicated and that Chess could end in a draw, we never founded the optimal strategy for white or black, even if 
				it exist ! This means that a balanced board chess on which players can compare their skills is still possible !<br>
				<br>
				Second, it is important to realize that it is not because one algorithm can\'t find the optimal strategy that the game canno\'t be cracked. An
				example of this is with AlphaZero for Go, it would be absolutely foolish for a human to try to beat it, it is almost impossible now. For this
				reason, with the human kind referential, we can say that AlphaZero cracked Go. In the same idea, and it\'s the most important part, it is not
				because an algorithm can\'t crack a chess board that it canno\'t be cracked by an other algorithm or even a human ! This means that if the 
				second network of our GAN can\'t find an overwhelming strategy, it doens\'t mean that the game is balanced.<br>
				<br>
				Third, it might seems like a bad new, but if we succeed to create an algorithm as strong at Chess as AlphaZero is, and if that algorithm canno\'t
				succeed to crack a board state, then that means that, with hight probability, that a human couldn\'t crack it either ! So we can still say
				that AlphaZero as an heuristic of how balanced a board state is, is still a good idea !<br>
				<br>
				Finally, we still have one more problem to solve. How to decide if AlphaZero has converged and cracked a board state ? If, after some times, the 
				win rate of one player is around or above 90%, we could say that the algorithm cracked the board state. But what if after some times, the win 
				rate of both players is still around 50% ? Does this means that the board state is balanced ? Or does this means that the algorithm didn\'t have
				enought time to converge ? This is a really important and annoying question. In theory, we could not know. But in practice, we could average
				the times that the algorithm needed to converge when it converged to estimate a point in time after which it is very unlikely to converge anymore.
			</p>
			<h3>
				Why it didn\'t work like I planned ... !
			</h3>
			<p class="justifyText">
				Unfortunately, I never succeed to make work this beautiful algorithm. I still think it would work, but I just used the wrong tools and this
				totally prevented me from succeeded.<br>
				<br>
				I think my biggest mistake was to wanted to had a 3D representation of a board state in order to be able to easily understand what was going on
				and debug. However, to do that I decided to used Unity as it\'s really convenient for 3D games. But what I didn\'t tought of was that the
				marriage of Unity + C# made it really complicated to import a DeepLearning framework into the project. I really tried to import one, for weeks,
				but I never succeeded. Shame on me. However, I didn\'t stop here. I decided that I would create my own DeepLearning framework. This time I 
				succeeded, and it was extremely enriching and an amazing learning experience. However, I didn\'t realize that C# was such a slow langage,
				because of its intensive uses of references, at the opposite of C++ is it not an Oriented Object Langage but a Reference Oriented Langage.
				And I didn\'t have the willingness to code a GPU interface to boost-up the speed of the computations.<br>
				<br>
				In the end, the speed of my algorithm, due to the slowness of the langage and the inability to use GPU is what prevented me to
				make my algorithm work.
			</p>
		</section>
		<section class="theme1 colonne">
			<h2>
			</h2>
			<h3>
			</h3>
			<p class="justifyText">
			</p>
			<h3>
			</h3>
			<p class="justifyText">
			</p>
			<h3>
			</h3>
			<p class="justifyText">
			</p>
			<h3>
			</h3>
			<p class="justifyText">
			</p>
			<h3>
			</h3>
			<p class="justifyText">
			</p>
		</section>
			';

		return $text;
	}

 ?>
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
				<h2 class="fontSize200 no_underline">
					AlphaChess Zero is an Artificial Intelligence algorithm that try to reproduce the well known
					AlphaGo Zero from DeepMind and adapt it to the Chess game.<br>
				</h2>
				<section class="theme2 inlineBlock">
					<img class="size500 resp_extend" src="images/AlphaChessZero/images/BDCG/classic_start_top_600px.png" alt="Classic_start_top_600px">
					<p>
						I used a homemade 3D Chess game for simulating agents.
					</p>
				</section>
		</section>
		'.
		/// Plan du papier.
		// The initial idea : BDCGH
			// Mets des putains d'images pour tous tes concepts !
		// Code of the Chess game
		// The history feature
		// The fail : never succeed to import Keras ==> already done !
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
				The original idea of this project was named Balanced Dungeon Chess Generator. Its goal was to succeed to create an algorithm
				that could create a new random Chess board, with all sorts of features, while making sure that the game was still balanced
				between the two players.
			</p>
			<section class="theme1 inlineBlock">
				<img class="size500 resp_extend" src="images/AlphaChessZero/images/BDCG/random_8x8_start_top.png" alt="random_8x8_start_top.png">
				<p>
					Here is a sample of what it might have looked like.
				</p>
			</section>
			<p class="justifyText">
				Creating a random chess board isn\'t that hard, we only have to put random pieces and random tiles at random places, and that\'s it,
				we have a random board !<br>
				But the feature that is really interesting is to succeed to create a <mark>balanced</mark> chess board, where both player could have
				the same chances to win. And I think this is the feature that make the difference between a boring board and an interesting one.<br>
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
				1) Generate a random board state.<br>
				2) Train an agent to become a chess master on this board, for white and black.<br>
				3) Once the agent is fully trained, make the agent play against itself for a large number of games.<br>
					3)a) If the win ratio are not balanced, go back to step 1).<br>
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
				In the same way as generating a random image is unlikely to give us the face of a recognizable person, having a random board to be a balanced board
				is unlikely to happend. However, in image generation they succeed to found a technique that solves this problem, and we are gonna use the same
				technique !<br>
				<br>
				This technique is called Generative Adversarial Networks (or GAN) and the idea behind GAN, which I think is amazing, is the following :<br>
				2 neural networks are competing with each other to outclass the other network, the first network is a generator which will create things,
				and the second network is a classifier which will try decide whether or not the thing created by the first network is valid or not. Both of
				them are rewarded if they succeed to beat the other : the first will be rewarded if it could create a thing that the second fail to classify
				and the second will be rewarded if it successfully classify the thing of the first network.<br>
				<br>
				In image face generation, they used to train GAN with a network generating face images and a second network that was a classifier of face 
				images. And that gave excellent results !<br>
				<br>
				Here, we are going to do the same thing by adapting GANs to our problem. We will have a first network that will generate random boards, and
				then we will have a second network which will be a master chess player that will try to "crack" the board and win every single games on it !
				If the second network succeed to win most of the time ("most" being defined with a treshold on the winrate) then the first network will be
				punished and have a bad reward. However, if the second network never succeed to find an optimal strategy on this board (that\'s what I meant by 
				"cracking") then we will reward the first network so that it will produces even more boards of this kind !
			</p>
			<h4>
				We need a chess master algorithm : let\'s use AlphaGo Zero !
			</h4>
			<p class="justifyText">
				If you are still with me, we need for the second network of our GAN an algorithm that could play state-of-the art games of chess so that
				he could really tell whether or not a board of chess is balanced.<br>
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
			<a href="https://deepmind.com/blog/article/alphago-zero-starting-scratch" class="" target="_blank">
				<div>
					<section class="theme3 colonne redirection pb3">
						<div class="resetPaddingMargin">
							<img class="size500 resp_extend" src="images/AlphaChessZero/images/others/AlphaGo_Zero_600px.png" alt="AlphaGo_Zero_600px">
							<p>
								Here is a link to AlphaGo Zero original algorithm.
							</p>
						</div>
					</section>
				</div>
			</a>
			<h4>
				Can we say that if an agent can\'t take over it\'s opponent, it is a proof of a balanced game ?
			</h4>
			<p class="justifyText">
				This is I think the more debatable part of the Plan.<br>
				First of all, in perfect-imformation game theory at two players, if we ignore the draw, each state of a game is either a winning state or
				a losing state. This means that if both players plays perfectly, one of them will always win from one fixed state of the game. This is
				called Zermelo\'s theorem. So, as a direct result of this theorem, a balanced board state at Chess can\'t exist ! Even our well known
				Chess is not balanced !<br>
				<br>
				However Chess is a really deep and complicated game. According to Shanon there exist about 10<sup>118</sup> different possible ends for
				the Chess game, which means that it is impossible to brute-force Chess to find the optimal strategy.<br>
				By the fact that Chess is so complicated and that Chess could end in a draw, we never founded the optimal strategy for white or black, even if 
				it exist ! This means that a balanced board of chess on which players can compare their skills is still possible !<br>
				<br>
			</p>
			<section class="theme1 inlineBlock">
				<img class="size500 resp_extend" src="images/AlphaChessZero/images/others/10-118_ending_600px.jpg" alt="10-118_ending_600px">
				<p class="">
					10<sup>118</sup> is a lot ! They are 10<sup>80</sup> atoms in the visible universe,<br>
					so even if each atoms could test 1 ending each seconds,<br>
					we would still need 10<sup>38</sup> seconds = 10<sup>30</sup> years to compute all possibles cases !
				</p>
			</section>
			<p class="justifyText">
				Second, it is important to realize that it is not because one algorithm can\'t find the optimal strategy that the game can\'t be cracked. An
				example of this is with AlphaZero for Go, it would be absolutely foolish for a human to try to beat it, it is almost impossible now. For this
				reason, with the human kind referential, we can say that AlphaZero cracked Go. In the same idea, and it\'s the most important part, it is not
				because an algorithm can\'t crack a chess board that it can\'t be cracked by an other algorithm or even a human ! This means that if the 
				second network of our GAN can\'t find an overwhelming strategy, it doens\'t mean that the game is balanced.<br>
				<br>
				Third, it might seems like a bad new, but if we succeed to create an algorithm as strong at Chess as AlphaZero is, and if that algorithm can\'t
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
				Why it didn\'t work like planned ... !
			</h3>
			<p class="justifyText">
				Unfortunately, I never succeed to make work this beautiful algorithm. I still think it would work, but I just used the wrong tools and this
				totally prevented me from succeeded.<br>
				<br>
				I think my biggest mistake was to wanted to had a 3D representation of a board state in order to be able to easily understand what was going on
				and debug. However, to do that I decided to use Unity as it\'s really convenient for 3D games. But what I didn\'t tought of was that the
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
		'.
		// Code of the Chess game
			// Main goals !
				// Data driven ==> easily modifiable, adding stuff easily
				// Being able to add lots of features easily !
				// User friendly
				// can replace a human player with a machine player easily
			// Global architecture // Oriented object programming
		'
		<section class="theme1 colonne">
			<h2>
				Code of the Chess game
			</h2>
			<p class="justifyText">
				Even before we start thinking about AI, we need what we call an environment. We need a place where our agents could act and evolves, and here
				it will be the famous Chess game. I could have either import one, or create my own. I decided to create my own Chess game for 2 reasons.<br>
				First, I will be in control of every single details in my implementation and this will allows me to have better adaptability to problems
				and a better understanding of any situations.<br>
				Second, it will allows me to modify everything as I wish. If I want to replace all Bishops and Knights by Rooks, I can do it. If I want all 
				Pawns to move like Queens, I can do it. If I want my opponent to skip its 3 first turns, I can still do it. And this is as fun as useful ! <3<br>
				<br>
				For all of this reasons, coding my own Chess game was a necessity.
			</p>
			<h3>
				Main Goals of the Chess game
			</h3>
			<p class="justifyText">
				While developing the code of this Chess games, I had several objectives in mind.<br>
				<br>
				First of all, I really wanted my code to be <mark>Data Driven</mark>. I wanted to be able to easily change all parameters of a game
				without having to go fetch the right place inside the code and hard-change it, I just wanted to press a button to do it. To do that,
				Blueprints of Unity are really convenient so I intensively used them. This allowed me to code the code of the game once while having
				lots of different "games" I could play with.<br>
				<br>
				Second, I wanted the interface for the human player user to be as intuitive and accessible as possible. As I didn\'t want the numeric
				interface to be a barrier to play this game.<br>
				<br>
				Third, I wanted to be able to rapidly swap a human player with a bot or an AI. (a bot is a hard-coded agent while an AI is a machine
				Learning agent)
			</p>
			<section class="theme2 inlineBlock">
				<img class="size500 resp_extend" src="images/AlphaChessZero/images/BDCG/knight_moves_600px.png" alt="knight_moves_600px">
				<img class="size500 resp_extend" src="images/AlphaChessZero/images/BDCG/queen_moves_600px.png" alt="queen_moves_600px">
				<p class="">
					Here we can instantly see where the knight and the queen can go and where they can capture.
				</p>
			</section>
			<h3>
				Global architecture
			</h3>
			<p class="justifyText">
				As always when I am developing games, I am trying to create a class for every thing that I can name in the game. I am then connecting them
				together in the way that seems the more logical. So this is how I introduced the Board, Tile, Piece, Move, Player and Camera classes.<br>
				However I was needed some others classes to link them together, this is why I have the GameManager that takes care about all instances
				used in the game, the PieceManager that takes cares about the Pieces that are instanciated in the game and the VictoryManager that
				decide whether or not the game is ended.<br>
			</p>
			<h4>
				The Piece and Move classes
			</h4>
			<p class="justifyText">
				All Pieces have moves, and it\'s them which define what the Piece can do. As an instance, it exists a vertical and horizontal move that
				can go as far as possible in these directions, as it exists a diagonal move that can go only one tile away.<br>
				<br>
				All Chess pieces (Pawns, Bishops, Knights, Rooks, Queens and Kings) are Pieces (really ? :o), but I have chosen not to give them specific
				classes. For instance, I didn\'t make a Rook or Pawn class that would inherit from the Piece class. Instead of this I have chosen to used
				a Composition approach instead of a Inheritance approach. It is more flexible as a Piece is now entirely describes by the Moves it owns.
				So a rook is a rook because it can moves horizontaly and verticaly of any number of cases it want, it\'s not rook because it is labeled like
				it. As I said early, it offers more possibilities because if we want to interact with our Piece moves, we can easily do so without having
				to create an other class ! This way we can easily imagine a Rook-Knight, or even promote a Piece in the middle of the game into a Rook-Knight !
				I think it would be fun :)<br>
				However, Piece still have a labeled attribute that tell whether the Piece is intended to be a PAWN/BISHOP/KNIGHT/ROOK/QUEEN/KING for convenience
				purposes.
			</p>
			<h4>
				The Player class
			</h4>
			<p class="justifyText">
				The GameManager owns 2 Player instances, one for white and one for black. I wanted the GameManager to interact in the same way with Players 
				regardless of the Player being an human or an AI. For this reason, there are several classes that inherit from the Player class such as 
				HumanPlayer, RandomPlayer and NeuralNetworkPlayer. And all of them implement the Play method that take in parameters the board state and give
				back a Play as a result.
			</p>
			<h4>
				The Tile class
			</h4>
			<p class="justifyText">
				Maybe you wonder why do we need a Tile class ? After all, all the Tiles in Chess are the same, we can go on either one without differencies
				(except for Bishops !). So why a Tile class ?<br>
				<br>
				If you remember well, the ultimate goal was to generate a new board state, and to achieve that, one of my idea was to allow the Chess game
				to have different type of tiles ! I started with 4 types :<br>
				- The Mountain : you can\'t stand or cross this tile, never !<br>
				- The Forest : you can go and stand on this tile, but you can cross it if you weren\'t already on it !<br>
				- The Dungeon : you can move normally on this tile. However, if you capture an opponent piece that was already on a Dungeon Tile, the opponent
				piece would capture your piece back !<br>
				- The Nothing Tile : this is the default Tile that does nothing special :)<br>
			</p>
			<section class="theme2 inlineBlock">
				<div class="ligne">
					<div class="colone">
						<img class="size200 resp_extend" src="images/AlphaChessZero/images/BDCG/mountain_600px.png" alt="mountain_600px">
						<p class="">
							Mountain
						</p>
					</div>
					<div class="colone">
						<img class="size200 resp_extend" src="images/AlphaChessZero/images/BDCG/forest_600px.png" alt="forest_600px">
						<p class="">
							Forest
						</p>
					</div>
					<div class="colone">
						<img class="size200 resp_extend" src="images/AlphaChessZero/images/BDCG/dungeon_600px.png" alt="dungeon_600px">
						<p class="">
							Dungeon
						</p>
					</div>
				</div>
				<p class="">
					Here are the different Tiles types.
				</p>
			</section>
			<section class="theme2 inlineBlock">
				<img class="resp_extend" src="images/AlphaChessZero/images/schemas/Global_UML.png" alt="Global_UML">
				<p class="">
					Here is an UML to visualize the whole architecture.
				</p>
			</section>
		</section>
		'.
		// The history feature
		'
		<section class="theme2 colonne">
			<h2>
				The Replay feature
			</h2>
			<p class="justifyText">
				Even before I started programming any AI, I knew I would need to be able to observe what the AI was doing, in order to debug and understand it.
				I didn\'t want to have to read text representations of a game of chess, because they are just unreadable to me !<br>
			</p>
			<section class="theme1 inlineBlock">
				<img class="resp_extend" src="images/AlphaChessZero/images/others/game_01.png" alt="game_01">
				<p class="">
					As you can see, it\'s not really ... convenient.
				</p>
			</section>
			<p class="justifyText">
				For this reason, I started implementing the Replay feature.<br>
			</p>
			<h3>
				Game representation difficulty
			</h3>
			<p class="justifyText">
				In principle a Replay isn\'t that hard, you just need to describe an initial situation and gives all the plays (as pair of board positions) of 
				the game, one by one, and you would have a perfectly fine Replay feature ! (Just avoid to give all states after each plays because it would be
				extremely ressources intensive !)<br>
				<br>
				The difficulty lies, not in the model of the game that could be really easily describes, but in the view of the game. In my Chess code, the 
				view of the game is how I represent the board and the pieces of the game to the screen : it is the ensemble of the 3D assets that are used to
				display the game to the screen, like the shape of pawns, bishops and so on.<br>
				<br>
				Because I wanted not being restreint to a certain set of types of pieces, I also needed to refer to the view a piece was attached to. And this
				was a bit more difficult as it wasn\'t just an enumeration, it was the id of an entire asset. Fortunately the serialization feature of C# manage
				this easily ! But it leads to others difficulies ! ...
			</p>
			<h3>
				Serialization difficulties ...
			</h3>
			<p class="justifyText">
				The serialization of C# is really easy to use, you just give it an object, and it will entirely serialize it for you into a json string.<br>
				Except that it doesn\'t handle abstract classes and inheritance and List of List and references cycles. And guess what ? A GameObject (the 
				thing you really care to serialize) is just a container that posses a lot of Components, and a Component is ... an abstract class ! So this
				means that in the end you can\'t serialize anything easily ...<br>
				<br>
				To tackle this problem, we have to use a technique named Data Extraction. The idea is that for a given class, you will create a structure
				whose only purpose is to contain the datas of your class. And then your class, which you can\'t serialize, will reference the structure you
				have created. And you can serialize this structure. You then only need to have a conversion function that can generate your class from
				your structure and reciprocally.<br>
				I think this is a bad design as it\'s force you to duplicate a lot of code and have 2 class that represent the same thing, which is never
				a good idea. However I needed that technique and I think it was the best solution overall. It could even have advantages if we want
				to optimise cache memory by putting all the structure in the same memory space so that we can iterate over them very quickly ! (But this
				is not something we can do in C#, it\'s more of a C++ stuff.)<br>

				// Talk about binarisation aussi ! et expliquer pourquoi ça ne marche pas x)
			</p>
			<section class="theme1 inlineBlock">
				<img class="resp_extend" src="images/AlphaChessZero/images/schemas/Data_Extraction_UML.png" alt="Data_Extraction_UML">
				<p class="">
					Here is an UML diagram that summary the Data Extraction technique.
				</p>
			</section>
			<section class="theme1 inlineBlock">
				<video controls muted class="m3 size500">
				  <source src="images/AlphaChessZero/videos/Replay_myself_vs_myself.mp4" type="video/mp4">
				  Your browser does not support HTML5 video.
				</video>
				<p class="justifyText">
					And here we can see what it finally looks like !<br>
					It is a Replay of a game of myself against myself :)
				</p>
			</section>
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
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
				<h2 class="fontSize200 no_underline nocount">
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

		// Penser à rajouter beaucoup de schémas !
		//- insérer github : https://gitlab.com/Ekalawen/balanceddungeonchessgenerator
		// Penser à insérer un sommaire qui va directement aux endroits visés
		'
		<section class="theme2 colonne">
			<h2>
				The original idea: Balanced Dungeon Chess Generator (BDCG)
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
				we have a random board!<br>
				But the feature that is really interesting is to succeed to create a <mark>balanced</mark> chess board, where both player could have
				the same chances to win. And I think this is the feature that make the difference between a boring board and an interesting one.<br>
				So this was the central part: balancing.
			</p>
			<h3>
				Plan of BDCG
			</h3>
			<p class="justifyText">
				So, how do we do that? How could we achieve to create a board that is balanced for the two players? I mean, even a chess master would have
				difficulties to be able to say if a board that he has never seen before is balanced or favored for one player, especially if we are adding new
				features that he is unfamiliar with (we will talk about that later)! He would have to play from this board state again and again to start
				having a feeling of who "should" (assuming both players are playing perfectly) win in this game state.<br>
				<br>
				But in fact this is exactly the idea I wanted to implement! Having a chess master that could tell whether or not the game is balanced!<br>
				<br>
				So here is the plan:<br>
				<br>
				1) Generate a random board state.<br>
				2) Train an agent to become a chess master on this board, for white and black.<br>
				3) Once the agent is fully trained, make the agent play against itself for a large number of games.<br>
					3)a) If the win ratio are not balanced, go back to step 1).<br>
					3)b) If the win ratio are balanced, congratulation! You just created a new balanced board chess game!<br>
				<br>
				We will now discuss each of the 3 above point to see how to implement them and where are the difficulties.
			</p>
			<h4>
				What is the best way of generating a random board state?
			</h4>
			<p class="justifyText">
				The main danger of our idea, is that we may never succeed to randomly create a balanced chess board, even if we can generate a lot of states!
				And this is mainly due to the fact that it is possible (I am not sure, but I think it is, and we have to take into account all possibilities) 
				that our space of existing boards is dense with non-balanced boards so that finding a balanced board is very unlikely to happend.<br>
				<br>
				In the same way as generating a random image is unlikely to give us the face of a recognizable person, having a random board to be a balanced board
				is unlikely to happend. However, in image generation they succeed to found a technique that solves this problem, and we are gonna use the same
				technique!<br>
				<br>
				This technique is called Generative Adversarial Networks (or GAN) and the idea behind GAN, which I think is amazing, is the following:<br>
				2 neural networks are competing with each other to outclass the other network, the first network is a generator which will create things,
				and the second network is a classifier which will try decide whether or not the thing created by the first network is valid or not. Both of
				them are rewarded if they succeed to beat the other: the first will be rewarded if it could create a thing that the second fail to classify
				and the second will be rewarded if it successfully classify the thing of the first network.<br>
				<br>
				In image face generation, they used to train GAN with a network generating face images and a second network that was a classifier of face 
				images. And that gave excellent results!<br>
				<br>
				Here, we are going to do the same thing by adapting GANs to our problem. We will have a first network that will generate random boards, and
				then we will have a second network which will be a master chess player that will try to "crack" the board and win every single games on it!
				If the second network succeed to win most of the time ("most" being defined with a treshold on the winrate) then the first network will be
				punished and have a bad reward. However, if the second network never succeed to find an optimal strategy on this board (that\'s what I meant by 
				"cracking") then we will reward the first network so that it will produces even more boards of this kind!
			</p>
			<h4>
				We need a chess master algorithm: let\'s use AlphaGo Zero!
			</h4>
			<p class="justifyText">
				If you are still with me, we need for the second network of our GAN an algorithm that could play state-of-the art games of chess so that
				he could really tell whether or not a board of chess is balanced.<br>
				DeepMind at Google already address this problem with the state-of-the-art algorithm AlphaGo Zero that showed amazing results in 2017 by
				beating the precedent version of this algorithm, AlphaGo (that previously won against the World Champion Lee Se-dol), 100 games at 0!<br>
				<br>
				They are 2 things that are absolutely amazing about this algorithm:<br>
				First, it use Reinforcement Learning, which means that it learns from only the rules of the game and without human knowledge to supervise it.
				The idea is to let play the algorithm (the agent) against itself so that it will learn from its own mistakes. This is amazing because it
				allows the agent to not being lead by human knowledge and to discover its own playstyle (and therefore its own intelligence) without being
				bounded by potential human mistakes and conventions.<br>
				Second, this algorithm don\'t need anything except the rules of the game. Which means that it is generalist enought to be easily adapted to 
				other perfect-information games such as Chess!<br>
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
				Can we say that if an agent can\'t take over it\'s opponent, it is a proof of a balanced game?
			</h4>
			<p class="justifyText">
				This is I think the more debatable part of the Plan.<br>
				First of all, in perfect-imformation game theory at two players, if we ignore the draw, each state of a game is either a winning state or
				a losing state. This means that if both players plays perfectly, one of them will always win from one fixed state of the game. This is
				called Zermelo\'s theorem. So, as a direct result of this theorem, a balanced board state at Chess can\'t exist! Even our well known
				Chess is not balanced!<br>
				<br>
				However Chess is a really deep and complicated game. According to Shanon there exist about 10<sup>118</sup> different possible ends for
				the Chess game, which means that it is impossible to brute-force Chess to find the optimal strategy.<br>
				By the fact that Chess is so complicated and that Chess could end in a draw, we never founded the optimal strategy for white or black, even if 
				it exist! This means that a balanced board of chess on which players can compare their skills is still possible!<br>
				<br>
			</p>
			<section class="theme1 inlineBlock">
				<img class="size500 resp_extend" src="images/AlphaChessZero/images/others/10-118_ending_600px.jpg" alt="10-118_ending_600px">
				<p class="">
					10<sup>118</sup> is a lot! They are 10<sup>80</sup> atoms in the visible universe,<br>
					so even if each atoms could test 1 ending each seconds,<br>
					we would still need 10<sup>38</sup> seconds = 10<sup>30</sup> years to compute all possibles cases!
				</p>
			</section>
			<p class="justifyText">
				Second, it is important to realize that it is not because one algorithm can\'t find the optimal strategy that the game can\'t be cracked. An
				example of this is with AlphaZero for Go, it would be absolutely foolish for a human to try to beat it, it is almost impossible now. For this
				reason, in the human kind referential, we can say that AlphaZero cracked Go. In the same idea, and it\'s the most important part, it is not
				because an algorithm can\'t crack a chess board that it can\'t be cracked by an other algorithm or even a human! This means that if the 
				second network of our GAN can\'t find an overwhelming strategy, it doens\'t mean that the game is balanced.<br>
				<br>
				Third, it might seems like a bad new, but if we succeed to create an algorithm as strong at Chess as AlphaZero is, and if that algorithm can\'t
				succeed to crack a board state, then that means, with hight probability, that a human couldn\'t crack it either! So we can still say
				that AlphaZero as an heuristic of how balanced a board state is, is still a good idea!<br>
				<br>
				Finally, we still have one more problem to solve. How to decide if AlphaZero has converged and cracked a board state? If, after some times, the 
				win rate of one player is around or above 90%, we could say that the algorithm cracked the board state. But what if after some times, the win 
				rate of both players is still around 50%? Does this means that the board state is balanced? Or does this means that the algorithm didn\'t have
				enought time to converge? This is a really important and annoying question. In theory, we could not know. But in practice, we could average
				the times that the algorithm needed to converge when it converged to estimate a point in time after which it is very unlikely to converge anymore.
			</p>
			<h3>
				Why it didn\'t work like planned ...!
			</h3>
			'.
			'
			<p class="justifyText">
				Unfortunately, I never succeed to make work this beautiful algorithm. I still think it would work, but I just used the wrong tools and this
				totally prevented me from succeeded.<br>
				<br>
				I think my biggest mistake was to wanted to had a 3D representation of a board state in order to be able to easily understand what was going on
				and debug. However, to do that I decided to use Unity as it\'s really convenient for 3D games. But what I didn\'t tought of was that the
				marriage of Unity + C# made it really complicated to import a DeepLearning framework into the project. I really tried to import one, 
				but I didn\'t succeeded. However, I didn\'t stop here. I decided that I would create my own DeepLearning framework. This time I 
				succeeded, and it was extremely enriching and an amazing learning experience. However, I didn\'t realize that C# was such a slow langage,
				because of its intensive uses of references, at the opposite of C++ is it not an Oriented Object Langage but a Reference Oriented Langage.
				I know that if a lot of Machine Learning framework are fast it is because they are intensively using GPU for computing matrix products. I could
				have tried to do the same thing in C#, but as this project is mainly a training project I didn\'t want to spend too much time and efforts 
				to reinvent the wheel if this doens\'t teach me anything.<br>
				<br>
				In the end, the speed of my algorithm, due to the slowness of the langage, is what prevented me to make my algorithm work.
				If I had to do it again, I would directly start in Python :)
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
				Pawns to move like Queens, I can do it. If I want my opponent to skip its 3 first turns, I can still do it. And this is as fun as useful! <3<br>
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
				All Chess pieces (Pawns, Bishops, Knights, Rooks, Queens and Kings) are Pieces (really? :o), but I have chosen not to give them specific
				classes. For instance, I didn\'t make a Rook or Pawn class that would inherit from the Piece class. Instead of this I have chosen to used
				a Composition approach instead of a Inheritance approach. It is more flexible as a Piece is now entirely describes by the Moves it owns.
				So a rook is a rook because it can moves horizontaly and verticaly of any number of cases it want, it\'s not rook because it is labeled like
				it. As I said early, it offers more possibilities because if we want to interact with our Piece moves, we can easily do so without having
				to create an other class! This way we can easily imagine a Rook-Knight, or even promote a Piece in the middle of the game into a Rook-Knight!
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
				Maybe you wonder why do we need a Tile class? After all, all the Tiles in Chess are the same, we can go on either one without differencies
				(except for Bishops!). So why a Tile class?<br>
				<br>
				If you remember well, the ultimate goal was to generate a new board state, and to achieve that, one of my idea was to allow the Chess game
				to have different type of tiles! I started with 4 types:<br>
				- The Mountain: you can\'t stand or cross this tile, never!<br>
				- The Forest: you can go and stand on this tile, but you can cross it if you weren\'t already on it!<br>
				- The Dungeon: you can move normally on this tile. However, if you capture an opponent piece that was already on a Dungeon Tile, the opponent
				piece would capture your piece back!<br>
				- The Nothing Tile: this is the default Tile that does nothing special :)<br>
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
				I didn\'t want to have to read text representations of a game of chess, because they are just unreadable to me!<br>
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
				Game representation
			</h3>
			<p class="justifyText">
				In principle a Replay isn\'t that hard, you just need to describe an initial situation and gives all the plays (as pair of board positions) of 
				the game, one by one, and you would have a perfectly fine Replay feature! (Just avoid to give all states after each plays because it would be
				extremely ressources intensive!)<br>
				<br>
				The difficulty lies, not in the model of the game that could be really easily describes, but in the view of the game. In my Chess code, the 
				view of the game is how I represent the board and the pieces of the game to the screen: it is the ensemble of the 3D assets that are used to
				display the game to the screen, like the shape of pawns, bishops and so on.<br>
				<br>
				Because I wanted not being restreint to a certain set of types of pieces, I also needed to refer to the view a piece was attached to. And this
				was a bit more difficult as it wasn\'t just an enumeration, it was the id of an entire asset. Fortunately the serialization feature of C# manage
				this easily! But it leads to others difficulies! ...
			</p>
			<h3>
				Serialization
			</h3>
			<p class="justifyText">
				The serialization of C# is really easy to use, you just give it an object, and it will entirely serialize it for you into a json string.<br>
				Except that it doesn\'t handle abstract classes and inheritance and List of List and references cycles. And guess what? A GameObject (the 
				thing you really care to serialize) is just a container that posses a lot of Components, and a Component is ... an abstract class! So this
				means that in the end you can\'t serialize anything easily ...<br>
				<br>
				To tackle this problem, we have to use a technique named Data Extraction. The idea is that for a given class, you will create a structure
				whose only purpose is to contain the datas of your class. And then your class, which you can\'t serialize, will reference the structure you
				have created. And you can serialize this structure. You then only need to have a conversion function that can generate your class from
				your structure and reciprocally.<br>
				I think this is a bad design as it\'s force you to duplicate a lot of code and have 2 class that represent the same thing, which is never
				a good idea. However I needed that technique and I think it was the best solution overall. It could even have advantages if we want
				to optimise cache memory by putting all the structure in the same memory space so that we can iterate over them very quickly! (But this
				is not something we can do in C#, it\'s more of a C++ stuff.)<br>

				// Talk about binarisation aussi! et expliquer pourquoi ça ne marche pas x)
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
					And here we can see what it finally looks like!<br>
					It is a Replay of a game of myself against myself :)
				</p>
			</section>
		</section>
		'.
		// The challenge : code Keras + Numpy
			// Numpy
				// NDarray<T>
					// Optimisation
						// 1 array for all, using Shape, being careful about memory cache so putting adjacently
						// Shape
					// User friendly
						// [] and = and others functions such as +, - Dot etc ... ==> not easy, I would love to have C++ template that are much more powerfulls than C# genericity
		'
		<section class="theme1 colonne">
			<h2>
				The Neural Network API
			</h2>
			<p class="justifyText">
				As I didn\'t succeed to import a Machine Learning API such as Keras, TensorFlow, SciSharp, TensorSharp or Numpy, I decided to code my own
				API in Machine Learning! Overall, I am glad it happened because it allowed me to learn a lot of things I wouldn\'t have discovered 
				otherwise :)<br>
			</p>
			<h3>
				Numpy Code
			</h3>
			<p class="justifyText">
				The Numpy code could be easily summarized in 1 class, the NDarray class. Because Numpy is all about being able to represent arrays of datas
				of any dimension. In fact the strenght of Numpy is that it does have 1 class that can at the same time represent, with numerical efficiency,
				a single number, a flat array or even a n-dimensional array! And this is where all the challenge is!<br>
				<br>
				First of all, the NDarray class has to be a generic class NDarray<T> so that we can fit all kinds of stuff in such as int, float, bool or anything
				we want. This is a basic feature, however I am sad I couldn\'t have use the C++ templates here as they would have been much more flexible and
				useful for many tasks.<br>
				<br>
				Second, to be able to represent any kind of datas with only 1 class, a good technique was to use both a single fixed size array paired with an
				other class that would tell what the shape of the fixed size array is. And this second class is named Shape. A Shape is just a list of integers
				which all describe the size of their dimension. As an instance, a {2, 3, 4} list for a Shape would represents a 3 dimensional array with 2
				numbers in the first dimension, 3 in the second and 4 in the last dimension.<br>
				<br>
				Third, as Numpy is the basic brick of our implementation, it is important that it is as easy to use as possible. That\'s why I spent time at
				developing user friendly getters and setters and functions such as :<br>
				- a flat getter: my3DNDarray[42] will return the 43th element of this 3D array starting from the element [0, 0, 0] and starting incrementing by
				the last dimension.<br>
				- a full dimension getter: my3DNDarray[1, 2, 3] will return the element which is 2nd in the first dimension, 3rd in the second dimension
				and 4th in the last dimension.<br>
				- a flat setter.<br>
				- a full dimension setter.<br>
				*** An important point here is that these getters and setters had to be well coded so that adjacent elements in the N dimensional array
				would also be adjacent in the flat array representation so that we prevent memory jumps as much as possible. ***<br>
				- a bidirectional conversion with Lists.<br>
				- a bidirectional conversion with arrays.<br>
				- lot of different constructor.<br>
				- copy contructor.<br>
				- a flatten function (just have to change the Shape, very easy :D).<br>
				- ToString, very useful for debugging.<br>
				- the Transpose function.<br>
				- the Fill function.<br>
				- a Map function that apply a delegate function to all elements of the array.<br>
				<br>
				Then, using C++ templates I would have been able to continue, however as C# genericity is not as strong, I had to create a subclass NDarrayF for
				float only that would be able to implement the ohters functions I needed. Happily, most of my NDarray were NDarrayF anyway! :)<br>
				- Max and Min.<br>
				- Argmax and Argmin.<br>
				- Plus, Minus, Mult, Divide, element to element.<br>
				- Outer product.<br>
				- Dot product, for 1D-arrays and 2D-arrays.<br>
			</p>
			<section class="theme2 inlineBlock">
				<img class="resp_extend" src="images/AlphaChessZero/images/schemas/Numpy_UML.png" alt="Numpy_UML">
				<p class="">
					Here is an UML diagram that summary the Numpy API.
				</p>
			</section>
			'.
			// Keras 
				// Everything is a layer ! :D
					// Layers
						// Input layer
						// Flatten layer
						// Dense Layer
						// Softmax Layer
				// Which activation ?
					// Sigmoid ==> Vanishing gradient
					// Relu ==> Dying Relu
					// LeakyRelu
					// A better solution ==> Using BatchNorm Layers !
				// ==> Miss optimisations + C# is slow (talk about C#optimisations)
				// sauvegarde du neural network ?
				// training phase with batches ? and shuffling ?
			'
			<h3>
				Keras Code
			</h3>
			<p class="justifyText">
				Keras is a TensorFlow API that allows to easily models Deep Learning architecture.<br>
				Now that the Numpy part is completed, it is possible to start coding Keras! :)<br>
				I decided to focus on the ModelSequential part of the Keras API for this project as it were the most suitable.
			</p>
			<h4>
				Brief explanation of the ModelSequential of Keras
			</h4>
			<p class="justifyText">
				The goal of a Deep Learning algorithm (a network), and so of a ModelSequential, is to approximate a function. No matter how complicated
				(almost) the function is, a good Deep Learning network is supposed to be able at some point to represent it! It is especially interesting
				to use a Deep neural network when the function to approximate isn\'t linear, because else it is easy and we should use others methods!
				In our case, the function we try to approximate is the one that gives the best play to play for a given board state of chess.<br>
				<br>
				The plan in a ModelSequential, is to have a succession of layers so that each output of a layer will be the input of the next layer.<br>
				This means that you are giving an input to your model, it will give it to the first layer which will compute its own ouput, give this output
				to the next layer and so on until the last layer that will compute the final result of the model.<br>
				<br>
				Then, in the training phase, the final output is compared to an expected ouput and the difference (according to some metrics) is called the loss.
				This loss is then used into the backpropagation part. The role of the backpropagation part is to update the parameters of all layers so that
				the next time the model is given the same input it will compute a final result that is closer to the expected output then before. To do that
				the technique of the Gradient Descent is used. The Gradient Descent will compute how to modify the parameters thanks to a local derivative, 
				that the layer can compute itself, and the derivative of the next layer using the Chain Rule. As each layer needs for the next layer, we are
				computing this from end to start, this is why it is called the backpropagation of the gradient.<br>
			</p>
			<h4>
				Everything is a layer!
			</h4>
			<p class="justifyText">
				So as I said, we have layers! But what are the purposes of these layers? So, we have a few of them :<br>
				- the Input Layer. This one is just used for code conveniences, it doens\'t do anything. It is used as the first layer of the model.<br>
				<br>
				- the Flatten Layer. Its role is to flatten its input to allow next layers to work easily on it.<br>
				<br>
				- the Dense Layer. This is where the real work happend. A Dense Layer is simulating a number N of neurons. Each neurons is a linear combination
				of the input using the weights of each neurons and adding a bias. This means that a Dense Layer is composed of a matrix of weights of size (N, D)
				where N is the number of neurons and D the size of the input, and of a vector of bias of size N. The output of a Dense Layer will be a vector A of
				size N where A[i] = sum<sub>j</sub>(Weight[i, j] * Input[j]) + Bias[i].<br>
				It is interesting to note that if a model was only constituate of Dense Layer like describe until now, it wouldn\'t be really helpful as a 
				composition of linear combination is still a linear combination! So we could have as many Dense Layer as we like, it would still be equivalent to
				a single Dense Layer with weights and bias being the result of the combination of all layers, what a waste of time!<br>
				For this reason, after computing the linear combination, non-linearity functions (also named activation function) are being introduced that
				will allow the network to also learn non-linear function. After computing A, we will then compute Z defined by
				Z[i] = ActivationFunction(A[i]).<br>
				<br>
				- the Softmax Layer. At the end of the network, we are expecting an array of probabilities, which are all representing the probability of each
				play to be the best to chose. However the output of a Dense Layer is not normalized. We are then using the Softmax Layer that can normalize
				an array so that it sum-up to 1. To do that we are pre-computing S = sum<sub>i</sub>(e<sup>Input[i]</sup>). And then we can compute the output
				which is Output[i] = e<sup>Input[i]</sup> / S.<br>
				However, there is a little problem here. If the Inputs are very larges, e<sup>Input</sup> will be even more large, easily exceeded the maximum
				number for whatever float/int/double we are using. To do that, there is a cute little trick :) We can first observe that<br>
				e<sup>Input[i]</sup> / S = (e<sup>Input[i]</sup> * D) / (S * D) = e<sup>Input[i] + ln(D)</sup> / sum<sub>i</sub>(e<sup>Input[i] + ln(D)</sup>)
				for all D. As it\'s true for all D, we can remove the logarithme, as we only have to chose D\' = ln(D) and it would still be true. The
				interest of this is that if D\' is negative and big enought, the exponential won\'t explode and it won\'t make a number overflow! In practice
				we chose D\' = - Max<sub>i</sub>(Input[i]).<br>
				- the Batch Normalization Layer. TODO.<br>
				- the Convolutional Layer. TODO.<br>
				<br>
			</p>
			<h5>
				The forward pass
			</h5>
			<p class="justifyText">
				The forward pass is what I describe just above. It is the first pass where layers are computing what they are meant to compute.<br>
				In the testing phase of the neural network, we are only doing the forward pass to get the prediction of the neural network.<br>
				In the training phase of the neural network, we are also doing the forward pass to be able to compute the loss from the prediction of
				the neural network and the expected output. And we will use that loss for the backward pass.
			</p>
			<h5>
				The backward pass
			</h5>
			<p class="justifyText">
				The backward pass is, as I explained earlier, the pass where we are updating the parameters of the layers to get better results next time.<br>
				It is important to note that only layers themselves can know how to compute the backward pass, which means that when we are coding a layer we 
				always need to implement both the forward and the backward pass.<br>
				<br>
				As an instance, the parameters in the Dense Layer are the weights matrice and the bias vector which we will update using the Chain Rule and
				the gradient of the next layer. We will also need to compute the gradient of the influence of the input over the loss so that we can propagate
				this value for the precedent layer.<br>
			</p>
			<h4>
				Which activation function?
			</h4>
			<p class="justifyText">
				As I explained above, Dense Layers need an activation function.<br>
				At first I didn\'t know how to chose between all these activation functions: Sigmoid, Hyperbolic Tangent, ReLu, LeakyRelu, ELU and so on. So
			</p>
			<h5>
				The Sigmoid and the Vanishing Gradient problem
			</h5>
			<p class="justifyText">
				I have chosen the Sigmoid function as it was the first to appear in the litterature.<br>
				Sigmoid(x) = 1 / (1 + e<sup>-x</sup>)<br>
				However, when I tried my network for the first time, I quickly noticed that my weights weren\'t updated. I tried for a while to understand
				the reason of this annoying phenomenon and after looking online I realize that it was because of the Vanishing Gradient problem.<br>
				<br>
				When we look at the Sigmoid function and it\'s derivative it looks like this:
			</p>
			<section class="theme2 colonne">
				<img class="size500 resp_extend" src="images/AlphaChessZero/images/schemas/vanishing_gradient_sigmoid.png" alt="vanishing_gradient_sigmoid">
				<p class="size500">
					In blue the Sigmoid and in red it\'s derivative. We can see that the derivative is extremely small on the edges.
				</p>
			</section>
			<p class="justifyText">
				And the problem cause is that on the edges, that is to say before -4 or after 4, the derivative is extremely small. And as we might have many
				Dense Layer in our network, the gradient will decrease exponentially fast, until it reach zero with numerical approximations. And at that point
				the network stop learning.<br>
				This is why it is mainly recomended today to use a Rectified Linear Unit (ReLu) as the activation function.
			</p>
			<h5>
				The ReLu and the Dying Neuron problem
			</h5>
			<p class="justifyText">
				The Rectified Linear Unit (ReLu) have a lot of advantages over the Sigmoid function.<br>
				ReLu(x) = (x > 0) ? x : 0 = max(0, x)<br>
				First of all, it is much more easy to compute as we only need one max operator where for the Sigmoid we had to compute an exponential which is
				very expensive.<br>
				Second, on the positive part, the gradient is always equal to 1, this means that we won\'t decrease the gradient at all, no matter how many 
				layers we use as multiplying by 1 is the identity! So the Vanishing Gradient problem is solved.<br>
				Third, ReLu is known for converging much faster than Sigmoid and TanH in practice.<br>
				<br>
				However, on the negative part the derivative of ReLu is always 0. Which means that if we always get a negative input, we will always ouput 0
				and will always shut down the gradient. Which is a good thing as this non-continuity is the source of non-linearity for ReLu, but it will
				totaly prevent the network from learning in these areas of the network. This is called the Dying Neuron problem.
			</p>
			<section class="theme2 colonne">
				<img class="size500 resp_extend" src="images/AlphaChessZero/images/schemas/relu_and_derivative.jpg" alt="relu_and_derivative">
				<p class="size500">
					In blue the ReLu function and in red it\'s derivative.
				</p>
			</section>
			<h5>
				The final activation function : LeakyRelu
			</h5>
			<p class="justifyText">
				Having a large part of our network not being trained is not really what we want. So in order to prevent this issue, they are several
				solutions :<br>
				- We could use a better initilization where we would add a volontary positive bias on the bias so that most of our input of ReLu are positive<br>
				- We could use somewhat of an upgrade of ReLu: LeakyRelu. LeakyRelu	is exactly as ReLu except in the negative part where it let pass a small
				part of the gradient.<br>
				LeakyRelu(x) = (x > 0) ? x : ax = max(ax, x) where a is often chosed as a = 0.01.<br>
				LeakyRelu has all the advantages of ReLu except that it also let pass through the gradient in the negative part. It is the solution I
				have chosen, and it worked perfectly fine!<br>
				<br>
				However it is even possible to go further with a parametrized LeakyRelu where the parameter a is learned in the backpropagation pass, or even
				ELU but I won\'t describe it here.
			</p>
			<section class="theme2 colonne">
				<img class="size500 resp_extend" src="images/AlphaChessZero/images/schemas/LeakyReLu.png" alt="LeakyReLu.png">
				<p class="size500">
					LeakyRelu and ParametricReLu.
				</p>
			</section>
			'.
			// First try : without MCTS
				// Representation of the Game ==> GameState
				// Input and output
				// Doens't work ! How to compute the loss ? XD What is the target ? :o The win is not enought
			'
			<h3>
				First Neural Network
			</h3>
			<p class="justifyText">
				I was so happy, I had designed a Neural Network architecture and it was working fine, as I already tested it on easier problems. I was really
				excited to finally be able to test it for real on this Chess game! I knew something was missing because AlphaGo Zero was much more complicated
				but I wanted to see what a simple neural net could learn from it and what was its limits.<br>
				<br>
				To do that, I needed 2 things :<br>
				- first a way of representing a chess board that my network could understand.<br>
				- second a way of representing the play my network had chosen so that my chess algorithm could understand it.<br>
			</p>
			<h4>
				The GameState
			</h4>
			<p class="justifyText">
				I already had all the useful informations to give to the neural network, I only needed to order them in the good way. The GameState class was
				designed in this purpose.<br>
			</p>
			<h5>
				Problem : A variable number of parameters
			</h5>
			<p class="justifyText">
				So, what are the pertinent information to give? We will need to know where are the pieces, where are the obstacles such as forest, mountains and 
				dungeons (I still wanted that my network could learn this homemade features, because why not :)), who is the current player, and what is the 
				current turn (as I had to setup a maximum turn number to prevent draws from going infinite). Ok, cool.<br>
				But a neural network is really good at understanding a fix number of features. However here, we don\'t really know in advance how many pieces
				and how many obstacles we will have because maybe they will be captured during the game! I wanted to give the network 2 parameters by pieces,
				the column indice and the line indice because it seemed like the easiest way of describing a position to me, but by doing that I would had
				nbParams = 2 * (nbPieces + nbObstacles) which is a variable number. I could have use a maximum number of parameters and then not using the
				parameters that weren\'t useful, it could have worked. But what if I needed to create a new piece during the game because of some special event
				or something else ? I wasn\'t convinced by this solution.<br>
			</p>
			<h5>
				The solution : The planes
			</h5>
			<p class="justifyText">
				After looking inside the AlphaGo Zero papers I learned the solution. It is possible to use what is called a plane. A plane is a set of
				booleans parameters as big as the board which is associated to a feature. When the feature is present on a tile, the boolean is set to true, else
				it is set to false. And this is an amazing solution!<br>
				Even if it is expensive, as it often as a lot of zeros for only some ones, it can ensure that if we have a plane for each possible existing
				piece and obstacle we could represent as many pieces and obstacles as we want! Problem solved!
			</p>
			<section class="theme2 colonne">
				<img class="size500 resp_extend" src="images/AlphaChessZero/images/schemas/GameState_schema.png" alt="GameState_schema">
				<p class="size500">
					Here is a diagram of the planes representation of a GameState.
				</p>
			</section>
			<h4>
				Representation of a Play
			</h4>
			<p class="justifyText">
				It is much more easier to represent a play than a piece, as we know in advance that we will only have one play, always. This means that our 
				neural network is just a classifier that take a GameState in input and will classify the best play to make between all possibles plays.<br>
				We only have a good way of representing all the possible plays.<br>
				<br>
				A good way to do this is by specifying the tile from which the piece must start and then specifying the kind of movement this piece is using. 
				A queen have 4 directions with 7 locations on each on a 8x8 board for a total of 24 possible movements. At this we must add the 8 
				possibles movements of the knight for a total of (4 * 7) + 8 = 36 possible movements. This means that if we have 8 * 8 = 64 starting
				positions, we have a total of 36 * 64 = 2304 possible plays! And so our neural network will have to have 2304 outputs.<br>
				<br>
				The above version is what DeepMind implemented for their version of AlphaZero for Chess. However I wanted to be a little for flexible as I might
				want to add new exotic moves. For this reason I decided to represent a play with it\'s starting position and it\'s ending position for 
				(8 * 8) * (8 * 8) = 4096 outputs. This version is slower to train as they are more class to chose between, but it is the cost to pay for 
				versatility.<br>
				<br>
				No matter the version we chose, we still need a conversion function between the indice of the play that will give the neural network and the 
				play (with 2 parameters) we are looking for. For this we just have to order all the plays.
			</p>
			<h5>
				What if the Play chosen by the Neural Network is not a valid Play ?
			</h5>
			<p class="justifyText">
				If this happend, this play is just ignored and we are then considering the second best play. We are doing this until one is valid!
				Hopefully there are always a play to do if we are not checkmate!
			</p>
			<h5>
				Final output of the Neural Network
			</h5>
			<p class="justifyText">
				In the AlphaGo Zero paper, they are training simultaneously the neural network to tell the percentage of chance of the current player to win
				in this current situation. I found that very interesting so I keep it. To do that, we only need to add a last output to our 4096 and it\'s
				role will just to print the expected winrate.
			</p>
			<h4>
				Did someone talk about an expected output?
			</h4>
			<p class="justifyText">
				Ok, so everything was ready. Network? Ready! Input? Ready! Output? Ready!<br>
				But then I just went to the compute of the loss function. You know, in order that the network can train ... And I realized that I didn\'t know
				how to train the network. I means I know how to use backpropagation, but to converge towards what? What was the expected output that the
				network should converge towards?<br>
				<br>
				Well, from the previous architecture, we just can\'t calculate or even approximate it. And that\'s why Go and Chess are such challenging
				problems!<br>
				<br>
				Then I understand the utility of the Monte-Carlo-Tree-Search.
			</p>
			'.
			// MCTS
				// 4 steps
				// The heuristic : UCB1 or UCB
				// talk about the beauty of the duality MCTS/NN
			'
			<h3>
				An heuristic of the expected output: Monte-Carlo-Tree-Search (MCTS)
			</h3>
			<p class="justifyText">
				In order to help us compute the expected output (which is what is are all praying for!), we will use a MCTS!<br>
				<br>
				A MCTS is a graph search algorithm. It\'s goal is to find the best node of the game graph by using a theoretical optimal compromise between 
				exploration and exploitation. Ok. It is a lot of information, let\'s break it down.<br>
				<br>
				A game graph of chess is a graph where each node represent a board of chess with its pieces. From a node, which is a board state, we have a
				finite number of possible moves. Each of these moves will result in a different board state, which are represented by different nodes. Each of
				these different nodes are called the successors of the first node and are linked to it.<br>
				<br>
				This graph search algorithm has the objetive to search inside the game graph describe above the best child node of the current node of the current
				game state. How to chose the "Best", which stands for "it is the best move to do", will be describe latter :)<br>
			</p>
			<h4>
				Exploration and Exploitation
			</h4>
			<p class="justifyText">
				The MCTS could be seen as a generalization (or extension) of the k-bandit machines problem, which is a very well known problem.<br>
				<br>
				In the k-bandit machines problem, we are facing k bandit machines which are slot machines. We have a finite number of turns n. At each turn
				we can activate only one machine. Each machine i has it\'s probability p<sub>i</sub> of rewarding us. What is the best ways of activating the
				machines in order to maximize the number of rewards? I love this problem! :)<br>
				<br>
			</p>
		</section>
			';

		return $text;
	}

 ?>
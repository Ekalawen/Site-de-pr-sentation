<?php
	require_once("php/base_functions.php");

	echo getHeader("", "Prince of Thieves");

	echo getTextProjet_PrinceDesVoleurs();

	echo getEndProjet();

	echo getFooter();

	function getTextProjet_PrinceDesVoleurs() {
		$text = '
		<section class="theme1 colonne">
				<h1>
					The Prince of Thieves
				</h1>
				<h2 class="fontSize200">
					It\'s a Deck Building board game where play order matters a lot.<br>
					I named it a Tempo Deck Building.
				</h2>
				<h2 class="fontSize200">
					As a thief, steal them all ! :)
				</h2>
				<section class="theme2 inlineBlock">
					<img class="size40percent resp_extend" src="images/PrinceDesVoleurs/all.jpg" alt="All">
					<p>
						What I am working with !
					</p>
				</section>
		</section>
		<section class="theme2 colonne">
			<h2>
				The main idea
			</h2>
			<p class="justifyText">
				After designing RagnArcane, I felt that I have made a really complicated game. Even if it\'s depth was amazing, the amount of knowledge needed to get
				into it was too important.<br>
				Here is a link to my previous game RagnAracane :<br>
			</p>
			<a href="projet_ra.php" class="" target="_blank">
				<div>
					<section class="theme3 colonne redirection pb3">
						<h3 class="resetPaddingMargin">
							RagnArcane
						</h3>
					</section>
				</div>
			</a>
			<p class="justifyText">
				<br>
				So for this game I decided that "Simplicity would be the Supreme Sophistication". Oh, and I also wanted to create a deck building game, because
				I really liked how players feel attached to their deck and how the game scale with time. However, what\'t I didn\'t like in deck building
				game was how poor the interactions between players were, so I tried a lot to work around that.<br>
				<br>
			</p>
			<h3>
				We start simple : 2 kind of cards
			</h3>
			<p class="justifyText">
				Something that I learned is that a game should always rest on a particular and strong theme, because it\'s this theme that will cary the game into the
				player imagination. For this game, we were thiefs that were stealing richs and other thiefs (because sometimes thiefs are rich too !).<br>
				<br>
				In order to stick to this theme, I had to extract the foundement of it. The first thing that came to my mind was the "stealing action", that\'s what 
				thiefs do, that\'s why I created my first card type : the Steal card, with a power of one (because we need to start small).<br>
				The second thing that came to my mind was that thiefs are stealing gold, they are stealing buttin, chests and treasures ! So the second type of card
				was a Treasure card.<br>
				<section class="theme3 inlineBlock">
					<img class="size40percent resp_extend" src="images/PrinceDesVoleurs/explication.jpg" alt="Explications">
					<p>
						The most basic cards !
					</p>
				</section>
			</p>
			<p class="justifyText">
				If you can 	gather as much Steal cards that the difficulty of a Treasure card, than you can steal it ! And what\'s cool is that when you steal
				such a card, it goes directly into your deck ! Well not excactly, it goes into your discard pile, and once your deck is empty you shuffle your discard pile
				to your deck ! <br>
				That means that your deck is going to grow during the entire game, however be careful because other thiefs might decide to steal you instead of someone else !
				Fortunately, Steal cards also have one more effect, they make your Treasures more difficult to steal for each of your Steal cards in front of you !<br>
				We can notice that now, Steal cards have a double functionnality : they can steal other Treasures, but they are also defending your own Treasures.
				And I think it\'s thanks to this double utility mecanics that we can create a game that is both simple and deep ! It\'s what I will try to achieve
				with every concepts I add to this game :)<br>
				<br>
				Somthing that is cool is that we have a built-in wincondition with this system : you win if you are the one with the more Treasures values in your entire deck
				at the end of the game ! This is the first utility of Treasures, they make you win. However, what could be the second function of Treasures cards ? Well they 
				are representing money, so maybe we could spend them to improve our deck quality ? What\'s more, if we can spend them, we need to put them into our deck 
				(which is already the case) and play them, so we will exhibit them and we can be steal back ! So this, in addition to add a second utility to Treasures cards,
				add a cycling loop to the game, which is very healthy ! :)<br>
			</p>
		</section>
		<section class="theme1 colonne">
			<h2>
				Deck composition
			</h2>
			<p class="justifyText">
				Ok, but there is one more issue right now. As Treasures cards are rather difficult to steal (we need several Steal cards to steal only one Treasure card,
				in order to prevent our deck to grow too fast) and as they will be added to our deck, this means that we will draw less and less Steal cards the more
				the game goes on ! But we would like to have the exact opposite effect ! x) To prevent that I added a very simple mechanics to Treasures cards : all 
				Treasures cards make you draw at least 1 card when you play it. With this invariant, Treasures cards become transparents, you can draw as many as you
				want, you will always end-up drawing the same amount of Steal cards at the end !<br>
				<br>
				I wanted to really emphasis the interactions between players, to achieve that and to make the game smoother to play, I made the next invariant : each player
				can only play 1 card per turn. This make that to empty your hand, it could be rather long, and that the order in which you play yours cards is really
				important as you have to adapt to other players strategies ! As an instance, if you have a lot of Treasures, you are rich but you are also fat (as they
				start to be rather heavy), and this is represented by the fact that you will draw a lot of Tresures cards that will make you draw more and more cards, which
				means that you will get longer to get to your real actions cards !<br>
				<br>
				In fact, all players are starting the game with a deck of 10 cards (8 Steal cards and 2 Treasures of value 2) and they draw 5 cards at the beginning of
				the "Night", and do not have any "draw step" at the beginning of theirs turns. Nights are lasting until no-one has cards in hand, then all players
				draw 5 new cards for the next Night. As we can see, the first Night will last between 5 and 7 turns, and the more the game goes on, the more
				players will have Treasures cards so the more Night will last !<br>
				<br>
				But there is still something we can fear. What if a player could, because of some special cards, draw more free cards (a Treasure is not a free card as it
				just replaces itself, however a Treasure that make you draw 2 cards generate a free card as you will end up with one more card that what you started with) ?
				We could be feared that he could be allow to cycle his deck infinitely ! Leading to his maximum pleasure ... but the minimum pleasure of other players !<br>
				To prevent that, first of all, all starting deck have 3 more Steal cards that our starting hand, and because Steal cards doesn\'t cycle, we can ensure that
				players won\'t infinitely cycle.<br>
				However, when the game goes on, there is nothing that prevent players from focusing on creating a cycling deck. I won\'t goes more into details, but the game
				is built in such a way that, first it is very difficult to cycle, and second even if this happend it isn\'t infinite, and third even if the player good 
				enought to make it infinite (which I never succeeded :\'( ) what you gain by looping is just deck quality, but not real Treasure value, so we can\'t abuse of 
				it too much.<br>
			</p>
		</section>
		<section class="theme2 colonne">
			<h2>
				Guilds Cards
			</h2>
			<p class="justifyText">
				It is well known that thieves are, for the most part, part of Guilds which are protecting them from other Guilds. In this game I wanted to add this aspect
				of thieves, and I also wanted to create something that we can buy with the golds of our Treasures. That\'s how I created Guidls cards.<br>
				<br>
				To represent this, I added a third kind of card, the Guilds cards. They are forming a common stack whose 5 first cards are visibles. Any player could 
				spend Treasures value to the Black market during their turn to purchase this cards (as all work merits salary), then the Treasures cards and the Guild
				card go into the player discard pile. We can see that\'s we do not lose Treasures when we spend them, it\'s better to see them as income rather than
				objects.<br>
				<br>
				Guilds cards are very powerful and are very important to improve the quality of your deck.<br>
				The main and first Guild card was the Silent Steal card. This is the same as a common Steal card, but it has a steal value of 2 and can ignore ennemy\'s
				Steal cards when this card take part of a steal. Before the game could be a bit locked if no-one wanted to spend his Steal cards, now there is an
				unlocking mechanics :) What\'s more this card add a lot of imprevisibility and dynamicity to the game. However as thoses cards are rather rare in players
				decks it doesn\'t completely undo the previous double utility of attack and defense of Steal cards !<br>
				<br>
				All Guilds cards are part of a Guild (really ???), and they are 4 different guilds, each with his own specificity. I wanted to really keep it simple so
				there is only 4 different cards per guilds (but in several copies) and each card really have a unique effect. What I means by unique is that there is no
				2 different Guilds cards that only differs by numbers : they differs by gameplay mechanics.<br>
				In thoses 4 different cards, there is :<br>
				- the Silent Steal card of the guild, which always do the same thing.<br>
				- the payoff card of the guild, the more cards of this guild you have on the battlefield, the more this card will be powerful ! But it still have a good
				effect even without support.<br>
				- the strong card of the guild, which is more expensive and stronger<br>
				- the final card of the guild ! This card is extremely expensive and completely broken ! However, if your opponent see that you are trying to gather a lot
				of Treasure value in front of you, they will surely steal you to prevent you purchasing this powerful card ! What\'s more, there is only 1 copy of
				this card.
				<br>
				The 4 guilds are divided into 2 sub-groups, the proactive ones that try to achieves powerful things by their own, and the reactive ones that try to
				prevent other players to do too much powerful things !<br>
				The 4 guilds are :<br>
				- The Concealers : they are a proactive guild that try to draw as many cards as possible and to make his deck cycle as much as possible. This guild tend
				to take advantage by accumulating Treasures.<br>
				- The Scammers : they are the other proactive guild that try to assemble different cards to generate a enormous amount of Steal value in one turn to 
				make decisive stealing. This guidl tend to play a lot with his discard pile to assemble his pieces.<br>
				- The Assassins : they are a reactive guild that try to destroy on-board cards of opponent to disrupt what they are doing. We can notice that when an 
				Assassin card destroy a card of an opponent, it destroys a card of EACH opponent so that there isn\'t some unfairness. And so we can balanced +1 
				advantage for ourself and -1 disadvantage for opponent.<br>
				- The Spies : they are the other reactive guild that try to take advantage by looking at opponent hand and discarding their best card, as well as being 
				able to take advantage by playing several cards in one turn. Like the Assassin guild, when Spies are disrupting an opponent, they are disrupting all
				opponent in the same time.<br>
			</p>
			<section class="theme3 inlineBlock">
				<img class="size40percent resp_extend" src="images/PrinceDesVoleurs/guildes.jpg" alt="Guildes">
				<p>
					The most emblematic card of all guilds !
				</p>
			</section>
			<p class="justifyText">
				We can also add that for the most part, Guilds cards do not replace themselves when we play it (they do not make us draw a card), so they help prevent
				that someone could cycle. And as they are very powerful, it is not worth to pass on them !<br>
			</p>
		</section>
		<section class="theme1 colonne">
			<h2>
				Allegence cards
			</h2>
			<p class="justifyText">
				I have observed that it will rather difficult for players to gather in the same hand multiples cards of the same guild, which is problematic as they 
				are scaling with being multiples in your hand !<br>
				What\'s more, I have observed that in the first Night, players who only draw 1 Treasures couldn\'t spend their golds where players who draw 2 (or 0, as
				they will draw 2 in the next night) could spend their golds on real Guilds cards, which create an unfair gap just at the beginning of the game !<br>
				<br>
				To solve both this problems, I have introduced the Allegence cards.<br>
				Allegence cards are 4 types of cards, one for each guild. They are gather in one pile, whose we can only see the top card at all times.<br>
				Players can purchase those cards, the same way as they can purchase Guilds cards. However they must chose wisely, as this cards are very important
				and that they represent the Guild they will be the most strong with.<br>
				Those cards always stay on the battlefield and are never discarded, and as they are part of a guild, they always help you having multiples cards of 
				this guild.<br>
				What\'s more, we can only purchase 3 Allegence cards. The first one cost 2, the next one 4 and the last one 6. As the first one cost as much as the
				first Treasure in the strating deck, we can ensure that even if a player only draw 1, he will be able to spend it ! Where to one who draw 2 of them
				could spend it on real Guild cards.<br>
				<br>
				So it adress both problems at the same time : double functionnality, good concept.<br>
				<br>
				But how do we use those cards ?<br>
				They are staying in front of you during the whole game. You can use them during your turn one time per Night, so you must chose wisely when to use it
				to take the best benefice of it ! They have rather small impact effect, but combined with other cards, they might be really powerful ! To represent
				the fact that we can use them one time per Night, we put them at the horizontal when we use them, and we put them at the vertical at the beginning of
				the Night to represent that they are usable.<br>
			</p>
			<section class="theme3 inlineBlock">
				<img class="size40percent resp_extend" src="images/PrinceDesVoleurs/allegence.jpg" alt="Allegences">
				<p>
					An Allegence card
				</p>
			</section>
		</section>
		<section class="theme2 colonne">
			<h2>
				The end of the game
			</h2>
			<p class="justifyText">
				And now ? How does the game end ? Well we could have put into play some timers or counters to decide it, but I prefer to let my player decide of it.<br>
				To achieve that, I have created a sub-kind of Treasure cards, the Wonders ! Wonders are like Treasure cards, except that they are difficult to steal
				and very powerful (with a lot of Treasure value and good effects) and that you can\'t spend them on the Black Market ! This means that they are 
				rather useless during the game, in fact they are more of a weakness as other players can rob you ! But if you have them at the end of the game, then 
				they are really decisives !<br>
				<br>
				They are 5 unique Wonders into the game. When the 3rd one (or 4th one if you want to have a longer game) is stolen from the Black Market, then the game
				end at the end of the Night !<br>
				This means that if players are in a close race, they might refuse to steal Wonders and the game could go on. However if a player is ahead and want
				to finish the game, he cans also ! :)
			</p>
			<section class="theme3 inlineBlock">
				<img class="size40percent resp_extend" src="images/PrinceDesVoleurs/merveille.jpg" alt="Merveille">
				<p>
					A typical Wonder !
				</p>
			</section>
		</section>
			';

		return $text;
	}

 ?>
<?php
	require_once("php/base_functions.php");

	echo getHeader("", "Greed House Bus");

	echo getTextProjet_ra();

	echo getEndProjet();
	
	echo getFooter();

	function getTextProjet_ra() {
		$text = '
		<section class="theme1 colonne">
				<h1>
					Greed House Bus
				</h1>
				<h2 class="fontSize200">
					I created this game in 2 weeks for a School Geek Week.
				</h2>
				<h2 class="fontSize200">
					Our group decided to talk about bus pollution.
				</h2>
				<h2 class="fontSize200">
					So I made this game.
				</h2>
			<section class="theme2 colonne">
				<img class="resp_extend" src="images/bus/bus02.jpg" alt="Bus">
				<p>
					Catch them all my bus !<br>
					Stop them from polluting !
				</p>
			</section>
		</section>
		<section class="theme2 colonne">
			<h2>
				Description
			</h2>
			<h3>
				The concept
			</h3>
			<p class="justifyText">
				Bus and public transport are usually much more ecologics than personal transports such as personal cars. To illustrate this idea, the player
				take the control of an ecological bus that will catch and convert self-centered car drivers to convince them of using an ecological way.<br>
				Once the bus catch a driver, it then has to take it back to the main bus line in the center of the map.<br>
				<br>
				The map in the background is the city of Toulouse, that\'s why all the walls are pink. In the name of the "The Pink City". But I can admit that
				the rendering isn\'t that amazing ^^.
			</p>
			<h3>
				The challenge
			</h3>
			<p class="justifyText">
				I really wanted to give to the player the feeling to be driving inside the Pink City. To do that, I wanted to emphasize all the main paths and
				ways. However, the city of Toulouse is not at all like NewYork-like cities where all the streets are straight and parallel, in Toulouse streets are 
				chaotics and angulars (they surely have they own logic, but it\'s not as cartesian).<br>
				To represent that, I had to put in place a powerful system of collision : I wanted to be able to create any sort of 2D shape, convex or concave,
				to represent the walls of the game. And in addition, I wanted to be able to tell for any 2 2D shapes if they are colliding or not !<br>
				<br>
				I started right from the beginning.<br>
				I created a class Point with 2 coordinates (x, y).<br>
				I created a class Segment with 2 Points.<br>
				I created a class Triangle with 3 Points. At the construction, the class compute the 3 Segments.<br>
				I created a class Polygon with a list of Points. At the construction, the class compute all the triangles used to define the Polygon.<br>
				And I created all the functions to detect collisins between all thoses shapes.<br>
				<br>
				One interesing algorithm was the triangularisation of a Polygon. To do that, we start from a vertex of the Polylgon, we take the two adjacent
				vertex and create a triangle from those 3 vertices. If the segment of the triangle which isn\'t a segment of the Polygon isn\'t intersecting
				any segments of the polygon, than we keep the triangle. Else we we don\'t keep this triangle and iterate over the vertices. And we keep
				iterating until there isn\'t any vertices left !<br>
				<br>
				One other interesting algorithm was the intersection (or collision) of 2 Polygons. One first idea could be to say : if 2 segments of the 2 
				Polygons intersect, then the Polygons intersect. However, this is not a necessary condition because 2 rotated square, one registered inside
				the other, are colliding but their segments aren\'t !<br>
			</p>
			<section class="theme3 inlineBlock">
				<img class="resp_extend" class="" src="images/bus/polygons_inscrits.jpg" alt="Polygons inscrits">
				<p>
					Segments aren\'t intersecting, but Polygons are colliding !
				</p>
			</section>
			<p class="justifyText">
				An other idea is to look if a vertex of a Polygon is inside the other, if it is the case
				then the Polygons are colliding. However this doesn\'t work either because if we take the precedent exemple and we extend the black shape then
				there isn\'t any vertex that is inside the other Polygon !<br>
				Finally, the solution that I came up with was the first one (test segments by segments) to which I have add a set of tests to test if a vertex
				of one Polygon is on a segment of the other Polygon. If this is the case, we only have to determine if the Polygons are touching on the inside
				side or in the extern side (using clockwise indices), if they are on the extern side then the Polygons are only adjacents, but if they are on 
				the inside side then the Polygons are inside each other !<br>
				<br>
				Of course, before computing all those expensives tests, we just test if the bounding box of each polygons are interesting. Because if they aren\'t
				there is no way that the Polygons are also intersecting ! :)<br>
				<br>
				I have done thousands and thousands of unit tests to verify all my algorithm because I really wanted to have a solid framework to work with.
				Finally, it was a really instructive experience as I have a better understanding of geometric engines now.<br>
			</p>
		</section>
		';

		return $text;
	}
?>

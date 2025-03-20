<?php
require_once("Models/movie.php");


$star_wars = new movie("Star Wars", "George Lucas", 1977, ["action", "adventure", "fantasy"]);
$fast_and_furious = new movie("Fast and Furious", "Rob Cohen", 2001, ["action", "thriller", "crime"]);

$star_wars->genres->add_genre("sci-fi");

$star_wars->setRating(5);
$fast_and_furious->setRating(8);

var_dump($star_wars, $fast_and_furious);
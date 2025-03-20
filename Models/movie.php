<?php
require_once("Traits/rating.php");

require_once("Models/genre.php");

class movie {
    use rating;
    public $title;
    public $director;
    public $year;
    public $genres = [];


    function __construct($_title, $_director, $_year, $_genres = []) {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
        $this->genres = new genres($_genres);
    }
}

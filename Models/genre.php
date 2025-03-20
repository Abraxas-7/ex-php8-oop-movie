<?php
class genres {
    public $genres = [];

    function __construct($_genres) {
        $this->genres = $_genres;
    }

    function add_genre($_genre) {
        $this->genres[] = $_genre;
    }
}
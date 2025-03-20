<?php

trait rating {
    public $rating;

    public function setRating($_rating) {
        $this->rating = $_rating;

    }

    public function getFormattedRating() {
        return "Rating: " . $this->rating;
    }
}
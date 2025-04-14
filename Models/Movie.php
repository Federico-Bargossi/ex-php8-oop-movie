<?php


class Movie {
    public $title;
    public $rating;
    public $year;
    public $description;
    protected $genre;

    use HasDirector;

    public function __construct($title, $year, $rating, Genre $genre) {
        $this->title = $title;
        $this->year = $year;
        $this->rating = $rating;
        $this->genre = $genre;
    }

    public function getGenreName() {
        return $this->genre->getName();
    }
}

?>
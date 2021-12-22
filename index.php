<?php 

class Movie {
    public $title;
    public $year;
    public $genre;

    function __construct($_title, $_year, $_genre, $_vote) {
        $this->vote = $_vote;
        $this->title = $_title;
        $this->year = $_year;
        $this->genre = $_genre;
        $this->setRecommended();
    }

    //Set recommended property by movie vote
    public function setRecommended() {
        if ($this->vote > 6) {
            $this->recommended = true;
        } else {
            $this->recommended = false;
        }
    }
}



$fight_club = new Movie('Fight Club', '1999', 'Drama', 9);
$dark_knight = new Movie('The Dark Knight', '2008', 'Action', 8);
$sharknado = new Movie('Sharknado', '2013', 'Horror', 3);

var_dump($fight_club, $dark_knight, $sharknado);

   



?>
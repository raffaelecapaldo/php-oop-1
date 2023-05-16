<?php 

class Movie {
    public static $lastId = 0;
    public $id;
    public $title;
    public $original_title;
    public $nationality;
    public $vote;
    public $genre;
    public $image;

    /**
     * Movie constructor.
     *
     * @param string $title The title of the movie.
     * @param string $original_title The original title of the movie.
     * @param string $nationality The nationality of the movie.
     * @param float $vote The vote rating of the movie.
     * @param string $genre The genre of the movie.
     * @param string $image The image URL of the movie.
     */

    function __construct(string $title, string $original_title, string $nationality,
    float $vote, string $genre, string $image)  {
        $this->id = ++self::$lastId;//Incrementa lastId ed assegnalo all'ID del nuovo oggetto
        $this->title = $title;
        $this->original_title = $original_title;
        $this->nationality = $nationality;
        $this->vote = $vote;
        $this->genre = $genre;
        $this->image = $image;
    }

    public function showImage(){
        return "<img src='$this->image' alt='$this->title'>";

}

}

$movies = [
    new Movie ('Il Padrino', 'The Godfather', 'en', 8.3, 'Thriller', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/r4gnMXoY1efvaolNDjn3nj4046S.jpg'),
    new Movie ('Via Col Vento', 'Gone With The Wind', 'en', 8.6, 'Drama', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/xRyW60TXvX7Q2HSbpz8nZxKaTkL.jpg')

];

foreach($movies as $movie) {
    echo "<h1>$movie->title</h1>";
    echo "<h3>$movie->original_title</h3>";
    echo "<p>Nazionalità: $movie->nationality</p> <span> Voto: $movie->vote";
    echo "<p>Genere: $movie->genre</p>";
    echo $movie->showImage();

}
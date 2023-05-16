<?php
class Movie {
    public static $lastId = 0;
    public $id;
    public $title;
    public $original_title;
    public $nationality;
    public $vote;
    public $genres;
    public $image;

    /**
     * Movie constructor.
     *
     * @param string $title The title of the movie.
     * @param string $original_title The original title of the movie.
     * @param string $nationality The nationality of the movie.
     * @param float $vote The vote rating of the movie.
     * @param array $genres An array with the genres of the movie.
     * @param string $image The image URL of the movie.
     */

    function __construct(string $title, string $original_title, string $nationality,
    float $vote, array $genres, string $image)  {
        $this->id = ++self::$lastId;//Incrementa lastId ed assegnalo all'ID del nuovo oggetto
        $this->title = $title;
        $this->original_title = $original_title;
        $this->nationality = $nationality;
        $this->vote = $vote;
        $this->genres = $genres;
        $this->image = $image;
    }

    public function showImage(){
        return "<img src='$this->image' alt='$this->title'>";
    

}
    public function showGenres(){
        $listgenres = "";
        foreach ($this->genres as $genre) {
            $listgenres .= $genre->name.','.' ';
        }
        return "<p>Genere: $listgenres </p>";
    }

}
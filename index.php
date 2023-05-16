<?php 
include __DIR__.'/Models/Movie.php';
include __DIR__.'/Models/Genre.php';
include __DIR__.'/data/db.php';


foreach($movies as $movie) {
    echo "<h1>$movie->title</h1>";
    echo "<h3>$movie->original_title</h3>";
    echo "<p>Nazionalità: $movie->nationality</p> <span> Voto: $movie->vote";
    echo $movie->showGenres();
    echo $movie->showImage();

}

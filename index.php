<?php
include __DIR__ . '/Models/Movie.php';
include __DIR__ . '/Models/Genre.php';
include __DIR__ . '/data/db.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Movie DB</title>
</head>

<body>
    <div class="container-fluid">
            <div class="row">
                <?php foreach ($movies as $movie) { ?>
                    <div class="col-6 col-sm-4 col-md-3 col-xl-3 col-xxl-2 mb-2">
                        <div class="card">
                            <?php echo $movie->showImage(); ?>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $movie->title ?></h5>
                                <div class="card-text">
                                    <h6><?php echo $movie->original_title ?></h6>
                                    <p class="m-0">Country: <span class="text-uppercase"><?php echo $movie->nationality ?></span></p>
                                    <p class="m-0"><?php echo $movie->showGenres(); ?></p>
                                    <p>Vote: <?php echo $movie->vote ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
        </div>
    </div>

</body>

</html>
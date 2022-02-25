<?php

include __DIR__ . "/class/movie.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>

    <!-- LINK BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- LINK CSS -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <!-- MOVIE 1 -->

    <h4>Title: <?php
        echo ($newMovie1->getTitle()) ?>
    </h4>

    <p>Film Director: <?php
        echo ($newMovie1->getFilmDirector()) ?>
    </p>

    <p>Genre: <?php
        echo ($newMovie1->getGenre()) ?>
    </p>

    <p>Year: <?php
        echo ($newMovie1->getYear()) ?>
    </p>

    <p>Production Company: <?php
        echo ($newMovie1->getProductionCompany()) ?>
    </p>

    <p>Total Minutes: <?php
        echo ($newMovie1->getTotalMinutes()) ?>
    </p>
    <!-- / MOVIE 1 -->

    <!-- MOVIE 2 -->

    <h4>Title: <?php
        echo ($newMovie2->getTitle()) ?>
    </h4>

    <p>Film Director: <?php
        echo ($newMovie2->getFilmDirector()) ?>
    </p>

    <p>Genre: <?php
        echo ($newMovie2->getGenre()) ?>
    </p>

    <p>Year: <?php
        echo ($newMovie2->getYear()) ?>
    </p>

    <p>Production Company: <?php
        echo ($newMovie2->getProductionCompany()) ?>
    </p>

    <p>Total Minutes: <?php
        echo ($newMovie2->getTotalMinutes()) ?>
    </p>
    <!-- / MOVIE 2 -->


    <!-- MOVIE 3 -->

    <h4>Title: <?php
        echo ($newMovie3->getTitle()) ?>
    </h4>

    <p>Film Director: <?php
        echo ($newMovie3->getFilmDirector()) ?>
    </p>

    <p>Genre: <?php
        echo ($newMovie3->getGenre()) ?>
    </p>

    <p>Year: <?php
        echo ($newMovie3->getYear()) ?>
    </p>

    <p>Production Company: <?php
        echo ($newMovie3->getProductionCompany()) ?>
    </p>

    <p>Total Minutes: <?php
        echo ($newMovie3->getTotalMinutes()) ?>
    </p>
    <!-- / MOVIE 3  -->


</body>

</html>
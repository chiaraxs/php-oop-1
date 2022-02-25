<?php

include __DIR__ . "/db/data.php";

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
    <!-- LINK CDN JS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- LINK CSS -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <!-- HEADER -->
    <header class="d-flex sticky-top border-bottom border-info">

        <!-- LOGO -->
        <div class="container-logo">
            <img class="py-2 px-3" src="https://logodownload.org/wp-content/uploads/2020/11/disney-plus-logo-1.png" alt="">
        </div>
        <!-- / LOGO -->

        <!-- NAVBAR -->
        <nav class="d-flex align-items-center">
            <ul class="nav d-flex justify-content-center">
                <li class="nav-item">
                    <a class="nav-link disabled link-info" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-info" href="#">Films</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-info" href="#">Tv Series</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-info">About us</a>
                </li>
            </ul>
        </nav>
        <!-- NAVBAR -->
    </header>
    <!-- / HEADER -->

    <!-- MAIN -->
    <main class="container-fluid">
        <div class="container mt-4">
            <div class="row">
                <div class="col">

                    <!-- php -->
                    <?php
                    foreach ($movies as $movie) { ?>
                        <div class="card text-center lh-1 mb-3">
                            <div class='text text-dark'>
                                <h5 class='text-uppercase fw-bold fs-6 mt-3'> <?php echo ($movie->getTitle()) ?></h5>
                                <p><span class="fw-bold">Genre:</span> <?php echo ($movie->getGenre()) ?></p>
                                <p><span class="fw-bold">Film Director:</span> <?php echo ($movie->getFilmDirector()) ?></p>
                                <p><span class="fw-bold">Year:</span> <?php echo ($movie->getYear()) ?></p>
                                <p><span class="fw-bold">Production Company:</span> <?php echo ($movie->getProductionCompany()) ?></p>
                                <p><span class="fw-bold">Minutes:</span> <?php echo ($movie->getTotalMinutes()) ?></p>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- / php -->
                </div>

            </div>
        </div>
    </main>
    <!-- / MAIN -->


</body>

</html>
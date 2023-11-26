<?php
include 'connection/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Discover and curate your all-time favorites here. These are the films and
        shows
        that have left a mark on you">
    <title>dashboard</title>
    <link rel="stylesheet" href="assets/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>

<body class=" bg-black">

    <section class="container">
        <div class="row flex-nowrap">
            <!-- side nav -->
            <div class="sidebar col-auto col-md-3 min-vh-100 ">
                <div class="side-content d-flex flex-column align-items-center  ">
                    <div class="profil d-flex flex-column align-items-center gap-3">
                        <img src="img/user.png" alt="">
                        <span class="d-none d-md-inline">user name</span>
                    </div>
                    <ul class="nav d-flex flex-column">
                        <li><a href="index.php" class="text-decoration-none text-light px-4 py-2"><i
                                    class=" fa-solid fa-border-all"></i>
                                <span class="d-none d-md-inline">Dashboard</span></a></li>
                        <li><a href="film/film.php" class="text-decoration-none text-white px-4 py-2"><i
                                    class=" fa-regular fa-heart"></i> <span class="d-none d-md-inline">Films</span></a>
                        </li>
                        <li><a href="cast/cast.php" class="text-decoration-none text-white px-4 py-2"><i
                                    class=" fa-regular fa-bookmark"></i>
                                <span class="d-none d-md-inline ">Cast</span></a></li>
                        <li><a href="genre/genre.php" class="text-decoration-none text-white px-4 py-2"><i
                                    class=" fa-regular fa-compass"></i> <span
                                    class="d-none d-md-inline">Genre</span></a></li>
                        <li><a href="index.php" class="text-decoration-none text-white px-4 py-2"><i
                                    class=" fa-solid fa-arrow-right-from-bracket"></i> <span
                                    class="d-none d-md-inline">Log
                                    out</span></a></li>
                    </ul>
                </div>
            </div>
            <!-- content -->
            <div class="content m-1 p-md-4 col-md-9 col-9 min-vh-100">
            
            </div>
        </div>
    </section>
 
</body>

</html>
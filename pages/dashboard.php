<?php
include '../dataBase/connect.php';
session_start();
if( $_SESSION['loggedIn'] != 1){
    echo "<script>alert(\"la variable est nulle\")</script>";
    header('location: pages/authentification/login.php');
}
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
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/home.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>

<body class=" bg-black">
    <nav>
        <div class="container d-flex justify-content-between gap-md-3 gap-lg-5 align-items-center position-relative">
            <div class="d-flex w-sm-100 align-items-center justify-content-between gap-3">
                <div class="logo"><img class="img-fluid" src="../assets/img/logo.png" alt="logo"></div>
                <div class="menu"><i class="fa-solid fa-bars burger-menu fs-3 text-white"></i></div>
            </div>


            <div class="sub-menu d-flex w-25   justify-content-center">
                <ul class="">
                    <li><a class="text-capitalize text-decoration-none text-white" href="#">contact</a></li>
                    <li><a class="text-capitalize text-decoration-none text-white" href="../home.php">home</a></li>
                    <li><a class="text-capitalize text-decoration-none text-white" href="#">about</a></li>
                    <li><a class="text-capitalize text-decoration-none text-white" href="#">about us</a></li>
      
                </ul>
            </div>


            <div class="search-wrapper flex-grow-1">
                <input class="py-2 px-3 rounded-2 w-100 border-0 d-none d-md-block" type="text" placeholder="Search">
            </div>
            <div class="sign-in-wrapper d-flex align-items-center gap-3">
                <a href="./MoviesSeries.html" class="fw-semibold text-white d-none d-md-block text-decoration-none"> Watchlist</a>
                <!-- <a href="./sign-in.html" class="fw-bold text-white d-none d-md-block">signIn</a> -->
                <select class="form-select d-none d-md-block" aria-label="Default select example">
                    <option selected>En</option>
                    <option value="2">Fr</option>
                    <option value="3">Sp</option>
                </select>
            </div>
        </div>
    </nav>
    <section class="container">
        <div class="row flex-nowrap">
            <!-- side nav -->
            <div class="sidebar col-auto col-md-3 min-vh-100 ">
                <div class="side-content d-flex flex-column align-items-center  ">
                    <div class="profil d-flex flex-column align-items-center gap-3">
                        <img src="../assets/img/profil.png" alt="" width="59" hight="63">
                        <span class="d-none d-md-inline"><?php echo $_SESSION['first_name'].' '.$_SESSION['last_name']?></span>
                    </div>
                    <ul class="nav d-flex flex-column">
                        <li><a href="dashboard.php" class="text-decoration-none text-warning px-4 py-2"><i
                                    class=" fa-solid fa-border-all"></i>
                                <span class="d-none d-md-inline text-warning">Dashboard</span></a></li>
                        <li><a href="favorite.php" class="text-decoration-none text-white px-4 py-2"><i
                                    class=" fa-regular fa-heart"></i> <span
                                    class="d-none d-md-inline">Favorite</span></a>
                        </li>
                        <li><a href="toWatch.php" class="text-decoration-none text-white px-4 py-2"><i
                                    class=" fa-regular fa-bookmark"></i>
                                <span class="d-none d-md-inline ">To-watch</span></a></li>
                        <li><a href="watch-history.php" class="text-decoration-none text-white px-4 py-2"><i
                                    class=" fa-regular fa-compass"></i> <span
                                    class="d-none d-md-inline">Watch-history</span></a></li>
                        <li><a href="#" class="text-decoration-none text-white px-4 py-2"><i
                                    class=" fa-regular fa-user"></i> <span class="d-none d-md-inline">Account</span></a>
                        </li>
                        <li><a href="#" class="text-decoration-none text-white px-4 py-2"><i
                                    class=" fa-solid fa-arrow-right-from-bracket"></i> <span
                                    class="d-none d-md-inline">Log
                                    out</span></a></li>
                    </ul>
                </div>
            </div>

            <!-- content -->
            <div class="content m-1 p-md-4 col-md-9 col-9 min-vh-100">

                <!-- doughnut charts -->

                <div class="doughnut  p-3 rounded-4 d-flex flex-column gap-5">
                    <h1 class="title fs-5">Most Watched-genre</h1>
                    <div class="row d-flex flex-wrap">
                        <div class="col-lg-3 col-md-6 pb-1">
                            <canvas id="myChart"></canvas>
                        </div>
                        <div class="col-lg-3 col-md-6  pb-2">
                            <canvas id="myChart1"></canvas>
                        </div>
                        <div class="col-lg-3 col-md-6 pb-1">
                            <canvas id="myChart2"></canvas>
                        </div>
                        <div class="col-lg-3 col-md-6 pb-3">
                            <canvas id="myChart3"></canvas>
                        </div>
                    </div>
                </div>

                <!-- liner charts -->

                <div class="row p-3 d-flex gap-3 justify-content-between">
                    <div class="linech rounded-4 col-lg-6">
                        <canvas id="lineChart"></canvas>
                    </div>
                    <div class="linech rounded-4 col-lg-5">
                        <canvas id="barChart"></canvas>
                    </div>
                </div>

                <!-- reviews swiper -->

                <div class="swiper mySwiper p-2 rounded-4">
                    <h1 class="title p-2 fs-5">Your reviews</h1>
                    <div class="swiper-wrapper ">
                        <div class="swiper-slide">
                            <div id="feed" class="feedback bg-white d-flex flex-column rounded p-3 w-50 mx-auto">
                                <div class="d-flex gap-2">
                                    <img src="../assets/img/profil.png" alt="" width="59" hight="63">
                                    <div>
                                        <span><?php echo $_SESSION['first_name'].' '.$_SESSION['last_name']?><br></span>
                                        <i class=" fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <div>
                                    <p>“I have no idea why Rob Reiner, or anyone else, wanted to make this story into a
                                        movie, and close examination of the film itself is no help.”</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div id="feed" class="feedback bg-white d-flex flex-column rounded p-3 w-50 mx-auto">
                                <div class="d-flex gap-2">
                                    <img src="img-dash/user.png" alt="">
                                    <div>
                                        <span>user name<br></span>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <div>
                                    <p>“Honestly, the worst thing about Black Panther is that it had to be released in
                                        2018
                                        and not during the term of America’s first black president.”</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div id="feed" class="feedback bg-white d-flex flex-column rounded p-3 w-50 mx-auto">
                                <div class="d-flex gap-2">
                                    <img src="img-dash/user.png" alt="">
                                    <div>
                                        <span>user name<br></span>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <div>
                                    <p>“Christopher Nolan's complex, vivid portrait of J. Robert Oppenheimer, the
                                        “father
                                        of the atomic bomb,” is a brilliant achievement in formal and conceptual terms”
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="swipers1" class="swiper-button-next text-white"></div>
                    <div id="swipers2" class="swiper-button-prev text-white "></div>
                    <div class="swiper-pagination "></div>
                </div>
            </div>

        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../assets/js/charts.js"></script>
    <script src="../assets/js/main.js"></script>
  
</body>

</html>
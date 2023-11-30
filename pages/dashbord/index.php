<?php
include '../../dataBase/connect.php';
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
    <link rel="stylesheet" href="./assets/css/style.css">

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
            <?php
           include "../../includes/sidenav.php";
           ?>

            <!-- content -->
            <div class="content m-1 p-md-4 col-md-9 col-9 min-vh-100">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card bg-danger">
                                <div class="card-body text-center ">
                                    <?php
                                    $sql = 'select * from films';
                                    $result = mysqli_query($connection, $sql);
                                    if ($result) {
                                        $rowcount = mysqli_num_rows($result);

                                        ?>
                                        <h2 class="card-title"><i class=" fa-solid fa-film"></i> Films</h2>
                                        <p class="card-text count text-dark fw-bold">
                                            <?= $rowcount ?>
                                        </p>
                                    <?php
                                    } ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card bg-warning">
                                <div class="card-body text-center">
                                    <?php
                                    $sql = 'select * from casts';
                                    $result = mysqli_query($connection, $sql);
                                    if ($result) {
                                        $rowcount = mysqli_num_rows($result);

                                        ?>
                                        <h2 class="card-title"><i class="fa-solid fa-layer-group"></i> Cast</h2>
                                        <p class="card-text count text-dark fw-bold">
                                            <?= $rowcount ?>
                                        </p>
                                    <?php
                                    } ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card bg-info ">
                                <div class="card-body text-center">
                                    <?php
                                    $sql = 'select * from genres';
                                    $result = mysqli_query($connection, $sql);
                                    if ($result) {
                                        $rowcount = mysqli_num_rows($result);

                                        ?>
                                        <h2 class="card-title"><i class="fa-solid fa-layer-group "></i> Genres</h2>
                                        <p class="card-text count text-dark fw-bold">
                                            <?= $rowcount ?>
                                        </p>
                                    <?php
                                    } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="doughnut mt-5  p-3 rounded-4 d-flex flex-column gap-5">
                    <h1 class="title fs-5">Most Watched-genre</h1>
                    <div class="row d-flex flex-wrap">
                        <div class=" col-md-3 pb-1">
                            <canvas id="myChart"></canvas>
                        </div>
                        <div class=" col-md-3  pb-2">
                            <canvas id="myChart1"></canvas>
                        </div>
                        <div class=" col-md-3 pb-1">
                            <canvas id="myChart2"></canvas>
                        </div>
                        <div class=" col-md-3 pb-3">
                            <canvas id="myChart3"></canvas>
                        </div>
                    </div>
                </div>
                <div class="row p-3 d-flex gap-3 justify-content-between">
                    <div class="linech rounded-4 col-lg-6">
                        <canvas id="lineChart"></canvas>
                    </div>
                    <div class="linech rounded-4 col-lg-5">
                        <canvas id="barChart"></canvas>
                    </div>
                </div>
                </div>

            </div>
        </div>
    </section> 

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script  src="../../assets/js/charts.js"></script>
   

</body>

</html>
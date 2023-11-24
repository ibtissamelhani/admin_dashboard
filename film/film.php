<?php
include '../connection/connect.php';
if (isset($_POST['submit'])) {
    $titre = $_POST['titre'];
    $duree = $_POST['duree'];
    $date = $_POST['date'];
    $genre = $_POST['genre'];

    $insert = "insert into `films` (titre, duree, date_trans, genre_id)
    values ('$titre',$duree, '$date',$genre)";
    $result = mysqli_query($connection, $insert);
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
    <link rel="stylesheet" href="../style.css">

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
           include"../includes/sidenav.php";
           ?>

            <!-- content -->
            <div class="content m-1 p-md-4 col-md-9 col-9 min-vh-100">
                <div class="d-flex justify-content-between">
                    <h2 class=" text-warning ">Listes des films</h2>
                    <button type="button" class="btn btn-warning mb-3 fs-5" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        Ajouter
                    </button>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">ajouter un film</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post">
                                    <div class="mb-3">
                                        <label class="form-label">titre</label>
                                        <input type="text" name="titre" class="form-control"
                                            aria-describedby="title">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">durée(min)</label>
                                        <input type="text" name="duree" class="form-control"
                                            aria-describedby="duree">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">date date transmission</label>
                                        <input type="date" name="date" class="form-control"
                                            aria-describedby="date">
                                    </div>
                                    <label class="form-label">genre</label>
                                    <select class="form-select mb-3" aria-label="Default select example" name="genre">
                                        <?php
                                        $sql = "select * from genres";
                                        $result = mysqli_query($connection, $sql);
                                        if ($result) {
                                            if (mysqli_num_rows($result) > 0) {
                                                while ($row = mysqli_fetch_array($result)) {
                                                    ?>
                                                    <option value="<?=$row['id']?>"><?=$row['nom']?></option>
                                                <?php
                                                }
                                            }
                                        }
                                        ?>
                                    </select>
                                    <button type="submit" name="submit" class="btn btn-warning">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <th scope="col">titre</th>
                            <th scope="col">durée(min)</th>
                            <th scope="col">date_transmission</th>
                            <th scope="col">genre</th>
                            <th scope="col">operations</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "select f.id, f.titre as title, f.duree as duree, f.date_trans as date, g.nom as genre from films f, genres g where f.genre_id=g.id";
                        $result = mysqli_query($connection, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row["id"];
                            $title = $row['title'];
                            $duree = $row['duree'];
                            $date = $row['date'];
                            $genreid = $row['genre'];
                            ?>
<tr>
                                    <th scope="row">
                                        <?=$title?>
                                    </th>
                                    <td>
                                        <?=$duree ?>
                                    </td>
                                    <td>
                                        <?=$date ?>
                                    </td>
                                    <td>
                                        <?=$genreid ?>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-outline-primary text-light " data-bs-toggle="modal"
                                            data-bs-target="#exampleModal2"><a href="update.php?updatedid=<?= $id ?>"
                                                class="text-decoration-none text-light">Modifier</a></button>
                                        <button type="button" name="delete" class="btn btn-outline-danger text-light"><a
                                                href="delete.php?deletedid=<?= $id ?>"
                                                class="text-decoration-none text-light">Supprimer</a></button>
                                    </td>
                                </tr>;

                            <?php
                        }
                        ?>
                    </tbody>

                </table>
            </div>

        </div>
    </section>

</body>

</html>
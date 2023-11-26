<?php
include '../connection/connect.php';
$id = $_GET['updatedid'];
$sql = "select * from films where id=$id";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);
$idd = $row['id'];
$titre = $row['titre'];
$duree = $row['duree'];
$date = $row['date_trans'];
$genre = $row['genre_id'];

if (isset($_POST['submit'])) {
    $titre = $_POST['titre'];
    $duree = $_POST['duree'];
    $date = $_POST['date'];
    $genre = $_POST['genre'];
    $idd = $_POST['id'];
    $update = "update `films` set titre ='$titre', duree=$duree, date_trans='$date', genre_id=$genre  where id=$idd";
    $result = mysqli_query($connection, $update);
    if($result){
        header('location:film.php');
    }
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
    <link rel="stylesheet" href="../assets/style.css">

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
        <?php
           include"../includes/sidenav.php";
           ?>

            <!-- content -->
            <div class="content m-1 p-md-4 col-md-9 col-9 min-vh-100">               
                                <form method="post">
                                <div class="mb-3">
                                        <input type="hidden" name="id" class="form-control"
                                            aria-describedby="num" value=<?php echo $idd ?>>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">titre</label>
                                        <input type="text" name="titre" class="form-control"
                                            aria-describedby="title" value=<?php echo $titre ?>>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">durée</label>
                                        <input type="text" name="duree" class="form-control"
                                            aria-describedby="duree" value=<?php echo $duree ?>>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">date date transmission</label>
                                        <input type="date" name="date" class="form-control"
                                            aria-describedby="date" value=<?php echo $date ?>>
                                    </div>
                                    <label class="form-label">genre</label>
                                    <select class="form-select mb-3" aria-label="Default select example" name="genre" value=<?php echo $genre ?>>
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
                                    <button type="submit" name="submit" class="btn btn-warning">save</button>
                                </form>
            </div>
        </div>
    </section>

</body>

</html>
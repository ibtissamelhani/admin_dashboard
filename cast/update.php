<?php
include '../connection/connect.php';
$id = $_GET['updatedid'];
$sql = "select * from casts where id=$id";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);
$idd = $row['id'];
$f_name = $row['nom'];
$l_name = $row['prenom'];
$age = $row['age'];

if (isset($_POST['submit'])) {
    $idd = $_POST['id'];
    $f_name = $_POST['nom'];
    $l_name = $_POST['prenom'];
    $age = $_POST['age'];
    $update = "update `casts` set nom ='$f_name', prenom='$l_name', age= $age where id=$idd";
    $result = mysqli_query($connection, $update);
    if($result){
        header('location:cast.php');

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
            <!-- side nav -->
            <?php
           include"../includes/sidenav.php";
           ?>

            <!-- content -->
            <div class="content m-1 p-md-4 col-md-9 col-9 min-vh-100">
            <form method="post" class="m-auto mt-5 col-md-9 p-5 bg-black border border-warning rounded">
                                    <div class="mb-3">
                                        <input type="hidden" name="id" class="form-control"
                                            aria-describedby="genre-name" value=<?php echo $idd ?>>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label text-light">nom</label>
                                        <input type="text" name="f_name" class="form-control bg-secondary text-black border-warning"
                                            aria-describedby="genre-name" value=<?php echo $f_name ?>>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label text-light">prenom</label>
                                        <input type="text" name="l_name" class="form-control bg-secondary text-black border-warning"
                                            aria-describedby="genre-name" value=<?php echo $l_name ?>>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label text-light">age</label>
                                        <input type="text" name="age" class="form-control bg-secondary text-black border-warning"
                                            aria-describedby="genre-name" value=<?php echo $age ?>>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-warning">Submit</button>
                                    <button type="" name="annuler" class="btn btn-primary"><a href="cast.php" class="text-dark text-decoration-none">annuler</a></button>
                                </form>
            </div>

        </div>
    </section>
 
</body>

</html>
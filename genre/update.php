<?php
include '../connection/connect.php';
$id = $_GET['updatedid'];
$sql = "select * from genres where id=$id";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['nom'];
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $update = "update `genres` set nom='$name' where id=$id";
    $result = mysqli_query($connection, $update);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                <!-- Button trigger modal -->
                <div class="d-flex justify-content-between">
                    <h2 class=" text-warning ">Listes des genre</h2>
                    <button type="button" class="btn btn-warning mb-3 " data-bs-toggle="modal"
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
                                <h5 class="modal-title" id="exampleModalLabel">ajouter un genre</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post">
                                    <div class="mb-3">
                                        <label class="form-label">Genre</label>
                                        <input type="text" name="name" class="form-control"
                                            aria-describedby="genre-name">
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-warning">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">genre</th>
                            <th scope="col">operations</th>
                        </tr>
                    </thead>
                    </thead>
                    <tbody>
                        <?php
                        $sql = 'select * from `genres`';
                        $result = mysqli_query($connection, $sql);
                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id = $row['id'];
                                $name = $row['nom'];
                                ?>
                                <tr>
                                    <th scope="row">
                                        <?php echo $id ?>
                                    </th>
                                    <td>
                                        <?php echo $name ?>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal2"><a href="update.php?updatedid=<?= $id ?>"
                                                class="text-decoration-none text-light">Modifier</a></button>
                                        <button type="button" name="delete" class="btn btn-danger text-light"><a
                                                href="delete.php?deletedid=<?= $id ?>"
                                                class="text-decoration-none">Supprimer</a></button>
                                    </td>
                                </tr>;
                            <?php }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

</body>

    <form method="post m-5">
        <div class="mb-3">
            <label class="form-label">Genre</label>
            <input type="text" name="name" class="form-control" aria-describedby="genre-name" value=<?php echo $name ?>>
        </div>
        <button type="submit" name="submit" class="btn btn-warning">save</button>
    </form>
</html>
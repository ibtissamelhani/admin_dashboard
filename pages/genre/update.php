<?php
include '../../dataBase/connect.php';
include '../../Controller/category.php';

    $id = $_GET['updateid'];
    $row =  getCategory($id);
    $idd = $row['id'];
    $name = $row['name'];
    $description =$row['description'];
    

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $idd = $_POST['idd'];
    $description = $_POST['description'];
    $result =update($idd, $name, $description);
    if($result){
        header('location:genre.php');
    }
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
            include "../../includes/sidenav.php";
            ?>

            <!-- content -->
            <div class="content m-1 p-md-4 col-md-9 col-9 min-vh-100">
                <form method="post" class="m-auto mt-5 col-md-9 p-5 bg-black border border-warning rounded">
                    <div class="mb-3">
                        <label class="form-label text-light">category</label>
                        <input type="hidden" name="idd" class="form-control" aria-describedby="genre-name" value=<?php echo $idd ?>>
                        <input type="text" name="name" class="form-control bg-secondary text-black border-warning" aria-describedby="genre-name" value=<?php echo $name ?>>
                    </div>
                    <div class="form-floating mb-3">
                    <input class="form-control bg-secondary text-black border-warning" name="description" placeholder="Leave a comment here"  value=<?php echo $description ?>>
                    </div>
                    <button type="submit" name="submit" class="btn btn-warning">save</button>
                    <button type="" name="annuler" class="btn btn-primary"><a href="genre.php" class="text-dark text-decoration-none">annuler</a></button>
                </form>
            </div>
        </div>
    </section>

</body>


</html>
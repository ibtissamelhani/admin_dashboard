<?php
include '../../dataBase/connect.php';
include '../../Controller/movies.php';

$id = $_GET['updatedid'];
$row = getMovie($id);
$idd = $row['id'];
$title = $row['title'];
$year = $row['production_year'];
$country = $row['country'];
$poster = $row['poster'];
$category = $row['category_id'];


if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $year = $_POST['year'];
    $country = $_POST['country'];
    $category = $_POST['category'];
    $poster = $_FILES['poster']['name'];
    $tempfile = $_FILES['poster']['tmp_name'];
    $folder = "../assets/img" . $poster;
    $idd = $_POST['id'];
    $result = update($idd, $title,$year,$country,$poster,$category);
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
    <link rel="stylesheet" href="../assets/css/style.css">

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
           include"../../includes/sidenav.php";
           ?>

            <!-- content -->
            <div class="content m-1 p-md-4 col-md-9 col-9 min-vh-100">
                                <form method="post" class="m-auto mt-5 col-md-9 p-5 bg-black border border-warning rounded" enctype="multipart/form-data">
                                    <div class="mb-3 ">
                                        <input type="hidden" name="id" class="form-control"
                                            aria-describedby="num" value=<?php echo $idd ?>>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label text-light">title</label>
                                        <input type="text" name="title" class="form-control bg-secondary border-warning text-black"
                                            aria-describedby="title" value=<?php echo $title ?>>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label text-light">production_year</label>
                                        <input type="text" name="year" class="form-control  bg-secondary border-warning text-black"
                                            aria-describedby="duree" value=<?php echo $year ?>>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label text-light">country</label>
                                        <input type="text" name="country" class="form-control"
                                            aria-describedby="date" value=<?php echo $country ?>>
                                    </div>
                                    <div class="mb-3">

                                    <div class="mb-3">
                                        <label class="form-label text-light">poster</label>
                                        <input type="file" name="poster" class="form-control"
                                        accept="image/*" >
                                        <?php if(!empty($poster)): ?>
                                        <img src="../../assets/img/<?= $poster?>"  alt="Current Poster" class="mt-2" style="max-width: 200px;">
                                        <?php endif; ?>
                                    </div>
                                    <label class="form-label text-light">category</label>
                                    <select class="form-select mb-3" aria-label="Default select example" name="category">
                                        <?php
                                        $result = getAllCategories();
                                                while ($row = mysqli_fetch_array($result)) {
                                                 ?>
                                                     <?php $isSelected = ($row['id'] ==  $row['category_id']) ? 'selected' : ''; ?> 
                                                    <option value="<?=$row['id']?>" <?=$isSelected?>><?=$row['name']?></option>
                                                <?php
                                                }
                                        ?>
                                    </select>
                                    <button type="submit" name="submit" class="btn btn-warning">save</button>
                                    <button type="annuler" name="annuler" class="btn btn-primary"><a href="film.php" class="text-dark text-decoration-none">anuller</a></button>
                                </form>
            </div>
        </div>
    </section>

</body>

</html>
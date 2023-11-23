<?php
include 'connect.php';

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

<body>
    <form method="post m-5">
        <div class="mb-3">
            <label class="form-label">Genre</label>
            <input type="text" name="name" class="form-control" aria-describedby="genre-name" value=<?php echo $name ?>>
        </div>
        <button type="submit" name="submit" class="btn btn-warning">save</button>
    </form>
</body>
</html>
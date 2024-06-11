<?php
session_start(); // Session'ı başlatın
include("connection2.php");


if (isset($_POST["update"])) {
    $username = $_GET["id"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $sql = "UPDATE login SET password='$password' WHERE username='$username'";
    mysqli_query($conn, $sql);
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<header>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="display-1 text-center" style="color: #f7d6c3">Admin Panel</h1>
            </div>
        </div>
        <div class="btn-group" role="group" aria-label="Basic outlined example">
            <a href="panel.php" class="btn btn-outline-primary">All Records</a>
            <a href="add.php" class="btn btn-outline-primary">New Record</a>
            <a href="messages.php" class="btn btn-outline-primary">Messages</a>
            <a href="logout.php" class="btn btn-outline-primary">Logout</a>
        </div>
    </div>
</header>
<main>
    <div class="container">
        <form action="" method="post" class="row mt-4 g-3">
            <div class="col-6">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" value="">
            </div>
            <button type="submit" class="btn btn-primary" name="update">UPDATE</button>
        </form>
    </div>
</main>
</body>
</html>


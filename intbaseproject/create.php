<?php
include("product.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES["image"])) {
    $pr_name = $_POST["pr_name"];
    $stock = $_POST["stock"];
    $contents = $_POST["contents"];


    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $uploadOk = 1;


    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "<script>alert('Dosya bir resim değil.');</script>";
        $uploadOk = 0;
    }

  
    if ($_FILES["image"]["size"] > 5000000) {
        echo "<script>alert('Üzgünüz, dosyanız çok büyük.');</script>";
        $uploadOk = 0;
    }

    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "<script>alert('Üzgünüz, sadece JPG, JPEG, PNG ve GIF dosyaları kabul edilmektedir.');</script>";
        $uploadOk = 0;
    }


    if ($uploadOk == 0) {
        echo "<script>alert('Üzgünüz, dosyanız yüklenemedi.');</script>";
    } else {
       
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $image_path = $target_file;

           
            $insert = "INSERT INTO new (pr_name, stock, contents, image_path) VALUES ('$pr_name', '$stock', '$contents', '$image_path')";

            if ($conn->query($insert) === TRUE) {
                echo "<script>
                        alert('Ürün başarıyla oluşturuldu.');
                        window.location.href = 'panel.php';
                      </script>";
                exit();
            } else {
                echo "<script>alert('Hata: " . $conn->error . "');</script>";
            }
        } else {
            echo "<script>alert('Üzgünüz, dosyanız yüklenirken bir hata oluştu.');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ürün Oluştur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <h3 id="h3about">Ürün Oluştur</h3>
    <div class="container">
        <form action="create.php" method="post" enctype="multipart/form-data">
            <div id="contactopac">
                <div id="formgroup">
                    <div id="leftform">
                        <input type="text" name="pr_name" placeholder="İsim" required class="form-control">
                        <input type="text" name="stock" placeholder="Stok" required class="form-control">
                        <input type="text" name="contents" placeholder="İçerik" required class="form-control">
                        <input type="file" name="image" required class="form-control mt-2">
                    </div>
                    <input type="submit" value="Oluştur" class="btn btn-primary mt-3">
                </div>
            </div>
        </form>
        <footer></footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.slim.min.js" integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script>
    <script src="owl/owl.carousel.min.js"></script>
    <script src="owl/script.js"></script>
</body>
</html>
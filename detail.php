<?php
require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$sh = query("SELECT * FROM shinobi WHERE id = $id")[0];


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Home</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <h1>Detail Shinobi</h1>
            <div class="col-4 mt-4">

                <div class="card" style="width: 18rem;">
                    <img src="img/<?= $sh["image"]; ?>" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><?= $sh["name"]; ?></h5>
                        <p class="card-text"><?= $sh["description"]; ?></p>
                        <a href="index.php" class="btn btn-primary">back</a>
                    </div>
                </div>


            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>
<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

$shinobi = query("SELECT * FROM shinobi");

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
            <h1 class="mt-3">Daftar Shinobi Konoha</h1>
            <div class="col-6 mt-4">

                <a href="logout.php"><span class="badge bg-secondary">logout</span></a>
                <a href="tambah.php" class="ms-4"><span class="badge bg-primary">Add Data</span></a>
                <table class="table">
                    <thead">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col" class="text-center">Action</th>

                        </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($shinobi as $sh) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $sh["name"]; ?></td>
                                    <td class="text-center">
                                        <a href="hapus.php?id=<?= $sh["id"]; ?>"><span class="badge rounded-pill bg-danger">delete</span></a>
                                        <a href="ubah.php?id=<?= $sh["id"]; ?>"><span class="badge rounded-pill bg-warning ">update</span></a>
                                        <a href="detail.php?id=<?= $sh["id"]; ?>"><span class="badge rounded-pill bg-success ">detail</span></a>

                                    </td>

                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>

                        </tbody>
                </table>
            </div>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>
<?php
include_once("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Logistic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a href="#hero">
                <?php
                $sql = "SELECT * from navbar WHERE id=1";
                $hasil = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($hasil)) {
                ?>
                    <img src="assets/images/<?php echo $row["logo"] ?>" class="img-fluid" style="width: 180px; height: auto" alt="My Logistic Logo" />
                <?php
                }
                ?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <?php
                        $sql = "SELECT * from navbar WHERE id=2";
                        $hasil = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($hasil)) {
                        ?>
                            <a class="nav-link active" aria-current="page" href="#our-work"><?php echo $row["nav"] ?></a>
                        <?php
                        }
                        ?>
                    </li>
                    <li class="nav-item">
                        <?php
                        $sql = "SELECT * from navbar WHERE id=3";
                        $hasil = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($hasil)) {
                        ?>
                            <a class="nav-link active" aria-current="page" href="#service"><?php echo $row["nav"] ?></a>
                        <?php
                        }
                        ?>
                    </li>
                    <li class="nav-item">
                        <?php
                        $sql = "SELECT * from navbar WHERE id=4";
                        $hasil = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($hasil)) {
                        ?>
                            <a class="nav-link active" aria-current="page" href="#about"><?php echo $row["nav"] ?></a>
                        <?php
                        }
                        ?>
                    </li>
                    <li class="nav-item">
                        <?php
                        $sql = "SELECT * from navbar WHERE id=5";
                        $hasil = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($hasil)) {
                        ?>
                            <a class="nav-link active" aria-current="page" href="#client"><?php echo $row["nav"] ?></a>
                        <?php
                        }
                        ?>
                    </li>
                    <li class="nav-item">
                        <?php
                        $sql = "SELECT * from navbar WHERE id=6";
                        $hasil = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($hasil)) {
                        ?>
                            <a class="nav-link active" aria-current="page" href="#contact"><?php echo $row["nav"] ?></a>
                        <?php
                        }
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</head>

<body>

    <main>
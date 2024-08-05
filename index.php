<?php
$no_wa = 6282215266070;

?>

<?php
include_once("header.php");
?>
<!-- hero section -->
<section class="hero">
    <div id="hero" class="container">
        <div class="row d-flex">
            <div class="col-lg-6  col-md-5 mt-3 text-center mt-md-0 col-md-12 mt-sm-0">
                <h1 class="mt-4 mb-3" id="hero">
                    <strong>Efficient and Reliable Logistics
                        Solutions
                    </strong>
                </h1>
                <p class="">Delivering Excellence in every Mile.</p>
                <?php
                $sql = "SELECT * from button WHERE id=1";
                $hasil = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($hasil)) {
                ?>
                    <a href="https://wa.me/<?php echo $no_wa ?>?text=hai" target="_blank" class="cta-button text-center "><?php echo $row["hero"] ?></a>
                <?php
                }
                ?>
            </div>
            <div class="col-xxl-6 col-lg-6 col-md-7 offset-md-3 offset-xl-0 offset-lg-0">
                <div class="hero-image mt-5">
                    <?php
                    $sql = "SELECT * from hero WHERE id=3";
                    $q1 = mysqli_query($conn, $sql);
                    while ($r1 = mysqli_fetch_array($q1)) {
                    ?>
                        <img src="assets/images/<?php echo $r1['elemen'] ?>" alt="logistic" />
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- our work section -->
<section class="our-work" id="our-work">
    <div class="container">
        <h2 class="mb-5" style="color: #ffff">We Provide Safe And <br />Reliable Cargo Solutions</h2>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card-wrapper-work">
                        <?php
                        $sql = "SELECT * FROM our_work";
                        $hasil = mysqli_query($conn, $sql);

                        $jmlService = mysqli_num_rows($hasil);
                        if ($jmlService > 0) {
                            while ($row = mysqli_fetch_assoc($hasil)) { ?>
                                <div class="card" style="width: 15rem; height:auto">
                                    <img src="assets/images/<?= $row["gambar"];  ?>" alt="" />
                                    <div class="card-body" style="color: #003366">
                                        <strong>
                                            <p class="card-text"><?php echo $row["caption"]; ?></p>
                                        </strong>
                                    </div>
                                </div>

                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card-wrapper-work">
                        <?php
                        $sql = "SELECT * FROM our_work ORDER BY RAND()";
                        $hasil = mysqli_query($conn, $sql);

                        $jmlService = mysqli_num_rows($hasil);
                        if (
                            $jmlService >
                            0
                        ) {
                            while ($row = mysqli_fetch_assoc($hasil)) { ?>
                                <div class="card" style="width: 15rem; height:auto">
                                    <img src="assets/images/<?= $row["gambar"];  ?>" alt="" />
                                    <div class="card-body" style="color: #003366">
                                        <strong>
                                            <p class="card-text"><?php echo $row["caption"] ?></p>
                                        </strong>
                                    </div>
                                </div>

                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card-wrapper-work">
                        <?php
                        $sql = "SELECT * FROM our_work ORDER BY id DESC";
                        $hasil = mysqli_query($conn, $sql);

                        $jmlService = mysqli_num_rows($hasil);
                        if (
                            $jmlService >
                            0
                        ) {
                            while ($row = mysqli_fetch_assoc($hasil)) { ?>
                                <div class="card" style="width: 15rem; height:auto">
                                    <img src="assets/images/<?= $row["gambar"];  ?>" alt="" />
                                    <div class="card-body" style="color: #003366">
                                        <strong>
                                            <p class="card-text"><?php echo $row["caption"] ?></p>
                                        </strong>
                                    </div>
                                </div>

                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>

            </div>
            <div class="carousel-button-ourwork">
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- service section -->
<section class="services" id="service">
    <div class="container ">
        <div class="row">
            <div class=" col-lg-6 col-md-8 col-sm-12 col-xs-12">
                <?php
                $sql = "SELECT * from services WHERE id=1";
                $hasil = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($hasil)) {
                ?>
                    <div class="h2" style="color: #003366"><strong><?php echo $row['judul'] ?></strong></div>
                    <p class="mt-3"><?= $row['deskripsi'] ?></p>
                <?php
                }
                ?>
            </div>
            <div class="align-self-center col-md-4 mt-md-5 mt-xl-3 col-sm-12 mb-sm-4 col-xs-12 ">
                <?php
                $sql = "SELECT * from button WHERE id=1";
                $hasil = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($hasil)) {
                ?>
                    <a href="https://wa.me/<?php echo $no_wa ?>?text=hai" target="_blank" class="cta-button text-center"><?php echo $row["service"] ?></a>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="row g-3">
            <!-- baris satu -->
            <div class="col-xxl-4 offset-xxl-4 col-xl-4 offset-xl-4 col-lg-6 col-md-6 ">
                <?php
                $sql = "SELECT * from services WHERE id=3";
                $hasil = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($hasil)) {
                ?>
                    <div class="card card border border-warning p-3" style="height: 7.5rem; width: 100%;">
                        <div class="service-item">
                            <h3><?= $row['service'] ?></h3>
                            <p><?= $row['caption'] ?></p>
                        </div>
                    </div>
                <?php
                }
                ?>

            </div>

            <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                <?php
                $sql = "SELECT * from services WHERE id=4";
                $hasil = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($hasil)) {
                ?>
                    <div class="card border border-warning p-3" style="height: 7.5rem; width: 100%;">
                        <div class="service-item">
                            <h3><?= $row['service'] ?></h3>
                            <p><?= $row['caption'] ?></p>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
            <!-- baris dua -->
            <div class="col-xxl-4 offset-xxl-3 col-xl-4 offset-xl-3 col-lg-6 col-md-6 ">
                <?php
                $sql = "SELECT * from services WHERE id=5";
                $hasil = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($hasil)) {
                ?>
                    <div class="card border border-warning p-3" style="height: 7.5rem; width: 100%;">
                        <div class="service-item">
                            <h3><?= $row['service'] ?></h3>
                            <p><?= $row['caption'] ?></p>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="col-xxl-4 col-xl-4  col-lg-6 col-md-6 ">
                <?php
                $sql = "SELECT * from services WHERE id=6";
                $hasil = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($hasil)) {
                ?>
                    <div class="card border border-warning p-3" style="height: 7.5rem; width: 100%;">
                        <div class="service-item">
                            <h3><?= $row['service'] ?></h3>
                            <p><?= $row['caption'] ?></p>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="col-xxl-1"></div>
            <!-- baris tiga -->
            <div class="col-xxl-4 offset-xxl-2 col-xl-4 offset-xl-2 ">
                <?php
                $sql = "SELECT * from services WHERE id=7";
                $hasil = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($hasil)) {
                ?>
                    <div class="card border border-warning p-3" style="height: 7.5rem; width: 100%;">
                        <div class="service-item">
                            <h3><?= $row['service'] ?></h3>
                            <p><?= $row['caption'] ?></p>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="col-xxl-4 col-xl-4 ">
                <?php
                $sql = "SELECT * from services WHERE id=8";
                $hasil = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($hasil)) {
                ?>
                    <div class="card border border-warning p-3" style="height: 7.5rem; width: 100%;">
                        <div class="service-item">
                            <h3><?= $row['service'] ?></h3>
                            <p><?= $row['caption'] ?></p>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>

<section class="about" id="about">
    <div class="container">
        <div class="row">
            <div class="col-xxl-4 col-xl-4">
                <?php
                $sql = "SELECT * from about WHERE id=1";
                $hasil = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($hasil)) {
                ?>
                    <strong>
                        <h2 style="color: #003366">
                            <strong><?= $row['tagline'] ?></strong>
                        </h2>
                    </strong>
                <?php
                }
                ?>
            </div>

        </div>
        <div class="row">

            <?php
            $sql = "SELECT * from about WHERE id=1";
            $hasil = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($hasil)) {
            ?>
                <div class="col text-center">
                    <img src="assets/images/<?= $row['gambar'] ?>" alt="" />
                </div>
            <?php
            }
            ?>
        </div>
        <div class="row">
        </div>
        <div class="row d-flex justify-content-end">
            <div class="col-xxl-5 col-xl-6 text-end">
                <?php
                $sql = "SELECT * from about WHERE id=1";
                $hasil = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($hasil)) {
                ?>
                    <h5><?= $row['deskripsi'] ?></h5>
                <?php
                }
                ?>

            </div>
        </div>
    </div>
</section>

<!-- testimoni section -->
<section class="testimoni" id="testimoni">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <img src="assets/images/quote-icon.png" class="float-end" alt="quote icon" />
            </div>
        </div>

        <div id="carousel-testimoni" class="carousel slide" data-bs-ride="carousel">
            <div class="wrapper-carousel-inner-testimoni">
                <div class="carousel-indicators ">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner text-center">
                    <div class="carousel-item active">
                        <div class="wrapper-testimoni mt-5">
                            <?php
                            $sql = "SELECT * from testimoni WHERE id=1";
                            $hasil = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_array($hasil)) {
                            ?>
                                <p><?= $row['testimoni'] ?></p><br>

                                <h5><?= $row['nama'] ?></h5>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="wrapper-testimoni mt-5">
                            <?php
                            $sql = "SELECT * from testimoni WHERE id=2";
                            $hasil = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_array($hasil)) {
                            ?>
                                <p><?= $row['testimoni'] ?></p><br>

                                <h5><?= $row['nama'] ?></h5>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="wrapper-testimoni mt-5">
                            <?php
                            $sql = "SELECT * from testimoni WHERE id=3";
                            $hasil = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_array($hasil)) {
                            ?>
                                <p><?= $row['testimoni'] ?></p><br>

                                <h5><?= $row['nama'] ?></h5>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-button-testimoni">
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel-testimoni" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel-testimoni" data-bs-slide="next">
                    <span class="carousel-control-next-icon " aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- client section -->
<section class="client" id="client">
    <div class="container">
        <h2><strong>Our Client</strong></h2>

        <div id="carousel-client-1" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3500">
            <div class="wrapper-carousel-inner-client">
                <div class="carousel-inner ">
                    <div class="carousel-item active">
                        <div class="wrapper-client">
                            <?php
                            $sql = "SELECT * FROM client ORDER BY RAND() LIMIT 4";
                            $hasil = mysqli_query($conn, $sql);

                            $jmlClient = mysqli_num_rows($hasil);
                            if ($jmlClient > 0) {
                                while ($row = mysqli_fetch_assoc($hasil)) { ?>
                                    <div class="card" style="width: 18rem;">
                                        <img src="assets/images/<?php echo $row["img"] ?>" class="card-img-top" alt="...">
                                    </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>

                    <div class="carousel-item ">
                        <div class="wrapper-client">
                            <?php
                            $sql = "SELECT * FROM client ORDER BY RAND() LIMIT 4";
                            $hasil = mysqli_query($conn, $sql);

                            $jmlClient = mysqli_num_rows($hasil);
                            if ($jmlClient > 0) {
                                while ($row = mysqli_fetch_assoc($hasil)) { ?>
                                    <div class="card" style="width: 18rem;">
                                        <img src="assets/images/<?php echo $row["img"] ?>" class="card-img-top" alt="...">
                                    </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="wrapper-client">
                            <?php
                            $sql = "SELECT * FROM client ORDER BY RAND() LIMIT 4";
                            $hasil = mysqli_query($conn, $sql);

                            $jmlClient = mysqli_num_rows($hasil);
                            if ($jmlClient > 0) {
                                while ($row = mysqli_fetch_assoc($hasil)) { ?>
                                    <div class="card" style="width: 18rem;">
                                        <img src="assets/images/<?php echo $row["img"] ?>" class="card-img-top" alt="...">
                                    </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div id="carousel-client-2" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
            <div class="wrapper-carousel-inner-client">
                <div class="carousel-inner ">
                    <div class="carousel-item active">
                        <div class="wrapper-client">
                            <?php
                            $sql = "SELECT * FROM client ORDER BY RAND() LIMIT 4";
                            $hasil = mysqli_query($conn, $sql);

                            $jmlClient = mysqli_num_rows($hasil);
                            if ($jmlClient > 0) {
                                while ($row = mysqli_fetch_assoc($hasil)) { ?>
                                    <div class="card" style="width: 18rem;">
                                        <img src="assets/images/<?php echo $row["img"] ?>" class="card-img-top" alt="...">
                                    </div>
                            <?php
                                }
                            } else {
                                echo "tidak ada data";
                            }
                            ?>
                        </div>
                    </div>

                    <div class="carousel-item ">
                        <div class="wrapper-client">
                            <?php
                            $sql = "SELECT * FROM client ORDER BY RAND() LIMIT 4";
                            $hasil = mysqli_query($conn, $sql);

                            $jmlClient = mysqli_num_rows($hasil);
                            if ($jmlClient > 0) {
                                while ($row = mysqli_fetch_assoc($hasil)) { ?>
                                    <div class="card" style="width: 18rem;">
                                        <img src="assets/images/<?php echo $row["img"] ?>" class="card-img-top" alt="...">
                                    </div>
                            <?php
                                }
                            } else {
                                echo "tidak ada data";
                            }
                            ?>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="wrapper-client">
                            <?php
                            $sql = "SELECT * FROM client ORDER BY RAND() LIMIT 4";
                            $hasil = mysqli_query($conn, $sql);

                            $jmlClient = mysqli_num_rows($hasil);
                            if ($jmlClient > 0) {
                                while ($row = mysqli_fetch_assoc($hasil)) { ?>
                                    <div class="card" style="width: 18rem;">
                                        <img src="assets/images/<?php echo $row["img"] ?>" class="card-img-top" alt="...">
                                    </div>
                            <?php
                                }
                            } else {
                                echo "tidak ada data";
                            }
                            ?>
                        </div>
                    </div>
                </div>

            </div>

        </div>
</section>
<!-- contact section -->
<section class="contact" id="contact">
    <div class="container mb-5">
        <div class="row">
            <div class="col-6" style=width:50%;>
                <?php
                $sql = "SELECT * from contact WHERE id=1";
                $hasil = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($hasil)) {
                ?>
                    <h2><strong><?php echo $row["judul"] ?></strong></h2>
                    <div class="iframe">
                        <?php echo $row["gmaps"] ?>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="col-6 align-self-center">
                <div class="row">
                    <?php
                    $sql = "SELECT * from contact WHERE id=2";
                    $hasil = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($hasil)) {
                    ?>
                        <h4 class="mb-3" style="color: #003366"><strong> <?php echo $row["judul"] ?></strong></h4>
                    <?php
                    }
                    ?>
                </div>
                <div class="row contact">
                    <div class="col-1">
                        <img src="assets/images/contact-phone.png" class="d-flex" alt="" />
                    </div>
                    <div class="col">
                        <?php
                        $sql = "SELECT * from contact WHERE id=2";
                        $hasil = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($hasil)) {
                        ?>
                            <p><?php echo $row["tlp"] ?></p>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="row contact">
                    <div class="col-1">
                        <img src="assets/images/contact-email.png" class="d-flex" alt="" />
                    </div>
                    <div class="col">
                        <?php
                        $sql = "SELECT * from contact WHERE id=2";
                        $hasil = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($hasil)) {
                        ?>
                            <p><?php echo $row["email"] ?></p>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="row contact">
                    <div class="col-1">
                        <img src="assets/images/contact-maps.png" class="d-flex" alt="" />
                    </div>
                    <div class="col">
                        <?php
                        $sql = "SELECT * from contact WHERE id=2";
                        $hasil = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($hasil)) {
                        ?>
                            <p><?php echo $row["alamat"] ?></p>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include("footer.php") ?>
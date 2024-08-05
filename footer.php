</main>


<footer>
    <div id="contact" class="container">
        <div class="row">
            <div class="col-xs-12 justify-content-center col-sm-12 col-md-6 col-lg-5 col-xl-4 col-xxl-4">
                <?php
                $sql = "SELECT * from footer WHERE id=1";
                $hasil = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($hasil)) {
                ?>
                    <div class="footer-logo">
                        <img src="assets/images/<?php echo $row["judul"] ?>" alt="My Logistic Logo" />
                    </div>
                    <p class=""><?php echo $row["deskripsi"] ?></p>
                <?php
                }
                ?>
            </div>
            <div class="col-6 justify-content-center col-sm-6 col-md-3 col-lg-4 col-xl-2 col-xxl-2">
                <?php
                $sql = "SELECT * from footer WHERE id=2";
                $hasil = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($hasil)) {
                ?>
                    <a href="#our-work" style="text-decoration: none; color: inherit;">
                        <h3><?php echo $row["judul"] ?></h3>
                    </a>
                    <ul>

                        <li><?php echo $row["list_1"] ?></li>
                        <li><?php echo $row["list_2"] ?></li>
                        <li><?php echo $row["list_3"] ?></li>
                    </ul>
                <?php
                }
                ?>
            </div>
            <div class="col-6 justify-content-center col sm-6 col-md-3 col-lg-3 col-xl-2 col-xxl-2">
                <?php
                $sql = "SELECT * from footer WHERE id=3";
                $hasil = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($hasil)) {
                ?>
                    <a href="#about" style="text-decoration: none; color: inherit;">
                        <h3><?php echo $row["judul"] ?></h3>
                    </a>
                    <ul>

                        <li><?php echo $row["list_1"] ?></li>
                        <li><?php echo $row["list_2"] ?></li>
                        <li><?php echo $row["list_3"] ?></li>
                        <li><?php echo $row["list_4"] ?></li>
                    </ul>
                <?php
                }
                ?>
            </div>

            <div class="col-6 justify-content-center col-sm-6 col-md-6 col-lg-5 col-xl-2 col-xl-2">
                <?php
                $sql = "SELECT * from footer WHERE id=4";
                $hasil = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($hasil)) {
                ?>
                    <a href="#service" style="text-decoration: none; color: inherit;">
                        <h3><?php echo $row["judul"] ?></h3>
                    </a>
                    <ul>

                        <li><?php echo $row["list_1"] ?></li>
                        <li><?php echo $row["list_2"] ?></li>
                        <li><?php echo $row["list_3"] ?></li>
                        <li><?php echo $row["list_4"] ?></li>
                        <li><?php echo $row["list_5"] ?></li>
                        <li><?php echo $row["list_6"] ?></li>
                    </ul>
                <?php
                }
                ?>
            </div>
            <div class="col-6 justify-content-center col-sm-6 col-md-6 col-lg-7 col-xl-2 col-xl-2">
                <?php
                $sql = "SELECT * from footer WHERE id=5";
                $hasil = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($hasil)) {
                ?>
                    <h3><?php echo $row["judul"] ?></h3>
                    <div class="footer-icon">
                        <ul class="list-unstyled d-flex justify-content-center">
                            <li>
                                <a href="https://www.facebook.com/profile.php?id=100080920096560"><img src="assets/images/<?php echo $row["list_1"] ?>" class="w-50" alt="Facebook" /></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/progimedia?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><img src="assets/images/<?php echo $row["list_2"] ?>" class="w-50" alt="Instagram" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="assets/images/<?php echo $row["list_3"] ?>" class="w-50" alt="X" /></a>
                            </li>
                        </ul>
                    </div>
                    <a href="#" class="no"><?php echo $row["list_4"] ?></a>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="footer-bottom">
            <?php
            $sql = "SELECT * from footer WHERE id=7";
            $hasil = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($hasil)) {
            ?>
                <p><?php echo $row["copyright"] ?></p>
            <?php
            }
            ?>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="assets/js/script.js"></script>
<script>
    const navEl = document.querySelector(".navbar");

    window.addEventListener("scroll", () => {
        if (window.scrollY >= 56) {
            navEl.classList.add("navbar-scrolled");
        }
    });
</script>
</body>

</html>
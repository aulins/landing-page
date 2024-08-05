<?php include("header.php") ?>
<!-- hero section -->
<section class="hero">
    <div id="hero" class="container">
        <div class="row d-flex">
            <div class="col-lg-6 col-md-5 mt-5 me-auto text-center">
                <h1 class="mt-4 mb-3" id="hero">
                    <strong>Efficient and Reliable Logistics <br />
                        Solutions
                    </strong>
                </h1>
                <p class="">Delivering Excellence in every Mile.</p>
                <a href="https://wa.me/<?php echo $no_wa ?>?text=hai" class="cta-button text-center">Connect With US</a>
            </div>
            <div class="col-lg-6 col-md-7 align-self-end d-flex justify-content-end">
                <div class="hero-image" style="width: 53rem">
                    <img src="assets/images/logistic.png" alt="Robot Mascot" />
                </div>
            </div>
        </div>
    </div>
</section>

<!-- our work section -->
<section class="about" id="our-work">
    <div class="container">
        <h2 class="mb-5" style="color: #ffff" id="about">We Provide Safe And <br />Reliable Cargo Solutions</h2>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner text-center" id="service-carousel">
                <div class="carousel-item active">
                    <div class="cards-wrapper">
                        <?php
                        include("koneksi.php");
                        $sql = "SELECT image_url FROM carousel_images";
                        $hasil = mysqli_query($conn, $sql);

                        $jmlService = mysqli_num_rows($hasil);
                        if (
                            $jmlService >
                            0
                        ) {
                            while ($row = mysqli_fetch_assoc($hasil)) { ?>
                                <div class="card" style="width: 18rem">
                                    <img src="assets/images/<?= $row["image_url"];  ?>" alt="" />
                                    <div class="card-body" style="color: #003366">
                                        <strong>
                                            <p class="card-text">Some quick example text to build on the card title.</p>
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
            <div class="btn-about">
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
    <div class="container">
        <div class="row g-3">
            <!-- baris satu -->
            <div class="col-4">
                <div class="h2" style="color: #003366"><strong>Why Choose Us?</strong></div>
                <p class="mt-3">At My Logistic, we provide a comprehensive range of logistics services designed to meet your business needs</p>
            </div>
            <div class="col-4">
                <div class="service-item">
                    <h3>Real-Time Tracking</h3>
                    <p>Monitor the location and status of your shipments in real-time.</p>
                </div>
            </div>

            <div class="col-4">
                <div class="service-item">
                    <h3>Flexible Scheduling</h3>
                    <p>Plan and schedule your shipments with ease.</p>
                </div>
            </div>
            <!-- baris dua -->
            <div class="col-3">
                <a href="https://colab.research.google.com/" class="cta-button text-center">Learn More</a>
            </div>
            <div class="col-4">
                <div class="service-item">
                    <h3>Secure Warehousing</h3>
                    <p>Utilize our state-of-the-art warehousing facilities for safe storage of your goods.</p>
                </div>
            </div>
            <div class="col-4">
                <div class="service-item">
                    <h3>Global Reach</h3>
                    <p>Expand your business horizons with our international shipping services.</p>
                </div>
            </div>
            <div class="col-1"></div>
            <!-- baris tiga -->
            <div class="col-2"></div>
            <div class="col-4">
                <div class="service-item">
                    <h3>Efficient Freight Management</h3>
                    <p>Optimize your supply chain with our comprehensive freight management services.</p>
                </div>
            </div>
            <div class="col-4">
                <div class="service-item">
                    <h3>Customer Support</h3>
                    <p>Our dedicated customer support team is available 24/7 to assist you.</p>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</section>

<section class="drone" id="about2">
    <div class="container">
        <div class="row">
            <h2 style="color: #003366">
                <strong>Emergency Solutions <br />for Delivery</strong>
            </h2>
        </div>
        <div class="row">
            <div class="col text-center">
                <img src="assets/images/drone-asset.png" alt="" />
            </div>
        </div>
        <div class="row">
            <div class="col-8"></div>
            <div class="col-4 text-end">
                <h5>"My Logistics" is a comprehensive logistics service provider specializing in efficient and reliable logistics solutions tailored to meet the unique needs of businesses and individuals.</h5>
            </div>
        </div>
    </div>
</section>

<!-- client section -->
<section class="quotes" id="client">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <img src="assets/images/quote-icon.png" class="float-end" alt="quote icon" />
            </div>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-wrap">
                    <div class="carousel-item active">
                        <div class="wrap d-flex justify-content-center">
                            <p>
                                My Logistic's scheduling feature has saved us countless hours. The platform <br />
                                is intuitive and the support team is always ready to help. Our efficiency <br />
                                has greatly improved since we started using this service. <br />
                                <br />
                                <strong> Anne Smith</strong>
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="wrap d-flex justify-content-center">
                            <p>
                                My Logistic's scheduling feature has saved us countless hours. The platform <br />
                                is intuitive and the support team is always ready to help. Our efficiency <br />
                                has greatly improved since we started using this service. <br />
                                <br />
                                <strong> John Doe</strong>
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="wrap d-flex justify-content-center">
                            <p>
                                My Logistic's scheduling feature has saved us countless hours. The platform <br />
                                is intuitive and the support team is always ready to help. Our efficiency <br />
                                has greatly improved since we started using this service. <br />
                                <br />
                                <strong> Mark Johnson</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
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
</section>

<!-- client section -->
<section class="client">
    <div class="container">
        <div class="class-client">
            <h2 class="partner"><strong>Our Client</strong></h2>
        </div>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="cards-wrapper">
                        <?php
                        include("koneksi.php");
                        $sql = "SELECT img FROM client WHERE id BETWEEN 1 AND 4";
                        $hasil = mysqli_query($conn, $sql);

                        $jmlClient = mysqli_num_rows($hasil);
                        if (
                            $jmlClient >
                            0
                        ) {
                            while ($row = mysqli_fetch_assoc($hasil)) { ?>
                                <div class="card" style="width: 19rem; height: 8rem"><img src="assets/images/<?= $row["img"]; ?>" alt="..." /></div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="cards-wrapper">
                        <?php
                        include("koneksi.php");
                        $sql = "SELECT img FROM client WHERE id BETWEEN 5 AND 8";
                        $hasil = mysqli_query($conn, $sql);

                        $jmlClient = mysqli_num_rows($hasil);
                        if (
                            $jmlClient >
                            0
                        ) {
                            while ($row = mysqli_fetch_assoc($hasil)) { ?>
                                <div class="card" style="width: 19rem; height: 8rem"><img src="assets/images/<?= $row["img"]; ?>" alt="..." /></div>
                        <?php
                            }
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
            <div class="col-6">
                <h2><strong>Here We Are</strong></h2>
                <div class="iframe">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63465.833099848984!2d106.79526471188633!3d-6.182311414038426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f436b8c94b07%3A0x6ea6d5398b7c82f6!2sCentral%20Jakarta%2C%20Central%20Jakarta%20City%2C%20Jakarta!5e0!3m2!1sen!2sid!4v1721641032640!5m2!1sen!2sid" width="600" height="250" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-6 align-self-center">
                <div class="row">
                    <h4 class="mb-3" style="color: #003366"><strong> Contact Us</strong></h4>
                </div>
                <div class="row contact">
                    <div class="col-1">
                        <img src="assets/images/contact-phone.png" class="d-flex" alt="" />
                    </div>
                    <div class="col">
                        <p>+02 xx xxx xxxx</p>
                    </div>
                </div>
                <div class="row contact">
                    <div class="col-1">
                        <img src="assets/images/contact-email.png" class="d-flex" alt="" />
                    </div>
                    <div class="col">
                        <p>mylogistic@gmail.com</p>
                    </div>
                </div>
                <div class="row contact">
                    <div class="col-1">
                        <img src="assets/images/contact-maps.png" class="d-flex" alt="" />
                    </div>
                    <div class="col">
                        <p>
                            Silicon Valley St <br />
                            Ankleshwar GIDC, Ankleshwar, Gujarat 393001, India
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include("footer.php") ?>
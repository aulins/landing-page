<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>My Logistic</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="assets/css/style.css" />

        <!-- EXTERNAL OWL CAROUSEL CSS CDN LINKS -->
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                <div class="container">
                    <a href="#hero">
                        <img src="assets/images/logo.png" class="img-fluid" style="width: 180px; height: auto" alt="My Logistic Logo" />
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#our-work">Our Work</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="color: #000000b2" href="#service">Service</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="color: #000000b2" href="#about2">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="color: #000000b2" href="#client">Client</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="color: #000000b2" href="#contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- hero section -->
        <section class="hero">
            <div id="hero" class="container">
                <div class="row d-flex">
                    <div class="col-auto mt-5 me-auto text-center position-absolute">
                        <h1 class="mt-4 mb-3" id="hero">
                            <strong
                                >Efficient and Reliable Logistics <br />
                                Solutions
                            </strong>
                        </h1>
                        <p class="">Delivering Excellence in every Mile.</p>
                        <a href="getstarted.php" class="cta-button text-center">Connect With US</a>
                    </div>
                    <div class="col-12 align-self-end position-relative d-flex justify-content-end">
                        <div class="hero-image" style="width: 850px">
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
                                <div class="card" style="width: 18rem">
                                    <img src="assets/images/<?= $row["image_url"];  ?>" alt=""  />
                                    <div class="card-body" style="color: #003366">
                                        <strong> <p class="card-text">Some quick example text to build on the card title.</p></strong>
                                    </div>
                                </div>
                                <div class="card" style="width: 18rem">
                                    <img src="assets/images/<?= $row["image_url"];  ?>" alt=""  />
                                    <div class="card-body" style="color: #003366">
                                        <strong> <p class="card-text">Some quick example text to build on the card title.</p></strong>
                                    </div>
                                </div>
                                <div class="card" style="width: 18rem">
                                    <img src="assets/images/<?= $row["image_url"];  ?>" alt=""  />
                                    <div class="card-body" style="color: #003366">
                                        <strong> <p class="card-text">Some quick example text to build on the card title.</p></strong>
                                    </div>
                                </div>
                                <div class="card" style="width: 18rem">
                                    <img src="assets/images/<?= $row["image_url"];  ?>" alt=""  />
                                    <div class="card-body" style="color: #003366">
                                        <strong> <p class="card-text">Some quick example text to build on the card title.</p></strong>
                                    </div>
                                </div>
                                ?>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="cards-wrapper">
                                <div class="card" style="width: 18rem">
                                    <img src="assets/images/plane.png" class="card-img-top" alt="..." />
                                    <div class="card-body" style="color: #003366">
                                        <strong> <p class="card-text">Some quick example text to build on the card title.</p></strong>
                                    </div>
                                </div>
                                <div class="card" style="width: 18rem">
                                    <img src="assets/images/car.png" class="card-img-top" alt="..." />
                                    <div class="card-body" style="color: #003366">
                                        <strong> <p class="card-text">Some quick example text to build on the card title.</p></strong>
                                    </div>
                                </div>
                                <div class="card" style="width: 18rem">
                                    <img src="assets/images/train.png" class="card-img-top" alt="..." />
                                    <div class="card-body" style="color: #003366">
                                        <strong> <p class="card-text">Some quick example text to build on the card title.</p></strong>
                                    </div>
                                </div>
                                <div class="card" style="width: 18rem">
                                    <img src="assets/images/drone.png" class="card-img-top" alt="..." />
                                    <div class="card-body" style="color: #003366">
                                        <strong> <p class="card-text">Some quick example text to build on the card title.</p></strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="cards-wrapper">
                                <div class="card" style="width: 18rem">
                                    <img src="assets/images/plane.png" class="card-img-top" alt="..." />
                                    <div class="card-body" style="color: #003366">
                                        <strong> <p class="card-text">Some quick example text to build on the card title.</p></strong>
                                    </div>
                                </div>
                                <div class="card" style="width: 18rem">
                                    <img src="assets/images/car.png" class="card-img-top" alt="..." />
                                    <div class="card-body" style="color: #003366">
                                        <strong> <p class="card-text">Some quick example text to build on the card title.</p></strong>
                                    </div>
                                </div>
                                <div class="card" style="width: 18rem">
                                    <img src="assets/images/train.png" class="card-img-top" alt="..." />
                                    <div class="card-body" style="color: #003366">
                                        <strong> <p class="card-text">Some quick example text to build on the card title.</p></strong>
                                    </div>
                                </div>
                                <div class="card" style="width: 18rem">
                                    <img src="assets/images/drone.png" class="card-img-top" alt="..." />
                                    <div class="card-body" style="color: #003366">
                                        <strong> <p class="card-text">Some quick example text to build on the card title.</p></strong>
                                    </div>
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
                        <a href="getstarted.php" class="cta-button text-center">Learn More</a>
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
                        <img src="assets/images/drone-asset.png" alt="" style="width: 600px" />
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

        <!-- galleries section -->
        <!-- <section class="galleries">
            <div class="container">
                <h2 id="galleries">Galleries</h2>
                <div id="carouselExampleControls" class="carousel slide carousel-dark d-none d-sm-block" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="cards-wrapper">
                                <div class="card">
                                    <div class="img-wrapper">
                                        <img src="assets/images/galleries1.png" alt="..." />
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="img-wrapper"><img src="assets/images/galleries2.png" alt="..." /></div>
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="img-wrapper">
                                        <img src="assets/images/galleries3.png" alt="..." />
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="cards-wrapper">
                                <div class="card">
                                    <div class="img-wrapper">
                                        <img src="assets/images/galleries1.png" alt="..." />
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="img-wrapper">
                                        <img src="assets/images/galleries2.png" alt="..." />
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="img-wrapper">
                                        <img src="assets/images/galleries3.png" alt="..." />
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="cards-wrapper">
                                <div class="card">
                                    <div class="img-wrapper">
                                        <img src="assets/images/galleries1.png" alt="..." />
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="img-wrapper">
                                        <img src="assets/images/galleries2.png" alt="..." />
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="img-wrapper">
                                        <img src="assets/images/galleries3.png" alt="..." />
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
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
                <div id="carouselExampleControls" class="carousel slide d-sm-none carousel-dark" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="card">
                                <div class="img-wrapper">
                                    <img src="assets/images/galleries1.png" alt="..." />
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card">
                                <div class="img-wrapper">
                                    <img src="assets/images/galleries1.png" alt="..." />
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card">
                                <div class="img-wrapper">
                                    <img src="assets/images/galleries1.png" alt="..." />
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card">
                                <div class="img-wrapper">
                                    <img src="assets/images/galleries1.png" alt="..." />
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card">
                                <div class="img-wrapper">
                                    <img src="assets/images/galleries1.png" alt="..." />
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card">
                                <div class="img-wrapper">
                                    <img src="assets/images/galleries1.png" alt="..." />
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card">
                                <div class="img-wrapper">
                                    <img src="assets/images/galleries1.png" alt="..." />
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card">
                                <div class="img-wrapper">
                                    <img src="assets/images/galleries1.png" alt="..." />
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card">
                                <div class="img-wrapper">
                                    <img src="assets/images/galleries1.png" alt="..." />
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsSmallScreen" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsSmallScreen" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section> -->

        <!-- client section -->
        <section class="client">
            <div class="container">
                <div class="class-client">
                    <h2 class="partner"><strong>Our Client</strong></h2>
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="cards-wrapper">
                                    <div class="card" style="width: 19rem; height: 8rem">
                                        <img src="assets/images/client1.png" class="card-img-top" alt="..." />
                                    </div>
                                    <div class="card" style="width: 19rem; height: 8rem">
                                        <img src="assets/images/client2.png" class="card-img-top" alt="..." />
                                    </div>
                                    <div class="card" style="width: 19rem; height: 8rem">
                                        <img src="assets/images/client3.png" class="card-img-top" alt="..." />
                                    </div>
                                    <div class="card" style="width: 19rem; height: 8rem">
                                        <img src="assets/images/client4.png" class="card-img-top" alt="..." />
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="cards-wrapper">
                                    <div class="card" style="width: 19rem; height: 8rem">
                                        <img src="assets/images/client5.png" class="card-img-top" alt="..." />
                                    </div>
                                    <div class="card" style="width: 19rem; height: 8rem">
                                        <img src="assets/images/client6.png" class="card-img-top" alt="..." />
                                    </div>
                                    <div class="card" style="width: 19rem; height: 8rem">
                                        <img src="assets/images/client7.png" class="card-img-top" alt="..." />
                                    </div>
                                    <div class="card" style="width: 19rem; height: 8rem">
                                        <img src="assets/images/client8.png" class="card-img-top" alt="..." />
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="cards-wrapper">
                                    <div class="card" style="width: 19rem; height: 8rem">
                                        <img src="assets/images/client1.png" class="card-img-top" alt="..." />
                                    </div>
                                    <div class="card" style="width: 19rem; height: 8rem">
                                        <img src="assets/images/client2.png" class="card-img-top" alt="..." />
                                    </div>
                                    <div class="card" style="width: 19rem; height: 8rem">
                                        <img src="assets/images/client3.png" class="card-img-top" alt="..." />
                                    </div>
                                    <div class="card" style="width: 19rem; height: 8rem">
                                        <img src="assets/images/client4.png" class="card-img-top" alt="..." />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="cards-wrapper">
                                    <div class="card" style="width: 19rem; height: 8rem">
                                        <img src="assets/images/client5.png" class="card-img-top" alt="..." />
                                    </div>
                                    <div class="card" style="width: 19rem; height: 8rem">
                                        <img src="assets/images/client6.png" class="card-img-top" alt="..." />
                                    </div>
                                    <div class="card" style="width: 19rem; height: 8rem">
                                        <img src="assets/images/client7.png" class="card-img-top" alt="..." />
                                    </div>
                                    <div class="card" style="width: 19rem; height: 8rem">
                                        <img src="assets/images/client8.png" class="card-img-top" alt="..." />
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="cards-wrapper">
                                    <div class="card" style="width: 19rem; height: 8rem">
                                        <img src="assets/images/client1.png" class="card-img-top" alt="..." />
                                    </div>
                                    <div class="card" style="width: 19rem; height: 8rem">
                                        <img src="assets/images/client2.png" class="card-img-top" alt="..." />
                                    </div>
                                    <div class="card" style="width: 19rem; height: 8rem">
                                        <img src="assets/images/client3.png" class="card-img-top" alt="..." />
                                    </div>
                                    <div class="card" style="width: 19rem; height: 8rem">
                                        <img src="assets/images/client4.png" class="card-img-top" alt="..." />
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="cards-wrapper">
                                    <div class="card" style="width: 19rem; height: 8rem">
                                        <img src="assets/images/client5.png" class="card-img-top" alt="..." />
                                    </div>
                                    <div class="card" style="width: 19rem; height: 8rem">
                                        <img src="assets/images/client6.png" class="card-img-top" alt="..." />
                                    </div>
                                    <div class="card" style="width: 19rem; height: 8rem">
                                        <img src="assets/images/client7.png" class="card-img-top" alt="..." />
                                    </div>
                                    <div class="card" style="width: 19rem; height: 8rem">
                                        <img src="assets/images/client8.png" class="card-img-top" alt="..." />
                                    </div>
                                </div>
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
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63465.833099848984!2d106.79526471188633!3d-6.182311414038426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f436b8c94b07%3A0x6ea6d5398b7c82f6!2sCentral%20Jakarta%2C%20Central%20Jakarta%20City%2C%20Jakarta!5e0!3m2!1sen!2sid!4v1721641032640!5m2!1sen!2sid"
                            width="600"
                            height="250"
                            style="border: 0"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                        ></iframe>
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
        <footer>
            <div id="contact" class="container">
                <div class="row">
                    <div class="col-xs-12 justify-content-center col-sm-12 col-md-6 col-lg-5 col-xl-4 col-xxl-4">
                        <div class="footer-logo">
                            <img src="assets/images/logo-footer.png" alt="My Logistic Logo" />
                            <p>Providing top-notch logistics solutions tailored to your needs. We ensure efficient and reliable delivery services worldwide.</p>
                        </div>
                    </div>
                    <div class="col-xs-12 justify-content-center col-sm-6 col-md-3 col-lg-4 col-xl-2 col-xxl-2">
                        <h3>Product</h3>
                        <ul>
                            <li>System</li>
                            <li>App Development</li>
                            <li>Design App</li>
                        </ul>
                    </div>
                    <div class="col-xs-12 justify-content-center col sm-6 col-md-3 col-lg-3 col-xl-2 col-xxl-2">
                        <h3>About</h3>
                        <ul>
                            <li>Company</li>
                            <li>Client</li>
                            <li>Team</li>
                            <li>Career</li>
                        </ul>
                    </div>

                    <div class="col-xs-12 justify-content-center col-sm-6 col-md-6 col-lg-5 col-xl-2 col-xl-2">
                        <h3>Service</h3>
                        <ul>
                            <li>Tracking</li>
                            <li>Scheduling</li>
                            <li>Warehousing</li>
                            <li>Shipping</li>
                            <li>Freight</li>
                            <li>Customer</li>
                        </ul>
                    </div>
                    <div class="col-xs-12 justify-content-center col-sm-6 col-md-6 col-lg-7 col-xl-2 col-xl-2">
                        <h3>Follow Us</h3>
                        <div class="footer-icon">
                            <ul class="list-unstyled d-flex justify-content-center">
                                <li>
                                    <a href="#"><img src="assets/images/facebook-icon.png" class="w-50" alt="Facebook" /></a>
                                </li>
                                <li>
                                    <a href="#"><img src="assets/images/instagram-icon.png" class="w-50" alt="Instagram" /></a>
                                </li>
                                <li>
                                    <a href="#"><img src="assets/images/x-icon.png" class="w-50" alt="X" /></a>
                                </li>
                            </ul>
                        </div>
                        <a href="#" class="no">+02 xx xxx xxxx</a>
                    </div>
                </div>
                <div class="footer-bottom">
                    <p>© 2024 My Logistic. All rights reserved.</p>
                </div>
            </div>
        </footer>
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

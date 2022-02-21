<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/mdb.min.css">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <style>
        .logo {
            width: 50px;
            height: 40px;
        }

        .img {
            display: block;
            width: 100%;
            height: 100%;
        }

        .paragraph>p {
            text-align: justify;
            font-style: italic;

        }

        .carousel-item img {
            width: 200px;
            height: 500px;
        }
    </style>
</head>

<body>

    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!-- Container wrapper -->
            <div class="container-fluid">
                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Navbar brand -->
                    <a class="navbar-brand mt-2 mt-lg-0" href="#">
                        <img class="logo" src="<?php echo base_url() ?>/assets/img/loggo.png" height="15" alt="MDB Logo" loading="lazy" />
                    </a>
                    <!-- Left links -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url() ?>/home/index">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url() ?>/home/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url() ?>/home/projects">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url() ?>/home/experience">Experience</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url() ?>/home/contacts">Contact</a>
                        </li>
                    </ul>
                    <!-- Left links -->
                </div>
                <!-- Collapsible wrapper -->

                <!-- Right elements -->
                <div class="d-flex align-items-center">


                    <!-- Avatar -->
                    <div class="dropdown">
                        <a href="https://github.com/angelicajaylo">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                </div>
                <!-- Right elements -->
            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->

    </header>

    <main class="p-3 bg-light">
        <div class="container">
            <div class="d-flex justify-content-center mt-4">
                <div class="w-25 p-3 border border-1 border-solid shadow-3">
                    <h6 class="fw-bold ms-3">Personal Information</h6>
                    <div class="ms-3">
                        <span>Name: </span>
                        <span>Angelica Mae Jerao Jaylo </span>
                    </div>
                    <div class="ms-3 mt-2">
                        <span>Birthday: </span>
                        <span>April 4, 1999 </span>
                    </div>
                    <div class="ms-3 mt-2">
                        <span>Age: </span>
                        <span>22 years old </span>
                    </div>
                    <div class="ms-3 mt-2">
                        <span>Weight: </span>
                        <span>70 kilogram </span>
                    </div>
                    <div class="ms-3 mt-2">
                        <span>Height: </span>
                        <span>5’5 ft. / 167.74 cm </span>
                    </div>
                    <div class="ms-3 mt-2">
                        <span>Place of Birth : </span>
                        <span>Sorsogon, Sorsogon </span>
                    </div>
                    <div class="ms-3 mt-2">
                        <span>Civil status : </span>
                        <span>Single </span>
                    </div>
                    <div class="ms-3 mt-2">
                        <span>Citizenship : </span>
                        <span>Filipino </span>
                    </div>
                    <div class="ms-3 mt-2">
                        <span>Religious : </span>
                        <span>Roman Catholic </span>
                    </div>
                    <div class="ms-3 mt-2">
                        <span>Father’s Name : </span>
                        <span>Michael D. Jaylo </span>
                    </div>
                    <div class="ms-3 mt-2">
                        <span>Mother’s Name : </span>
                        <span>Rosalinda J. Jaylo </span>
                    </div>
                </div>

                <div class="w-25 shadow-3 border border-1 border-solid ms-5">
                    <img class="img" src="<?php echo base_url(); ?>/assets/img/n1.jpg" alt="My pic">
                </div>
            </div>

            <div class="paragraph mt-5">
                <p class="text-dark text-opacity-50">
                    I am Angelica Mae Jerao Jaylo. I am a graduate of Bachelor of Science in Marine Transportation year 2018. I have taken my deck-cadet training onboard for almost eight months, but unfortunately my body gave-up and my health is at risk so my parents decided that I will not finish my deck-cadet training. At first their decision is not approved to me because of the reason I’m almost there. But my health is at risk so they give me a condition that I will take my second bachelor degree of my own choice again for me to have a second choice of my career in the future. But luckily when I’m about to file my resignation letter to the international company that sponsor my cadetship, they offer me a scholarship that they will shoulder my school expenses and monthly allowance, but after I finish my second degree, I will go back to them again and work again with them. My life has been upside down because of what happened to me until now my frustrations always hit me, but I always choose to get-up and finish my BSIT degree in able to go back in my first career. I want to take a board exam. And see the world for and of course a big salary for my future. But now I’m having a second thought about my future it’s either I will pursue my seafarer career or I will be an IT professional, but whatever god will give me I will accept it with all of my hearth. And to the viewer, always remember this bible verse Isaiah 41:10 “Fear not for I am with you Be not be dismayed, for I am your god, I will strengthen you and help you; I will uphold you with my righteous hand.”
                </p>
            </div>
            <div class="carousel-container mt-5">
                <div class="row">
                    <div class="col-4">
                        <div id="carouselExampleInterval" class="carousel slide" data-mdb-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-mdb-interval="1000">
                                    <img src="<?php echo base_url(); ?>/assets/img/cr-me-1.jpg" class="d-block w-100" alt="ME 1" />
                                </div>
                                <div class="carousel-item" data-mdb-interval="2000">
                                    <img src="<?php echo base_url(); ?>/assets/img/cr-me-2.jpg" class="d-block w-100" alt="ME 2" />
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo base_url(); ?>/assets/img/cr-me-3.jpg" class="d-block w-100" alt="ME 3" />
                                </div>
                            </div>
                            <button class="carousel-control-prev" data-mdb-target="#carouselExampleInterval" type="button" data-mdb-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" data-mdb-target="#carouselExampleInterval" type="button" data-mdb-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-4">
                        <div id="carouselExampleInterval" class="carousel slide" data-mdb-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-mdb-interval="1000">
                                    <img src="<?php echo base_url(); ?>/assets/img/cr-f-1.jpeg" class="d-block w-100" alt="Wild Landscape" />
                                </div>
                                <div class="carousel-item" data-mdb-interval="2000">
                                    <img src="<?php echo base_url(); ?>/assets/img/cr-f-2.png" class="d-block w-100" alt="Camera" />
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo base_url(); ?>/assets/img/cr-f-3.jpeg" class="d-block w-100" alt="Exotic Fruits" />
                                </div>
                            </div>
                            <button class="carousel-control-prev" data-mdb-target="#carouselExampleInterval" type="button" data-mdb-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" data-mdb-target="#carouselExampleInterval" type="button" data-mdb-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-4">
                        <div id="carouselExampleInterval" class="carousel slide" data-mdb-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-mdb-interval="1000">
                                    <img src="<?php echo base_url(); ?>/assets/img/cr-b-1.png" class="d-block w-100" alt="Wild Landscape" />
                                </div>
                                <div class="carousel-item" data-mdb-interval="2000">
                                    <img src="<?php echo base_url(); ?>/assets/img/cr-b-2.jpg" class="d-block w-100" alt="Camera" />
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo base_url(); ?>/assets/img/cr-b-3.png" class="d-block w-100" alt="Exotic Fruits" />
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo base_url(); ?>/assets/img/cr-b-4.png" class="d-block w-100" alt="Exotic Fruits" />
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo base_url(); ?>/assets/img/cr-b-5.png" class="d-block w-100" alt="Exotic Fruits" />
                                </div>
                            </div>
                            <button class="carousel-control-prev" data-mdb-target="#carouselExampleInterval" type="button" data-mdb-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" data-mdb-target="#carouselExampleInterval" type="button" data-mdb-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

<script src="<?php echo base_url() ?>/assets/js/mdb.min.js"></script>

</html>
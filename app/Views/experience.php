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

        .ml5 {
            position: relative;
            font-weight: 300;
            font-size: 4.5em;
            color: #402d2d;
        }

        .ml5 .text-wrapper {
            position: relative;
            display: inline-block;
            padding-top: 0.1em;
            padding-right: 0.05em;
            padding-bottom: 0.15em;
            line-height: 1em;
        }

        .ml5 .line {
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            margin: auto;
            height: 3px;
            width: 100%;
            background-color: #402d2d;
            transform-origin: 0.5 0;
        }

        .ml5 .ampersand {
            font-family: Baskerville, serif;
            font-style: italic;
            font-weight: 400;
            width: 1em;
            margin-right: -0.1em;
            margin-left: -0.1em;
        }

        .ml5 .letters {
            display: inline-block;
            opacity: 0;
        }

        .col-4 img {
            display: block;
            width: 100%;
            height: 100%;
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
                            <a class="nav-link" href="<?php echo base_url() ?>/Mycontroller/home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url() ?>/Mycontroller/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url() ?>/Mycontroller/projects">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url() ?>/Mycontroller/experience">Certificates</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url() ?>/Mycontroller/contacts">Contact</a>
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

    <main>
        <h1 class="ml5">
            <span class="text-wrapper">
                <span class="line line1"></span>
                <span class="letters letters-left">CERTIFICATIONS</span>
                <!-- <span class="letters ampersand">&amp;</span>
                <span class="letters letters-right">Noise</span> -->
                <span class="line line2"></span>
            </span>
        </h1>

        <div class="container">
            <div class="row mt-5 align-items-center">
                <div class="col-4 pe-3">
                    <img src="<?php echo base_url(); ?>/assets/Certificates/PADAMS 001.jpg" alt="">
                </div>
                <div class="col-4">
                    <img src="<?php echo base_url(); ?>/assets/Certificates/SDSD Certificate 001.jpg" alt="">
                </div>
                <div class="col-4">
                    <img src="<?php echo base_url(); ?>/assets/Certificates/Ratings Dwatch 001.jpg" alt="">
                </div>
                <div class="col-4 mt-3">
                    <img src="<?php echo base_url(); ?>/assets/Certificates/SDSD COP 001.jpg" alt="">
                </div>
                <div class="col-4 mt-3">
                    <img src="<?php echo base_url(); ?>/assets/Certificates/BT Certificate 001.jpg" alt="">
                </div>
                <div class="col-4 mt-3">
                    <img src="<?php echo base_url(); ?>/assets/Certificates/BT COP 001.jpg" alt="">
                </div>
                <div class="col-4 mt-3">
                    <img src="<?php echo base_url(); ?>/assets/Certificates/ELEM. Diploma 001.jpg" alt="">
                </div>
                <div class="col-4 mt-3">
                    <img src="<?php echo base_url(); ?>/assets/Certificates/HS Diploma 001.jpg" alt="">
                </div>
                <div class="col-4 mt-3">
                    <img src="<?php echo base_url(); ?>/assets/Certificates/NROTC certificate 001.jpg" alt="">
                </div>
                <div class="col-4 mt-3">
                    <img src="<?php echo base_url(); ?>/assets/Certificates/CAR 001.jpg" alt="">
                </div>
                <div class="col-4 mt-3">
                    <div class="text-center">
                        <ul class="list-group w-75 mt-5" style="margin: 0 auto;">
                            <li class="list-group-item active" aria-current="true">Y4IT CERTIFICATES</li>
                            <li class="list-group-item"><a target="_blank" href="<?php echo base_url(); ?>/assets/Certificates/Angelica Mae J. Jaylo - Y4iT 2021 Day 1 AM Session.pdf">ICT Oppotunities in the Philippines</a></li>
                            <li class="list-group-item"><a target="_blank" href="<?php echo base_url(); ?>/assets/Certificates/Angelica Mae J. Jaylo - Y4iT 2021 Day 1 PM Session.pdf">Digital StartUps</a></li>
                            <li class="list-group-item"><a target="_blank" href="<?php echo base_url(); ?>/assets/Certificates/Angelica Mae J. Jaylo - Y4iT 2021 Day 2 AM Session.pdf">Career Development</a></li>
                            <li class="list-group-item"><a target="_blank" href="<?php echo base_url(); ?>/assets/Certificates/Angelica Mae J. Jaylo - Y4iT 2021 Day 2 PM Session.pdf">Privacy and Cybersecurity</a></li>
                            <li class="list-group-item"><a target="_blank" href="<?php echo base_url(); ?>/assets/Certificates/Angelica Mae J. Jaylo - Y4iT 2021 Day 3 AM Session.pdf">Research as a Career</a></li>
                            <li class="list-group-item"><a target="_blank" href="<?php echo base_url(); ?>/assets/Certificates/Angelica Mae J. Jaylo - Y4iT 2021 Day 3 PM Session.pdf">Career Development</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

<script src="<?php echo base_url() ?>/assets/js/mdb.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script>
    anime.timeline({
            loop: true
        })
        .add({
            targets: '.ml5 .line',
            opacity: [0.5, 1],
            scaleX: [0, 1],
            easing: "easeInOutExpo",
            duration: 700
        }).add({
            targets: '.ml5 .line',
            duration: 600,
            easing: "easeOutExpo",
            translateY: (el, i) => (-0.625 + 0.625 * 2 * i) + "em"
        }).add({
            targets: '.ml5 .ampersand',
            opacity: [0, 1],
            scaleY: [0.5, 1],
            easing: "easeOutExpo",
            duration: 600,
            offset: '-=600'
        }).add({
            targets: '.ml5 .letters-left',
            opacity: [0, 1],
            translateX: ["0.5em", 0],
            easing: "easeOutExpo",
            duration: 600,
            offset: '-=300'
        }).add({
            targets: '.ml5 .letters-right',
            opacity: [0, 1],
            translateX: ["-0.5em", 0],
            easing: "easeOutExpo",
            duration: 600,
            offset: '-=600'
        }).add({
            targets: '.ml5',
            opacity: 0,
            duration: 1000,
            easing: "easeOutExpo",
            delay: 1000
        });
</script>

</html>
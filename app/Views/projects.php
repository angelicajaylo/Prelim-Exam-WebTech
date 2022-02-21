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

        .ml7 {
            position: relative;
            font-weight: 900;
            font-size: 3.7em;
        }

        .ml7 .text-wrapper {
            position: relative;
            display: inline-block;
            padding-top: 0.2em;
            padding-right: 0.05em;
            padding-bottom: 0.1em;
            overflow: hidden;
        }

        .ml7 .letter {
            transform-origin: 0 100%;
            display: inline-block;
            line-height: 1em;
        }

        .row img {
            display: block;
            width: 100%;
        }

        .image {
            position: relative;
            width: 400px;
        }

        .image__img {
            display: block;
            width: 100%;
        }

        .image__overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            color: #000;
            font-family: 'Quicksand', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.25s;
        }

        .image__overlay--blur {
            backdrop-filter: blur(5px);
        }

        .image__overlay--primary {
            background: #FBFBFB;
        }

        .image__overlay>* {
            transform: translateY(20px);
            transition: transform 0.25s;
        }

        .image__overlay:hover {
            opacity: 0.5;
        }

        .image__overlay:hover>* {
            transform: translateY(0);
        }

        .image__title {
            font-size: 2em;
            font-weight: bold;
        }

        .image__description {
            font-size: 1.25em;
            margin-top: 0.25em;
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
        <h1 class="ml7">
            <span class="text-wrapper">
                <span class="letters">SYTEM PROJECTS</span>
            </span>
        </h1>

        <div class="row ms-5">
            <div class="col-4 _container">
                <div class="image">
                    <img class="image__img" src="<?php echo base_url(); ?>/assets/img/sc1.png" alt="Bricks">
                    <div class="image__overlay image__overlay--primary">
                        <div class="image__title" style="font-size: 1rem;">CHASING CLOUDS</div>
                        <p class="image__description">
                            Inventory and Ordering system
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="image">
                    <img class="image__img" src="<?php echo base_url(); ?>/assets/img/sc2.png" alt="Bricks">
                    <div class="image__overlay image__overlay--primary">
                        <div class="image__title" style="font-size: 1rem;">AVANCED DATABASE SYSTEM</div>
                        <p class="image__description">
                            Finals Project
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="image">
                    <img class="image__img" src="<?php echo base_url(); ?>/assets/img/sc3.png" alt="Bricks">
                    <div class="image__overlay image__overlay--primary">
                        <div class="image__title" style="font-size: 1rem;">WEB SYSTEMS AND TECHNOLOGIES</div>
                        <p class="image__description">
                            Prelim Exam
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center">
            <ul class="list-group w-25 mt-5" style="margin: 0 auto;">
                <li class="list-group-item active" aria-current="true">DOCUMENTATION PROJECTS</li>
                <li class="list-group-item"><a target="_blank" href="<?php echo base_url(); ?>/assets/pdf/Final Requirements_JayloAngelicaMae.pdf">APPOINTMENT SYSTEM</a></li>
                <li class="list-group-item"><a target="_blank" href="<?php echo base_url(); ?>/assets/pdf/Jaylo_AngelicaMae_Act4.pdf">SWIM LANE FLOW CHART</a></li>
                <li class="list-group-item"><a target="_blank" href="<?php echo base_url(); ?>/assets/pdf/Jaylo_AngelicaMae_ProtoType.pdf">PROTOTYPE</a></li>
                <li class="list-group-item"><a target="_blank" href="<?php echo base_url(); ?>/assets/pdf/Jaylo_AngelicaMae_Quiz4.pdf">RAPID PROTOTYPHING</a></li>
            </ul>
        </div>

        <h1 class="ml7">
            <span class="text-wrapper">
                <span class="letters">OUTPUT VIDEOS</span>
            </span>
        </h1>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <iframe width="100%" height="500px" src="https://www.youtube.com/embed/tsqiIKrs-x4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-4">
                    <iframe width="100%" height="500px" src="https://www.youtube.com/embed/gAjg87PMLa8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-4">
                    <iframe width="100%" height="500px" src="https://www.youtube.com/embed/kMP4cZvr3-A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>

    </main>
</body>

<script src="<?php echo base_url() ?>/assets/js/mdb.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script>
    // Wrap every letter in a span
    var textWrapper = document.querySelector('.ml7 .letters');
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

    anime.timeline({
            loop: true
        })
        .add({
            targets: '.ml7 .letter',
            translateY: ["1.1em", 0],
            translateX: ["0.55em", 0],
            translateZ: 0,
            rotateZ: [180, 0],
            duration: 750,
            easing: "easeOutExpo",
            delay: (el, i) => 50 * i
        }).add({
            targets: '.ml7',
            opacity: 0,
            duration: 1000,
            easing: "easeOutExpo",
            delay: 1000
        });
</script>

</html>
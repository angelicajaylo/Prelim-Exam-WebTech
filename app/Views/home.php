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

        .ml15 {
            font-weight: 800;
            font-size: 3.8em;
            text-transform: uppercase;
            letter-spacing: 0.5em;
        }

        .ml15 .word {
            display: inline-block;
            line-height: 1em;
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
                        <a href="https://github.com/angelicajaylo"><i class="fab fa-github"></i></a>

                    </div>
                </div>
                <!-- Right elements -->
            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->
        <!-- Background image -->
        <div class="p-5 text-center bg-image" style="
      background-image: url('<?php echo base_url() ?>/assets/img/jaylo.png');
      height: 100vh;">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
                <div class="d-flex justify-content-center align-items-center h-100">

                    <div class="text-white">
                        <h1 class="ml15">
                            <span class="word">ANGELICA MAE</span>
                            <span class="word d-block">JERAO</span>
                            <span class="word">JAYLO</span>
                            <!-- <span class="word">now</span> -->
                        </h1>
                        <a class="btn btn-outline-light btn-lg" href="<?php echo base_url(); ?>/Mycontroller/about">Know more about me <i class="fas fa-angle-double-right"></i></a>
                    </div>
                    <!-- <div class="text-white">
                        <h1 class="mb-3">Angelica Mae Jerao Jaylo</h1>
                        <h4 class="mb-3">Subheading</h4>
                        <a class="btn btn-outline-light btn-lg" href="#!" role="button">Call to action</a>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Background image -->
    </header>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

<script src="<?php echo base_url() ?>/assets/js/mdb.min.js"></script>

<script>
    anime.timeline({
            loop: true
        })
        .add({
            targets: '.ml15 .word',
            scale: [14, 1],
            opacity: [0, 1],
            easing: "easeOutCirc",
            duration: 800,
            delay: (el, i) => 800 * i
        }).add({
            targets: '.ml15',
            opacity: 0,
            duration: 1000,
            easing: "easeOutExpo",
            delay: 1000
        });
</script>

</html>
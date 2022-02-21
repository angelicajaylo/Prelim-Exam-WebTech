<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/mdb.min.css">
    <style>
        .logo {
            width: 50px;
            height: 40px;
        }

        .ml11 {
            font-weight: 700;
            font-size: 3.5em;
        }

        .ml11 .text-wrapper {
            position: relative;
            display: inline-block;
            padding-top: 0.1em;
            padding-right: 0.05em;
            padding-bottom: 0.15em;
        }

        .ml11 .line {
            opacity: 0;
            position: absolute;
            left: 0;
            height: 100%;
            width: 3px;
            background-color: #fff;
            transform-origin: 0 50%;
        }

        .ml11 .line1 {
            top: 0;
            left: 0;
        }

        .ml11 .letter {
            display: inline-block;
            line-height: 1em;
        }

        body {
            background-image: url('<?php echo base_url(); ?>/assets/img/bg.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        .h6 {
            font-size: 1.5rem;

        }

        .ms-3 div {
            margin-top: 1rem;
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
        <h1 class="ml11">
            <span class="text-wrapper">
                <span class="line line1"></span>
                <span class="letters text-white">YOU CAN CONTACT ME HERE</span>
            </span>
        </h1>
        <div class="ms-3">
            <div>
                <span class="h3"><i class="fas fa-phone"></i></span> <span class="h6">:09956515660</span>
            </div>
            <div>
                <span class="h3"><i class="fas fa-envelope"></i></span> <span class="h6">:maejaylo8@gmail.com</span>
            </div>
            <div>
                <span class="h3"><i class="fab fa-git-square"></i></span> <span class="h6">:https://github.com/angelicajaylo
                </span>
            </div>
            <div>
                <span class="h3"><i class="fab fa-facebook"></i></span> <span class="h6">:https://www.facebook.com/mae.jaylo.9
                </span>
            </div>
            <div>
                <span class="h3"><i class="fab fa-instagram"></i></span> <span class="h6">:captain_jylo
                </span>
            </div>
            <div>
                <span class="h3"><i class="fab fa-youtube"></i></span> <span class="h6">:Angelica Mae Jaylo
                </span>
            </div>
            <div>
                <span class="h3"><i class="fab fa-twitter"></i></span> <span class="h6">:@Captain_HighLow
                </span>
            </div>
        </div>
    </main>
</body>

<script src="<?php echo base_url() ?>/assets/js/mdb.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script>
    // Wrap every letter in a span
    var textWrapper = document.querySelector('.ml11 .letters');
    textWrapper.innerHTML = textWrapper.textContent.replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>");

    anime.timeline({
            loop: true
        })
        .add({
            targets: '.ml11 .line',
            scaleY: [0, 1],
            opacity: [0.5, 1],
            easing: "easeOutExpo",
            duration: 700
        })
        .add({
            targets: '.ml11 .line',
            translateX: [0, document.querySelector('.ml11 .letters').getBoundingClientRect().width + 10],
            easing: "easeOutExpo",
            duration: 700,
            delay: 100
        }).add({
            targets: '.ml11 .letter',
            opacity: [0, 1],
            easing: "easeOutExpo",
            duration: 600,
            offset: '-=775',
            delay: (el, i) => 34 * (i + 1)
        }).add({
            targets: '.ml11',
            opacity: 0,
            duration: 1000,
            easing: "easeOutExpo",
            delay: 1000
        });
</script>

</html>
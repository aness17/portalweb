<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>PORTAL JAS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link href="<?= base_url('') ?>favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet" />

    <link rel="icon" href="<?= base_url('foto/') ?>logo.png" style="width: 200%" type="image/ico" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('user/') ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('user/') ?>css/style.css" rel="stylesheet" />
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid d-none d-lg-block border-bottom border-secondary">
        <div class="row align-items-center bg-white ">
            <div class="col-lg-2">
                <nav class="navbar navbar-expand-sm bg-white p-0">
                    <ul class="navbar-nav ml-n2">
                        <li class="nav-item border-right border-secondary">
                            <a class="nav-link text-black small" href="#"><?= date('l, d F Y') ?></a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-10">
                <a class="nav-link text-body small" href="#">
                    <marquee style="color:black;font-size: larger;font-weight: bold;"><?php
                                                                                        $no = 1;
                                                                                        foreach ($info as $i) :
                                                                                            echo $i['content'] . " | ";
                                                                                            $no++;
                                                                                        endforeach; ?></marquee>
                </a>
            </div>
        </div>
    </div>

    <div class="container-fluid p-0 sticky-top " style="box-shadow: 3px 5px 5px #cfe2f1;">
        <!-- <nav class="navbar navbar-expand-lg bg-transparent navbar-dark py-2 py-lg-0 px-lg-5 border-bottom border-secondary"> -->
        <nav class="navbar navbar-expand-lg bg-light py-2 py-lg-0 px-lg-5 border-bottom border-secondary">
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div>
                    <a href="<?= base_url('/') ?>" class="navbar-brand p-0 d-none d-lg-block">
                        <h1 class="m-0 display-4 text-uppercase text-primary">
                            <img src="<?= base_url('user/') ?>img/Logo JAS.png" style="width: 150px;" />
                        </h1>
                    </a>
                </div>
                <!-- <div>
                    <a href="index.php" class="navbar-brand p-0 d-none d-lg-block">
                        <h1 class="m-0 display-4 text-uppercase text-primary">
                            <img src="<?= base_url('user/') ?>img/logo.png" style="width: 100px;" />
                        </h1>
                    </a>
                </div> -->
                <div></div>
                <div></div>
                <div>
                    <h3>PORTAL <?= $category ?></h3>
                </div>

                <div></div>
                <div></div>
                <div class="d-flex align-items-center">
                    <a class="nav-link collapsed" href="<?= base_url('login') ?>">
                        <i class="fa fa-sign-in" aria-hidden="true"></i> <span>Sign In</span>
                    </a>
                </div>
                <div>
                    <a href="<?= base_url('/') ?>" class="navbar-brand p-0 d-none d-lg-block">
                        <h1 class="m-0 display-4 text-uppercase text-primary">
                            <img src="<?= base_url('user/') ?>img/logo.png" style="width: 100px;" />
                        </h1>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
    <!-- <br /> -->
    <!-- Breaking News Start -->
    <!-- <div class="container py-3 mb-1 ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <div class="bg-primary text-dark text-center font-weight-medium py-2" style="width: 170px">
                            Breaking News
                        </div>
                        <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center ml-3" style="width: calc(100% - 170px); padding-right: 90px">
                            <?php $i = 1;
                            foreach ($breknew as $bn) :   ?>
                                <div class="text-truncate">
                                    <a class="text-dark text-uppercase font-weight-semi-bold" href=""><?= $bn['title_berita'] ?>
                                    </a>
                                </div>
                            <?php $i++;
                            endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Navbar End -->
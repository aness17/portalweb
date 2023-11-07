<?php

use CodeIgniter\I18n\Time;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>JAS News+</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link href="<?= base_url('') ?>favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet" />

    <link rel="icon" href="<?= base_url('user/') ?>img/logo.png" style="width: 200%" type="image/ico" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('user/') ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('user/') ?>css/style.css" rel="stylesheet" />
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid d-none d-lg-block">
        <div class="row align-items-center bg-white px-lg-5">
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-sm bg-white p-0">
                    <ul class="navbar-nav ml-n2">
                        <li class="nav-item border-right border-secondary">
                            <a class="nav-link text-body small" href="#"><?= date('l, d F Y') ?></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

    </div>
    <!-- Topbar End -->

    <div class="container-fluid p-0 ">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-2 py-lg-0 px-lg-5">
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto mt-10 py-0 d-none d-lg-flex">
                    <a href="index.php" class="navbar-brand p-0 d-none d-lg-block">
                        <h1 class="m-0 display-4 text-uppercase text-primary">
                            <img src="<?= base_url('user/') ?>img/logo.png" style="width: 100px;" />
                        </h1>
                    </a>
                </div>
                <div class="d-flex align-items-center">
                    <a class="nav-link collapsed" href="<?= base_url('auths/login') ?>">

                    </a>
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i> <span>Profile</span></a>
                    <div class="dropdown-menu ml-5">
                        <?php
                        if (session('role') == '1' || session('role') == '2') {
                        ?>
                            <a href="<?= base_url('setting') ?>" class="dropdown-item">Setting</a>
                        <?php } else { ?>
                            <a href="<?= base_url('profile') ?>" class="dropdown-item">Setting Profile</a>
                        <?php } ?>
                        <a href="<?= base_url('logout') ?>" class="dropdown-item">Logout</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
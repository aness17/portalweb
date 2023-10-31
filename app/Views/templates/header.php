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
    <div class="container-fluid d-none d-lg-block">
        <div class="row align-items-center bg-white px-lg-5">
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-sm bg-white p-0">
                    <ul class="navbar-nav ml-n2">
                        <li class="nav-item border-right border-secondary">
                            <a class="nav-link text-body small" href="#">Monday, 25 September 2023</a>
                        </li>
                        <!-- <li class="nav-item border-right border-secondary">
								<a class="nav-link text-body small" href="#">Advertise</a>
							</li>
							<li class="nav-item border-right border-secondary">
								<a class="nav-link text-body small" href="#">Contact</a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-body small" href="#">Login</a>
							</li> -->
                    </ul>
                </nav>
            </div>
        </div>
        <!-- <div class="row align-items-center bg-white py-3 px-lg-5">
            <div class="col-lg-4">
                <a href="index.html" class="navbar-brand p-0 d-none d-lg-block">
                    <h1 class="m-0 display-4 text-uppercase text-primary">
                        <img src="img/logo.png" style="width: 150px;" />
                    </h1>
                </a>
            </div>
            <div class="col-lg-8 text-center text-lg-right">
                <a href="https://htmlcodex.com"><img class="img-fluid" src="img/ads-728x90.png" alt="" /></a>
            </div>
        </div> -->
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <!-- Navbar Start -->
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
                    <a class="nav-link collapsed" href="<?= base_url('login') ?>">
                        <i class="fa fa-sign-in" aria-hidden="true"></i> <span>Sign In</span>
                    </a>

                </div>
            </div>
        </nav>

        <!-- <div class="container-fluid bg-secondary py-3 mb-3 ">
            <div class="container">
                <div class="row align-items-center bg-secondary">
                    <div class="col-12">
                        <div class="d-flex justify-content-between">
                            <div class="bg-primary text-dark text-center font-weight-medium py-2" style="width: 170px">
                                Breaking News
                            </div>
                            <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center ml-3" style="width: calc(100% - 170px); padding-right: 90px">
                                <div class="text-truncate">
                                    <a class="text-white text-uppercase font-weight-semi-bold" href="">DUKUNG KTT KE-43 ASEAN, JAS TANGANI 20 PENERBANGAN VVIP DELEGASI ENAM NEGARA PESERTA
                                    </a>
                                </div>
                                <div class="text-truncate">
                                    <a class="text-white text-uppercase font-weight-semi-bold" href="">LATIHAN MILITER GABUNGAN ‘SUPER GARUDA SHIELD 2023’ PERCAYAKAN JAS TANGANI KONTINGEN AMERIKA
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <!-- Navbar End -->
    <br />
    <!-- Breaking News Start -->
    <div class="container py-3 mb-1 ">
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
    </div>
    <!-- Navbar End -->
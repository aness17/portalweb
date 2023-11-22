<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PORTAL JAS</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url('admin/') ?>assets/img/favicon.png" rel="icon">
    <link href="<?= base_url('admin/') ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="icon" href="<?= base_url('/foto/logo.png') ?>" style="width:200%;" type="image/ico">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('admin/') ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('admin/') ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('admin/') ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('admin/') ?>assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="<?= base_url('admin/') ?>assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="<?= base_url('admin/') ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url('admin/') ?>assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('admin/') ?>assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <main>
        <!-- <div class="d-none d-sm-none d-md-block d-lg-block d-xl-block text-center">
      <h1>Please use your mobile phone!</h1>
    </div> -->
        <!-- <div class="container d-md-none d-lg-none d-xl-none"> -->
        <div class="container">
            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                            <div class="text-center">
                                <img src="<?= base_url('user/') ?>img/logo.png" style="width: 140px;" />
                            </div><!-- End Logo -->
                            <?php $validation = \Config\Services::validation(); ?>

                            <div class="card mb-3">
                                <div class="card-body">
                                    <form class="row g-3 needs-validation" method="POST" action="<?= base_url('regist') ?>" novalidate>
                                        <div></div>
                                        <div class="col-12">
                                            <label for="name" class="form-label">Full Name</label>
                                            <input type="text" name="name" class="form-control" id="name" required>
                                            <div class="invalid-feedback">Please enter your password!</div>
                                        </div>
                                        <div class="col-12">
                                            <label for="email" class="form-label">E-mail</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="text" name="email" class="form-control" id="email" required>
                                                <div class="invalid-feedback">Please enter your E-mail.</div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="password" required>
                                            <div class="invalid-feedback">Please enter your password!</div>
                                        </div>

                                        <div class="col-12">
                                            <label for="confirmpassword" class="form-label">Confirm Password</label>
                                            <input type="password" name="confirmpassword" class="form-control" id="confirmpassword" required>
                                            <div class="invalid-feedback">Please enter your password!</div>
                                        </div>
                                        <div class="col-12">
                                            <label for="divisi" class="form-label">Divisi</label>
                                            <div class="input-group has-validation">
                                                <input type="text" name="divisi" class="form-control" id="divisi" required>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Create Account</button>
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0">Already have an account? <a href="<?= base_url('login') ?>">Log in</a></p>
                                        </div>
                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('admin/') ?>assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="<?= base_url('admin/') ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('admin/') ?>assets/vendor/chart.js/chart.umd.js"></script>
    <script src="<?= base_url('admin/') ?>assets/vendor/echarts/echarts.min.js"></script>
    <script src="<?= base_url('admin/') ?>assets/vendor/quill/quill.min.js"></script>
    <script src="<?= base_url('admin/') ?>assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="<?= base_url('admin/') ?>assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="<?= base_url('admin/') ?>assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url('admin/') ?>assets/js/main.js"></script>

</body>

</html>
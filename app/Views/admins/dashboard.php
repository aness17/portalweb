<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">
      <?php if (session('role') == '1' || session('role') == '2') { ?>
        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">
            <div class="col-xxl-<?php if (session('role') == 1) {
                                  echo "2";
                                } else {
                                  echo "3";
                                } ?> col-md-4">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">News</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-newspaper"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= $countnews ?></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Sales Card -->
            <!-- Sales Card -->

            <div class="col-xxl-3 col-md-4">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">News <span>| Status</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="ps-3 ">
                      <h3 style="font-weight: bold;">&nbsp;&nbsp;&nbsp;<?= $publishnews ?></h3>
                      <span class="text-muted small pt-2 ps-1">Published</span>
                    </div>
                    <div class="ps-3">
                      <h3 style="font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $unpublishnews ?></h3>
                      <span class="text-muted small pt-2 ps-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Unpublished</span>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <div class="col-xxl-<?php if (session('role') == 1) {
                                  echo "2";
                                } else {
                                  echo "3";
                                } ?> col-md-4">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Read</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-newspaper"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= $unpublishnews ?></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Sales Card -->
          <?php }
        if (session('role') == '1') {
          ?>
            <div class="col-xxl-2 col-md-4">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Users</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-person"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= $usercount ?></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Sales Card -->
            <div class="col-xxl-2 col-md-4">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Authors</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-person-lines-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= $authorsrcount ?></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Sales Card -->
          <?php } ?>

          <!-- Top Selling -->
          <div class="col-12">
            <div class="card top-selling overflow-auto">

              <div class="card-body pb-0">
                <h5 class="card-title">Riwayat Absensi <span>| Hari Ini</span></h5>

                <table class="table table-borderless">
                  <thead>
                    <tr style="text-align: center;">
                      <th scope="col">Preview</th>
                      <th scope="col">NIP</th>
                      <th scope="col">Nama Karyawan</th>
                      <th scope="col">Tanggal Absen</th>
                      <th scope="col">Status Bekerja</th>
                      <th scope="col">Status Absen</th>
                      <th scope="col">Location</th>
                    </tr>
                  </thead>

                </table>

              </div>

            </div>
          </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

    </div>
  </section>

</main><!-- End #main -->
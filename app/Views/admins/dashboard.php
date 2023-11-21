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
      <?php

      use PhpParser\Node\Stmt\Echo_;

      if (session('role') == '1' || session('role') == '2') { ?>
        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">
            <!-- <div class="col-xxl-<?php if (session('role') == 1) {
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
            </div>End Sales Card -->
            <!-- Sales Card -->

            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">News <span>| Status</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="ps-3 ">
                      <h3 style="font-weight: bold;">&nbsp;&nbsp;&nbsp;<?= $countnews ?></h3>
                      <span class="text-muted small pt-2 ps-1">&nbsp;&nbsp;&nbsp;Total</span>
                    </div>
                    <div class="ps-3 ">
                      <h3 style="font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $publishnews ?></h3>
                      <span class="text-muted small pt-2 ps-1">&nbsp;&nbsp;&nbsp;&nbsp;Published</span>
                    </div>
                    <div class="ps-3">
                      <h3 style="font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $unpublishnews ?></h3>
                      <span class="text-muted small pt-2 ps-1">&nbsp;&nbsp;&nbsp;&nbsp;Unpublished</span>
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
                      <h6><?= $CountViewsTotal ?></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Sales Card -->
            <div class="col-xxl-<?php if (session('role') == 1) {
                                  echo "2";
                                } else {
                                  echo "3";
                                } ?> col-md-4">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title"> Visitors<span>|Monthly</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-newspaper"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= $CountViewsTotalVisitors ?></h6>
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

          <!-- Reports -->
          <div class="col-8">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Reports Views <span>/Monthly</span></h5>
                <!-- Line Chart -->
                <div id="lineChart" style="min-height: 400px;" class="echart"></div>

                <script>
                  document.addEventListener("DOMContentLoaded", () => {
                    echarts.init(document.querySelector("#lineChart")).setOption({
                      xAxis: {
                        type: 'category',
                        data: [<?php foreach ($DataMonthly as $dm) {
                                  echo "'" . date("M", mktime(0, 0, 0, $dm['bln'], 10)) . "',";
                                }
                                ?>]
                      },
                      yAxis: {
                        type: 'value'
                      },
                      series: [{
                        data: [<?php foreach ($DataMonthly as $dm) {
                                  echo $dm['views'] . ",";
                                } ?>],

                        type: 'line',
                        smooth: true
                      }]
                    });
                  });
                </script>
                <!-- End Line Chart -->
              </div>
            </div>
          </div><!-- End Reports -->
          <div class="col-4">
            <div class="card ">
              <div class="card-body">
                <h5 class="card-title">Recent Activity <span>| Today</span></h5>
                <div class="activity" style=" overflow-y:auto;height:400px"">
                  <?php $a = 0;
                  foreach ($log as $l) :
                  ?>
                    <div class=" activity-item d-flex">
                  <div class="activite-label"><?= date('H:i', strtotime($l['time_access'])) ?></div>
                  <i class='bi bi-circle-fill activity-badge <?php if ($l['remarks'] == 'Read News') {
                                                                echo 'text-primary';
                                                              } elseif ($l['remarks'] == 'Add Comment') {
                                                                echo 'text-danger';
                                                              } elseif ($l['remarks'] == 'Login System') {
                                                                echo 'text-success';
                                                              } else {
                                                                echo 'text-info';
                                                              } ?> align-self-start'></i>
                  <div class="activity-content">
                    <?= $l['name_user'] ?> <a href="#" class="fw-bold text-dark"><?= $l['remarks'] ?></a> <?= $l['title_berita'] ?>
                  </div>
                </div><!-- End activity item-->
              <?php $a++;
                  endforeach; ?>
              </div>

            </div>
          </div><!-- End Recent Activity -->
          </div>

        </div>
    </div><!-- End Top Selling -->

    </div>
    </div><!-- End Left side columns -->

    </div>
  </section>

</main><!-- End #main -->
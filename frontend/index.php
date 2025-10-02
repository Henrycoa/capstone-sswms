<!DOCTYPE html>
<html lang="en">

<?php include './layouts/navbar.php'; ?>
<?php include './layouts/sidebar.php'; ?>

<?php include './assets/js/loginchecker.php'; ?>


<body>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Beneficiary Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div>

    <section class="section dashboard">
      <div class="row">

        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Approved</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-check"></i>
                    </div>
                    <div class="ps-3">
                      <h6 class="henrypogi">0</h6>
                      <span class="text-muted small pt-2 ps-1">approved</span>

                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Sales Card -->
            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Pending <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6 class="henrypogiTupad">0</h6>
                      <span class="text-muted small pt-2 ps-1">pending</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Declined <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6 id="feedback_declined">0</h6>
                      <span class="text-muted small pt-2 ps-1">declined</span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Total Beneficiary <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6 id="feedback_declined">0</h6>
                      <span class="text-muted small pt-2 ps-1">Benefefeciary</span>

                    </div>
                  </div>

                </div>

              </div>

            </div>

            <div class="card">
              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>

              <div class="card-body pb-0">
                <h5 class="card-title">List Of Beneficiary <span>| Today</span></h5>

                <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

                <script>
                  document.addEventListener("DOMContentLoaded", () => {
                    echarts.init(document.querySelector("#trafficChart")).setOption({
                      tooltip: {
                        trigger: 'item'
                      },
                      legend: {
                        top: '5%',
                        left: 'center'
                      },
                      series: [{
                        name: 'Access From',
                        type: 'pie',
                        radius: ['40%', '70%'],
                        avoidLabelOverlap: false,
                        label: {
                          show: false,
                          position: 'center'
                        },
                        emphasis: {
                          label: {
                            show: true,
                            fontSize: '18',
                            fontWeight: 'bold'
                          }
                        },
                        labelLine: {
                          show: false
                        },
                        data: [{
                            value: 1048,
                            name: 'Scholarships'
                          },
                          {
                            value: 735,
                            name: 'Public Health'
                          },
                          {
                            value: 580,
                            name: 'Email'
                          },
                        ]
                      }]
                    });
                  });
                </script>

              </div>

            </div><!-- End Website Traffic -->


            <!-- Recent Sales -->


          </div>

        </div>

        <div class="col-lg-4">
          <!-- News & Updates Traffic -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown">
                <i class="bi bi-three-dots"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>
                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">News & Updates <span>| Today</span></h5>

              <div class="news">
                <div class="post-item clearfix">
                  <img src="./assets/img/news-1.jpg" alt="">
                  <h4><a href="#">No complaints at all, but nothing special</a></h4>
                  <p>Refusing to accept, not enduring hardship. Because choosing is necessary...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="./assets/img/news-2.jpg" alt="">
                  <h4><a href="#">However, it is indeed a hindrance</a></h4>
                  <p>No one is greater in life, duties with others lead to growth and wisdom...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="./assets/img/news-3.jpg" alt="">
                  <h4><a href="#">Because it is and to the greatest extent similar</a></h4>
                  <p>Enjoying real value and accusations. Following through and fully committing...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="./assets/img/news-4.jpg" alt="">
                  <h4><a href="#">Body pain that is burdensome</a></h4>
                  <p>Because it is necessary. Choosing others and overcoming challenges...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="./assets/img/news-5.jpg" alt="">
                  <h4><a href="#">And the pains of corruption, which are severe</a></h4>
                  <p>Hating but still moving forward. Being generous and deserving dignity...</p>
                </div>

              </div>
              <!-- End sidebar recent posts-->
            </div>

          </div>
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Satisfaction Chart</h5>

                <!-- Bar Chart -->
                <div id="barChart" style="min-height: 200px;" class="echart"></div>

                <script>
                  document.addEventListener("DOMContentLoaded", () => {
                    echarts.init(document.querySelector("#barChart")).setOption({
                      xAxis: {
                        type: 'category',
                        data: ['Excellent', 'Poor', 'Fair', 'Great']
                      },
                      yAxis: {
                        type: 'value'
                      },
                      series: [{
                        data: [120, 200, 150, 80, 70, 110, 130],
                        type: 'bar'
                      }]
                    });
                  });
                </script>
                <!-- End Bar Chart -->

              </div>
            </div>
          </div>
        </div>

      </div>

    </section>


  </main>


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?php include './layouts/footer.php'; ?>

</body>

</html>

<script src="./assets/js/jquery/jquery.min.js"></script>
<script>

  counter();



  if (user_type.toUpperCase() == "ADMIN") {

  } else if (user_type.toUpperCase() == "SOCIAL WORKER") {

  } else if (user_type.toUpperCase() == "USER") {


  }

  const jwt = LoginChecker();
  console.log(jwt)
  if (jwt.status == "invalid" || jwt.status == "expired") {
    localStorage.clear();
    window.location.href = 'login.php';
  }
</script>


<!DOCTYPE html>
<html lang="en">

<?php include './layouts/navbar.php'; ?>
<?php include './layouts/sidebar.php'; ?>

<?php include './assets/js/loginchecker.php'; ?>

<style>
        #chartdiv {
            width: 100%;
            height: 350px;
        }
    </style>
<body>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>ADMIN WORRKER DASHBOARD</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div>

    <section class="section dashboard">
      <div class="row">

        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-12">
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
                  <h5 class="card-title"></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people-fill text-primary fs-1"></i>
                    </div>
                    <div class="ps-3">
                      <h6 class="henrypogi"></h6>
                      <span class=" text-muted small pt-2 ps-1"></span>

                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Sales Card -->
            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-12">
              <div class="card info-card revenue-card">

                <div class="filter">
                </div>

                <div class="card-body">
                  <h5 class="card-title"></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-mortarboard-fill text-primary"></i>
                    </div>
                    <div class="ps-3">
                      <h6>Educational Support</h6>
                      <span class="text-muted small pt-2 ps-1 henrypogiTupad"></span>

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
                  <h5 class="card-title"></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-mortarboard-fill text-primary"></i>
                    </div>
                    <div class="ps-3">
                      <h6>Tupad</h6>
                      <span class="text-muted small pt-2 ps-1 henrypogiTupad"></span>

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
                <h5 class="card-title">Chart & Table</h5>

                    <div class="row">
                        <div class="col-md-4">
                          <label for="daterange">Filter Date:</label>
                          <input type="text" id="daterange" class="form-control" />
                        </div>
                    </div>
             

                  <div class="row">

                 


                    <div id="" class="col-md-6">
                      <div id="chartdiv"></div>
                    </div>

                    <div id="" class="col-md-6">
                    <table class="table table-bordered datatable" id="table_data_analytics">
                  <thead>
                    <tr>
                      <th>Category</th>
                      <th>Approved</th>
                      <th>Pending</th>
                      <th>Released</th>
                      <th>Declined</th>
                      <th>Total</th>

                    </tr>
                  </thead>
                  <tbody>
                    <!-- Dynamic Data Will Be Inserted Here -->
                  </tbody>
                  <tfoot></tfoot>
                </table>
                    </div>

                  </div>
           

         

              </div>

            </div><!-- End Website Traffic -->


            <!-- Recent Sales -->


          </div>

        </div>

    

      </div>

    </section>


  </main>


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?php include './layouts/footer.php'; ?>

</body>

</html>

<!-- Bootstrap 4 CSS -->

<!-- Date Range Picker CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

<!-- jQuery, Moment.js, and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- amCharts 5 Core & Charts -->
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

<!-- Date Range Picker JS -->
<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

<script>

counter();

  if (user_type.toUpperCase() == "ADMIN") {

  } else if (user_type.toUpperCase() == "SOCIAL WORKER") {

  } else if (user_type.toUpperCase() == "USER") {


  }

  const jwt = LoginChecker();
  if (jwt.status == "invalid") {
    window.location.href = 'login.php';
  }
</script>
<script>
    $(function() {
        $('#daterange').daterangepicker({
            opens: 'left',
            locale: {
                format: 'YYYY-MM-DD'
            }
        }, function(start, end, label) {

          generateChart(start.format('YYYY-MM-DD'),end.format('YYYY-MM-DD'))
          generateTable(start.format('YYYY-MM-DD'),end.format('YYYY-MM-DD'))

            console.log("Date range selected: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
        });
    });
</script>

<script>

 
function generateChart(dateFrom=null,dateTo=null){
      const formData = {
                  dateFrom: dateFrom,
                  dateTo: dateTo
              };

      $.ajax({
              url: `<?php echo $url; ?>/appointment/analytics_chart.php`, // URL to your PHP script
              method: "POST",
              dataType: "json",
              contentType: 'application/json',
              data: JSON.stringify(formData),
              success: function (data) {
                  renderDonut(data.message);
              },

              error: function (xhr, status, error) {
                  console.error("AJAX error:", status, error);
              }
          });
}


      generateChart();

       // Outer-scope holders
let donutRoot, donutSeries;

function renderDonut(data) {
  if (donutRoot) {
    // already initialized → just update data
    donutSeries.data.setAll(data);
    return;
  }

  // 1) Create root
  donutRoot = am5.Root.new("chartdiv");
  donutRoot.numberFormatter.set("numberFormat", "₱#,###");
  donutRoot.setThemes([ am5themes_Animated.new(donutRoot) ]);

  // 2) Create chart
  let chart = donutRoot.container.children.push(
    am5percent.PieChart.new(donutRoot, {
      layout: donutRoot.verticalLayout
    })
  );

  // 3) Create series
  donutSeries = chart.series.push(
    am5percent.PieSeries.new(donutRoot, {
      valueField: "value",
      categoryField: "category",
      alignLabels: true
    })
  );

  // 4) Tooltip formatting
  donutSeries.slices.template.setAll({
    tooltipText: "RELEASED AMT FOR {category}: {value}"
  });

  // 5) Make it a donut
  donutSeries.set("innerRadius", am5.percent(50));

  // 6) Initial data + animate
  donutSeries.data.setAll(data);
  donutSeries.appear(1000, 100);
}

  
</script>


<script>

  generateTable();

 function generateTable(dateFrom=null,dateTo=null){

  const formData = {
                  dateFrom: dateFrom,
                  dateTo: dateTo
              };


      $.ajax({
          url: `<?php echo $url; ?>/appointment/analytics_table.php`, // URL to your PHP script
          method: "POST",
          dataType: "json",
          contentType: 'application/json',
          data: JSON.stringify(formData),
          success: function(response) {
              // Clear the existing table body
              $("#table_data_analytics tbody").html("");

              const data = response.message;

              // Check if data is available
              if (data.length > 0) {
                  let rows = ''; // Initialize an empty string for rows

                  // Loop through each item in the data array

                  var subtotal = 0 ;
                  var grandTotalApproved = 0;
                  var grandTotalPending = 0;
                  var grandTotalReleased = 0;
                  var grandTotalDenied = 0;


                  data.forEach(item => {

                    subtotal = parseInt(item.approved) + parseInt(item.pending) + parseInt(item.released) + parseInt(item.denied);

                    grandTotalApproved+=parseInt(item.approved);
                    grandTotalPending+=parseInt(item.pending);
                    grandTotalReleased+=parseInt(item.released);
                    grandTotalDenied+=parseInt(item.denied);



                  

                      rows += `
                      <tr id="row_${item.application_id }">
                          <td>${item.category}</td>
                          <td class="text-end">${parseInt(item.approved).toLocaleString()}</td>
                          <td class="text-end">${parseInt(item.pending).toLocaleString()}</td>
                          <td class="text-end">${parseInt(item.released).toLocaleString()}</td>
                          <td class="text-end">${parseInt(item.denied).toLocaleString()}</td>
                          <td class="fw-bold text-end">${subtotal.toLocaleString()}</td>
                      

                  ${(user_type.toUpperCase() === "ADMIN" || user_type.toUpperCase() === "SOCIAL WORKERS") ? 
                `<button id="funcEditService" type="button" class="btn btn-primary btn-sm me-1" 
                  onclick="funcEditService(${JSON.stringify(item).replace(/"/g, '&quot;')});">
                  
                  EDIT
              </button>` 
          : ''} 
                      </tr>
                      
                  `;
                  });




                  // Append the rows to the table body
                  $("#table_data_analytics tbody").append(rows);


                  $("#table_data_analytics tfoot").html('');



                  var grandTotalTr = `<tr>
                                        <td class="fw-bold text-end">Grand Total</td>
                                        <td class="fw-bold text-end">${grandTotalApproved}</td>
                                        <td class="fw-bold text-end">${grandTotalPending}</td>
                                        <td class="fw-bold text-end">${grandTotalReleased}</td>
                                        <td class="fw-bold text-end">${grandTotalDenied}</td>
                                        <td class="fw-bold text-end">${grandTotalApproved+grandTotalPending+grandTotalReleased+grandTotalDenied}</td>
                                      </tr>`;
            

                  $("#table_data_analytics tfoot").append(grandTotalTr);

              } else {
                  // If no data, display a message in the table
                  $("#table_data_analytics tbody").append(`
                  <tr>
                      <td colspan="6" class="text-center">NO DATA</td>
                  </tr>

              `);

              $("#table_data_analytics tfoot").html(``);
              }
          },
          error: function(xhr, status, error) {
              console.error("Error fetching data: " + error);
              // Optionally handle errors
              $("#table-service tbody").html(`
              <tr>
                  <td colspan="4" class="text-center">Error loading data</td>
              </tr>
          `);
          }
      });
    }
</script>


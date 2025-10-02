<?php include './url.php'; ?>


<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=5">

<?php include './layouts/navbar.php'; ?>
<?php include './layouts/sidebar.php'; ?>


<body>


  <?php include './components/benefeciary/edit_benefeciary_modal.php'; ?>
  <?php include './components/benefeciary/add_appointment_modal.php'; ?>
  <?php include './components/benefeciary/view_benefeciary_modal.php'; ?>



  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Beneficiary</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <!-- Include DataTables CSS & JS -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <!-- Header with Button -->
              <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="card-title">Beneficiary Tables</h5>
                <button id="add_scholarships_modal" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_modal_appointments">
                  Add Now
                </button>
              </div>

              <!-- Search & Filters -->
              <div class="row mb-3">
                <div class="col-md-2">
                  <input type="text" id="searchInput" class="form-control" placeholder="Search beneficiary..">
                </div>
                <div class="col-md-3">
                  <select id="filterSchemeType" class="form-select sel_filter" data-field="application_type">
                    <option value="">Application Form Type</option>
                    <option value="Financial Assistance">Financial Assistance</option>
                    <option value="Educational Support">Educational Support</option>
                    <option value="4PS">4PS</option>
                    <option value="TUPAD">TUPAD</option>
                  </select>
                </div>
                <div class="col-md-3">
                  <select id="filterScholarshipYear" class="form-select sel_filter" data-field="application_year" data-name="jomar">
                    <option value="">All Years</option>
                    <option value="2025">2025</option>
                    <option value="2024">2024</option>
                    <option value="2023">2023</option>
                  </select>
                </div>
              </div>

              <!-- Table -->
              <div class="table_beneficiary">
                <table class="table table-bordered datatable" id="table_beneficiary">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Type</th>
                      <th>Created@</th>
                      <th>Status</th>
                      <th>Released@</th>
                      <th>Action</th>

                    </tr>
                  </thead>
                  <tbody>
                    <!-- Dynamic Data Will Be Inserted Here -->
                  </tbody>
                </table>

                <button type="button" class="btn btn-primary " onclick="previous()" id="btn_previous"> Previous </button>
                <button type="button" class="btn btn-primary " onclick="next()" id="btn_next"> Next </button>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>


  </main><!-- End #main -->


  <?php include './layouts/footer.php' ?>
  <!-- ======= Footer ======= -->

  <a href="#" class="back-to-top d-flex align-items-center justifzy-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="./assets/js/sweetalert2@11.js"></script>
</body>

</html>

<!-- jQuery -->
<script src="./assets/js/jquery/jquery.min.js"></script>


<script>
  function funcUpdate_Benefeciary(item) {
    console.log(item); // Verify the value passed
    const data = JSON.parse(item);

    var application_type = data.application_type;
    var application_id = data.application_id;


    // $("#edit_application_for").val(data.application_for);
    // $("#edit_application_type_").val(data.application_type);
    // $("#edit_relationship").val(data.relationship);

    // $("#edit_beneficiary_address").val(data.beneficiary_address);
    // $("#edit_beneficiary_city_mun").val(data.beneficiary_city_mun);
    // $("#edit_beneficiary_district").val(data.beneficiary_district);
    // $("#edit_barangay_clearance").val(data.barangay_clearance);
    // $("#edit_beneficiary_civil_status").val(data.beneficiary_civil_status);
    // $("#edit_barangay_clearance").val(data.barangay_clearance);
    // $("#edit_beneficiary_gender").val(data.beneficiary_gender);
    // $("#edit_contact_number").val(data.contact_num);
    // $("#edit_beneficiary_gmail").val(data.gmail);



    $("#edit_application_type").html(application_type);
    $("#edit_beneficiary_address").val(data.beneficiary_address)
    $("#txt_approve_application_id").val(application_id);






    $("#edit_modal_Benefeciary").modal('show');
  }


  function funcviewAppointment(item) {
    const data = JSON.parse(item);
    console.log(data);

    var application_id = data.application_id;


    var valid_id = data.valid_id;
    var application_for = data.application_for;
    var full_name = data.full_name;
    var application_type = data.application_type;
    var application_status = data.application_status
    var school_id = data.school_id;



    var school_id = data.school_id;
    var form_138 = data.form_138;
    var psa = data.psa;
    var form_137 = data.form_137;
    var barangay_clearance = data.barangay_clearance;
    var goodmoral = data.goodmoral;
    var beneficiary_lastname = data.beneficiary_lastname;
    var beneficiary_firstname = data.beneficiary_firstname;
    var beneficiary_middlename = data.beneficiary_middlename;



    var beneficiary_Schoolid = data.beneficiary_Schoolid;
    var beneficiary_form138 = data.beneficiary_form138;
    var beneficiary_psa = data.beneficiary_psa;
    var beneficiary_form137 = data.beneficiary_form137;
    var beneficiary_barangay_clearance = data.beneficiary_barangay_clearance;
    var beneficiary_good_moral = data.beneficiary_good_moral;


    var beneficiary_FullName = data.beneficiary_FullName;
    var beneficiary_suffix = data.beneficiary_suffix;
    var beneficiary_address = data.beneficiary_address;

    var beneficiary_city_mun = data.beneficiary_city_mun;
    var beneficiary_district = data.beneficiary_district;
    var beneficiary_barangay = data.beneficiary_barangay;
    var beneficiary_gender = data.beneficiary_gender;
    var client_lastname = data.client_lastname;
    var client_middlename = data.client_middlename;
    var client_suffix = data.client_suffix;
    var relationship = data.relationship;
    var client_gender = data.client_gender;
    var client_address = data.client_address;
    var contact = data.contact;
    var beneficiary_civil_status = data.beneficiary_civil_status;
    var contact_num = data.contact_num;
    var gmail = data.gmail;



    $("#beneficiary_view_application_for").html(application_for);
    $("#beneficiary_Schoolid").html(school_id);
    $("#beneficiary_view_FullName").html((beneficiary_lastname + " " + beneficiary_firstname + " " + beneficiary_middlename).toUpperCase());


    $("#beneficiary_form138").html(form_138);
    $("#beneficiary_psa").html(psa);
    $("#beneficiary_form137").html(form_137);
    $("#beneficiary_barangay_clearance").html(barangay_clearance);
    $("#beneficiary_good_moral").html(goodmoral);
    $("#beneficiary_view_number").html(contact_num);



    $("#beneficiary_view_application_for").html(application_for);
    $("#beneficiary_view_valid_id").html(valid_id);
    $("#beneficiary_view_FullName").html(full_name);
    $("#beneficiary_view_application_type").html(application_type);

    $("#beneficiary_view_email").html(gmail);

    $("#beneficiary_view_contact").html(contact);
    $("#beneficiary_view_beneficiary_suffix").html(beneficiary_suffix);
    $("#beneficiary_view_address").html(beneficiary_address);
    $("#beneficiary_view_city_mun").html(beneficiary_city_mun);
    $("#beneficiary_view_district").html(beneficiary_district);
    $("#beneficiary_view_barangay").html(beneficiary_barangay);
    $("#beneficiary_view_gender").html(beneficiary_gender);
    $("#beneficiary_view_client_lastname").html(client_lastname);
    $("#beneficiary_view_client_middlename").html(client_middlename);
    $("#beneficiary_view_client_suffix").html(client_suffix);
    $("#beneficiary_view_relationship").html(relationship);
    $("#beneficiary_view_client_gender").html(client_gender);
    $("#beneficiary_view_client_address").html(client_address);
    $("#beneficiary_view_district").html(beneficiary_civil_status);



    $("#txt_approve_application_id").val(application_id)

    if (application_status.toUpperCase() === "APPROVED") {
      $("#btn_view_approve").addClass('d-none');
      $("#btn_view_release").removeClass('d-none');
    } else if (application_status.toUpperCase() === "RELEASED") {
      $("#btn_view_approve").addClass('d-none');
      $("#btn_view_release").addClass('d-none');
    } else {
      $("#btn_view_approve").removeClass('d-none');
      $("#btn_view_release").addClass('d-none');
    }

    $("#beneficiary_view_modal_appointments").modal('show');

  }

  let debounceTimer;

  $('#searchInput').on('input', function() {
    clearTimeout(debounceTimer);
    const searchTerm = $(this).val().trim();
    updateUrlParameter('search', searchTerm); // Update the search parameter in the URL



    url.searchParams.set('page', '1');
    window.history.replaceState({}, '', url);


    debounceTimer = setTimeout(function() {


      fetchAppointments(searchTerm);
    }, 750); // 750ms debounce
  });

  $('.sel_filter').on('change', function() {
    const selectedValue = $(this).val();
    const field = $(this).data('field');

    // Update the URL parameter
    if (selectedValue) {
      url.searchParams.set(field, selectedValue);
    } else {
      url.searchParams.delete(field);
    }

    // Push new URL to browser without reloading
    window.history.replaceState({}, '', url);

    fetchAppointments()
  });

  function updateUrlParameter(param, value) {
    if (value) {
      url.searchParams.set(param, value); // Update or add the parameter
    } else {
      url.searchParams.delete(param); // Remove the parameter if empty
    }
    window.history.replaceState({}, '', url); // Replace current URL in the browser without reloading
  }

  function getUrlParameter(name) {
    const params = new URLSearchParams(window.location.search);
    return params.get(name) || '';
  }


  function next() {

    let page = url.searchParams.get('page') ?? 1;
    page = parseInt(page) + 1


    if (page) {
      url.searchParams.set('page', page);
      window.history.replaceState({}, '', url);
      fetchAppointments()
    }
  }
  const url = new URL(window.location);

  function previous() {

    let page = url.searchParams.get('page') ?? 1;
    page = parseInt(page) - 1


    if (page) {
      url.searchParams.set('page', page);
      window.history.replaceState({}, '', url);
      fetchAppointments()
    }
  }

  function fetchAppointments(search = '') {
    const searchValue = getUrlParameter('search');
    $('#searchInput').val(searchValue)

    let finalUrl = `<?php echo $url; ?>/appointment/list_appointment.php?`;
    const url = new URL(window.location);
    const application_type = url.searchParams.get('application_type')
    const application_year = url.searchParams.get('application_year')
    const page = url.searchParams.get('page') ?? 1;




    if (page) {
      finalUrl += `page=` + page
      url.searchParams.set('page', page);
      window.history.replaceState({}, '', url);
    }
    if (application_year) {
      finalUrl += `&application_year=` + application_year
    }

    if (searchValue) {
      finalUrl += `&search=` + searchValue
    }
    if (application_type) {
      finalUrl += `&application_type=` + application_type
    }


    let user_type = localStorage.getItem('user_type');





    $.ajax({
      url: finalUrl,
      type: 'GET',
      dataType: 'json',
      data: {
        user_type: user_type
      },

      success: function(response) {
        $("#table_beneficiary tbody").html("");

        const data = response.message;
        const count = response.count;



        if (count < 5) {
          $("#btn_next").addClass('d-none');
        } else {
          $("#btn_next").removeClass('d-none');
        }

        if (data.length > 0) {
          let rows = '';

          data.forEach(item => {
            rows += `
            <tr id="tr_beneficiary_${item.application_id}">
              <td>${item.application_id}</td>
              <td>${item.beneficiary_lastname} ${item.beneficiary_firstname} ${item.beneficiary_middlename}</td>
              <td>${item.application_type}</td>
              <td>${item.date_created}</td>
              <td><span class="${item.application_status.toUpperCase()==='APPROVED' ? 'badge bg-success' :'badge bg-danger'}">${item.application_status}</span></td>
              <td>${item.date_released ?? ""}</td>
              <td>
                <button type="button" class="btn btn-primary btn-sm me-1"
                        onclick="funcviewAppointment('${JSON.stringify(item).replace(/"/g, '&quot;')}');">
                  VIEW
                </button>
              
              </td>
            </tr>
          `;
          });

          $("#table_beneficiary tbody").append(rows);
        } else {
          $("#table_beneficiary tbody").append(`
          <tr>
            <td colspan="7" class="text-center fw-bold text-danger">NO DATA</td>
          </tr>
        `);
        }
      },
      error: function(xhr, status, error) {
        console.error("Error fetching data: " + error);
        $("#table_beneficiary tbody").html(`
        <tr>
          <td colspan="4" class="text-center">Error loading data</td>
        </tr>
      `);
      }
    });
  }

  // 👇 Initial load without search
  fetchAppointments();
</script>

<script>
  if (user_type.toUpperCase() == "ADMIN") {

    $("#admin_benefeciary_news").addClass("d-none");
    $("#benefeciary_modal").addClass("d-none");


  } else if (user_type.toUpperCase() == "USER") {

    $("#website").addClass("d-none");
    $("#admin_benefeciary_news").addClass("d-none");

  } else if (user_type.toUpperCase() == "SOCIAL WORKER") {
    $("#admin_benefeciary_news").addClass("d-none");

  }
</script>
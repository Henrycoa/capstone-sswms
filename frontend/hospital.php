<?php include './url.php'; ?>


<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=5">

<?php include './layouts/navbar.php'; ?>
<?php include './layouts/sidebar.php'; ?>


<body>

    <?php include './components/benefeciary/add_appointment_modal.php'; ?>

    <?php include './components/scholarships_modal/scholarships_add.php'; ?>
    <?php include './components/scholarships_modal/scholarships_view.php'; ?>



    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Benefeciary</h1>
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
                            <h5 class="card-title">Scholarship Programs</h5>

                            <!-- Search & Filters -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <input type="text" id="searchInput" class="form-control" placeholder="Search scholarship...">
                                </div>
                                <div class="col-md-3">
                                    <select id="filterSchemeType" class="form-select">
                                        <option value="">All Scheme Types</option>
                                        <option value="Academic">Academic</option>
                                        <option value="Sports">Sports</option>
                                        <option value="Arts">Arts</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select id="filterScholarshipYear" class="form-select">
                                        <option value="">All Years</option>
                                        <option value="2025">2025</option>
                                        <option value="2024">2024</option>
                                        <option value="2023">2023</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Table -->
                            <div class="table-responsive">
                                <table class="table table-bordered datatable" id="tbl_scholarships">
                                    <thead>
                                        <tr>
                                            <th>Scheme Name</th>
                                            <th>SchemeType</th>
                                            <th>Scheme Grade</th>
                                            <th>Scholarship Year</th>
                                            <th>Category</th>
                                            <th>Criteria</th>
                                            <th>Document Required</th>
                                            <th>Scholar Desc</th>
                                            <th>Scholar Amount</th>
                                            <th>Published Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Dynamic Data Will Be Inserted Here -->
                                    </tbody>
                                </table>
                            </div>

                            <!-- Apply Now Button -->
                            <div class="text-end">
                                <button id="add_scholarships_modal" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addScholarshipModal">
                                    Apply Now
                                </button>
                                <button id="add_scholarships_modal" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#view_scholarships">
                                    Apply Now
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main><!-- End #main -->


    <?php include './layouts/footer.php' ?>
    <!-- ======= Footer ======= -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="./assets/js/sweetalert2@11.js"></script>
</body>

</html>

<!-- jQuery -->
<script src="./assets/js/jquery/jquery.min.js"></script>


<script>
    function funcconfAppointment(item, action) {

        const userType = localStorage.getItem('user_type');
        const data = JSON.parse(item.replace(/&quot;/g, '"'));

        const {
            confirm_byadmin,
            application_id
        } = data


        Swal.fire({
            title: '',
            html: `Are you sure you want to <strong>${action.toUpperCase()}</strong>  ?`, // Custom HTML content
            icon: 'info',
            showCancelButton: true, // Adds a cancel button
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, proceed!',
            cancelButtonText: 'No, cancel!'
        }).then((result) => {
            if (result.isConfirmed) {

                const formData = {
                    "status": action.toUpperCase() === "CONFIRM" ? 1 : 0,
                    "usertype": userType,
                    "action": action,
                    "application_id": 0

                        ,
                };

                $.ajax({
                    url: `<?php echo $url; ?>/appointment/confimation.php`,
                    type: 'POST',
                    contentType: 'application/json',
                    data: JSON.stringify(formData),
                    dataType: 'json',
                    success: function(response) {
                        const status = response.status;
                        const message = response.message;

                        if (status === 1) {
                            let updatedStatus = action.toUpperCase() === "CONFIRM" ? "<span class='badge bg-success'>YES</span>" : "<span class='badge bg-danger'>NO</span>";
                            $("#row_" + application_id + " td:eq(4)").html(updatedStatus);
                        }
                    },
                    error: function(xhr, status, error) {
                        alert("An error occurred: " + error);
                    }
                });
            }
        });






    }

    function funcEditAppointment(item) {
        const data = JSON.parse(item);
        console.log(data);

        var lname = data.beneficiary_lastname;
        var mname = data.beneficiary_middlename;
        var fname = data.beneficiary_firstname;
        var suffix = data.beneficiary_suffix;
        var application_type = data.application_type;
        var relationship = data.relationship;
        var address = data.beneficiary_address;
        var muni = data.beneficiary_city_mun;
        var district = data.beneficiary_district;
        var barangay = data.beneficiary_barangay;
        var status = data.beneficiary_civil_status;
        var gender = data.beneficiary_gender;
        var number = data.contact_num;
        var gmail = data.gmail;
        var edit_application_id = data.application_id




        $("#edit_application_id").html(edit_application_id);
        $("#edit_beneficiary_lastname").val(lname);
        $("#edit_beneficiary_middlename").val(mname);
        $("#edit_beneficiary_firstname").val(fname);
        $("#edit_beneficiary_suffix").val(suffix);
        $("#edit_beneficiary_address").val(address);
        $("#edit_beneficiary_city_mun").val(muni);
        $("#edit_beneficiary_district").val(district);
        $("#edit_beneficiary_barangay").val(barangay);
        $("#edit_beneficiary_civil_status").val(status);
        $("#edit_beneficiary_gender").val(gender);
        $("#edit_contact_number").val(number);
        $("#edit_beneficiary_email").val(gmail);
        $("#edit_application_type").val(application_type)
        $("#edit_relationship").val(relationship)
        $("#edit_modal_appointments").modal('show');

    }

    function funcviewAppointment_(item) {
        const data = JSON.parse(item);
        console.log(data);

        var lname = data.beneficiary_lastname;
        var mname = data.beneficiary_middlename;
        var fname = data.beneficiary_firstname;
        var suffix = data.beneficiary_suffix;
        var application_type = data.application_type;
        var relationship = data.relationship;
        var address = data.beneficiary_address;
        var muni = data.beneficiary_city_mun;
        var district = data.beneficiary_district;
        var barangay = data.beneficiary_barangay;
        var status = data.beneficiary_civil_status;
        var gender = data.beneficiary_gender;
        var number = data.contact_num;
        var gmail = data.gmail;
        var view_application_id = data.application_id;
        var application_for = data.application_for;
        var relationship = data.relationship;
        var client_lastname = data.client_lastname;
        var client_firstname = data.client_firstname;
        var client_middlename = data.client_middlename;
        var client_suffix = data.client_suffix;
        var client_gender = data.client_gender;
        var client_address = data.client_address;


        $("#view_application_id").html(view_application_id);
        $("#view_beneficiary_lastname").html(lname);
        $("#view_beneficiary_middlename").html(mname);
        $("#view_beneficiary_firstname").html(fname);
        $("#view_beneficiary_suffix").html(suffix);
        $("#view_beneficiary_address").html(address);
        $("#view_beneficiary_city_mun").html(muni);
        $("#view_beneficiary_district").html(district);
        $("#view_beneficiary_barangay").html(barangay);
        $("#view_beneficiary_civil_status").html(status);
        $("#view_beneficiary_gender").html(gender);
        $("#view_contact_number").html(number);
        $("#view_beneficiary_email").html(gmail);
        $("#view_application_type").html(application_type);
        $("#application_for").html(application_for);
        $("#view_relationship").html(relationship);
        $("#view_client_lastname").html(client_lastname);
        $("#view_client_firstname").html(client_firstname);
        $("#view_client_middlename").html(client_middlename);
        $("#view_client_suffix").html(client_suffix);
        $("#view_client_gender").html(client_gender);
        $("#view_client_address").html(client_address);

        if (application_for.toUpperCase() == "SELF") {

            $("#div_view_client_information").addClass('d-none');
        } else {

            $("#div_view_client_information").removeClass('d-none');

        }

        $("#view_modal_appointments").modal('show');

    }

    function funcDeleteAppointment(application_id) {


        Swal.fire({
            title: 'Delete Item',
            html: 'Are you sure you want to <strong>DELETE</strong>  ?', // Custom HTML content
            icon: 'info',
            showCancelButton: true, // Adds a cancel button
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, proceed!',
            cancelButtonText: 'No, cancel!'
        }).then((result) => {
            if (result.isConfirmed) {

                const formData = {
                    application_id: application_id,
                    action: "delete",
                };

                $.ajax({
                    url: `<?php echo $url; ?>/appointment/add_appointment.php`,
                    type: 'POST',
                    contentType: 'application/json',
                    data: JSON.stringify(formData),
                    dataType: 'json',
                    success: function(response) {
                        const status = response.status;
                        const message = response.message;

                        if (status === 1) {
                            $(`#row_${application_id}`).remove();
                        }
                    },
                    error: function(xhr, status, error) {
                        alert("An error occurred: " + error);
                    }
                });
            }
        });

    }
    $(document).ready(function() {


        $.ajax({
            url: `https://educationandscholarship.lgu2.com/api/scheme.php`,
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                $("#tbl_scholarships> tbody").html("");
                const data = response.message;

                if (data.length > 0) {


                    var rows = '';
                    for (var i = 0; i < data.length; i++) {
                        var item = data[i];

                        rows += `
                                    <tr id="row_${item.id || ''}">
                                        <td>${item.gmail}</td>
                                        <td>${item.SchemeName}</td>
                                        <td>${item.SchemeType}</td>
                                        <td>${item.SchemeGrade}</td>
                                        <td>${item.Yearofscholarship}</td>
                                        <td>${item.Category}</td>
                                        <td>${item.Criteria}</td>
                                        <td>${item.DocomentRequired}</td>
                                        <td>${item.LastDate}</td>
                                        <td>${item.ScholarDesc}</td>
                                        <td>${item.ScholarDesc}</td>
                                        <td>${item.PublishedDate}</td>
                                        <td>  <button type="button" class="btn btn-primary btn-sm me-1" onclick="funcviewscholarships('${JSON.stringify(item).replace(/"/g, '&quot;')}');">VIEW</button>
        </td>
                                    </tr>`;
                    }
                    $("#tbl_scholarships > tbody").prepend(rows);

                } else {
                    $("#tbl_scholarships > tbody").append(`
                          <tr>
                            <td scope="row"></td>
                          </tr>
                       `);
                }
            },
        });

    });
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
        s
    }
</script>
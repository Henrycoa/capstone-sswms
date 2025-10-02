<?php include './url.php'; ?>


<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=5">

<?php include './layouts/navbar.php'; ?>
<?php include './layouts/sidebar.php'; ?>


<body>

    <?php include './components/benefeciary/add_appointment_modal.php'; ?>
    <?php include './components/benefeciary/view_benefeciary_modal.php'; ?>
    <?php include './components/benefeciary/view_scholarship.php'; ?>

    <?php include './components/calendar_modal/calendar_modal.php'; ?>


    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Appointment List</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Appointment</a></li>
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
                            <h5 class="card-title">Appointment Tables </h5>

                            <!-- Search & Filters -->
                            <div class="row mb-3">
                                <div class="col-md-2">
                                    <input type="text" id="searchInput" class="form-control" placeholder="Search benefeciary..">
                                </div>
                                <div class="col-md-3">
                                    <select id="filterSchemeType" class="form-select">
                                        <option value="">Application Form Type</option>
                                        <option value="Academic">Financial Assistance</option>
                                        <option value="Sports">Educational Support</option>
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
                            <div class="table_beneficiary">
                                <table class="table table-bordered datatable" id="table_beneficiary">
                                    <thead>
                                        <tr>
                                            <th>Full_name</th>
                                            <th>Gmail</th>
                                            <th>Status</th>
                                            <th>Application type</th>

                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Dynamic Data Will Be Inserted Here -->
                                    </tbody>
                                </table>
                            </div>

                            <!-- Apply Now Button -->


                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main><!-- End #main -->

    <script>
        function funcviewAppointment(item) {
            const data = JSON.parse(item);
            console.log(data);

            var beneficiary_lastname = data.beneficiary_lastname;
            var beneficiary_firstname = data.beneficiary_firstname;
            var beneficiary_middlename = data.beneficiary_middlename;

            var gmail = data.gmail;
            var contact_num = data.contact_num;
            var education = data.education;
            var lrn = data.lrn;
            var name_school = data.name_school;
            var year_level = data.year_level;
            var coi = data.coi;
      

            var family_info = data.family_info;
            var reason = data.reason;
            var valid_id = data.valid_id;
            var enrollment_cert = data.enrollment_cert;
            var statement_account = data.statement_account;
            var proof_income = data.proof_income;
            var proof_crisis = data.proof_crisis;
            var application_id = data.application_id;


            var guardian_full_name = data.guardian_full_name;
            var guardian_id = `<?php echo $url; ?>/`+data.guardian_id;

            var school_id = `<?php echo $url; ?>/`+data.school_id;

            var coi = `<?php echo $url; ?>/`+data.coi;



            $("#view_full_Name").html(beneficiary_firstname + " " + beneficiary_lastname);
            $("#view_email").html(gmail);
            $("#view_contact").html(contact_num);
            $("#view_LRN").html(lrn);
            $("#view_Name_School").html(name_school);
            $("#view_Year_Level").html(year_level);
            $("#view_school_id").html(school_id);
            $("#view_coi_").html(coi);
            $("#view_guardian_full_name").html(guardian_full_name);
            $("#view_guardian_id").html(guardian_id);
            $("#view_valid_id").html(valid_id);

            $("#view_education").html(education);
            $("#view_reason").html(reason);
            $("#view_enrollment_cert").html(enrollment_cert);
            $("#view_statement_account").html(statement_account);
            $("#view_proof_income").html(proof_income);
            $("#view_proof_crisis").html(proof_crisis);
            $("#txt_approved_appointment").val(application_id);
            $("#txt_approved_email").val(gmail);




            $("#txt_approved_email").val(gmail);


            $("#view_guardian_full_name").html(guardian_full_name);

            $('#view_guardian_id').attr('src', guardian_id);

            $('#view_school_id').attr('src', school_id);

            $('#view_coi_').attr('src', coi);

            


            $("#view_modal_scholarships").modal('show');

        }

        $(document).ready(function() {

            $.ajax({
                url: `<?php echo $url; ?>/appointment/list_appointment.php`, // URL to your PHP script
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    // Clear the existing table body
                    $("#table_beneficiary tbody").html("");

                    const data = response.message;

                    // Check if data is available
                    if (data.length > 0) {
                        let rows = ''; // Initialize an empty string for rows

                        // Loop through each item in the data array
                        data.forEach(item => {
                            rows += `
                                     <tr id="row_${item.application_id}">
                                             <td>${item.beneficiary_lastname} ${item.beneficiary_firstname} ${item.beneficiary_middlename}</td>
                                             <td>${item.gmail}</td>
                                             <td><span class="bg-success">${item.application_status}</span></td>
                                             <td>${item.application_type}</td>
                                             <td>  
                                               <button type="button" class="btn btn-primary btn-sm me-1" onclick="funcviewAppointment('${JSON.stringify(item).replace(/"/g, '&quot;')}');">VIEW</button> 
                                             </td>
                                            : ''} 
                                     </tr>
            
                                 `;
                        });

                        // Append the rows to the table body
                        $("#table_beneficiary tbody").append(rows);
                    } else {
                        -
                        // If no data, display a message in the table
                        $("#table_beneficiary tbody").append(`
             <tr>
                <td colspan="4" class="text-center">NO DATA</td>
            </tr>
                `);
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Error fetching data: " + error);
                    // Optionally handle errors
                    $("#table_beneficiary tbody").html(`
                        <tr>
                            <td colspan="4" class="text-center">Error loading data</td>
                        </tr>
                 `);
                }
            });
        });
    </script>
    <?php include './layouts/footer.php' ?>
    <!-- ======= Footer ======= -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="./assets/js/sweetalert2@11.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<style>
    html,
    body {
        height: 100%;
        margin: 0;
    }

    body {
        background-color: #f8f9fa;
        display: flex;
        flex-direction: column;
    }

    .main-content {
        flex: 1;
        padding-top: 2rem;
        padding-bottom: 2rem;
        background-color: #ffffff;
        border-radius: 12px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
    }

    .content-wrapper {
        max-width: 90%;
        /* previously 1200px */
        width: 100%;
        margin: 0 auto;
        background-color: #ffffff;
        padding: 2rem;
        border-radius: 12px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
        height: 100%;
    }

    .container-fluid {
        padding-left: 0;
        padding-right: 0;
    }

    .card {
        border-radius: 12px;
        height: 100%;
    }

    select,
    input[type="text"],
    input[type="email"],
    input[type="date"],
    textarea,
    input[type="file"] {
        border-radius: 8px;
    }

    ul {
        padding-left: 1.2rem;
    }

    .form-section-title {
        font-size: 1.2rem;
        font-weight: 600;
    }

    .row-stretch {
        height: 100%;
        display: flex;
    }

    .col-lg-8,
    .col-lg-4 {
        display: flex;
        flex-direction: column;
    }
</style>
<?php include './frontend/url.php'; ?>

<?php include 'vendor.php'; ?>
<?php include './layouts/header.php'; ?>

<body>
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

   <div class="main-content">
    <div class="container-fluid content-wrapper">
        <div class="row g-4 row-stretch">

            <!-- Left Panel -->
            <div class="col-lg-8">
                <div class="card shadow-sm p-4 border-0 bg-white flex-fill">
                    <form id="appointment_form_college" class="w-100 h-100"  enctype="multipart/form-data">

                        <h5 class="form-section-title mb-3">1. Personal Information</h5>
                        <div class="row g-3 mb-4">
                            <div class="col-md-4">
                                <label for="last_name_appointment" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="std_last_name" name="std_last_name" required>
                            </div>
                            <div class="col-md-4">
                                <label for="first_name_appointment" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="std_first_name" name="std_first_name" required>
                            </div>
                            <div class="col-md-4">
                                <label for="middle_name_appointment" class="form-label">Middle Name</label>
                                <input type="text" class="form-control" id="std_middle_name" name="std_middle_name" required>
                            </div>
                            <div class="col-md-4">
                                <label for="contact" class="form-label">Contact</label>
                                <input type="text" class="form-control" id="std_contact" name="std_contact" required>
                            </div>
                            <div class="col-md-4">
                                <label for="lrn" class="form-label">LRN</label>
                                <input type="text" class="form-control" id="std_lrn" name="std_lrn" required>
                            </div>
                            <div class="col-md-4">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="std_email" name="std_email" required>
                            </div>
                            <div class="col-md-3">
                                <label for="name_school_appointment" class="form-label">Name of School</label>
                                <input type="text" class="form-control" id="name_school" name="name_school" required>
                            </div>
                            <div class="col-md-3">
                                <label for="year_level" class="form-label">Year Level <span class="text-danger">*</span></label>
                                <select class="form-select" id="year_level" name="year_level" required>
                                    <option value="" disabled selected>Select Year</option>
                                    <option value="FIRST YEAR">First Year</option>
                                    <option value="SECOND YEAR">Second Year</option>
                                    <option value="THIRD YEAR">Third Year</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="school_id_appointment" class="form-label">School ID</label>
                                <input type="file" class="form-control" id="std_school_id" name="std_school_id" required>
                            </div>
                            <div class="col-md-3">
                                <label for="coi_appointment" class="form-label">Certificate of Indigency</label>
                                <input type="file" class="form-control" id="std_coi" name="std_coi" required>
                            </div>
                        </div>

                        <h5 class="form-section-title mb-3">2. Application Form Type</h5>
                        <div class="mb-4">
                        <input type="text" class="form-control" id="add_application_type" name="add_application_type" value="EDUCATIONAL SUPPORT" readonly>
                        </div>

                        <h5 class="form-section-title mb-3">3. Guardian Information</h5>
                        <div class="row g-3 mb-4">
                            <div class="col-md-3">
                                <label for="guardian_full_name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="guardian_full_name" name="guardian_full_name" required>
                            </div>
                            <div class="col-md-3">
                                <label for="guardian_contact_appointment" class="form-label">Contact</label>
                                <input type="text" class="form-control" id="guardian_contact" name="guardian_contact" required>
                            </div>
                            <div class="col-md-3">
                                <label for="guardian_id_appointment" class="form-label">Valid ID</label>
                                <input type="file" class="form-control" id="guardian_id" name="guardian_id" required>
                            </div>
                        </div>

                        <h5 class="form-section-title mb-3">4. Await Confirmation</h5>
                        <p class="step-info">SSWMS will review your application and send your appointment via email.</p>
                        <h6 class="mt-3">Important Reminders</h6>
                        <ul class="text-muted">
                            <li><strong>Document Quality:</strong> Make sure uploads are clear.</li>
                            <li><strong>Information Accuracy:</strong> Check all data before submitting.</li>
                            <li><strong>Stay Updated:</strong> Monitor your email for updates.</li>
                        </ul>

                        <div class="d-grid mt-4">
                            <button type="submit" class="btn btn-primary">Submit Appointment</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Right Panel -->
            <div class="col-lg-4">
                <div class="card shadow-sm p-4 border-0 bg-white flex-fill">
                    <div class="text-center mb-3">
                        <div class="bg-light rounded-circle d-inline-flex justify-content-center align-items-center p-3" style="width: 60px; height: 60px;">
                            <i class="bi bi-mortarboard fs-3 text-success"></i>
                        </div>
                        <h5 class="fw-bold mt-3 mb-1">College</h5>
                        <p class="text-muted small mb-1">College Requirements</p>
                        <small class="text-muted">Submit original documents to barangay.</small>
                    </div>
                    <hr>
                    <h6 class="fw-semibold">College Requirements</h6>
                    <div class="alert alert-danger fw-bold" role="alert">
                        NOTE! Please Submit These Requirements to Our Barangay.
                    </div>

                    <ul class="list-unstyled ps-3">
                        <li>Form 138 (Photo Copy)</li>
                        <li>Form 137 (Photo Copy)</li>
                        <li>Certificate of Good Moral</li>
                        <li>PSA Birth Certificate (Soft Copy)</li>
                        <li>Certificate of Enrollment</li>
                        <li>2x Passport Size Picture (White BG)</li>
                        <li>Barangay Clearance</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>

</body>

<?php include './layouts/footer.php'; ?>
<script src="./assets/js/jquery/jquery.min.js"></script>


<script src="./assets/js/sweetalert2@11.js"></script>
<script>
    $(document).ready(function() {
        $('#appointment_form_college').on('submit', function(event) {
            event.preventDefault(); // Prevent default form submission

            Swal.fire({
                title: 'Submit Application',
                html: 'Are you sure you want to <strong>SUBMIT</strong> this application?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, submit it!',
                cancelButtonText: 'No, cancel'
            }).then((result) => {
                if (result.isConfirmed) {

                    const formData = new FormData();

                      // Append text fields
                    formData.append('beneficiary_lastname', $('#std_last_name').val());
                    formData.append('beneficiary_firstname', $('#std_first_name').val());
                    formData.append('beneficiary_middlename', $('#std_middle_name').val());
                    formData.append('contact_num', $('#std_contact').val());
                    formData.append('lrn', $('#std_lrn').val());
                    formData.append('gmail', $('#std_email').val());
                    formData.append('name_school', $('#name_school').val());
                    formData.append('year_level', $('#year_level').val());
                    // formData.append('std_school_id', $('#std_school_id').val());
                    formData.append('application_type', $('#add_application_type').val());
                    formData.append('guardian_full_name', $('#guardian_full_name').val());
                    formData.append('guardian_contact', $('#guardian_contact').val());
                    formData.append('action', 'insert');

                    // Append files
                    formData.append('std_coi', $('#std_coi')[0].files[0]);
                    formData.append('guardian_id', $('#guardian_id')[0].files[0]);
                    formData.append('std_school_id', $('#std_school_id')[0].files[0]);
                   
                  


                    // AJAX request to save appointment
                    $.ajax({
                        url: `<?php echo $url; ?>/appointment/add_appointment.php`,
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            const status = response.status;
                            const message = response.message;

                                      if (status === 1) {
                                    $("#span_success").removeClass('d-none').text(message);
                                    $("#span_error").addClass('d-none');

                                    // ✅ SweetAlert success popup
                                    Swal.fire({
                                        title: 'Success!',
                                        text: message,
                                        icon: 'success',
                                        confirmButtonColor: '#3085d6'
                                    });

                                    // Optional: reset the form
                                    $('#appointment_form_college')[0].reset();
                                }
                                else {
                                $("#span_error").removeClass('d-none').text(message);
                                $("#span_success").addClass('d-none');
                            }
                        },
                        error: function(xhr, status, error) {
                            $("#span_error").removeClass('d-none').text("An error occurred: " + error);
                            $("#span_success").addClass('d-none');
                        }
                    });
                }
            });
        });

        // Toggle Scholarship Application Form Visibility
        $('#appointment_form_ssscollege').on('change', function() {
            $('#div_scholarship').toggleClass('d-none', $(this).val() !== 'Educational Support');
        });
    });
</script>

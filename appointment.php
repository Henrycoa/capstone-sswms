<!-- <!DOCTYPE html>
<html lang="en">
<!--  -->
<!-- <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>John 3:16</title>
    <!-- CSS Files -->
    <!-- <!-- <?php include 'vendor.php'; ?> -->
</head> --> --> -->

<!-- <body>
    <section id="appointment_scholarships" class="appointment_scholarship d-flex justify-content-center align-items-center min-vh-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card shadow-lg p-4">
                        <h3 class="text-center mb-4">Appointment Scheduling</h3>
                        <form id="appointment_form">
                            <!-- Personal Information -->
                            <h5>1. Personal Information</h5>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="full_name" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="full_name" name="full_name" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <!-- <div class="col-md-4">
                                    <label for="contact" class="form-label">Contact Details</label>
                                    <input type="text" class="form-control" id="contact" name="contact" required>
                                </div> -->
                            </div>

                            <!-- Service Selection -->
                            <div class="mb-3">
                                <label for="add_application_type" class="form-label">Application Form Type</label>
                                <select class="form-select" id="add_application_type" name="application_type" required>
                                    <option value="" disabled selected>Select an application type</option>
                                    <option value="Educational Support">Educational Support</option>
                                </select>
                            </div>

                            <!-- Application Form -->
                            <div class="mb-3 " id="div_scholarship">
                                <h5>2. Fill Out the Application Form</h5>
                                <div class="mb-3">
                                    <label for="education" class="form-label">Educational Background</label>
                                    <input type="text" class="form-control" id="education" name="education" required>
                                </div>
                                <div class="mb-3">
                                    <label for="family_info" class="form-label">Family Information</label>
                                    <textarea class="form-control" id="family_info" name="family_info" rows="3" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="reason" class="form-label">Reason for Application</label>
                                    <textarea class="form-control" id="reason" name="reason" rows="3" required></textarea>
                                </div>


                                <!-- <div class="mb-3">
                                    <label for="valid_id" class="form-label">Valid ID (Applicant/Guardian)</label>
                                    <input type="file" class="form-control" id="valid_id" name="valid_id" required>
                                </div> -->

                                <div class="mb-3">
                                    <label for="school_id" class="form-label">School ID</label>
                                    <input type="file" class="form-control" id="school_id" name="school_id" required>
                                </div>

                                <!-- Appointment Date & Time -->
                                <div class="form-step">
                                    <h5>4. Await Confirmation</h5>
                                    <p>SSWMS will review your application and send your appointment via email</p>
                                    <h6>Important Reminders</h6>
                                    <ul>
                                        <li><strong>Document Quality:</strong> Ensure all uploaded documents are clear and legible.</li>
                                        <li><strong>Information Accuracy:</strong> Double-check all entered information to avoid delays.</li>
                                        <li><strong>Stay Updated:</strong>Check your Email for updates.</li>
                                    </ul>
                                </div>
                                <!-- Submit Button -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Submit Appointment</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    </section>

<!-- </body> --> -->

<script src="./assets/js/jquery/jquery.min.js"></script>
<!-- 
<script>
    $(document).ready(function() {


        $('#add_application_type').change(function() {
            var selectedApplication = $(this).val().toUpperCase();

            // Hide both sections initially
            $("#div_scholarship, #div_financial").addClass("d-none");

            // Show relevant section based on the selected option
            if (selectedApplication === "EDUCATIONAL SUPPORT") {
                $("#div_scholarship").removeClass("d-none");
            } else if (selectedApplication === "FINANCIAL ASSISTANCE") {
                $("#div_financial").removeClass("d-none");
            }
        });
    });
</script> -->
<script src="./assets/js/sweetalert2@11.js"></script>
<!-- <script>
    $(document).ready(function() {
        $('#appointment_scholarships').on('submit', function(event) {
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

                    // Collect form data only if confirmed
                    const formData = {
                        full_name: $('#full_name').val(),
                        gmail: $('#email').val(),
                        // contact_num: $('#contact').val(),
                        application_type: $('#add_application_type').val(),
                        education: $('#education').val(),
                        family_info: $('#family_info').val(),
                        reason: $('#reason').val(),
                        valid_id: $('#valid_id').val(),
                        school_id: $('#school_id').val(),
                        enrollment_cert: $('#enrollment_cert').val(),
                        statement_account: $('#statement_account').val(),
                        proof_income: $('#proof_income').val(),
                        proof_crisis: $('#proof_crisis').val(),
                        authorization_letter: $('#authorization_letter').val(),
                        action: "insert"
                    };

                    // AJAX request to save appointment
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
                                $("#span_success").removeClass('d-none').text(message);
                                $("#span_error").addClass('d-none');
                                $('#appointment_scholarships')
                            } else {
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
        $('#add_application_type').on('change', function() {
            $('#div_scholarship').toggleClass('d-none', $(this).val() !== 'Educational Support');
        });
    });
</script> -->
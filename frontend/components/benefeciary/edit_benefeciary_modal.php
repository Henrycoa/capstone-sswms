<div class="modal fade" id="edit_modal_Benefeciary" tabindex="-1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Request Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <div class="card p-4">
                        <h2 class="mb-4 text-center">Social Service and Welfare Management Form</h2>
                        <form id="edit_appointment_form">
                            <!-- Application Information -->
                            <h4>Application Information</h4>
                            <div id="edit_application_for">
                                <label class="form-label">Application For</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="application_for" id="add_application_for_personal" value="SELF" required>
                                    <label class="form-check-label" for="application_for_personal">Self</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="application_for" id="edit_application_for_other" value="OTHER" required>
                                    <label class="form-check-label" for="edit_application_for_other">Other</label>
                                </div>

                            </div>

                             
                             <div class="mb-2">
                                    <strong>Application Form Type:</strong>
                                    <span id="edit_application_type">SAMPLE</span>
                                </div>
                                    </div>

                                    <div class="mb-3 d-none" id="edit_div_scholarship">
                                        <h4>Requirements</h4>
                                        <div class="row">
                                          
                                            <div class="col-md-4 mb-3">
                                                <label for="edit_form_138" class="form-label">Form 138</label>
                                                <input type="file" class="form-control" id="edit_form_138" name="edit_form_138">
                                            </div>
                                             <div class="col-md-4 mb-3">
                                                <label for="edit_coe" class="form-label">Certificate of Enrollment</label>
                                                <input type="file" class="form-control" id="edit_coe" name="edit_coe">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="edit_form_137" class="form-label">Form 137</label>
                                                <input type="file" class="form-control" id="edit_form_137" name="edit_form_137">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="edit_clearance" class="form-label">Barangay Clearance</label>
                                                <input type="file" class="form-control" id="edit_clearance" name="edit_clearance">
                                            </div>
                                           <div class="col-md-4 mb-3"> 
                                                <label for="edit_goood_morals" class="form-label">Certificate of Good Moral</label>
                                                <input type="file" class="form-control" id="edit_goood_morals" name="edit_goood_morals">
                                            </div> 
                                        </div>
                                    </div>

                            <div class="mb-3 d-none" id="edit_div_financial">
                                <div class="col mb-3">
                                    <label for="edit_name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="edit_authorization_letter" name="edit_authorization_letter">
                                </div>
                                <div class="col mb-3">
                                    <label for="edit_div_financial" class="form-label">Type</label>
                                    <input type="text" class="form-control" id="edit_div_financial" name="edit_div_financial">
                                </div>

                                <div class="col mb-3">
                                    <label for="edit_scheme_name" class="form-label">Grade</label>
                                    <input type="text" class="form-control" id="edit_scheme_name" name="edit_scheme_name">
                                </div>
                                <div class="col mb-3">
                                    <label for="edit_scheme_type" class="form-label"> </label>
                                    <input type="text" class="form-control" id="edit_scheme_type" name="edit_scheme_type">
                                </div>

                            </div>

                           <div id="edit_relationship">
                                <h4>Beneficiary Information</h4>
                                <div class="mb-3">
                                <label for="edit_relationship" class="form-label">Relationship</label>
                                <select class="form-select" id="edit_relationship" name="edit_relationship">
                                    <option value="" disabled selected>Select Relationship</option>
                                    <option value="Self">Self</option>
                                    <option value="Parent">Parent</option>
                                    <option value="Sibling">Sibling</option>
                                    <option value="Spouse">Spouse</option>
                                    <option value="Child">Child</option>
                                    <option value="Relative">Relative</option>
                                    <option value="Friend">Friend</option>
                                    <option value="Guardian">Guardian</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>

                            <div>

                                <div class="mb-3 col-12">
                                    <label for="edit_beneficiary_address" class="form-label">Adress</label>
                                    <input type="text" class="form-control" id="edit_beneficiary_address" name="edit_beneficiary_address">
                                </div>

                            </div>


                            <div id="edit_other_add" class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="edit_beneficiary_city_mun" class="form-label">City/Municipality</label>
                                    <select class="form-select" id="edit_beneficiary_city_mun" name="beneficiary_city_mun" required>
                                        <option value="" disabled selected>Select a city/municipality</option>

                                        <option value="Quezon City" selected>Quezon City</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="edit_beneficiary_district" class="form-label">District</label>
                                    <select class="form-select" id="edit_beneficiary_district" name="beneficiary_district" required>
                                        <option value="" disabled selected>Select a district</option>
                                        <option value="District 1">District 1</option>
                                        <option value="District 2">District 2</option>
                                        <option value="District 3">District 3</option>
                                        <option value="District 4">District 4</option>
                                        <option value="District 5">District 5</option>
                                        <option value="District 6">District 6</option>
                                        <option value="District 7">District 7</option>
                                        <option value="District 8">District 8</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="edit_barangay_clearance" class="form-label">Barangay</label>
                                    <select class="form-select" id="edit_barangay_clearance" name="edit_barangay_clearance" required>
                                        <option value="" disabled selected>Select a barangay</option>
                                        <!-- Barangays for District 1 -->
                                        <optgroup label="District 1">
                                            <option value="Bagong Pag-asa">Bagong Pag-asa</option>
                                            <option value="Batasan Hills">Batasan Hills</option>
                                            <option value="Commonwealth">Commonwealth</option>
                                            <option value="Don Manuel Quezon">Don Manuel Quezon</option>
                                            <option value="East Kamias">East Kamias</option>
                                            <option value="Holy Spirit">Holy Spirit</option>
                                            <option value="Krus na Ligas">Krus na Ligas</option>
                                            <option value="Nagkaisang Nayon">Nagkaisang Nayon</option>
                                            <option value="San Isidro">San Isidro</option>
                                            <option value="San Roque">San Roque</option>
                                            <option value="Santo Niño">Santo Niño</option>
                                        </optgroup>

                                        <!-- Barangays for District 2 -->
                                        <optgroup label="District 2">
                                            <option value="Bagong Pag-asa">Bagong Pag-asa</option>
                                            <option value="Bahay Toro">Bahay Toro</option>
                                            <option value="Banlat">Banlat</option>
                                            <option value="Culiat">Culiat</option>
                                            <option value="Damar">Damar</option>
                                            <option value="New Era">New Era</option>
                                            <option value="Novaliches Proper">Novaliches Proper</option>
                                            <option value="Pasong Tamo">Pasong Tamo</option>
                                            <option value="San Bartolome">San Bartolome</option>
                                            <option value="Santa Lucia">Santa Lucia</option>
                                        </optgroup>

                                        <!-- Barangays for District 3 -->
                                        <optgroup label="District 3">
                                            <option value="Apolonio Samson">Apolonio Samson</option>
                                            <option value="Barangay Sangandaan">Barangay Sangandaan</option>
                                            <option value="Bagong Pag-asa">Bagong Pag-asa</option>
                                            <option value="Culiat">Culiat</option>
                                            <option value="La Loma">La Loma</option>
                                            <option value="San Isidro">San Isidro</option>
                                            <option value="Santa Cruz">Santa Cruz</option>
                                        </optgroup>

                                        <!-- Barangays for District 4 -->
                                        <optgroup label="District 4">
                                            <option value="Bagong Pag-asa">Bagong Pag-asa</option>
                                            <option value="Galas">Galas</option>
                                            <option value="G. Araneta">G. Araneta</option>
                                            <option value="Paligsahan">Paligsahan</option>
                                            <option value="San Antonio">San Antonio</option>
                                            <option value="San Roque">San Roque</option>
                                            <option value="Santo Domingo">Santo Domingo</option>
                                        </optgroup>

                                        <!-- Barangays for District 5 -->
                                        <optgroup label="District 5">
                                            <option value="Bahay Toro">Bahay Toro</option>
                                            <option value="Brgy. Damar">Brgy. Damar</option>
                                            <option value="Brgy. Kapitolyo">Brgy. Kapitolyo</option>
                                            <option value="Brgy. Kapitolyo">Brgy. kaligayahan</option>
                                            <option value="Brgy. Loyola Heights">Brgy. Loyola Heights</option>
                                            <option value="Brgy. Mariblo">Brgy. Mariblo</option>
                                            <option value="Brgy. San Jose">Brgy. San Jose</option>
                                        </optgroup>

                                        <!-- Barangays for District 6 -->
                                        <optgroup label="District 6">
                                            <option value="Batasan Hills">Batasan Hills</option>
                                            <option value="Commonwealth">Commonwealth</option>
                                            <option value="Holy Spirit">Holy Spirit</option>
                                            <option value="Krus na Ligas">Krus na Ligas</option>
                                            <option value="New Era">New Era</option>
                                            <option value="Pasong Tamo">Pasong Tamo</option>
                                        </optgroup>

                                        <!-- Barangays for District 7 -->
                                        <optgroup label="District 7">
                                            <option value="Barangay East Kamias">Barangay East Kamias</option>
                                            <option value="Barangay Sta. Mesa Heights">Barangay Sta. Mesa Heights</option>
                                            <option value="Barangay Pinyahan">Barangay Pinyahan</option>
                                            <option value="Barangay New Era">Barangay New Era</option>
                                        </optgroup>

                                        <optgroup label="District 8">
                                            <option value="Barangay E. Rodriguez">Barangay E. Rodriguez</option>
                                            <option value="Barangay Immaculate Concepcion">Barangay Immaculate Concepcion</option>
                                            <option value="Barangay Kristong Hari">Barangay Kristong Hari</option>
                                            <option value="Barangay San Isidro">Barangay San Isidro</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">

                                <div class="col-md-4">
                                    <label for="edit_beneficiary_civil_status" class="form-label">Civil Status</label>
                                    <select class="form-select" id="edit_beneficiary_civil_status" name="edit_beneficiary_civil_status">
                                        <option value="" disabled selected>Civil Status</option>
                                        <option value="SINGLE">Single</option>
                                        <option value="MARRIED">Married</option>
                                        <option value="SEPARATED">Separated</option>
                                        <option value="WIDOWED">Widowed</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label for="edit_beneficiary_gender" class="form-label">Gender</label>
                                    <select class="form-select" id="edit_beneficiary_gender" name="edit_beneficiary_gender">
                                        <option value="" disabled selected>Select Gender</option>
                                        <option value="MALE">Male</option>
                                        <option value="FEMALE">Female</option>
                                        <option value="OTHER">Other</option>
                                    </select>
                                </div>


                                <div class="col-md-4">
                                    <label for="edit_contact_number" class="form-label">Contact Number</label>
                                    <input type="tel" class="form-control" id="edit_contact_number" name="edit_contact_number" pattern="\d+" title="Please enter numbers only" required>
                                </div>

                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="edit_beneficiary_gmail" class="form-label">Gmail</label>
                                    <input type="text" class="form-control" id="edit_beneficiary_gmail" name="edit_beneficiary_gmail" required>
                                </div>
                            </div>

                            <!-- Client Information -->
                            <div id="edit_client_info_section" class="d-none">
                                <h4>Client Information</h4>
                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="edit_client_lastname" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="edit_client_lastname" name="edit_client_lastname">
                                    </div>
                                    <div class="col mb-3">
                                        <label for="edit_client_firstname" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="edit_client_firstname" name="edit_client_firstname">
                                    </div>
                                    <div class="col mb-3">
                                        <label for="edit_client_middlename" class="form-label">Middle Name</label>
                                        <input type="text" class="form-control" id="edit_client_middlename" name="edit_client_middlename">
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <label for="edit_client_suffix" class="form-label">Suffix</label>
                                        <input type="text" class="form-control" id="edit_client_suffix" name="edit_client_suffix">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="edit_client_gender" class="form-label">Gender</label>
                                    <select class="form-select" id="edit_client_gender" name="edit_client_gender">
                                        <option value="" disabled selected>Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="edit_client_editress" class="form-label">address</label>
                                    <input type="text" class="form-control" id="edit_client_editress" name="edit_client_editress">
                                </div>
                            </div>
                           </div>
                     
                         <button type="submit" class="btn btn-primary w-100">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="./assets/js/jquery/jquery.min.js"></script>
<script>
    document.querySelectorAll('input[name="application_for"]').forEach(function(radio) {
        radio.addEventListener('change', function() {
            var clientInfoSection = document.getElementById('edit_client_info_section');
            if (this.value === 'OTHER') {
                clientInfoSection.classList.remove('d-none');
            } else {
                clientInfoSection.classList.add('d-none');
            }
        });
    });
</script>

<script>
 $(document).ready(function() {
    $('#edit_appointment_form').on('submit', function(event) {
        event.preventDefault(); 
        console.log("Form submission triggered");

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
                let applicationFor = document.querySelector('input[name="add_application_for"]:checked').value;
                var selectedApplication = $("#sel_add_application_type").val();

                const formData = { application_for : applicationFor,
            application_type: $('#sel_add_application_type').val(),
            relationship    : $('#add_relationship').val(),
            full_name    : $('#add_full_name').val(),

            // Beneficiary Information
            beneficiary_lastname    : $('#add_beneficiary_lastname').val(),
            beneficiary_firstname   : $('#add_beneficiary_firstname').val(),
            beneficiary_middlename  : $('#add_beneficiary_middlename').val(),
            beneficiary_suffix      : $('#add_beneficiary_suffix').val(),
            beneficiary_gender      : $('#add_beneficiary_gender').val(),
            beneficiary_address     : $('#add_beneficiary_address').val(),
            beneficiary_province    : $('#add_beneficiary_province').val(),
            beneficiary_district    : $('#add_beneficiary_district').val(),
            beneficiary_city_mun    : $('#add_beneficiary_city_mun').val(),
            beneficiary_barangay    : $('#add_beneficiary_barangay').val(),
            beneficiary_civil_status: $('#add_beneficiary_civil_status').val(),

            // Client Information
            client_lastname  : $('#add_client_lastname').val(),
            client_firstname : $('#add_client_firstname').val(),
            client_middlename: $('#add_client_middlename').val(),
            client_suffix    : $('#add_client_suffix').val(),
            client_gender    : $('#add_client_gender').val(),
            client_address   : $('#add_client_address').val(),

            // Application Details
            application_status     : $('#add_application_status').val(),
            application_description: $('#add_application_description').val(),
            date_created           : $('#add_date_created').val(),
            date_updated           : $('#add_date_updated').val(),
            date_released          : $('#add_date_released').val(),
            gmail                  : $('#add_beneficiary_email').val(),
            contact_num            : $('#add_contact_number').val(),

            // SCHOLARSHIP DATA
            ...(selectedApplication.toUpperCase() === "EDUCATIONAL SUPPORT" && {
                school_id           : $('#add_scholar_school_id').val(),
                enrollment_cert     : $('#add_scholar_enrollment_cert').val(),
                statement_account   : $('#add_scholar_statement_account').val(),
                proof_income        : $('#add_scholar_proof_income').val(),
                proof_crisis        : $('#add_scholar_proof_crisis').val(),
                authorization_letter: $('#add_scholar_authorization_letter').val(),
            }),

            ...(selectedApplication.toUpperCase() === "4PS" && {
                valid_id           : $('#add_4ps_valid_id').val(),
                child_birth_cert   : $('#add_4ps_child_birth_cert').val(),
                marriage_cert      : $('#add_4ps_marriage_cert').val(),
                residency_cert     : $('#add_4ps_residency_cert').val(),
                indigency_cert     : $('#add_4ps_indigency_cert').val(),
                income_proof       : $('#add_4ps_income_proof').val(),
                school_id          : $('#add_4ps_school_id').val(),
                attendance_cert    : $('#add_4ps_attendance_cert').val(),
                prenatal_records   : $('#add_4ps_prenatal_records').val(),
                immunization_record: $('#add_4ps_immunization_record').val(),
                residency_cert     : $('#ad_4ps_residency_cert').val(),
                child_school_cert  : $('#add_4ps_child_school_cert').val(),
                child_health_record: $('#add_4ps_child_health_record').val(),
                pregnancy_med_cert : $('#add_4ps_pregnancy_med_cert').val(),
            }),

            ...(selectedApplication.toUpperCase() === "TUPAD" && {
                valid_id                : $('#add_tupad_valid_id').val(),
                barangay_clearance      : $('#add_tupad_barangay_clearance').val(),
                certificate_displacement: $('#add_tupad_certificate_displacement').val(),
                proof_income            : $('#add_tupad_proof_income').val(),
                work_agreement          : $('#add_tupad_work_agreement').val(),
                authorization_letter    : $('#add_tupad_authorization_letter').val()
            }),

            ...(selectedApplication.toUpperCase() === "DAY CARE CENTER" && {
                add_child_birth_cert  : $('#add_day_child_birth_cert').val(),
                add_barangay_clearance: $('#add_day_barangay_clearance').val(),
                add_vaccination_record: $('#add_day_vaccination_record').val(),
                add_parent_valid_id   : $('#add_day_parent_valid_id').val(),
                add_proof_income      : $('#add_day_proof_income').val(),
                add_school_id         : $('#add_day_school_id').val(),
                add_health_record     : $('#add_day_health_record').val()
            }),

            action: "update",
        };

                // AJAX request
                $.ajax({
                    url: `<?php echo $url; ?>/appointment/add_appointment.php`,
                    type: 'POST',
                    contentType: 'application/json',
                    data: JSON.stringify(formData),
                    dataType: 'json',
                    success: function(response) {
                        if (response.status === 1) {
                            Swal.fire({
                                title: 'Success!',
                                text: response.message,
                                icon: 'success',
                                confirmButtonColor: '#3085d6',
                            });
                            $('#add_appointment_form')[0].reset(); // Reset form after success
                        } else {
                            Swal.fire({
                                title: 'Error!',
                                text: response.message,
                                icon: 'error',
                                confirmButtonColor: '#d33',
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        Swal.fire({
                            title: 'Error!',
                            text: "An error occurred: " + error,
                            icon: 'error',
                            confirmButtonColor: '#d33',
                        });
                    }
                });
            }
        });
    });
});
</script>

 <!-- <script>
    $(document).ready(function() {
        $('#edit_appointment_form').on('submit', function(event) {
            event.preventDefault(); // Prevent default form submission



            const formData = {
                application_id: $('#edit_application_id').val(),
                application_for: $('#edit_application_for').val(),
                application_type: $('#edit_application_type_').val(),
                relationship: $('#edit_relationship').val(),
                beneficiary_address: $('#edit_beneficiary_address').val(),
                beneficiary_city_mun: $('#edit_beneficiary_city_mun').val(),
                barangay_clearance: $('#edit_barangay_clearance').val(),
                beneficiary_gender: $('#edit_beneficiary_gender').val(),
                contact_num: $('#edit_contact_number').val(),
                gmail: $('#edit_beneficiary_gmail').val(),
                
          
                action: "update",
            };


     
            // AJAX request
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
                        alert(message);
                    } else {
                        $("#span_error").removeClass('d-none').text(message);
                    }
                },
                error: function(xhr, status, error) {
                    alert("An error occurred: " + error);
                }
            });
        });
    });
</script> -->
<head>
    <style>
        .bg-primary {
            background-color: #1e3a8a !important;
            /* Navy Blue */
        }

        /* Customizing the modal for responsiveness */
        .modal-dialog {
            max-width: 80%;
        }

        .table td, .table th {
            vertical-align: middle;
        }

        .form-label {
            font-weight: bold;
        }
    </style>
</head>

<div class="modal fade" id="beneficiary_view_modal_appointments" tabindex="-1">
    <div class="modal-dialog modal-xl">
    <div class="mb-2">
               <strong>Application id:</strong> <span id="Application_id_view">Application id</span>
            </div>
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Request Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <div class="card p-4 shadow-sm">
                        <h2 class="mb-4 text-center" style="color: white;">Social Service and Welfare Management Form</h2>

                        <form id="beneficiary_view_appointment_form">
                            <!-- Application Information -->
                            <div class="p-3 mb-3 bg-light rounded">
                                <h4 class="text-secondary">Application Information</h4>
                                <div class="mb-2">
                                    <strong>Application for:</strong> <span id="beneficiary_view_application_for"></span>
                                </div>
                                <div class="mb-2">
                                    <strong>Application Form Type:</strong> <span id="beneficiary_view_application_type">SAMPLE</span>
                                </div>
                            </div>

                            <div class="p-3 mb-3 bg-light rounded">
                                <h4 class="text-secondary">EDUCATIONAL SUPPORT</h4>
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>School ID</th>
                                            <td><span id="beneficiary_Schoolid"></span></td>
                                        </tr>

                                        <tr>
                                            <th>Form 138(report card)</th>
                                            <td><span id="beneficiary_form138"></span></td>
                                        </tr>
                                        <tr>
                                            <th>PSA Birth Certificate</th>
                                            <td><span id="beneficiary_psa"></span></td>
                                        </tr>
                                        <tr>
                                            <th>Form 137</th>
                                            <td><span id="beneficiary_form137"></span></td>
                                        </tr>
                                        <tr>
                                            <th>Barangay Clearance</th>
                                            <td><span id="beneficiary_barangay_clearance"></span></td>
                                        </tr>
                                        <tr>
                                            <th>Certificate of Good Moral</th>
                                            <td><span id="beneficiary_good_moral"></span></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>


                            <!-- Educational Support Section -->
                            <!-- <div class="p-3 mb-3 bg-light rounded">
                                <h4 class="text-secondary">TUPAD Program</h4>
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>Barangay Clearance</th>
                                            <td>
                                            Barangay Clearance<span id="beneficiary_view_Barangay_Clearance"></span></td>
                                        </tr>

                                        <tr>
                                            <th>Suffix</th>
                                            <td><span id="beneficiary_view_Certificate">Certificate of Displacement or Indigency</span></td>
                                        </tr>
                                        <tr>
                                            <th>Address</th>
                                            <td><span id="beneficiary_view_Proof">Proof of Income</span></td>
                                        </tr>
                                        <tr>
                                            <th>City/Municipality</th>
                                            <td><span id="beneficiary_view_Signed_Work">Signed Work Agreement</span></td>
                                        </tr>
                                        <tr>
                                            <th>District</th>
                                            <td><span id="Authorization_Letter">Authorization Letter</span></td>
                                        </tr>
                                      
                                   
                                    </tbody>
                                </table>
                            </div> -->

                            <!-- TUPAD Program Requirements -->
                       
                            <!-- Beneficiary Information -->
                            <div class="p-3 mb-3 bg-light rounded">
                                <h4 class="text-secondary">Beneficiary Information</h4>
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>Full Name</th>
                                            <td><span id="beneficiary_view_FullName"></span></td>
                                        </tr>

                                     
                                        <tr>
                                            <th>Address</th>
                                            <td><span id="beneficiary_view_address"></span></td>
                                        </tr>
                                        <tr>
                                     
                                            <th>Gender</th>
                                            <td><span id="beneficiary_view_gender"></span></td>
                                        </tr>
                                        <tr>
                                            <th>Contact Number</th>
                                            <td><span id="beneficiary_view_number"></span></td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td><span id="beneficiary_view_email"></span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Client Information -->
                            <!-- <div id="beneficiary_client_information" class="p-3 bg-light rounded d-none">
                            <h4 class="text-secondary">Client Information</h4>
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>Last Name</th>
                                            <td><span id="beneficiary_view_client_lastname">lname</span></td>
                                        </tr>
                                        <tr>
                                            <th>First Name</th>
                                            <td><span id="beneficiary_view_client_lastname">fname</span></td>
                                        </tr>
                                        <tr>
                                            <th>Middle Name</th>
                                            <td><span id="beneficiary_view_client_middlename">mname</span></td>
                                        </tr>
                                        <tr>
                                            <th>Suffix</th>
                                            <td><span id="beneficiary_view_client_suffix">suffix</span></td>
                                        </tr>
                                        <tr>
                                            <th>Relationship</th>
                                            <td><span id="beneficiary_view_relationship">sample</span></td>
                                        </tr>
                                        <tr>
                                            <th>Gender</th>
                                            <td><span id="beneficiary_view_client_gender">gender</span></td>
                                        </tr>
                                        <tr>
                                            <th>Address</th>
                                            <td><span id="beneficiary_view_client_address">Address</span></td>
                                        </tr>
                                        
                                    </tbody>
                                    
                                </table>
                                

                            </div> -->
                            <div class="row">
                                <div class="mb-3 col-2">
                                    <label for="txt_approved_amount" class="form-label">amount</label>
                                    <input type="text" class="form-control" id="txt_approved_amount" name="txt_approved_amount" placeholder="Enter amount">
                                </div>
                            </div>

                            <button type="button" id="btn_view_approve" class="btn btn-primary d-none" onclick="funcApprove('approve');">Approve</button>
                            <button type="button" id="btn_view_release" class="btn btn-primary d-none" onclick="funcApprove('release');">Release</button>


                            <input type="hidden" id="txt_approve_application_id" />
                        </form>
                   
                    </div>   
                </div>
            </div>
        </div>
    </div>
</div>

<script src="./assets/js/jquery/jquery.min.js"></script>
<script>
  function funcApprove(status){

    const application_id = $("#txt_approve_application_id").val();
    $('#tr_beneficiary_'+application_id).remove();


    var txt_approved_amount = $("#txt_approved_amount").val();




    Swal.fire({
                title: 'Application',
                html: `Are you sure you want to <strong>${status.toUpperCase()}</strong> this application?`,
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, submit it!',
                cancelButtonText: 'No, cancel'
            }).then((result) => {
                if (result.isConfirmed) {


                    const formData = new FormData();
                    formData.append('application_id', application_id);
                    formData.append('status', status);
                    formData.append('action', 'update_status');
                    formData.append('amount', txt_approved_amount);
                    

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
                        },
                        error: function(xhr, status, error) {
                        
                        }
                    });
                }
            });
       


   }


    $(document).ready(function () {
        $('#beneficiary_view_modal_appointments').on('shown.bs.modal', function () {
            // Fetch the application type from the span when modal is shown
            var selectedApplication = $('#beneficiary_view_application_for').text().trim();

            if (selectedApplication === "EDUCATIONAL SUPPORT") {
                $('#beneficiary_client_information').addClass('d-none');
            } else {
                $('#beneficiary_client_information').removeClass('d-none');
            }
        });
    });
</script>
<head>
    <style>
        .bg-primary {
            background-color: #1e3a8a !important;
            /* Navy Blue */
        }
    </style>
</head>

<div class="modal fade" id="view_modal_scholarships" tabindex="-1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Request Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <div class="card p-4 shadow-sm">
                        <h2 class="mb-4 text-center" style="color: white;">Social Service and Welfare Management Form</h2>

                        <form id="view_appointment_form">

                            <div class="p-3 mb-3 bg-light rounded">
                                <h4 class="text-secondary">Scholarships</h4>
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>Full Name</th>
                                            <td><span id="view_full_Name"></span></td>
                                        </tr>

                                      
                                        <tr>
                                            <th>CONTACT</th>
                                            <td><span id="view_contact"></span></td>
                                        </tr>
                                        <tr>
                                            <th>LRN</th>
                                            <td><span id="view_LRN"></span></td>
                                        </tr>
                                        <tr>
                                            <th>EMAIL</th>
                                            <td><span id="view_email"></span></td>
                                        </tr>
                                    
                                     
                                        <tr>
                                            <th>NAME OF SCHOOL</th>
                                            <td><span id="view_Name_School"></span></td>
                                        </tr>
                                        <tr>
                                            <th>YEAR LEVEL</th>
                                            <td><span id="view_Year_Level"></span></td>
                                        </tr>
                                       
                                        <tr>
                                            <th>SCHOOL ID</th>
                                            <td>
                                            <img id="view_school_id" class="rounded" width="250" height="250"/>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>CERTIFICATE OF INDIGENCY</th>
                                            <td>
                                            <img id="view_coi_" class="rounded" width="250" height="250" />
                                        
                                            </td>
                                        </tr>


                                        <tr>
                                            <th>GUARDIAN NAME</th>
                                            <td><span id="view_guardian_full_name"></span></td>
                                        </tr>

                                        <tr>
                                            <th>GUARDIAN ID</th>
                                            <td>
                                                <img id="view_guardian_id" class="rounded" width="250" height="250" alt="Guardian ID Preview" />
                                            </td>
                                        </tr>
                                     
 


                                    </tbody>
                                </table>
                            </div>
                            <button type="button" onclick="funct_approve_appoint('approve');">APPROVE</button>
                            <input type="hidden" id="txt_approved_appointment" />
                            <input type="hidden" id="txt_approved_email" />

                            <button type="button" onclick="funct_declined_appoint('declined');">DECLINED</button>
                            <input type="hidden" id="txt_declined_appointment" />
                            <input type="hidden" id="txt_declined_email" />
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="./assets/js/jquery/jquery.min.js"></script>

<script>
    function funct_approve_appoint(action) {
        console.log("application_id")
        const userType = localStorage.getItem('user_type');


        Swal.fire({
            title: '',
            html: `Are you sure you want to <strong>${action.toUpperCase()}</strong>  ?`, // Custom HTML content
            icon: 'info',
            showCancelButton: true, // Adds a cancel button
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, proceed!',
            cancelButtonText: 'No, cancel!',


        }).then((result) => {
            if (result.isConfirmed) {
                $("#modal_calendar_appointment").modal('show');
            }
        });






    }
</script>

<script>
    function openPDF(link) {
        const url = link.getAttribute("href");
        if (!url || url === "#") {
            alert("PDF file not available.");
            return false;
        }

        if (!url.endsWith(".pdf")) {
            alert("Invalid file. Only PDF is allowed.");
            return false;
        }

        return true; // Proceed to open in new tab
    }
</script>
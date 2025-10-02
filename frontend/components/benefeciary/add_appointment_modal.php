<div class="modal fade" id="add_modal_appointments" tabindex="-1">
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
                        <form id="add_appointment_form">
                                
                                    <h4>Application Information</h4>
                                    <div class="mb-3">
                                    <div id="application_For">
                                        <label class="form-label">Application For</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="add_application_for" id="add_application_for_personal" value="SELF" checked="checked">
                                            <label class="form-check-label" for="application_for_personal">Self</label>
                                        </div>
                                        <div class="form-check" id="add_application_for_other">
                                            <input class="form-check-input" type="radio" name="add_application_for" value="OTHER">
                                            <label class="form-check-label" for="add_application_for_other">Other</label>
                                        </div>
                                    </div>
                                </div>
                                    <div class="mb-3">
                                        <label for="sel_add_application_type" class="form-label">Application Form Type</label>
                                        <select class="form-select" id="sel_add_application_type" name="sel_add_application_type">
                                            <option value="" disabled selected>Select an application type</option>
                                            <option value="4PS">Pantawid Pamilyang Pilipino Program 4Ps</option>
                                            <option value="EDUCATIONAL SUPPORT">Educational Support</option>
                                            <option value="TUPAD">Tulong Panghanapbuhay sa Ating Disadvantaged/Displaced Workers TUPAD</option>
                                            <option value="DAY CARE CENTER">Daycare Center Enrollment</option>
                                        </select>
                                    </div>

                                <div class="mb-3 d-none" id="add_div_tupad">
                                    <h4>TUPAD Program Requirements</h4>
                                    
                                    <div class="mb-3">
                                        <label for="valid_id" class="form-label">Valid Government ID</label>
                                        <input type="file" class="form-control" id="add_tupad_valid_id" name="valid_id">
                                    </div>

                                    <div class="mb-3">
                                        <label for="barangay_clearance" class="form-label">Barangay Clearance</label>
                                        <input type="file" class="form-control" id="add_tupad_barangay_clearance" name="barangay_clearance">
                                    </div>

                                    <div class="mb-3">
                                        <label for="certificate_displacement" class="form-label">Certificate of Displacement or Indigency</label>
                                        <input type="file" class="form-control" id="add_tupad_certificate_displacement" name="certificate_displacement">
                                    </div>

                                    <div class="mb-3">
                                        <label for="proof_income" class="form-label">Proof of Income (if available)</label>
                                        <input type="file" class="form-control" id="add_tupad_proof_income" name="proof_income">
                                    </div>

                                    <div class="mb-3">
                                        <label for="work_agreement" class="form-label">Signed Work Agreement (if by LGU/DOLE)</label>
                                        <input type="file" class="form-control" id="add_tupad_work_agreement" name="work_agreement">
                                    </div>

                                    <div class="mb-3">
                                        <label for="authorization_letter" class="form-label">Authorization Letter (if applying through a representative)</label>
                                        <input type="file" class="form-control" id="add_tupad_authorization_letter" name="authorization_letter">
                                    </div>
                                </div>

                            <div class="mb-3 d-none" id="daycare-enrollment">
                                    <h4>Daycare Center Enrollment</h4>
                                    <div class="mb-3">
                                        <label for="child_birth_cert" class="form-label">Child's Birth Certificate</label>
                                        <input type="file" class="form-control" id="add_day_child_birth_cert" name="child_birth_cert">
                                    </div>
                                    <div class="mb-3">
                                        <label for="barangay_clearance" class="form-label">Barangay Certificate of Residency</label>
                                        <input type="file" class="form-control" id="add_day_barangay_clearance" name="barangay_clearance">
                                    </div>
                                    <div class="mb-3">
                                        <label for="vaccination_record" class="form-label">Child's Vaccination Record</label>
                                        <input type="file" class="form-control" id="add_day_vaccination_record" name="vaccination_record">
                                    </div>
                                    <div class="mb-3">
                                        <label for="parent_valid_id" class="form-label">Parent/Guardian's Valid ID</label>
                                        <input type="file" class="form-control" id="add_day_parent_valid_id" name="parent_valid_id">
                                    </div>
                                    <div class="mb-3">
                                        <label for="proof_income" class="form-label">Proof of Income (if applicable)</label>
                                        <input type="file" class="form-control" id="add_day_proof_income" name="proof_income">
                                    </div>
                                    <div class="mb-3">
                                        <label for="add_school_id" class="form-label">School ID (if child is already attending school)</label>
                                        <input type="file" class="form-control" id="add_day_school_id" name="add_day_school_id">
                                    </div>
                                    <div class="mb-3">
                                        <label for="health_record" class="form-label">Health Records (for children with special needs, if applicable)</label>
                                        <input type="file" class="form-control" id="add_day_health_record" name="health_record">
                                    </div>
                            </div>



                            <div class="mb-3 d-none" id="add_div_4ps">
                                    <h4>4Ps Requirements</h4>
                                    
                                    <!-- Personal Identification -->
                                    <h5 class="mt-3">Personal Identification</h5>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="valid_id" class="form-label">Valid Government ID</label>
                                            <input type="file" class="form-control" id="add_4ps_valid_id" name="valid_id">
                                        </div>
                                    
                                        <div class="col-md-4 mb-3">
                                            <label for="marriage_cert" class="form-label">Marriage Certificate (if applicable)</label>
                                            <input type="file" class="form-control" id="add_4ps_marriage_cert" name="marriage_cert">
                                        </div>
                                    </div>

                                    <!-- Proof of Residency & Income -->
                                    <h5 class="mt-3">Proof of Residency & Income</h5>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="residency_cert" class="form-label">Barangay Certificate of Residency</label>
                                            <input type="file" class="form-control" id="add_4ps_residency_cert" name="residency_cert">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="indigency_cert" class="form-label">Certificate of Indigency</label>
                                            <input type="file" class="form-control" id="add_4ps_indigency_cert" name="indigency_cert">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="income_proof" class="form-label">Latest Payslip / Unemployment Certificate</label>
                                            <input type="file" class="form-control" id="add_4ps_income_proof" name="income_proof">
                                        </div>
                                    </div>

                                    <!-- School-Related Documents -->
                                    <h5 class="mt-3">School-Related Documents</h5>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="school_id" class="form-label">School ID & Enrollment Certificate</label>
                                            <input type="file" class="form-control" id="add_4ps_school_id" name="school_id">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="attendance_cert" class="form-label">Certificate of Attendance (85% Attendance)</label>
                                            <input type="file" class="form-control" id="add_4ps_attendance_cert" name="attendance_cert">
                                        </div>
                                    </div>

                                    <!-- Health-Related Requirements -->
                                    <h5 class="mt-3">Health-Related Requirements</h5>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="prenatal_records" class="form-label">Prenatal/Postnatal Records</label>
                                            <input type="file" class="form-control" id="add_4ps_prenatal_records" name="prenatal_records">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="immunization_record" class="form-label">Immunization Record (Children below 5)</label>
                                            <input type="file" class="form-control" id="add_4ps_immunization_record" name="immunization_record">
                                        </div>
                                    </div>
                                
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="hh_residency_cert" class="form-label">Residency Certification</label>
                                            <input type="file" class="form-control" id="ad_4ps_residency_cert" name="hh_residency_cert">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="child_birth_cert" class="form-label">Child's Birth Certificate</label>
                                            <input type="file" class="form-control" id="add_4ps_child_birth_cert" name="child_birth_cert">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="child_school_cert" class="form-label">School Enrollment Certificate</label>
                                            <input type="file" class="form-control" id="add_4ps_child_school_cert" name="child_school_cert">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="child_health_record" class="form-label">Health Record / Immunization</label>
                                            <input type="file" class="form-control" id="add_4ps_child_health_record" name="child_health_record">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="pregnancy_med_cert" class="form-label">Pregnancy Medical Certificate</label>
                                            <input type="file" class="form-control" id="add_4ps_pregnancy_med_cert" name="pregnancy_med_cert">
                                        </div>
                                     
                                    </div>
                                </div>
                                                                

                                    <!-- Beneficiary Information -->
                                    <h4>Beneficiary Information</h4>
                                <div class="row">

                                <div class="mb-4 col-4">
                                                <label for="add_beneficiary_lastname" class="form-label">Last Name</label>
                                                 <input type="text" class="form-control" id="add_beneficiary_lastname" name="add_beneficiary_lastname" placeholder="Enter Last Name">
                                                   </div>
                                                 <div class="mb-4 col-4">
                                                        <label for="add_beneficiary_firstname" class="form-label">First Name</label>
                                                 <input type="text" class="form-control" id="add_beneficiary_firstname" name="add_beneficiary_firstname" placeholder="Enter First Name">
                                                           </div>
                                                 <div class="mb-4 col-4">
                                                        <label for="add_beneficiary_middlename" class="form-label">Middle Name</label>
                                                        <input type="text" class="form-control" id="add_beneficiary_middlename" name="add_beneficiary_middlename" placeholder="Enter Middle Name">
                                                        </div>


                                                      <div class="row">
                                                          <div class="mb-4 col-12">
                                                              <label for="add_beneficiary_address" class="form-label">Adress</label>
                                                              <input type="text" class="form-control" id="add_beneficiary_address" name="beneficiary_address" placeholder="Enter address">
                                                          </div>
                                                          <div class="mb-3 d-none" id="add_div_scholarship">
                                                          </div>
                                                        <div class="row">                       
                                                          <div class="col-md-4">
                                                            <label for="add_beneficiary_civil_status" class="form-label">Civil Status</label>
                                                            <select class="form-select" id="add_beneficiary_civil_status" name="beneficiary_civil_status">
                                                                <option value="" disabled selected>Civil Status</option>
                                                                <option value="SINGLE">Single</option>
                                                                <option value="MARRIED">Married</option>
                                                                <option value="SEPARATED">Separated</option>
                                                                <option value="WIDOWED">Widowed</option>
                                                            </select>
                                                          </div>

                                                            <div class="col-md-4">
                                                            <label for="add_beneficiary_gender" class="form-label">Gender</label>
                                                            <select class="form-select" id="add_beneficiary_gender" name="beneficiary_gender">
                                                                <option value="" disabled selected>Select Gender</option>
                                                                <option value="MALE">Male</option>
                                                                <option value="FEMALE">Female</option>
                                                                <option value="OTHER">Other</option>
                                                            </select>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="add_contact_number"" class="form-label">Contact Number</label>
                                                                <input type="tel" class="form-control" id="add_contact_number" name="contact_number" pattern="\d+" title="Please enter numbers only">
                                                            </div>
                                                        </div>
                                   
                                                            <div class="row g-3 mb-5">
                                                        <h4>Requirements</h4>

                                                                <!-- First Row -->
                                                                <div class="col-md-4">
                                                                    <label for="beneficiary_form138" class="form-label">Form 138</label>
                                                                    <input type="file" class="form-control" id="beneficiary_form138" name="beneficiary_form138">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="add_scholar_enrollment_cert" class="form-label">Certificate of Enrollment</label>
                                                                    <input type="file" class="form-control" id="add_scholar_enrollment_cert" name="add_scholar_enrollment_cert">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="beneficiary_form137" class="form-label">Form 137</label>
                                                                    <input type="file" class="form-control" id="beneficiary_form137" name="beneficiary_form137">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="beneficiary_barangay_clearance" class="form-label">Barangay Clearance</label>
                                                                    <input type="file" class="form-control" id="beneficiary_barangay_clearance" name="beneficiary_barangay_clearance">
                                                                </div>

                                                                <!-- Second Row -->
                                                                <div class="col-md-4">
                                                                    <label for="beneficiary_good_moral" class="form-label">Certificate of Good Moral</label>
                                                                    <input type="file" class="form-control" id="beneficiary_good_moral" name="beneficiary_good_moral">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="add_scholar_school_id" class="form-label">School ID</label>
                                                                    <input type="file" class="form-control" id="add_scholar_school_id" name="add_scholar_school_id" required>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="beneficiary_psa" class="form-label">Birth Certificate</label>
                                                                    <input type="file" class="form-control" id="beneficiary_psa" name="beneficiary_psa" required>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="std_coi" class="form-label">Certificate of Indigency</label>
                                                                    <input type="file" class="form-control" id="std_coi" name="std_coi" required>
                                                                </div>
                                                                <!-- <div class="col-md-3">
                                                                    <label for="guardian_id" class="form-label">Valid ID</label>
                                                                    <input type="file" class="form-control" id="guardian_id" name="guardian_id" required>
                                                                </div> -->
                                                            </div>
                                                </div>
                                                                
                                  <div id="other_add" class="row">
                                        <div  class="col-md-4 mb-3">
                                            <label for="add_beneficiary_city_mun" class="form-label">City/Municipality</label>
                                            <select class="form-select" id="add_beneficiary_city_mun" name="beneficiary_city_mun">
                                                <option value="" disabled selected>Select a city/municipality</option>

                                                <option value="Quezon City" selected>Quezon City</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="add_beneficiary_district" class="form-label">District</label>
                                            <select class="form-select" id="add_beneficiary_district" name="beneficiary_district">
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
                                            <label for="add_beneficiary_barangay" class="form-label">Barangay</label>
                                            <select class="form-select" id="add_beneficiary_barangay" name="beneficiary_barangay">
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

                                   
                                    <!-- <div class="row mb-3">
                                        <div class="col-md-12">
                                            <label for="add_beneficiary_email" class="form-label">Gmail</label>
                                            <input type="text" class="form-control" id="add_beneficiary_email" name="beneficiary_email">
                                        </div>
                                    </div> -->

                                    <!-- Client Information -->
                                    <!-- <div id="add_client_info_section" class="d-none">
                                        <h4>Client Information</h4>
                                        <div class="mb-3">
                                        <label for="add_relationship" class="form-label">Relationship</label>
                                        <select class="form-select" id="add_relationship" name="relationship">
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
                                    </div> -->
                                        <div class="row">
                                            <!-- <div class="col mb-3">
                                                <label for="add_client_lastname" class="form-label">Last Name</label>
                                                <input type="text" class="form-control" id="add_client_lastname" name="client_lastname">
                                            </div> -->
                                            <!-- <div class="col mb-3">
                                                <label for="add_client_firstname" class="form-label">First Name</label>
                                                <input type="text" class="form-control" id="add_client_firstname" name="client_firstname">
                                            </div> -->
                                            <!-- <div class="col mb-3">
                                                <label for="add_client_middlename" class="form-label">Middle Name</label>
                                                <input type="text" class="form-control" id="add_client_middlename" name="client_middlename">
                                            </div> -->
                                            <!-- <div class="col-md-2 mb-3">
                                                <label for="add_client_suffix" class="form-label">Suffix</label>
                                                <input type="text" class="form-control" id="add_client_suffix" name="client_suffix">
                                            </div> -->
                                        </div>

                                        <!-- <div class="mb-3">
                                            <label for="add_client_gender" class="form-label">Gender</label>
                                            <select class="form-select" id="add_client_gender" name="client_gender">
                                                <option value="" disabled selected>Select Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div> -->
                                        <!-- <div class="mb-3">
                                            <label for="add_client_address" class="form-label">address</label>
                                            <input type="text" class="form-control" id="add_client_address" name="client_address">
                                        </div> -->
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100 mt-4">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Form</title>



    <!-- <script>
        document.getElementById('appointment_form').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission

            // You can collect form data here and process it
            const formData = new FormData(this);

            // Log the form data to see what is being submitted
            console.log(Object.fromEntries(formData));

            // Show success message
            Swal.fire({
                title: 'Success!',
                text: 'Your request has been submitted.',
                icon: 'success',
                confirmButtonText: 'Okay'
            });
        });
    </script> -->

    </body>

</html>

<script src="./assets/js/jquery/jquery.min.js"></script>
<!-- JavaScript to show/hide client information -->
<script>
    document.querySelectorAll('input[name="add_application_for"]').forEach(function(radio) {
        radio.addEventListener('change', function() {
            var clientInfoSection = document.getElementById('add_client_info_section');
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
        $('#sel_add_application_type').on('change', function() {
            var selectedApplication = $(this).val().trim().toUpperCase();

            $("#add_div_scholarship, #add_div_4ps, #add_div_tupad, #daycare-enrollment").addClass("d-none");

        if(selectedApplication === "EDUCATIONAL SUPPORT"){
            $("#add_div_scholarship").removeClass("d-none");
            $("#application_For").addClass('d-none');
            $("#other_add").addClass('d-none');

        }else if(selectedApplication ==="4PS"){
             $("#add_div_4ps").removeClass("d-none");
             $("#add_application_for_other").addClass('d-none');
             $("#other_add").removeClass('d-none');

        }else if(selectedApplication ==="TUPAD"){
             $("#add_div_tupad").removeClass("d-none");
             $("#application_For").removeClass('d-none');
             $("#other_add").removeClass('d-none');

        }else if(selectedApplication ==="DAY CARE CENTER"){
             $("#daycare-enrollment").removeClass("d-none");
             $("#application_For").removeClass('d-none');
             $("#other_add").removeClass('d-none');
        }


        //   console.log("object");  
    });
    });

</script>

<script>
$(document).ready(function () {
    $('#add_appointment_form').on('submit', function (event) {
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
                const applicationFor = $('input[name="add_application_for"]:checked').val();
                const selectedApplication = $("#sel_add_application_type").val();
                const formData = new FormData();

                // General info
                formData.append('application_for', applicationFor);
                formData.append('application_type', $('#sel_add_application_type').val() ?? "");
                formData.append('relationship', $('#add_relationship').val() ?? "");
                formData.append('full_name', $('#add_full_name').val() ?? "");
                formData.append('application_status', 'APPROVED');

                // Beneficiary
                formData.append('beneficiary_lastname', $('#add_beneficiary_lastname').val() ?? "");
                formData.append('beneficiary_firstname', $('#add_beneficiary_firstname').val() ?? "");
                formData.append('beneficiary_middlename', $('#add_beneficiary_middlename').val() ?? "");
                formData.append('beneficiary_suffix', $('#add_beneficiary_suffix').val() ?? "");
                formData.append('beneficiary_gender', $('#add_beneficiary_gender').val() ?? "");
                formData.append('beneficiary_address', $('#add_beneficiary_address').val() ?? "");
                formData.append('beneficiary_province', $('#add_beneficiary_province').val() ?? "");
                formData.append('beneficiary_district', $('#add_beneficiary_district').val() ?? "");
                formData.append('beneficiary_city_mun', $('#add_beneficiary_city_mun').val() ?? "");
                formData.append('beneficiary_barangay', $('#add_beneficiary_barangay').val() ?? "");
                formData.append('beneficiary_civil_status', $('#add_beneficiary_civil_status').val() ?? "");


                
 

                // Client
                formData.append('client_lastname', $('#add_client_lastname').val() ?? "");
                formData.append('client_firstname', $('#add_client_firstname').val() ?? "");
                formData.append('client_middlename', $('#add_client_middlename').val() ?? "");
                formData.append('client_suffix', $('#add_client_suffix').val() ?? "");
                formData.append('client_gender', $('#add_client_gender').val() ?? "");
                formData.append('client_address', $('#add_client_address').val() ?? "");

                // Application details
                formData.append('application_description', $('#add_application_description').val() ?? "");
                formData.append('date_created', $('#add_date_created').val() ?? "");
                formData.append('date_updated', $('#add_date_updated').val() ?? "");
                formData.append('date_released', $('#add_date_released').val() ?? "");
                formData.append('gmail', $('#add_beneficiary_email').val() ?? "");
                formData.append('contact_num', $('#add_contact_number').val() ?? "");
                formData.append('action', 'insert');

                // File uploads based on application type
                if (selectedApplication === "EDUCATIONAL SUPPORT") {
                    formData.append('school_id', $('#add_scholar_school_id')[0].files[0]);
                    
                    formData.append('enrollment_cert', $('#add_scholar_enrollment_cert')[0].files[0]);

                  

                    formData.append('beneficiary_form138', $('#beneficiary_form138')[0].files[0]);
                    formData.append('beneficiary_psa', $('#beneficiary_psa')[0].files[0]);
                    formData.append('beneficiary_form137', $('#beneficiary_form137')[0].files[0]);
                    formData.append('beneficiary_barangay_clearance', $('#beneficiary_barangay_clearance')[0].files[0]);
                    formData.append('beneficiary_good_moral', $('#beneficiary_good_moral')[0].files[0]);

                   
                    
                }

                else if (selectedApplication === "4PS") {
                    formData.append('valid_id', $('#add_4ps_valid_id')[0].files[0]);
                    formData.append('child_birth_cert', $('#add_4ps_child_birth_cert')[0].files[0]);
                    formData.append('marriage_cert', $('#add_4ps_marriage_cert')[0].files[0]);
                    formData.append('residency_cert', $('#add_4ps_residency_cert')[0].files[0]);
                    formData.append('indigency_cert', $('#add_4ps_indigency_cert')[0].files[0]);
                    formData.append('income_proof', $('#add_4ps_income_proof')[0].files[0]);
                    formData.append('school_id', $('#add_4ps_school_id')[0].files[0]);
                    formData.append('attendance_cert', $('#add_4ps_attendance_cert')[0].files[0]);
                    formData.append('prenatal_records', $('#add_4ps_prenatal_records')[0].files[0]);
                    formData.append('immunization_record', $('#add_4ps_immunization_record')[0].files[0]);
                    formData.append('child_school_cert', $('#add_4ps_child_school_cert')[0].files[0]);
                    formData.append('child_health_record', $('#add_4ps_child_health_record')[0].files[0]);
                    formData.append('pregnancy_med_cert', $('#add_4ps_pregnancy_med_cert')[0].files[0]);
                }

                else if (selectedApplication === "TUPAD") {
                    formData.append('valid_id', $('#add_tupad_valid_id')[0].files[0]);
                    formData.append('barangay_clearance', $('#add_tupad_barangay_clearance')[0].files[0]);
                    formData.append('certificate_displacement', $('#add_tupad_certificate_displacement')[0].files[0]);
                    formData.append('proof_income', $('#add_tupad_proof_income')[0].files[0]);
                    formData.append('work_agreement', $('#add_tupad_work_agreement')[0].files[0]);
                    formData.append('authorization_letter', $('#add_tupad_authorization_letter')[0].files[0]);
                }

                else if (selectedApplication === "DAY CARE CENTER") {
                    formData.append('add_child_birth_cert', $('#add_day_child_birth_cert')[0].files[0]);
                    formData.append('add_barangay_clearance', $('#add_day_barangay_clearance')[0].files[0]);
                    formData.append('add_vaccination_record', $('#add_day_vaccination_record')[0].files[0]);
                    formData.append('add_parent_valid_id', $('#add_day_parent_valid_id')[0].files[0]);
                    formData.append('add_proof_income', $('#add_day_proof_income')[0].files[0]);
                    formData.append('add_school_id', $('#add_day_school_id')[0].files[0]);
                    formData.append('add_health_record', $('#add_day_health_record')[0].files[0]);
                }

                // AJAX request
                $.ajax({
                    url: `<?php echo $url; ?>/appointment/add_appointment.php`,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        if (response.status === 1) {
                            Swal.fire({
                                title: 'Success!',
                                text: response.message,
                                icon: 'success',
                                confirmButtonColor: '#3085d6',
                            });

                            $('#add_appointment_form')[0].reset();
                            $("#add_modal_appointments").modal('hide');


                        } else {
                            Swal.fire({
                                title: 'Error!',
                                text: response.message,
                                icon: 'error',
                                confirmButtonColor: '#d33',
                            });
                        }
                    },
                    error: function (xhr, status, error) {
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




      

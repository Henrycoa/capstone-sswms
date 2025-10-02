<!-- TUPAD Program Application Form Modal -->
<div class="modal fade" id="tupadApplicationModal" tabindex="-1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">TUPAD Program Application Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="tupadForm" enctype="multipart/form-data">
                    <div class="row">
                        <!-- Applicant Name -->
                        <div class="col-md-6 mb-3">
                            <label for="applicant_name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="applicant_name" name="applicant_name" required>
                        </div>
                        <!-- Birthdate -->
                        <div class="col-md-6 mb-3">
                            <label for="birthdate" class="form-label">Birthdate</label>
                            <input type="date" class="form-control" id="birthdate" name="birthdate" required>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Address -->
                        <div class="col-md-6 mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>
                        <!-- Contact Number -->
                        <div class="col-md-6 mb-3">
                            <label for="contact_number" class="form-label">Contact Number</label>
                            <input type="text" class="form-control" id="contact_number" name="contact_number" required>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Barangay -->
                        <div class="col-md-6 mb-3">
                            <label for="barangay" class="form-label">Barangay</label>
                            <input type="text" class="form-control" id="barangay" name="barangay" required>
                        </div>
                        <!-- Municipality / City -->
                        <div class="col-md-6 mb-3">
                            <label for="municipality" class="form-label">Municipality/City</label>
                            <input type="text" class="form-control" id="municipality" name="municipality" required>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Type of Work Preferred -->
                        <div class="col-md-6 mb-3">
                            <label for="work_preference" class="form-label">Preferred Work Type</label>
                            <input type="text" class="form-control" id="work_preference" name="work_preference" required>
                        </div>
                        <!-- Employment Status -->
                        <div class="col-md-6 mb-3">
                            <label for="employment_status" class="form-label">Employment Status</label>
                            <select class="form-control" id="employment_status" name="employment_status" required>
                                <option value="">Select</option>
                                <option value="Displaced Worker">Displaced Worker</option>
                                <option value="Self-Employed">Self-Employed</option>
                                <option value="Underemployed">Underemployed</option>
                                <option value="Informal Sector Worker">Informal Sector Worker</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Upload Valid ID -->
                        <div class="col-md-6 mb-3">
                            <label for="valid_id" class="form-label">Upload Valid ID</label>
                            <input type="file" class="form-control" id="valid_id" name="valid_id" accept=".pdf, .jpg, .png" required>
                        </div>
                        <!-- Upload Barangay Clearance -->
                        <div class="col-md-6 mb-3">
                            <label for="barangay_clearance" class="form-label">Upload Barangay Clearance</label>
                            <input type="file" class="form-control" id="barangay_clearance" name="barangay_clearance" accept=".pdf, .jpg, .png" required>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Upload Certificate of Displacement or Indigency -->
                        <div class="col-md-6 mb-3">
                            <label for="proof_of_displacement" class="form-label">Upload Proof of Displacement/Indigency</label>
                            <input type="file" class="form-control" id="proof_of_displacement" name="proof_of_displacement" accept=".pdf, .jpg, .png" required>
                        </div>
                        <!-- Upload Additional Supporting Documents -->
                        <div class="col-md-6 mb-3">
                            <label for="additional_documents" class="form-label">Upload Additional Supporting Documents (if any)</label>
                            <input type="file" class="form-control" id="additional_documents" name="additional_documents[]" accept=".pdf, .jpg, .png" multiple>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Program Description -->
                        <div class="col-md-12 mb-3">
                            <label for="program_description" class="form-label">TUPAD Program Description</label>
                            <textarea class="form-control" id="program_description" name="program_description" rows="3" required></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Application Date -->
                        <div class="col-md-6 mb-3">
                            <label for="application_date" class="form-label">Application Date</label>
                            <input type="date" class="form-control" id="application_date" name="application_date" required>
                        </div>
                        <!-- Last Date of Application -->
                        <div class="col-md-6 mb-3">
                            <label for="last_date" class="form-label">Last Date</label>
                            <input type="date" class="form-control" id="last_date" name="last_date" required>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit Application</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap 5 JS -->
<script src="./assets/js/jquery/jquery.min.js"></script>

<!-- Scholarship Application Form Modal -->
<div class="modal fade" id="addScholarshipModal" tabindex="-1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Scholarship Application Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="scholarshipForm" enctype="multipart/form-data">
                    <div class="row">
                        <!-- Scheme Name -->
                        <div class="col-md-6 mb-3">
                            <label for="scheme_name" class="form-label">Scheme Name</label>
                            <input type="text" class="form-control" id="scheme_name" name="scheme_name" required>
                        </div>
                        <!-- Scheme Type -->
                        <div class="col-md-6 mb-3">
                            <label for="scheme_type" class="form-label">Scheme Type</label>
                            <input type="text" class="form-control" id="scheme_type" name="scheme_type" required>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Scheme Grade -->
                        <div class="col-md-6 mb-3">
                            <label for="scheme_grade" class="form-label">Scheme Grade</label>
                            <input type="text" class="form-control" id="scheme_grade" name="scheme_grade" required>
                        </div>
                        <!-- Scholarship Year -->
                        <div class="col-md-6 mb-3">
                            <label for="scholarship_year" class="form-label">Scholarship Year</label>
                            <input type="number" class="form-control" id="scholarship_year" name="scholarship_year" required>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Category -->
                        <div class="col-md-6 mb-3">
                            <label for="category" class="form-label">Category</label>
                            <input type="text" class="form-control" id="category" name="category" required>
                        </div>
                        <!-- Criteria -->
                        <div class="col-md-6 mb-3">
                            <label for="criteria" class="form-label">Criteria</label>
                            <textarea class="form-control" id="criteria" name="criteria" rows="2" required></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Upload Grades -->
                        <div class="col-md-6 mb-3">
                            <label for="grades_file" class="form-label">Upload Grades</label>
                            <input type="file" class="form-control" id="grades_file" name="grades_file" accept=".pdf, .jpg, .png" required>
                        </div>
                        <!-- Upload Required Documents -->
                        <div class="col-md-6 mb-3">
                            <label for="documents_required" class="form-label">Upload Required Documents</label>
                            <input type="file" class="form-control" id="documents_required" name="documents_required[]" accept=".pdf, .jpg, .png" multiple required>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Scholarship Description -->
                        <div class="col-md-12 mb-3">
                            <label for="scholarship_description" class="form-label">Scholarship Description</label>
                            <textarea class="form-control" id="scholarship_description" name="scholarship_description" rows="3" required></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Scholarship Amount -->
                        <div class="col-md-6 mb-3">
                            <label for="scholarship_amount" class="form-label">Scholarship Amount</label>
                            <input type="number" class="form-control" id="scholarship_amount" name="scholarship_amount" required>
                        </div>
                        <!-- Last Date -->
                        <div class="col-md-6 mb-3">
                            <label for="last_date" class="form-label">Last Date</label>
                            <input type="date" class="form-control" id="last_date" name="last_date" required>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Published Date -->
                        <div class="col-md-6 mb-3">
                            <label for="published_date" class="form-label">Published Date</label>
                            <input type="date" class="form-control" id="published_date" name="published_date" required>
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
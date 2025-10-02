<!-- Custom Styles -->
<style>
    :root {
        --bs-primary: #1e3a8a;
        /* Custom primary color */
    }

    .modal-header {
        background-color: var(--bs-primary);
        color: white;
    }

    .table-primary {
        background-color: #1e3a8a !important;
        color: white;
    }

    .btn-primary {
        background-color: #1e3a8a;
        border-color: #1e3a8a;
    }

    .btn-primary:hover {
        background-color: #152b6a;
        border-color: #152b6a;
    }

    .modal-title {
        color: white;
    }
</style>

<!-- Modal Trigger Button -->
<?php include './modal_landing/modals/modal_scholar_appoint.php'; ?>

<!-- Modal Structure -->
<div class="modal fade" id="modal_scholarships" tabindex="-1" aria-labelledby="scholarshipModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="scholarshipModalLabel">Guide For Applying to Educational Assistance</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>
                    The <strong>Educational Assistance Program</strong> is designed to support students facing financial difficulties. This initiative provides monetary aid to help cover educational expenses such as tuition, supplies, and daily school needs.
                </p>

                <h5 class="mt-4">📌 Program Overview</h5>
                <p>
                    The <strong>Student Support Assistance Program</strong> offers financial relief to learners struggling to meet school-related expenses. Due to limited resources, priority is given to students experiencing financial hardship.
                </p>

                <h5 class="mt-4">✅ Who Can Apply?</h5>
                <p>This program is open to students facing financial challenges, including:</p>
                <ul>
                    <li>Working students</li>
                    <li>Family breadwinners</li>
                    <li>Children of single parents</li>
                    <li>Students whose parents are unemployed</li>
                    <li>Dependents of overseas workers</li>
                    <li>Children of parents with serious health conditions</li>
                    <li>Orphans or those living with guardians</li>
                    <li>Individuals affected by natural disasters or abuse</li>
                </ul>

                <h5 class="mt-4">💰 Assistance Amount</h5>
                <table class="table table-bordered text-center">
                    <thead class="table-primary">
                        <tr>
                            <th>Education Level</th>
                            <th>Financial Support</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        <tr>
                            <td>College</td>
                            <td>PHP 4,000.00</td>
                        </tr>
                    </tbody>
                </table>

                <h5 class="mt-4">📄 Required Documents</h5>
                <ul>
                    <li>Certificate of indigency</li>
                    <li>Student's school identification card (Form 138)</li>
                    <li>Valid ID of parent or guardian</li>
                    <li>Proof of enrollment or registration (COR)</li>
                    <li>Billing statement from the school</li>
                </ul>
                <div class="alert alert-warning" role="alert">
                    <strong>NOTE:</strong> The student’s parent or guardian will be the one who will get the educational assistance.
                    Make sure that the documents are authentic and not fake. Those who submit false documents will be subject to the rule of law.
                </div>

                <h5 class="mt-4">📝 How to Apply</h5>
                <ul>
                    <li>
                        <strong>Online Appointment:</strong> Schedule an appointment through our official website and upload scanned copies of the required documents for initial verification.
                        <br>
                        <button class="btn btn-success proceed-btn" data-level="College">Proceed to Online appointment</button>
                    </li>
                </ul>

                <h5 class="mt-4">❓ Frequently Asked Questions (FAQs)</h5>
                <table class="table table-striped">
                    <thead class="table-secondary">
                        <tr>
                            <th>Question</th>
                            <th>Answer</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>What is the maximum financial aid amount?</strong></td>
                            <td>Up to PHP 4,000, based on the student's education level.</td>
                        </tr>
                        <tr>
                            <td><strong>Who is eligible?</strong></td>
                            <td>Students facing financial hardships as outlined in the eligibility criteria.</td>
                        </tr>
                        <tr>
                            <td><strong>What are the application methods?</strong></td>
                            <td>Walk-in submission or online appointment.</td>
                        </tr>
                        <tr>
                            <td><strong>When will the financial aid be distributed?</strong></td>
                            <td>Disbursement schedules will be announced by the agency.</td>
                        </tr>
                        <tr>
                            <td><strong>How can I contact support?</strong></td>
                            <td>Visit the nearest office or check their official website for inquiries.</td>
                        </tr>
                    </tbody>
                </table>

            </div>

        </div>
    </div>
</div>

<!-- Bootstrap 5 JS (Ensure this is included in your project) -->

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const proceedButtons = document.querySelectorAll('.proceed-btn');

        proceedButtons.forEach(button => {
            button.addEventListener('click', function() {
                const level = this.getAttribute('data-level');

                Swal.fire({
                    title: 'Terms and Conditions',
                    text: `We are committed to abide by and adhere to the provisions of Philippine Republic Act No. 10173, also known as, the Data Privacy Act of 2012 and its Implementing Rules and Regulations. The school commits itself to protect the privacy of its data subjects (individuals it deals with, current, past, and prospective) as well as to ensure that the personal data gathered as provided by such subjects shall be safeguarded and secured while under its control and custody. This data privacy policy will outline how the data gathered will be properly utilized and the process of doing so; the measures to be undertaken for purposes of keeping it secure, its appropriate use and disposal when no longer deemed necessary; and provide information to the data subjects about their rights under RA#10173. For the above purpose this Data Privacy Notice and Consent Form may be amended at any time without prior notice, and such amendments will be notified to you via the school’s official website or email. ${level} scholarship application?`,
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#198754',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, proceed',
                    cancelButtonText: 'Cancel'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            title: 'Proceed!',
                            text: `You may now proceed .`,
                            icon: 'success',
                            confirmButtonColor: '#198754'
                        }).then(() => {
                            // Close the current modal (modal_scholarships)
                            const currentModal = bootstrap.Modal.getInstance(document.getElementById('modal_scholarships'));
                            if (currentModal) {
                                currentModal.hide(); // Hide the first modal
                            }

                            // Add inert to the body to disable focus outside the modal
                            document.body.setAttribute('inert', 'true');

                            // Ensure the next modal is available in the DOM
                            const nextModalElement = document.getElementById('sswms_Modal'); // Correct ID for the next modal
                            if (nextModalElement) {
                                const nextModal = new bootstrap.Modal(nextModalElement);
                                nextModal.show();

                                // Optionally, set focus on the first element of the new modal for accessibility
                                const firstFocusElement = nextModalElement.querySelector('input, button');
                                if (firstFocusElement) {
                                    firstFocusElement.focus();
                                }

                                // Remove inert from the body when the modal is shown
                                nextModalElement.addEventListener('shown.bs.modal', function() {
                                    document.body.removeAttribute('inert');
                                });
                            } else {
                                console.error('Next modal not found in the DOM!');
                            }
                        });
                    }
                });
            });
        });
    });
</script>
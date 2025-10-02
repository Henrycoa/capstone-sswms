<!-- Modal HTML -->
<div class="modal fade" id="modal_calendar_appointment" tabindex="-1" aria-labelledby="userTypeModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title" ">Select User Type</h5>
                <button type=" button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">

                <div id="time-picker-container" style="display:none;">
                    <label for="timepicker">Select Time:</label>
                    <input type="text" id="timepicker" />

                    <button type="button" onClick="saveAppointment();">Save Appointment</button>
                </div>


                <div id="appointment_calendar"></div>
            </div>
        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<style>
    /* Highlight selected date with a background color */
.fc-day.highlighted {
    background-color: #ffcc00 !important;  /* Yellow background for highlight */
    color: #fff;  /* White text */
    font-weight: bold;  /* Bold text for emphasis */
    position: relative;
}

/* Add the "SELECTED SCHEDULE" text centered in the highlighted date */
.fc-day.highlighted::after {
    content: "SELECTED";  /* The text you want to add */
    position: absolute;  /* Position the text absolutely */
    top: 50%;  /* Center vertically */
    left: 50%;  /* Center horizontally */
    transform: translate(-50%, -50%);  /* Adjust positioning to truly center the text */
    font-size: 12px;  /* Adjust the font size as needed */
    white-space: nowrap;  /* Prevent the text from wrapping */
}

</style>
<script>
    var scheduledDate ="";
    $('#modal_calendar_appointment').on('shown.bs.modal', function() {
        $.ajax({
            url: `<?php echo $url; ?>/appointment/appointments_calendar_count.php`,
            type: 'GET',
            contentType: 'application/json',
            dataType: 'json',
            success: function(response) {
                const events = response.message.slice(0, 3).map(event => ({
                    title: `${event.title} appt(s)`,
                    start: event.start.split(' ')[0],
                    allDay: true
                }));

                //const today = new Date().toISOString().split('T')[0]; // Current date in 'YYYY-MM-DD' format

                const today = new Date();
                today.setDate(today.getDate() + 1);  // Add 1 day
                const tomorrow = today.toISOString().split('T')[0];

                var calendar = new FullCalendar.Calendar(document.getElementById('appointment_calendar'), {
                    initialView: 'dayGridMonth',
                    events: events,
                    validRange: {
                        start: tomorrow
                    },

                    dateClick: function(info) {

                        // HIGHLIGHT SELECTED AND REMOVE HIGHLIGHT PREVIOUS DATE
                        $('.fc-day').removeClass('highlighted'); // Remove previous highlights
                        $(info.dayEl).addClass('highlighted');
                     
                        // GET CLICKED DATE
                        scheduledDate = info.dateStr;

                        $('#time-picker-container').show();

                        flatpickr("#timepicker", {
                            enableTime: true,
                            noCalendar: true,
                            dateFormat: "H:i",
                            minTime: "08:00",
                            maxTime: "18:00",
                            time_24hr: true,
                        });
                    }
                });

                // Render the calendar with fetched events
                calendar.render();

            },
            error: function(xhr, status, error) {
                alert("An error occurred: " + error);
            }
        });
    });



    function saveAppointment() {
    const scheduledTime = $("#timepicker").val();
    const userType = localStorage.getItem('user_type');
    const application_id = $("#txt_approved_appointment").val();
    const email = $("#txt_approved_email").val();
    const action = 'update'; // assumed
    const scheduledDate = $("#datepicker").val(); // assumed date input

    const formData = {
        status: 'APPROVED',
        usertype: userType,
        action: action,
        application_id: application_id,
        email: email,
        dateTime: scheduledDate + " " + scheduledTime
    };

    $.ajax({
        url: `<?php echo $url; ?>/appointment/edit_appointment.php`,
        type: 'POST',
        contentType: 'application/json',
        data: JSON.stringify(formData),
        dataType: 'json',
        success: function(response) {
            const status = response.status;
            const message = response.message;

            if (status === 1) {
                // ✅ Close the modal (replace #yourModalID with your actual modal ID)
                $('#modal_calendar_appointment').modal('hide');
                $('#view_modal_scholarships').modal('hide');

                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: message
                });

                let updatedStatus = "<span class='badge bg-success'>YES</span>";
                $("#row_" + application_id + " td:eq(4)").html(updatedStatus);
            } else {
                Swal.fire({
                    icon: 'warning',
                    title: 'Failed',
                    text: message
                });
            }
        },
        error: function(xhr, status, error) {
            Swal.fire({
                icon: 'error',
                title: 'Error!',
                text: 'An error occurred: ' + error
            });
        }
    });
}

</script>

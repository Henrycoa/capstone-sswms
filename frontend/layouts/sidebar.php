<?php include './url.php'; ?>
<script>
    var user_type = localStorage.getItem('user_type');
</script>

<?php include './functions/counter.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SSWMS</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="./assets/img/lgu.png" rel="icon">
    <link href="./assets/img/lgu.png" rel="lgu.png">

    <!-- Google Fonts -->

    <!-- Vendor CSS Files -->
    <link href="./assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="./assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="./assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="./assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="./assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="./assets/vendor/simple-datatables/style.css" rel="stylesheet">
    <script src="./assets/vendor/tinymce/tinymce.min.js"></script>

    <!-- Template Main CSS File -->

</head>

<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <img src="./assets/img/logo1.png" alt="Logo" class="img-fluid">

        <!-- Sidebar Profile Section -->
        <div style="display: flex; flex-direction: column; align-items: center; padding: 16px;">
            <div id="side_init" style="display: flex; align-items: center; justify-content: center; width: 96px; height: 96px; border-radius: 50%; background-color: #334155; color: #e2e8f0; font-size: 48px; font-weight: bold; text-transform: uppercase; line-height: 1;">
                --
            </div>
            <div style="display: flex; flex-direction: column; align-items: center; margin-top: 24px; text-align: center;">
                <div style="font-weight: 500;"></div>
            </div>
        </div>

        <hr class="sidebar-divider">

        <!-- Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="index.php">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <hr class="sidebar-divider">

        <!-- Social Services -->

        <!-- Beneficiary Management -->
        <li class="nav-item">
        <li class="nav-heading">Main</li>

        <a class="nav-link collapsed" data-bs-target="#beneficiary-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-layout-text-window-reverse"></i>
            <span>Beneficiary Management</span>
            <i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="beneficiary-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <li>
                <a href="benefeciary.php">
                    <i class="bi bi-circle"></i>
                    <span>Beneficiary Form</span>
                </a>
            </li>
        </ul>
        </li>
        <hr class="sidebar-divider">
        <li class="nav-heading">Appointment</li>

<!-- Appointment List -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-toggle="collapse" href="#appointment-navs" role="button" aria-expanded="false" aria-controls="appointment-navs">
                <i class="bi bi-people"></i>
                <span>Eligibility</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="appointment-navs" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="census.php">
                        <i class="bi bi-circle"></i>
                        <span>Census</span>
                    </a>
                </li>
                <li>
                    <a href="resident.php">
                        <i class="bi bi-circle"></i>
                        <span>Residents</span>
                    </a>
                </li>
            </ul>
        </li>

        <hr class="sidebar-divider">

        <li class="nav-heading">Appointment</li>

        <!-- Appointment List -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#appointment-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-people"></i>
                <span>Appointment List</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="appointment-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="appointment_list.php">
                        <i class="bi bi-circle"></i>
                        <span>Appointment List</span>
                    </a>
                </li>
            </ul>
        </li>
        <hr class="sidebar-divider">

        <li class="nav-heading">Settings</li>

        <!-- User Management -->


        <!-- About Us -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#about-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-info-circle"></i>
                <span>About Us</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="about-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="contacts.php">
                        <i class="bi bi-circle"></i>
                        <span>Contacts</span>
                    </a>
                </li>
                <li>
                    <a href="404pages.php">
                        <i class="bi bi-circle"></i>
                        <span>Help</span>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
</aside>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="./assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="./assets/vendor/chart.js/chart.umd.js"></script>
<script src="./assets/vendor/echarts/echarts.min.js"></script>
<script src="./assets/vendor/quill/quill.js"></script>
<script src="./assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="./assets/vendor/tinymce/tinymce.min.js"></script>
<script src="./assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="./assets/js/main.js"></script>

</body>

</html>


<script>
    const result_sidebar = LoginChecker();

    var firstname = result_sidebar.data.data.user_fname
    var lastname = result_sidebar.data.data.user_lname


    $("#side_init").html(firstname[0] + "" + lastname[0])


    $(document).ready(function() {

        // Fetch user details via AJAX
        $.ajax({
            url: `<?php echo $url; ?>/auth-file/users_list.php`,
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                if (response.message && response.message[0]) {} else {
                    console.error("Unexpected response format:", response);
                }
            },
            error: function(xhr, status, error) {
                console.error("AJAX Error:", status, error);
                alert("An error occurred while fetching user details. Please try again later.");
            }
        });
    });
</script>

<script>
    if (user_type.toUpperCase() == "ADMIN") {

    } else if (user_type.toUpperCase() == "SOCIAL WORKER") {
        $(".nav_users").removeClass('d-none');
        $(".nav_users").removeClass('d-none');

        $(".nav_users").addClass('d-none');

    } else if (user_type.toUpperCase() == "USER") {
        $("#nav-user").addClass('d-none');
        $("#user-sidebar-divider").addClass('d-none');

    }
</script>

<!-- <script>

    var user_type = localStorage.getItem('user_type');

            if(user_type.toUpperCase()=="USER"){

                $("#nav_admin").html(`
                
                        <li class="nav-item">
                            <a class="nav-link collapsed" data-bs-target="#service-nav" data-bs-toggle="collapse" href="#">
                                <i class="bi bi-layout-text-window-reverse"></i>
                                <span>Service Request and Schedules</span>
                                <i class="bi bi-chevron-down ms-auto"></i>
                            </a>
                            <ul id="service-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                                <li>
                                    <a href="service-request.php">
                                        <i class="bi bi-circle"></i>
                                        <span>Service Request</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="schedule.php">
                                        <i class="bi bi-circle"></i>
                                        <span>Schedules</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        
                        <hr class="sidebar-divider">
                
                `);
             
            }
            
            else if(user_type.toUpperCase()=="SOCIAL WORKER"){
         
                $("#nav_admin").html(`
                
                        <li class="nav-item">
                            <a class="nav-link collapsed" data-bs-target="#service-nav" data-bs-toggle="collapse" href="#">
                                <i class="bi bi-layout-text-window-reverse"></i>
                                <span>SOBRANG LUPET</span>
                                <i class="bi bi-chevron-down ms-auto"></i>
                            </a>
                            <ul id="service-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                                <li>
                                    <a href="service-request.php">
                                        <i class="bi bi-circle"></i>
                                        <span>Service Request</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="schedule.php">
                                        <i class="bi bi-circle"></i>
                                        <span>Schedules</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        
                        <hr class="sidebar-divider">

                        
                
                `);
            }
    
</script> -->
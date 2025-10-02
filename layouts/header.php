<head>

    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <style>
        /* Header Styles */
        /* Header Styles */
        .header {
            background-color: #1e3a8a;
            /* Blue background color */
            color: #ffffff;
            /* White text color */
            padding: 15px 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            /* Optional shadow for depth */
        }

        .header .logo h1 {
            color: #ffffff;
            /* Logo text color */
            font-size: 20px;
            font-weight: bold;
            margin-left: 10px;
        }

        .navmenu ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            align-items: center;
        }

        .navmenu ul li {
            margin: 0 15px;
        }

        .navmenu ul li a {
            color: #ffffff;
            /* White links */
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .navmenu ul li a.active,
        .navmenu ul li a:hover {
            color: #ffd700;
            /* Gold color for active and hover state */
        }

        .mobile-nav-toggle {
            color: #ffffff;
            /* White icon for mobile nav toggle */
        }

        .btn-getstarted {
            padding: 8px 20px;
            background-color: #ffd700;
            /* Gold button background */
            color: rgb(2, 59, 119);
            /* Blue text */
            font-size: 14px;
            font-weight: bold;
            border-radius: 4px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .btn-getstarted:hover {
            background-color: #ffc107;
            /* Slightly darker gold on hover */
        }
    </style>
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="index.php" class="logo d-flex align-items-center me-auto">
            <img src="assets/img/logo1.png" alt="Logo" style="width: 200px; height: auto;">
            <h1 class="sitename">Social Service And Welfare Management System</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="landing_index.php#hero" class="active">Home</a></li>
                    <li><a href="landing_index.php#about">About</a></li>
                    <li><a href="landing_index.php#services">Services</a></li>
                    <li><a href="landing_index.php#contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <!-- Updated Login Button with Loading Spinner -->
             <a class="btn-getstarted" id="loginButton" href="localhost/sswms/frontend/login.php">
                <span id="loginText">Login</span>
                <span id="loadingSpinner" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
            </a> 

        </div>
    </header>

    <!-- Add this script at the end of your HTML file or in a separate JS file -->
    <script>
        document.getElementById('loginButton').addEventListener('click', function(event) {
            // Prevent the default link behavior
            event.preventDefault();

            // Show the loading spinner and hide the login text
            document.getElementById('loginText').classList.add('d-none');
            document.getElementById('loadingSpinner').classList.remove('d-none');

            // Simulate a delay (e.g., for an API call or page load)
            setTimeout(function() {
                // Redirect to the login page after the delay
                window.location.href = 'http://localhost/sswms/frontend/login.php';
            }, 2000); // Adjust the delay time as needed
        });
    </script>


    <!-- Main JS File -->
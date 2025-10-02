<!DOCTYPE php>
<php lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title> SSWMS Landing</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <?php include './layouts/header.php'; ?>
    <?php include './modal_landing/modals/modal_scholarship.php'; ?>
    <?php include './modal_landing/modals/tupad.php'; ?>
    <?php include './modal_landing/modals/4ps.php'; ?>
    <?php include './modal_landing/modals/DayCare.php'; ?>


    <main class="main">

      <!-- Hero Section -->
      <section id="hero" class="hero section">
        <div class="hero-bg">
          <img src="assets/img/hero-bg-light.webp" alt="">
        </div>
        <div class="container text-center">
          <div class="d-flex flex-column justify-content-center align-items-center">
            <h1 data-aos="fade-up">Welcome to <span>SSWMS</span></h1>
            <p data-aos="fade-up" data-aos-delay="100">Quick apply a beneficiary now, And Rule The World!!<br></p>
            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
              <a href="#about" class="btn-get-started">Get Started</a>
              <a href="https://www.youtube.com/watch?v=wNON7hOi17k" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>

            <!-- <img src="assets/img/hero-services-img.webp" class="img-fluid hero-img" alt="" data-aos="zoom-out" data-aos-delay="300"> -->

          </div>
        </div>

      </section><!-- /Hero Section -->

      <!-- Featured Services Section -->
      <section id="featured-services" class="featured-services section light-background">

        <div class="container">

          <div class="row gy-4">

            <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="100">
              <div class="service-item d-flex">
                <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
                <div>
                  <h4 class="title"><a href="#" class="stretched-link">Employment Assistance</a></h4>
                  <p class="description">Providing support for job seekers to find sustainable employment opportunities.</p>
                </div>
              </div>
            </div>
            <!-- End Service Item -->

            <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="200">
              <div class="service-item d-flex">
                <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
                <div>
                  <h4 class="title"><a href="#" class="stretched-link">Community Support</a></h4>
                  <p class="description">Offering resources and programs for individuals and families in need.</p>
                </div>
              </div>
            </div>
            <!-- End Service Item -->

            <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="300">
              <div class="service-item d-flex">
                <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
                <div>
                  <h4 class="title"><a href="#" class="stretched-link">Skill Development</a></h4>
                  <p class="description">Helping individuals gain new skills through training programs and workshops.</p>
                </div>
              </div>
            </div>
            <!-- End Service Item -->

          </div>

        </div>


      </section><!-- /Featured Services Section -->

      <section id="mission-vision" class="mission-vision section">

        <div class="container">

          <div class="row gy-4">

            <!-- Mission & Vision Content -->
            <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
              <p class="who-we-are">Our Mission & Vision</p>
              <h3>Uplifting Lives, Strengthening Communities</h3>
              <p class="fst-italic">
                We strive to create a society where every individual has access to opportunities, resources, and support to lead a dignified life.
              </p>
              <ul>
                <li><i class="bi bi-check-circle"></i> <span> Advocating for inclusive social policies and sustainable development.</span></li>
                <li><i class="bi bi-check-circle"></i> <span> Empowering families and communities through education, livelihood, and capacity-building programs.</span></li>
                <li><i class="bi bi-check-circle"></i> <span> Strengthening partnerships with government agencies, NGOs, and stakeholders for holistic development.</span></li>
              </ul>
              <a href="#" class="read-more"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
            </div>
            <!-- End Mission & Vision Content -->

            <!-- Mission & Vision Images -->
            <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">
                <div class="col-lg-6">
                  <img src="assets/img/about-company-1.jpg" class="img-fluid" alt="About Us Image 1">
                </div>
                <div class="col-lg-6">
                  <div class="row gy-4">
                    <div class="col-lg-12">
                      <img src="assets/img/about-company-2.jpg" class="img-fluid" alt="About Us Image 2">
                    </div>
                    <div class="col-lg-12">
                      <img src="assets/img/about-company-3.jpg" class="img-fluid" alt="About Us Image 3">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Mission & Vision Images -->

          </div>

        </div>

      </section>



      </section><!-- /Features Section -->

      <section id="services" class="services section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Services</h2>
          <p>Explore the various services we offer to meet your needs in public safety, health, and community welfare.</p>
        </div><!-- End Section Title -->

        <div class="container">

          <div class="row g-5">
            

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100" data-bs-toggle="modal" data-bs-target="#modal_scholarships">
              <div class="service-item item-cyan position-relative">
              <i class="bi bi-mortarboard-fill icon"></i>
              <div>
                  <h3>Scholarships Services</h3>
                  <p>Scholarships</p>
                  <ahref="#" class="read-more stretched-link">Learn More <i class="bi bi-arrow-right"></i></ahref=>
                </div>
              </div>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100" data-bs-toggle="modal" data-bs-target="#tupadModal">
              <div class="service-item item-teal position-relative">
              <i class="bi bi-people-fill icon"></i>
              <div>
                  <h3>TUPAD</h3>
                  <p>tupad</p>
                  <a class="read-more stretched-link">Learn More <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>

              <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100" data-bs-toggle="modal" data-bs-target="#fourPsModal">
                <div class="service-item item-cyan position-relative">
                <i class="bi bi-people-fill icon"></i>
                <div>
                    <h3>4ps</h3>
                    <p>Pantawid Pamilyang Pilipino Program</p>
                    <ahref="#" class="read-more stretched-link">Learn More <i class="bi bi-arrow-right"></i></ahref=>
                  </div> 
                </div>
              </div>


              <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100" data-bs-toggle="modal" data-bs-target="#daycareModal">
                <div class="service-item item-cyan position-relative">
                <i class="bi bi-house-heart-fill icon"></i>
                
                  <div>
                    <h3>Daycare Center</h3>
                    <p>Providing preschool education for young children</p>
                    <ahref="#" class="read-more stretched-link">Learn More <i class="bi bi-arrow-right"></i></ahref=>
                  </div> 
                </div>
              </div>



          </div>
          

        </div>

      </section><!-- End Services Section -->
      <!-- /Services Section -->

      <!-- More Features Section -->
      <section id="more-features" class="more-features section">

        <div class="container">

          <div class="row justify-content-around gy-4">

            <div class="col-lg-6 d-flex flex-column justify-content-center order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
              <h3>Social Services and Welfare Programs</h3>
              <p>Our social services aim to improve the quality of life for our citizens by providing essential support to those in need. We focus on health, education, public safety, and general welfare.</p>
              <a href="https://educationandscholarship.lgu2.com/" target="_blank">Visit Our System</a>

              <div class="row">

                <div class="col-lg-6 icon-box d-flex" data-bs-toggle="modal" data-bs-target="#add_modal_appointments">
                <i class="bi bi-activity icon"></i>
                <div>
                    <h3>Social Services and Welfare Programs</h3>
                    <p>Our social services aim to improve the quality of life for our citizens by providing essential support to those in need. We focus on health, education, public safety, and general welfare.</p>
                  </div>
                </div><!-- End Icon Box -->


                <div class="col-lg-6 icon-box d-flex">
                  <i class="bi bi-briefcase flex-shrink-0"></i>
                  <div>
                    <h4>Tulong Panghanapbuhay sa Ating Disadvantaged/Displaced Workers (TUPAD) program</h4>
                    <p>​The Tulong Panghanapbuhay sa Ating Disadvantaged/Displaced Workers (TUPAD) program, administered by the Department of Labor and Employment (DOLE), offers temporary employment to marginalized, underemployed, self-employed, and displaced workers in the Philippines. This initiative aims to provide immediate financial assistance through short-term community projects.</p>
                  </div>
                </div><!-- End Icon Box -->

                <div class="col-lg-6 icon-box d-flex">
                <i class="bi bi-people-fill text-primary fs-3"></i>
                  <div> 
                    <h4>Pantawid Pamilyang Pilipino Program (4Ps)</h4>
                    <p>The Pantawid Pamilyang Pilipino Program (4Ps) is a conditional cash transfer (CCT) program of the Philippine government designed to alleviate poverty by providing financial assistance to low-income families. It is implemented by the Department of Social Welfare and Development (DSWD) and aims to improve health, education, and nutrition among poor households, particularly children and pregnant women.</p>
                  </div>
                </div><!-- End Icon Box -->

                <div class="col-lg-6 icon-box d-flex">
                  <i class="bi bi-house-door flex-shrink-0"></i>
                  <div>
                    <h4>Barangay Daycare Center Enrollment</h4>
                    <p>Barangay Daycare Centers provide early childhood education for young children, typically ages 3 to 5, in local communities. The goal is to prepare children for formal schooling while also promoting their physical, cognitive, emotional, and social development in a safe and nurturing environment. Enrolling a child in a barangay daycare center is a vital step in ensuring they receive a quality early childhood education, especially for families who may not have access to private preschools.</p>
                  </div>
                </div><!-- End Icon Box -->

              </div>

            </div>

            <div class="features-image col-lg-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">
              <img src="assets/img/features-3.jpg" alt="">
            </div>

          </div>

        </div>

      </section><!-- /Social Services Information Section -->

      <!-- Pricing Section -->


      <!-- Testimonials Section -->

      <!-- Contact Section -->
   
    </main>



    <?php include './layouts/footer.php'; ?>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->

    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="./assets/js/jquery/jquery.min.js"></script>
    <script src="./frontend/assets/js/sweetalert2@11.js"></script>

    <!-- <script>
      const result = LoginChecker();
      var status = result.status


      function funcOpenModal(modalid) {

        if (status == "valid") {
          console.log(status);
          $("#" + modalid).modal('show');

        } else {
          alert('Login ka muna ENGOT')
        }
      }
    </script> -->
    </body>

</php>
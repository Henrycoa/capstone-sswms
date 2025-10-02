<!DOCTYPE html>
<html lang="en">

<?php include './layouts/navbar.php'; ?>
<?php include './layouts/sidebar.php'; ?>

<body>
<?php include './components/census/census_view.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Census Data</title>
    <!-- Tailwind CSS CDN -->
</head>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Census</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active">Data</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<!-- Include DataTables CSS & JS -->
<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <!-- Header with Button -->
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="card-title">Census Tables</h5>
       
          </div>
          <!-- Search & Filters -->
          <div class="row mb-3">
            <div class="col-md-2">
              <input type="text" id="searchInput" class="form-control" placeholder="Search beneficiary..">
            </div>
            <div class="col-md-3">
              <select id="filterSchemeType" class="form-select sel_filter" data-field="application_type">
                <option value="">Application Form Type</option>
                <option value="Financial Assistance">Financial Assistance</option>
                <option value="Educational Support">Educational Support</option>
                <option value="4PS">4PS</option>
                <option value="TUPAD">TUPAD</option>
              </select>
            </div>
            <div class="col-md-3">
              <select id="filterScholarshipYear" class="form-select sel_filter" data-field="application_year" data-name="jomar">
                <option value="">All Years</option>
                <option value="2025">2025</option>
                <option value="2024">2024</option>
                <option value="2023">2023</option>
              </select>
            </div>
          </div>

          <!-- Table -->
          <div class="table_census">
            <table class="table table-bordered datatable" id="table_census">
              <thead>
                <tr>
                  <th>Full Name</th>
                  <th>gender</th>
                  <th>areaofcencusstreet</th>

                </tr>
              </thead>
              <tbody>
                <!-- Dynamic Data Will Be Inserted Here -->
              </tbody>
            </table>

            <!-- <button type="button" class="btn btn-danger " onclick="previous()" id="btn_previous"> previous </button>
            <button type="button" class="btn btn-danger " onclick="next()" id="btn_next"> next </button> -->
          </div>

        </div>
      </div>
    </div>
  </div>
</section>


</main><!-- End #main -->

</body>

</html>
<script src="./assets/js/jquery/jquery.min.js"></script>

<script>
     function funcviewcensus(item) {
    const data = JSON.parse(item);

    var staffaccountcreate	 = data.staffaccountcreate;
    var dateofcencus = data.dateofcencus;
    var firstname = data.firstname;
    var middlename = data.middlename;
    var lastname = data.lastname;
    var birthday = data.birthday;
    var age = data.age;
    var gender = data.gender;
    var civilstatus = data.civilstatus;
    var currentschoolenrollment = data.currentschoolenrollment;
    var educationalattainment = data.educationalattainment;
    var employmentstatus = data.employmentstatus;
    var occupation = data.occupation;
    var housenumber = data.housenumber;
    var streetname = data.streetname;
    var barangay = data.barangay;
    var city = data.city;
    var province = data.province;
    var housetype = data.housetype;
    var healthstatus = data.healthstatus;
    var disabilitystatus = data.disabilitystatus;
    var existinghealthcondition = data.existinghealthcondition;
    var fullyimmunized = data.existinghealthcondition;
    var covid19vaccination = data.existinghealthcondition;
    var housingtype = data.existinghealthcondition;
    var yearofconstructed = data.existinghealthcondition;
    var residentlived = data.existinghealthcondition;
    var residentlived = data.existinghealthcondition;
    var emergencycontactname = data.existinghealthcondition;
    var emergencycontactnumber = data.existinghealthcondition;
    var relationshiptoemergencycontact = data.existinghealthcondition;
    var numberofhousemembers = data.existinghealthcondition;


    var householdMembers = data.householdMembers;

    var firstname = data.firstname;
    var middlename = data.middlename;
    var lastname = data.lastname;
    var birthday = data.birthday;
    var age = data.age;
    var gender = data.gender;
    var civilstatus = data.civilstatus;
    var currentschoolenrollment = data.currentschoolenrollment;
    var educationalattainment = data.educationalattainment;
    var occupation = data.occupation;
    var healthstatus = data.healthstatus;
    var disabilitystatus = data.disabilitystatus;
    var disabilitytype = data.disabilitytype;
    var existinghealthcondition = data.existinghealthcondition;
    var fullyimmunized = data.fullyimmunized;
    var covid19vaccination = data.covid19vaccination;



    var relationship = data.relationship;
    var firstname = data.firstname;
    var middlename = data.middlename;
    var lastname = data.lastname;
    var birthday = data.birthday;
    var age = data.age;
    var gender = data.gender;
    var civilstatus = data.civilstatus;
    var currentschoolenrollment = data.currentschoolenrollment;
    var educationalattainment = data.educationalattainment;
    var employmentstatus = data.employmentstatus;
    var occupation = data.occupation;
    var healthstatus = data.healthstatus;
    var disabilitytype = data.disabilitytype;
    var existinghealthcondition = data.existinghealthcondition;
    var fullyimmunized = data.fullyimmunized;
    var covid19vaccination = data.covid19vaccination;


    $("#staffaccountcreate").html(staffaccountcreate	);
    $("#dateofcencus").html(dateofcencus);
    $("#areaofcencusstreet").html(areaofcencusstreet);
    $("#firstname").html(firstname);
    $("#middlename").html(middlename);
    $("#lastname").html(lastname);
    $("#birthday").html(birthday);
    $("#age").html(age);
    $("#gender").html(gender);
    $("#civilstatus").html(civilstatus);
    $("#currentschoolenrollment").html(currentschoolenrollment);
    $("#educationalattainment").html(educationalattainment);
    $("#employmentstatus").html(employmentstatus);
    $("#occupation").html(occupation);
    $("#housenumber").html(housenumber);
    $("#streetname").html(streetname);
    $("#barangay").html(barangay);
    $("#city").html(city);
    $("#province").html(province);
    $("#housetype").html(housetype);
    $("#healthstatus").html(healthstatus);
    $("#disabilitystatus").html(disabilitystatus);
    $("#existinghealthcondition").html(existinghealthcondition);
    $("#fullyimmunized").html(fullyimmunized);
    $("#covid19vaccination").html(covid19vaccination);
    $("#housingtype").html(housingtype);
    $("#disabilitystatus").html(disabilitystatus);
    $("#yearofconstructed").html(yearofconstructed);
    $("#residentlived").html(residentlived);
    $("#mobilenumber").html(mobilenumber);
    $("#emergencycontactname").html(emergencycontactname);

    $("#relationshiptoemergencycontact").html(relationshiptoemergencycontact);
    $("#numberofhousemembers").html(numberofhousemembers);


    $("#relationship").html(relationship);
    $("#firstname").html(firstname);
    $("#middlename").html(middlename);
    $("#lastname").html(lastname);
    $("#birthday").html(birthday);
    $("#age").html(age);
    $("#gender").html(gender);
    $("#civilstatus").html(civilstatus);
    $("#currentschoolenrollment").html(currentschoolenrollment);
    $("#educationalattainment").html(educationalattainment);
    $("#employmentstatus").html(employmentstatus);
    $("#occupation").html(occupation);
    $("#healthstatus").html(healthstatus);
    $("#disabilitystatus").html(disabilitystatus);
    $("#disabilitytype").html(disabilitytype);
    $("#existinghealthcondition").html(existinghealthcondition);
    $("#fullyimmunized").html(fullyimmunized);
    $("#covid19vaccination").html(covid19vaccination);




    $("#relationship").html(relationship);

    $("#firstname").html(firstname);
    $("#middlename").html(middlename);
    $("#lastname").html(lastname);
    $("#birthday").html(birthday);
    $("#age").html(age);
    $("#gender").html(gender);
    $("#civilstatus").html(civilstatus);
    $("#currentschoolenrollment").html(currentschoolenrollment);
    $("#educationalattainment").html(educationalattainment);
    $("#employmentstatus").html(employmentstatus);
    $("#occupation").html(occupation);
    $("#disabilitystatus").html(disabilitystatus);
    $("#disabilitytype").html(disabilitytype);
    $("#existinghealthcondition").html(existinghealthcondition);
    $("#fullyimmunized").html(fullyimmunized);
    $("#covid19vaccination").html(covid19vaccination);
  


    $("#view_modal_census").modal('show');

  }
    $(document).ready(function() {

 
        $.ajax({
            url: `<?php echo $url; ?>/census/crud.php`,
            type: 'GET',
            dataType: 'json',
            // headers: {
            //     'Authorization': `Bearer ${token}`
            // },
            success: function(response) {
                $("#table_census tbody").html("");

                const data = response.message.data;


                // Check if data is available
                if (data && data.length > 0) {
                    let rows = ''; // Initialize an empty string to hold the rows

                    // Loop through each item in the data array
                    data.forEach(item => {


                        console.log("ggbyHenry",item);

                        rows += `
                            <tr id="row_${item._id}">
                                <td>${item.firstname} ${item.middlename} ${item.lastname}</td>
                                <td>${item.staffaccountcreate}</td>
                                <td>${item.dateofcencus}</td>
                                <td><span class="bg-success">${item.areaofcencusstreet}</span></td>
                                <td>${item.firstname}</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm me-1" 
                                    onclick="funcviewcensus('${JSON.stringify(item).replace(/"/g, '&quot;')}');">VIEW</button>
                                </td>
                            </tr>
                        `;
                    });

                    // Append the rows to the table body
                    $("#table_census tbody").append(rows);
                } else {
                    // If no data, display a message
                    $("#table_census tbody").append(`
                        <tr>
                            <td colspan="4" class="text-center">NO DATA</td>
                        </tr>
                    `);
                }
            },
            error: function(xhr, status, error) {
                // Log the error
                console.error("Error fetching data: " + error);

                // Optionally display an error message in the table
                $("#table_census tbody").html(`
                    <tr>
                        <td colspan="4" class="text-center">Error loading data</td>
                    </tr>
                `);
            }
        });
    });
</script>

 
</script>
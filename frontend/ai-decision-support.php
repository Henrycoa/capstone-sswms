<!DOCTYPE html>
<html lang="en">
<?php include './url.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Decision Support - Welfare Eligibility</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<?php include './layouts/navbar.php'; ?>
<?php include './layouts/sidebar.php'; ?>

<body>

    =

    <?php include './components/benefeciary/add_appointment_modal.php'; ?>
    <?php include './components/benefeciary/edit_benefeciary_modal.php'; ?>
    <?php include './components/benefeciary/view_benefeciary_modal.php'; ?>
    <?php include './components/scholarships_modal/scholarships_add.php'; ?>



    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Beneficiary</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">Data</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <form id="eligibilityForm">
            Age: <input type="number" name="age" required><br>
            Income: <input type="number" name="income" required><br>

            Employment Status:
            <select name="employment_status">
                <option value="1">Employed</option>
                <option value="0">Unemployed</option>
            </select><br>

            Health Condition:
            <select name="health_condition">
                <option value="1">Has Medical Condition</option>
                <option value="0">Healthy</option>
            </select><br>

            Family Status:
            <select name="family_status">
                <option value="1">Single Parent</option>
                <option value="0">Married</option>
            </select><br>

            <input type="submit" value="Check Eligibility">
        </form>
        <div id="result"></div>

        <script>
            $(document).ready(function() {
                $("#eligibilityForm").submit(function(e) {
                    e.preventDefault();

                    $.ajax({
                        type: "POST",
                        url: `<?php echo $url; ?>/ai-decision-support/ai.php`,
                        contentType: "application/json",
                        data: JSON.stringify({
                            age: $("input[name='age']").val(),
                            income: $("input[name='income']").val(),
                            employment_status: $("select[name='employment_status']").val(),
                            health_condition: $("select[name='health_condition']").val(),
                            family_status: $("select[name='family_status']").val()
                        }),
                        dataType: "json",
                        beforeSend: function() {
                            $("#result").html("<p style='color: blue;'>Checking eligibility...</p>");
                        },
                        success: function(response) {
                            if (response.error) {
                                $("#result").html(`<p style='color: red;'>${response.error}</p>`);
                            } else {
                                $("#result").html(`
                                <h3>Eligibility: ${response.eligibility}</h3>
                                <p><strong>AI Explanation:</strong> ${response.explanation}</p>
                            `);
                            }
                        },
                        error: function() {
                            $("#result").html("<p style='color: red;'>Error: Unable to process request.</p>");
                        }
                    });
                });
            });
        </script>

</body>

</html>
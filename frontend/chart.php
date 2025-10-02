<?php include './url.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>amCharts AJAX Donut Chart Example</title>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- amCharts 5 Core & Charts -->
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

        <style>
            #chartdiv {
                width: 100%;
                height: 500px;
            }
        </style>
</head>
<body>

<div id="chartdiv"></div>

<script>
    $(document).ready(function () {
        $.ajax({
            url: `<?php echo $url; ?>/appointment/chart.php`, // URL to your PHP script
            method: "GET",
            dataType: "json",
            success: function (data) {
                renderDonut(data.message);
            },
            error: function (xhr, status, error) {
                console.error("AJAX error:", status, error);
            }
        });

        function renderDonut(data) {
            am5.ready(function () {
                // Create root element
                var root = am5.Root.new("chartdiv");

                // Set theme
                root.setThemes([
                    am5themes_Animated.new(root)
                ]);

                // Create the chart
                var chart = root.container.children.push(
                    am5percent.PieChart.new(root, {
                        layout: root.verticalLayout
                    })
                );

                // Create series
                var series = chart.series.push(
                    am5percent.PieSeries.new(root, {
                        valueField: "value",
                        categoryField: "category",
                        alignLabels: true
                    })
                );

                // Make it a donut
                series.set("innerRadius", am5.percent(50));

                // Set data
                series.data.setAll(data);

                // Animate in
                series.appear(1000, 100);
            });
        }
    });
</script>

</body>
</html>

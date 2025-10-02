<script>
    function chart() {
        $.ajax({
            url: `<?php echo $url; ?>/appointment/chart.php`,
            type: 'GET',
            contentType: 'application/json',
            // data: JSON.stringify(formData),
            dataType: 'json',
            success: function(response) {
                const status = response.status;
                const message = response.message;

              
                console.log(message);

            },
            error: function(xhr, status, error) {
                alert("An error occurred: " + error);
            }
        });
    }
</script>
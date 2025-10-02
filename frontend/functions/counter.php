<script>
    function counter() {
        $.ajax({
            url: `<?php echo $url; ?>/appointment/counter.php`,
            type: 'GET',
            contentType: 'application/json',
            // data: JSON.stringify(formData),
            dataType: 'json',
            success: function(response) {
                const status = response.status;
                const message = response.message;

                $(".henrypogi").html(message[0]?.application_type + ": " + message[0]?.count);
                $(".henrypogiTupad").html(message[1].application_type + ": " + message[1].count);

                console.log(message);

            },
            error: function(xhr, status, error) {
                alert("An error occurred: " + error);
            }
        });
    }
</script>
<?php
    // Function to fetch data from the API
    function fetchCensusData($url) {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);

        $response = curl_exec($ch);

        if(curl_errno($ch)) {
            echo 'Curl error: ' . curl_error($ch);
        }

        curl_close($ch);

        return json_decode($response, true);
    }
    // API URL
    $apiUrl = 'https://backend-api-5m5k.onrender.com/api/cencus';
    $censusData = fetchCensusData($apiUrl);
    
    echo json_encode([
        'status'=>'1',
        'message'=>$censusData
    ]);
?>
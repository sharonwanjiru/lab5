<?php
//access token
    // $url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
    
    // $curl = curl_init();
    // curl_setopt($curl, CURLOPT_URL, $url);
    // $credentials = base64_encode('uo1HTtHIOAOXAdtAKAJhmHGQuMXZ04s8:s81E3YDAjFaM74uW');
    // curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Basic '.$credentials)); //setting a custom header
    // curl_setopt($curl, CURLOPT_HEADER, true);
    // curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
    // curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

    // $curl_response = curl_exec($curl);

    // echo json_decode($curl_response)->access_token;
    $consumerKey = 'uo1HTtHIOAOXAdtAKAJhmHGQuMXZ04s8'; //Fill with your app Consumer Key
	$consumerSecret = 's81E3YDAjFaM74uW'; // Fill with your app Secret

	$headers = ['Content-Type:application/json; charset=utf8'];

	$url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';

	$curl = curl_init($url);
	curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt($curl, CURLOPT_HEADER, FALSE);
	curl_setopt($curl, CURLOPT_USERPWD, $consumerKey.':'.$consumerSecret);
	$result = curl_exec($curl);
	$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
	$result = json_decode($result);

	$access_token = $result->access_token;

	echo $access_token;
	
	curl_close($curl);
?>
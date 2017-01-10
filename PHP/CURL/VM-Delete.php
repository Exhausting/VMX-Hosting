<?php
$uuid = $_POST["UUID"];
$url = 'http://192.168.190.131:28080/yes/domain/'.$uuid ;
//$url = 'https://api.vmxhosting.nl/domain/'.$uuid;
//uuid e11d34b9-d97d-48ca-a132-ee554c7763e6


$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Accept: application/json'
		)
);

$result = curl_exec($ch);
$errors = curl_error($ch);
$response = curl_getinfo($ch, CURLINFO_HTTP_CODE);

//testinformatie weergeven
echo "<br>resultaat:  ". $result;
echo "<br>Errors:  ". $errors;
echo "<br>Http error code:  ".$response;
echo "<br>URL: ".$url;

//close connection
curl_close($ch);
?>

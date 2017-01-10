<?php
$name = $_POST["name"];
$memory = $_POST["memory"];
$storage = $_POST["storage"];

$url = 'http://192.168.190.131:28080/yes/domain?vmName='.$name.'&memory='.$memory.'&vmImage=%2Fpath%2Fto%2Fimage.iso&storage='.$storage;

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Accept: application/json'
		)
);

$result = curl_exec($ch);
$errors = curl_error($ch);
$response = curl_getinfo($ch, CURLINFO_HTTP_CODE);

echo "<br>resultaat:  ". $result;
echo "<br>Errors:  ". $errors;
echo "<br>Http error code:  ".$response;
echo "<br>URL: ".$url;
//close connection
//curl_close($ch);
?>

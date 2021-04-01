
<?php
header("location:index.php");
// menangkap data nama dengan method nama
$ledState = $_GET['led_state'];
$bencana = 1;
$url = "{\r\n  \"m2m:cin\": {\r\n    \"con\": \"{\\\"led_state\\\":" . $ledState . ",\\\"change\\\":" . $bencana . "}\"\r\n  }\r\n}";
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://platform.antares.id:8443/~/antares-cse/antares-id/helpme/helpapp",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => $url,
  CURLOPT_HTTPHEADER => array(
    "X-M2M-Origin: 7921411b92d84e8f:6346c94b054c9983",
    "Content-Type: application/json;ty=4",
    "Accept: application/json"
  ),
));

$response = curl_exec($curl);

curl_close($curl);



?>
   

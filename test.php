<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://202.162.232.200/BulkSms/SingleMsgApi?feedid=393745&To=6290318248&Text=Your%20Employer%20registration%20number%20in%20the%20Karmasangbad%20portal%20is%20ABC.%20Labour%20Dept%2C%20WB&Username=7059457070&Password=For80tt%40n%40p1&async=1',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
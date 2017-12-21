<?php
// die;
 $site_location = $_SERVER['REQUEST_SCHEME'] . "://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
 
$headers = array(
    'Range: bytes=2000-'
    );
$ch = curl_init();
$curlConfig = array(
    CURLOPT_URL            =>  $site_location . "seek.php?file=ARABIC.TXT",
    CURLOPT_POST           => true,
    CURLOPT_HTTPHEADER 		=> $headers,
    CURLOPT_RETURNTRANSFER => true,
    // CURLOPT_RANGE			=> "199",
    CURLOPT_POSTFIELDS     => array(
        'field1' => 'some date',
        'field2' => 'some other data',
    )
);

 
curl_setopt_array($ch, $curlConfig);
$result = curl_exec($ch);
curl_close($ch);
echo "<pre>";
echo $result;
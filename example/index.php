<!-- <!DOCTYPE html>
<html>
<head>
    <title>html5 audio player on iPhone</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
audio::-internal-media-controls-download-button {
    display:none;
}
audio::-webkit-media-controls-enclosure {
    overflow:hidden;
}
audio::-webkit-media-controls-panel {
    width: calc(100% + 33px);
}  
</style>
</head>
<body>
<audio controls preload="auto" style="width:100%;">
    <source src="seek.php" type="audio/mpeg">
    Your browser does not support the audio element.
</audio><br />
</body>
</html> -->

<?php
$headers = array(
                        'Authorization: key=asdas',
                        // 'Content-Type: application/json',
                        'Range: bytes=2000-'
                    );
$ch = curl_init();
$curlConfig = array(
    CURLOPT_URL            => "http://localhost/shubham/seek/seek.php",
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
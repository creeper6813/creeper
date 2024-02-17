
<?php

$apiUrl = 'https://api.tik.fail/api/grab';

$tiktokUrl = $_POST['url'];

$data = array('url' => $tiktokUrl);

$options = array(

  'http' => array(

    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",

    'method'  => 'POST',

    'content' => http_build_query($data),

  ),

);

$context  = stream_context_create($options);

$response = file_get_contents($apiUrl, false, $context);

if ($response === false) {

  echo 'Terjadi kesalahan';

} else {

  echo $response;

}

?>

 

 


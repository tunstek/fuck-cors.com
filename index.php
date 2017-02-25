<?php

/*

SIMPLE WORKAROUND FOR CORS

*/


header("Access-Control-Allow-Origin: *");


//Check if a url has been given
if(isset($_GET['url']) && !empty($_GET['url'])) {

  // Get cURL resource
  $curl = curl_init();
  // Set Options
  curl_setopt_array($curl, array(
      CURLOPT_RETURNTRANSFER => 1,
      CURLOPT_URL => $_GET['url'],
      CURLOPT_USERAGENT => 'Fuck_CORS'
  ));
  // Send the request & save response to $response
  $response = curl_exec($curl);

  // Close request to clear up some resources
  curl_close($curl);

  //Echo respone in the webpage
  echo $response;
}
else {
    header('Location: main.html');
    //echo(readfile("main2.html"));
}

?>

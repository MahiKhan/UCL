<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<body>

<?php
// Initialise curl session
$my_curl = curl_init();

// Could make this file into a php class, and then create objects with a url parameter for our different api urls

// Has a more extensive api but needs stuff to be installed

$url = 'https://graph.facebook.com/100000328952339';

// define the url we are sending a request to
curl_setopt($my_curl,CURLOPT_URL,$url); 

// Capture the result instead of outputting it
curl_setopt($my_curl,CURLOPT_RETURNTRANSFER, TRUE); 

// Set a timeout for the connection attempt and processing
curl_setopt($my_curl,CURLOPT_CONNECTTIMEOUT, 10); 
curl_setopt($my_curl, CURLOPT_TIMEOUT, 5);

// If we are not on an SSL connection, but the feed we are requesting is is,  -> basically, the url is https, we're probs on http, so stop it making sure both are on https, 
// we need to disable this option to stop cURL trying to make an SSL connection
curl_setopt($my_curl, CURLOPT_SSL_VERIFYPEER, false); 

// we probably don't want the header in this scenario, although it might be useful for debugging
curl_setopt($my_curl, CURLOPT_HEADER, FALSE); 

// Tell cURL to fail if it encounters a 404 error or similar
curl_setopt($my_curl, CURLOPT_FAILONERROR, TRUE); 

// Execute the request
$data = curl_exec($my_curl); 

if ($data) {
    
    // convert from json to php array
    $obj_array = json_decode($data, true);
    

    if (is_array($obj_array)) {
    
    	echo $obj_array['name'];
    
    	echo '  - <a href=" ' . $obj_array['link'] . ' "> Facebook </a>';
		// Do something now with the data
		    
        // See contnets of array: 
        /* 
        echo '<pre>';
       print_r($obj_array);
        echo '</pre>';  */ 
        
        
        
    } else {
        echo 'Error - couldnt convert json to php array ';
        echo '<pre>';
        var_dump($obj_array);
        //print_r($obj_array);
        echo '</pre>';
    }
    
} else {
    // Get the error codes and messages
    if(curl_errno($my_curl)) {
        echo 'Curl error: ' . curl_errno($my_curl) . ' :: ' . curl_error($my_curl);
    }
}
?>
    </body>
</html>

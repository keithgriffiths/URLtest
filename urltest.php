<?php

// URL to check
$url = "https://www.example.com";

// Use the built-in PHP function "get_headers" to retrieve the headers of the URL
$headers = @get_headers($url);

// Check the status code in the headers to determine if the URL is up or down
$status = substr($headers[0], 9, 3);

// Display the status of the URL
if ($status == 200) {
    echo "The URL is up and running!\n";
} else {
    echo "The URL is down.\n";
}

?>

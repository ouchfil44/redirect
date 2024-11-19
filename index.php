<?php
// Fetch the visitor's IP address
$ipAddress = $_SERVER['REMOTE_ADDR'];

// Use an API to get the country based on IP address
$geoData = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ipAddress));

// Get the country name
$country = $geoData->geoplugin_countryName;

// List of countries for redirection to test1.com
$redirectCountries = ["Canada", "United Kingdom", "United States", "Australia"];

// Check the visitor's country and redirect accordingly
if (in_array($country, $redirectCountries)) {
    header("Location: https://test1.com");
    exit;
} else {
    header("Location: https://world1.com");
    exit;
}
?>

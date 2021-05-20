<?php
//number in pounds that we want to convert to kgs
$pounds = 140;
//floating point value for the pound to kg conversion
$lb_to_kg = 0.453592;
//use the var above to calculate pounds mulitplied by the kg conversion
$kilograms = $pounds * $lb_to_kg;
// display the pounds to kgs
echo "Weight: ";
echo $pounds;
echo " lb = ";
echo $kilograms;
echo "kg";

//number in miles we want to convert to kms
$miles = 2.5;
//floating point value for the miles to kms conversion
$mile_to_km = 1.60934;
//use the var above to calculate miles mulitplied by the kms conversion
$kilometers = $miles * $mile_to_km;
// display the miles to kms
echo "Distance: ";
echo $miles;
echo " miles = ";
echo $kilometers;
echo " km";
?>
<?php  function calculateArea($width, $height) { 
    $area = $width * $height;     return $area; 
} 
 
// Example: Call the function with specific values 
$rectangleWidth = 4; 
$rectangleHeight = 2; 
$areaResult = calculateArea($rectangleWidth, $rectangleHeight);  
// Display the result
 echo "The area of a rectangle with a width of $rectangleWidth and height of $rectangleHeight is $areaResult."; 
 
?> 

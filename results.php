<?php

  //Declare min and max
$userMin = $_POST['min'];
$userMax = $_POST['max'];

  //Declare Numbers variable
$numbers = "";

  // Declare Counter
$counter = $userMin;

if ($userMax < $userMin) {
  $numbers = "Please enter a min that is less that the max";
}

else if ($userMin == "" || $userMax == "") {
  $numbers = "Please enter a min and a max.";
}
 
else {
  // While loop
while ($counter <= $userMax) { 
  $numbers = $numbers . $counter . ", " ;
    $counter = $counter +1;
}
} 

echo $numbers;

?> 
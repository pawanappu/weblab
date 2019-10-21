<?php
$allTheStates = "Mississippi Alabama Texas Massachusetts Kansas";
$statesArray = [];
$states1 = explode(' ', $allTheStates);
$i = 0;
//states that ends in xas
foreach ($states1 as $state) {
 if (preg_match('/xas$/', ($state))) {
 $statesArray[$i] = ($state);
 $i = $i + 1;
 echo "<br>The States that ends in xas:" . $state;
 }
}
//states that begins with k and ends in s
foreach ($states1 as $state) {
 if (preg_match('/^k.*s$/i', ($state))) {
 $statesArray[$i] = ($state);
 $i = $i + 1;
 echo "<br>The states that begins with k ans ends in s:" . $state;
 }
}
//states that begins with M and ends in s
foreach($states1 as $state) {
if (preg_match('/^M.*s$/', ($state))) {
 $statesArray[$i] = ($state);
 $i = $i + 1;
 echo "<br>The states that begins with M and ends in s:" . $state;
}
}
//states that ends in a
foreach($states1 as $state) {
  if (preg_match('/a$/', ($state))) {
 $statesArray[$i] = ($state);
 $i = $i + 1;
 echo "<br>The states that ends in a:" . $state;
}
}
foreach ($statesArray as $element => $value) {
 echo( "<br>" . $value . " is the element " . $element);
}
?>

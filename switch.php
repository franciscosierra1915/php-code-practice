<?php 
$i = 1;
switch($i) {
    case "1":
        echo 'One';
        break;
    case "2":
        echo 'Two';
    break;
}

$x=1;
switch ($x) {
  case 1:
    echo "One";
  case 2:
    echo "Two";
  case 3:
    echo "Three";
  default:
    echo "No match";
}

//Outputs "OneTwoThreeNo match"

for ($i=0;$i<=50;$i++)  {
    echo $i;
    if ($i==5) {
        break;
    }
  }
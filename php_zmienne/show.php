<?php
$x = 75;
$y = 25;
 
function addition() {
    $temp = 100;
    $GLOBALS['temp2']=100;
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'] + $temp;
}
 
addition();
echo $z;
echo $temp;
echo $temp2;
?> 
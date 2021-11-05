<?php
$a = 15;
$b = 10;
$sum = " ";
function outside(){
    global $a , $b , $sum;
    $sum = $a + $b;
    
}
outside();
echo "Total sum is " . $sum;

?>

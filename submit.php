<?php
$firstNumber=$_POST['num'];
$secondNumber=$_POST['2num'];
$ThirdNumber=$_POST['3num'];
$totalCFT =$firstNumber*$secondNumber*$ThirdNumber;
echo "Total CFT: " . $totalCFT/144;
// if(isset($number)) {

//     echo "Empty NUmber";
// }
// if($number%4==0) {
// echo  "Leap Year";
// }
// else {
//     echo  "Not";
// }
?>
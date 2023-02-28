<?php
$firstNumber=$_POST['num'];
$secondNumber=$_POST['2num'];
$ThirdNumber=$_POST['3num'];
$totalCFT =$firstNumber*$secondNumber*$ThirdNumber;
echo "Total Size CFT: " . $totalCFT/144;



$rfirstNumber=$_POST['rnum'];
$rsecondNumber=$_POST['2rnum'];
$totalCFT =$rfirstNumber*$rsecondNumber*$rsecondNumber;
echo "  Total Round CFT: " . $totalCFT/2304;
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
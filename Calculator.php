<?php
class MyCalculator {
private $FirstNumber, $SecondNumber;
public function __construct( $Value1, $Value2 ) {
$this->FirstNumber = $Value1;
$this->SecondNumber = $Value2;
}
public function Addition() {
return $this->FirstNumber + $this->SecondNumber;

  
}
public function Subtraction() {
return $this->FirstNumber - $this->SecondNumber;
}
public function Multiplication() {
return $this->FirstNumber * $this->SecondNumber;
}
public function Division() {
return $this->FirstNumber / $this->SecondNumber;
}
}
$mycalc = new MyCalculator(6, 3); 
echo "Addition is  ". $mycalc-> Addition()."<br>"; // Displays 9 
echo "Multiplication  ".$mycalc-> Multiplication()."<br>"; // Displays 18
echo "Subracton  ".$mycalc-> Subtraction()."<br>"; // Displays 3
echo "Division   ".$mycalc-> Division()."<br>"; // Displays 2
?>

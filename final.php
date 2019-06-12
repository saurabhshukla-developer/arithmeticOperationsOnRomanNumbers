<?php

echo "\n *****NOTE*****";
echo "\n all roman numerals should be in capital form";
$romanNumber1 = readline("\n Enter First Roman Number");
$romanNumber2 = readline("\nEnter Second Roman Number");
echo "\n 1. Addition";
echo "\n 2. Substraction";
echo "\n 3. Multiplication";
echo "\n 4. Division";
$choice = readline("\n Enter your choice for operations");
$number1 = roamnToNumber($romanNumber1);
$number2 = roamnToNumber($romanNumber2);

switch($choice)
{
    case 1:
    $result = $number1+$number2;
    $finalResult = integerToRoman($result);
    printFinalResult($finalResult);
    break;

    case 2:
    $result = $number1-$number2;
    $finalResult = integerToRoman($result);
    printFinalResult($finalResult);
    break;

    case 3:
    $result = $number1*$number2;
    $finalResult = integerToRoman($result);
    printFinalResult($finalResult);
    break;

    case 4:
    $result = $number1/$number2;
    $finalResult = integerToRoman($result);
    printFinalResult($finalResult);
    break;

    default:
    echo "Your Choice is not Right";
    break;
}


function printFinalResult($finalResult)
{
    echo "\n Your Result is =". $finalResult;
}


function roamnToNumber($romanNumber){
    $romans = array(
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1,
    );    
    $roman = $romanNumber;
    $result = 0;    
    foreach ($romans as $key => $value) {
        while (strpos($roman, $key) === 0) {
            $result += $value;
            $roman = substr($roman, strlen($key));
        }
    }
    return $result;
}


function integerToRoman($integer)
{
 $integer = intval($integer);
 $result = '';
 $lookup = array('M' => 1000,
 'CM' => 900,
 'D' => 500,
 'CD' => 400,
 'C' => 100,
 'XC' => 90,
 'L' => 50,
 'XL' => 40,
 'X' => 10,
 'IX' => 9,
 'V' => 5,
 'IV' => 4,
 'I' => 1);
 
 foreach($lookup as $roman => $value){
  $matches = intval($integer/$value);
  $result .= str_repeat($roman,$matches);
  $integer = $integer % $value;
 }
 return $result;
}



?>
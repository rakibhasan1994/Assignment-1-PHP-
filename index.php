<?php

/* i. Electric bill calculation (For first 50 units – 3.50 tk/unit For next 100 units – 4.00
 tk/unit For next 100 units – 5.20 tk/unit For units above 250 – 6.50 tk/unit)
*/


function calculateElectricBill($units) {
    $bill = 0;

    if ($units <= 50) {

        $bill = $units * 3.50;
    } elseif ($units <= 150) {

        $bill = 50 * 3.50 + ($units - 50) * 4.00;
    } elseif ($units <= 250) {

        $bill = 50 * 3.50 + 100 * 4.00 + ($units - 150) * 5.20;
    } else {

        $bill = 50 * 3.50 + 100 * 4.00 + 100 * 5.20 + ($units - 250) * 6.50;
    }

    return $bill;
}


$unitsConsumed = 500; 
$totalBill = calculateElectricBill($unitsConsumed);
echo "Total electric bill for $unitsConsumed units: " . $totalBill . " tk" ."<br>";




// ii. A PHP calculator using switch case (Addition, Subtraction, Multiplication, Division)


function calculator($num1, $num2, $operation) {
    switch($operation) {
        case 'addition':
            return $num1 + $num2;
        case 'subtraction':
            return $num1 - $num2;
        case 'multiplication':
            return $num1 * $num2;
        case 'division':
            if ($num2 != 0) {
                return $num1 / $num2;
            } else {
                return "Error: Division by zero is not allowed.";
            }
        default:
            return "Error: Invalid operation.";
    }
}

$num1 = 10;
$num2 = 5;
$operation = 'multiplication';

$result = calculator($num1, $num2, $operation);
echo "Result of $operation between $num1 and $num2 is: $result" ."<br>";


// iii. Check if a person is eligible to vote by age

$age = 16;

if($age >= 18){
    echo "You are eligible for vote" . "<br>";
}else{
    echo "You are not eligible for vote" . "<br>";
}

// iv. Check if a person is eligible for marriage in BD by gender.

$male = 21;
$female = 17;

if($male>=21){
echo "You are eligible for marriage" . "<br>";
}else{
    echo "You are not eligible for marriage" . "<br>";
}

if($female>=18){
    echo "You are eligible for marriage" . "<br>";
    }else{
        echo "You are not eligible for marriage" . "<br>";
    }

    
    // v. Check if number is positive or negetive

$number = 5;

if ($number > 0) {
    echo "The number is positive." . "<br>";
} elseif ($number < 0) {
    echo "The number is negative." . "<br>";
} else {
    echo "The number is zero." . "<br>";
}

// vi. Check if number is odd or even 


$number = 6;

if ($number % 2 == 0) {
    echo $number . " is even." . "<br>";
} else {
    echo $number . " is odd." . "<br>";
}

// vii. Check if data is integer or string


$data = 22;


if (is_int($data)) {
    echo "The data is an integer!";
} 

else if (is_string($data)) {
    echo "The data is a string!";
} 

else {
    echo "The data is neither an integer nor a string.";
}
?>



    


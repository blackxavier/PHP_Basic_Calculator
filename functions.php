<?php
$num1 = $_POST['num1'];
$oper = $_POST['operator'];
$num2 = $_POST['num2'];
function CalculateTwoNumbers($num1, $oper,  $num2)
{

    switch ($oper) {
        case "add":
            $sum = $num1 + $num2;
            break;
        case "sub":
            $sum = $num1 - $num2;
            break;
        case "divide":
            $sum = $num1 / $num2;
            break;
        case "multiply":
            $sum = $num1 * $num2;
            break;
        default:
            $sum = "There was an error in your input";
            break;
    }
    return $sum;
}
echo "Value: " . CalculateTwoNumbers($num1, $oper, $num2);

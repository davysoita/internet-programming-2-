<?php
function add($num1, $num2) {
    return $num1 + $num2;
}

function subtract($num1, $num2) {
    return $num1 - $num2;
}

function multiply($num1, $num2) {
    return $num1 * $num2;
}

function divide($num1, $num2) {
    if ($num2 == 0) {
        return "Error: Division by zero";
    }
    return $num1 / $num2;
}

function exponent($num1, $num2) {
    return pow($num1, $num2);
}

function calculate_percentage($num, $percentage) {
    return ($num * $percentage) / 100;
}

function calculate_square_root($num) {
    return sqrt($num);
}

function calculate_logarithm($num) {
    return log($num);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operation = $_POST["operation"];

    switch ($operation) {
        case "add":
            $result = add($num1, $num2);
            break;
        case "subtract":
            $result = subtract($num1, $num2);
            break;
        case "multiply":
            $result = multiply($num1, $num2);
            break;
        case "divide":
            $result = divide($num1, $num2);
            break;
        case "exponent":
            $result = exponent($num1, $num2);
            break;
        case "percentage":
            $result = calculate_percentage($num1, $num2);
            break;
        case "square_root":
            $result = calculate_square_root($num1);
            break;
        case "logarithm":
            $result = calculate_logarithm($num1);
            break;
        default:
            $result = "Invalid operation";
    }

    echo "Result: " . $result;
}
?>
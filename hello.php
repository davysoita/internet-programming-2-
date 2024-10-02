<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get sanitized inputs
    $num1 = filter_input(INPUT_POST, "num1", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $num2 = filter_input(INPUT_POST, "num2", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $operator = htmlspecialchars($_POST["operator"]);

    // Initialize result
    $value = 0;
    
    // Perform the calculation
    switch ($operator) {
        case "add":
            $value = $num1 + $num2;
            break;
        case "subtract":
            $value = $num1 - $num2;
            break;
        case "multiply":
            $value = $num1 * $num2;
            break;
        case "divide":
            if ($num2 != 0) {
                $value = $num1 / $num2;
            } else {
                echo "<p class='calc-error'>Error: Division by zero!</p>";
                exit;
            }
            break;
        case "exponentiation":
            $value = pow($num1, $num2);
            break;
        case "percentage":
            $value = ($num1 * $num2) / 100;
            break;
        case "squareroot":
            if ($num1 >= 0) {
                $value = sqrt($num1);
            } else {
                echo "<p class='calc-error'>Error: Cannot take the square root of a negative number!</p>";
                exit;
            }
            break;
        case "modulus":
            $value = $num1 % $num2;
            break;
        default:
            echo "<p class='calc-error'>Something went wrong!</p>";
            exit;
    }
    

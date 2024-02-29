<?php
// Check if the script is run from the command line and if the correct number of arguments is provided
if (isset($argv[1]) && $argc == 4) {
    // If the correct number of arguments is provided, determine the operation to perform based on the first argument
    switch ($argv[1]) {
        case "a":
            // Addition operation
            $result = $argv[2] + $argv[3];
            echo "Result: $result\n";
            break;
        case "s":
            // Subtraction operation
            $result = $argv[2] - $argv[3];
            echo "Result: $result\n";
            break;
        case "d":
            // Division operation
            $result = $argv[2] / $argv[3];
            echo "Result: $result\n";
            break;
        case "m":
            // Multiplication operation
            $result = $argv[2] * $argv[3];
            echo "Result: $result\n";
            break;
        default:
            // If an invalid operation is provided, display usage instructions
            $program_name = $argv[0];
            echo "Usage: php $program_name [a num1 num2] [s num1 num2] [d num1 num2] [m num1 num2]\n";
            echo "Options:\n";
            echo "  a num1 num2\tAddition operation\n";
            echo "  s num1 num2\tSubtraction operation\n";
            echo "  d num1 num2\tDivision operation\n";
            echo "  m num1 num2\tMultiplication operation\n";
            break;
    }
} else {
    // If the correct number of arguments is not provided, display usage instructions
    $program_name = $argv[0];
    echo "Usage: php $program_name [a num1 num2] [s num1 num2] [d num1 num2] [m num1 num2]\n";
    echo "Options:\n";
    echo "  a num1 num2\tAddition operation\n";
    echo "  s num1 num2\tSubtraction operation\n";
    echo "  d num1 num2\tDivision operation\n";
    echo "  m num1 num2\tMultiplication operation\n";
}
?>

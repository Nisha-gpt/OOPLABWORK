// Version 3: Collatz with Error Handling and Validation
<?php
function collatzEnhanced($n) {
    if (!is_numeric($n) || $n <= 0 || floor($n) != $n) {
        echo "Invalid input. Please enter a positive integer.";
        return;
    }
    
    $steps = 0;
    echo "Sequence: $n ";
    while ($n != 1) {
        if ($n % 2 == 0) {
            $n /= 2;
        } else {
            $n = 3 * $n + 1;
        }
        echo "$n ";
        $steps++;
    }
    echo "\nTotal Steps: $steps";
}

collatzEnhanced(12);
?>

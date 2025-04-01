// Version 3: Collatz with Error Handling and Validation
<?php
function collatz($n) {
    if ($n <= 0 || !is_int($n)) {
        echo "Invalid input.";
        return;
    }

    $steps = 0;
    echo "Sequence: $n ";
    while ($n != 1) {
        $n = $n % 2 === 0 ? $n / 2 : 3 * $n + 1;
        echo "$n ";
        $steps++;
    }
    echo "\nSteps: $steps";
}

collatz(12);
?>
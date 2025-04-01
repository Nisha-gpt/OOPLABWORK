// Version 2: Collatz with Step Counter
<?php
function collatzWithSteps($n) {
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
collatzWithSteps(12);
?>
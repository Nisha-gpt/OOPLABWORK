// Version 1: Basic Collatz Problem Solver
<?php
function collatz($n) {
    echo "Sequence: $n ";
    while ($n != 1) {
        if ($n % 2 == 0) {
            $n /= 2;
        } else {
            $n = 3 * $n + 1;
        }
        echo "$n ";
    }
}
collatz(12);
?>
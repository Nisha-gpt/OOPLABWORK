<?php
function collatz($n) {
    echo "Starting Collatz sequence for: $n\n";
    while ($n != 1) {
        echo $n . " ";
        $n = ($n % 2 == 0) ? $n / 2 : 3 * $n + 1;
    }
    echo "1\nSequence complete.\n";
}
collatz(6);
?>
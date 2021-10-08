<!-- tampilkan deret fibonacci -->

<?php
/** Limited by number of row */
function fibonacci($start, $row_number){
    $n_now = $start;
    $n_next = $n_now + 1;

    $output = $n_now.' '.$n_next;

    for($i = $start; $i <= $row_number - 2; $i++){
        $n_sum = $n_now + $n_next;

        $output = $output.' '.$n_sum;

        $n_now = $n_next;
        $n_next = $n_sum;
    }

    return $output;
}

echo fibonacci(0, 8);
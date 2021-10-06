<!-- You get an array of numbers, return the sum of all of the positives ones.

Example [1,-4,7,12] => 1 + 7 + 12 = 20

Note: if there is nothing to sum, the sum is default to 0. -->

<?php 
function positive_sum($arr) {
    // $sum = 0;
  /** Loop trough array */
    // foreach($arr as $val){
    //     if($val > 0){
    //         $sum += $val;
    //     }
    // }

    // return $sum;

  /** Using array_sum & array_filter */
    return array_sum(array_filter($arr, function ($n) {return $n > 0;}));
}

print_r(positive_sum([1, -4, 7, 12]));
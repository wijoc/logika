<?php
/** Case 5 : Calc difference from max and min in array */
    function diffArr($arr){
        /** Declare max difference, and min value */
        $max_diff = $arr[1] - $arr[0];
        $var_min = $arr[0];

        /** Loop each arr element start from index 1 */
        for($x = 1; $x < count($arr); $x++) {
            /** Check if max_diff val bigger than current max_diff, if yes than update max_diff value */
            if($arr[$x] - $var_min > $max_diff) {
                $max_diff = $arr[$x] - $var_min;
            }
    
            /** Check if min val smaller than current min, if yes than update min value */
            if($arr[$x] < $var_min) {
                $var_min = $arr[$x];
            }
        }

        return $max_diff;
    }

    echo diffArr([1, 3, 4, 5, 6, 9, 10, 15]);

<?php
/** Case 6 : Transpose array */
    function transArray($arr1){
        $returnArr = array();

        /** Loop trough array */
        foreach($arr1 as $key => $arr1_val){
            foreach($arr1_val as $key2 => $arr2_val){
                /** Set value to new array */
                $returnArr[$key2][$key] = $arr2_val;
            }
        }

        return $returnArr;
    }

    print("<pre>".print_r(transArray([[1, 2, 3, 4, 5],[6, 7, 8, 9, 10],[11, 12, 13, 14, 15]]), true)."</pre>");
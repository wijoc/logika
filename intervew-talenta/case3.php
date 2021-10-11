<?php
/** Case 3 : Create function to print pyramid */
function printPyramid($row){
    /** Loop each row */
    for($x = 1; $x <= $row; $x++){
        // for($y = $row; $y > $x; $y--){
        //     echo '&nbsp;';
        // }
        // for($z = 1; $z <= $x; $z++){
        //     echo '*&nbsp;';
        // }
        // echo '<br>';

        $stars = str_repeat('*&nbsp;', ($x - 1) * 2 + 1);
        $space = str_repeat('&nbsp;', $row - $x);
        echo $space . $stars . '<br/>';
    }
} 

printPyramid(10);
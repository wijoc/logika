<!-- Check to see if a string has the same amount of 'x's and 'o's. The method must return a boolean and be case insensitive. The string can contain any char.

Examples input/output:

XO("ooxx") => true
XO("xooxx") => false
XO("ooxXm") => true
XO("zpzpzpp") => true // when no 'x' and 'o' is present should return true
XO("zzoo") => false -->

<?php
function XO($s) {
    /** Loop each char in string */
        // $x = 0;
        // $o = 0; 
        
        // foreach(str_split($s) as $i){
        // if($i == 'x' || $i == 'X'){
        //     $x++;
        // } else if($i == 'o' || $i == 'O'){
        //     $o++;
        // }
        // }
        
        // if($x == $o){
        // return true; 
        // } else {
        // return false;
        // }

    /** Using str_count */
        $lower_str = strtolower($s); // Set string to lower
        // $x = substr_count($lower_str, 'x');
        // $o = substr_count($lower_str, 'o');

        // if($x == $o){
        //     return true;
        // } else {
        //     return false;
        // }

        // Ternary if - else
        return substr_count($lower_str, 'x') === substr_count($lower_str, 'o');
}

echo XO('xxxooo');
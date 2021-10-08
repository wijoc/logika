<!-- Complete the method that takes a boolean value and return a "Yes" string for true, or a "No" string for false. -->

<?php
function boolToWord($bool){
    if($bool == true){
        $bool = 'Yes';
    } else {
        $bool = 'No';
    }
    
    return $bool;
}

boolToWord(true);
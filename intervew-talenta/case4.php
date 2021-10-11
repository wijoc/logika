<?php
/** Case 4 : Palindrome */
    function palindrome($str){
        return ($str === strrev($str))? 'TRUE' : 'FALSE';
    } 

    echo palindrome('rotator');
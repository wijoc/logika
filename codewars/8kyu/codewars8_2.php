<!-- Create a function that takes an integer as an argument and returns "Even" for even numbers or "Odd" for odd numbers. -->

<?php 
function even_or_odd(int $n): string {
    // if($n % 2 == 0){
    //     return 'Even';
    // } else {
    //     return 'Odd';
    // }
    return ($n % 2 == 0)? 'Even' : 'Odd';
}

echo even_or_odd(3);
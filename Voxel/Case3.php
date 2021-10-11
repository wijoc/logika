<!-- 
    4. Buat function yang menerima sebuah kata dan periksa apakah kata tersebut adalah palindrome
        Kata palindrom adalah kata yang bila dibalik masih memliki arti yang sama -->
<?php
$string = 'kodok';
$string1 = 'kaca';

$status = ($string1 === strrev($string1))? 'benar' : 'salah';
echo $status;
<?php
$string = 'kodok';
$string1 = 'kaca';

$status = ($string1 === strrev($string1))? 'benar' : 'salah';
echo $status;
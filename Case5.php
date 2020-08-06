<?php
$arr = array(4, 5, 8, 9, 0, 2, 8, 2, 11, 15, 2, 9, 0);
$arrNew = array_unique($arr);
asort($arrNew);
print_r($arrNew);
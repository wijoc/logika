<?php
$input = 72500;
$pecahan = array(50000, 20000, 10000, 5000, 2000, 200, 100);
$count = count($pecahan);

for($i = 0; $i < $count; $i++){
	$sisa = $input % $pecahan[$i];
	if($sisa < $input){
		echo $pecahan[$i].' sebanyak : '.floor($input / $pecahan[$i]).'<br>';
		$input = $sisa;
	}
}
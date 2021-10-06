<?php
$nilaiRudi = array(
    'sejarah' => '8',
    'matematika' => '7',
    'sosiologi'  => '6',
    'kewarganegaraan' => '9'
);
$nilaiAni  = array(
    'sejarah' => '5',
    'matematika' => '8',
    'sosiologi'  => '9',
    'kewarganegaraan' => '6'
);

$totalRudi = 0;
$totalAni  = 0;

foreach($nilaiRudi as $mapel => $nilai){
    if($nilai > $nilaiAni[$mapel]){
        $totalRudi++;
    } else if ($nilai < $nilaiAni[$mapel]) {
        $totalAni++;
    }
}

$arrTotal = array(
    'rudi' => $totalRudi,
    'ani' => $totalAni,
);

print_r($arrTotal);
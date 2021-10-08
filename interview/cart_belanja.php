<!-- Belanja Hafid akan pergi belanja, belanja hafid dia tentukan dari berapa dia bawa uang, 
dengan uang diatas 750000 hafid mendapat “jas, 
diatas 350000 hafid mendapat “celana panjang, 
diatas 225000 dapat “kemeja”, 
diatas 100000 dapat “kaos” dan 
diatas 50000 dapat “celana pendek” 
Contoh input: masukan jumlah uang : 220000 output: hafid dapat kaos -->

<?php 
function cart(){
    
}
$arr_harga = array(
    array('h' => 750000, 'b' => 'jas'),
    array('h' => 350000, 'b' => 'celana panjang'),
    array('h' => 225000, 'b' => 'kemeja'),
    array('h' => 100000, 'b' => 'kaos'),
    array('h' => 50000, 'b' => 'celana pendek')
);
$input = 750000 + 50000;

foreach($arr_harga as $key => $value){
    $sisa = $input % $value['h'];
    if($sisa < $input){
        $cart[$key]['jumlah']++;
        $cart[$key]['barang'] = $value['b'];
        $input = $sisa;
    }
}

echo 'Barang yang didapat dengan uang sebanyak '.$input.' : ';
foreach($cart as $show){
    echo $show['barang'].' sebanyak '.$show['jumlah'].', ';
}

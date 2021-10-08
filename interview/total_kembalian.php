<!-- Ilham beli sepatu seharga 165000 dengan diskon sebesar 15 persen, 
jika uang yang di bayar ilham sebesar 150000 , maka uang kembali sebesar ? -->

<?php 
function kembalian($harga, $diskon, $bayar){
    $t_diskon = ($diskon / 100) * $harga;
    
    $harga_setelah_diskon = $harga - $t_diskon;
    
    $kembalian = $bayar - $harga_setelah_diskon;

    return $kembalian;
}

echo 'kembalian ; '.kembalian(165000, 15, 150000);
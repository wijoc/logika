<!-- Vikrie menyewakan 6 gros piring. Sebanyak 4 lusin dipinjam tio dan sebanyak 2 gros dipinjam david. 
berapa piring yang tersisa di vikrie?? (1 gross = 144 , 1 lusin = 12) -->

<?php
/** Hitung barang tiap satuan */ 
function total_barang($barang){
    $unit = array(
        'gross' => 144,
        'lusin' => 12
    );

    return $barang['n'] * $unit[$barang['u']];
}

/** Barang Vikrie dalam gross */
$v_brg = array(
    'n' => 6,
    'u' => 'gross'
);

/** Barang Tio dalam lusin */
$t_brg = array(
    'n' => 4,
    'u' => 'lusin'
);

/** Barang David dalam gross */
$d_brg = array(
    'n' => 2,
    'u' => 'gross'
);

/** Total barang masing masing */
$v_n = total_barang($v_brg);
$t_n = total_barang($t_brg);
$d_n = total_barang($d_brg);
echo 'Total piring Vikri : 6 Gross = '.$v_n.'<br>';
echo 'Piring pinjam Tio : 4 Lusin = '.$t_n.'<br>';
echo 'Piring pinjam David : 2 Gross = '.$d_n.'<br>';
echo 'Sisa piring Vikri : '.$v_n - ($t_n + $d_n).'<br>';
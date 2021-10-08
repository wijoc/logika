<!-- Uang heru di bank 850000 dan mendapat bunga 5 persen per tahun, berapa bunga selama setahun ? berapa total uang ? -->

<?php
function hitungBunga($bunga, $uang_awal, $waktu){
    $total_bunga = 0;

    for($i = 1; $i <= $waktu; $i++){
        $bunga_tahun_ini = ($bunga / 100) * $uang_awal;

        $total_bunga = $total_bunga + $bunga_tahun_ini;
    }

    return $total_bunga;
}

/** hitung total uang */
function totalUang($bunga, $uang_awal, $waktu){
    $total_bunga = 0;

    for($i = 1; $i <= $waktu; $i++){
        $bunga_tahun_ini = ($bunga / 100) * $uang_awal;

        $total_bunga = $total_bunga + $bunga_tahun_ini;
    }

    return $uang_awal + $total_bunga;
}

echo 'Bunga setahun : '.hitungBunga(5, 850000, 2).'<br>';
echo 'uang setahun : '.totalUang(5, 850000, 2).'<br>';
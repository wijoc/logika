<!-- tampilkan bilangan prima -->

<?php
function bilPrima($start, $end){
    for($i = $start; $i <= $end; $i++){
        $is_prima = 0;

        for($j = 1; $j <= $i; $j++){
            if($i % $j == 0){
                $is_prima++;
            }
        }

        if($is_prima == 2){
            echo $i.', ';
        }
    }
}

bilPrima(1, 100);
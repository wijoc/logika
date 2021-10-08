<!-- tampilkan bilangan ganjil atau genap -->

<?php
function genap($start, $end){
    for($i = $start; $i <= $end; $i++){
        echo ($i % 2 == 0)? $i.', ' : '';
    }
}

function ganjil($start, $end){
    for($i = $start; $i <= $end; $i++){
        echo ($i % 2 != 0)? $i.', ' : '';
    }
}

ganjil(1, 50).'<br>';
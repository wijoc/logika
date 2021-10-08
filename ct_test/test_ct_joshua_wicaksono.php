<?php
/** Nomor 2 */
    /** Declare int var, val = 77777 */
    $var_int = 77777;

    /** Tampilkan nilai var_int */
    print($var_int."\n");

    /** Fungsi Ribuan */
    function formatRibuan($p_int){
        $val_ribuan = number_format($p_int,2,',','.');
        return $val_ribuan;
     
    }
    echo formatRibuan($var_int)."\n";

/** Nomor 3 */
    /** Declare str var, val = name */
    $var_str = "Joshua Wicaksono";

    /** Ubah nilai var_str dengan var_int */
    $var_str = $var_int;

    /** Tampil var_str */
    print($var_str)."\n";

    /** Ganti huruf o jadi A */
    $var_str1 = "Joshua Wicaksono";
    $vocal    = array('o', 'O');
    $replace  = str_replace($vocal, 'A', $var_str1);
    print($replace."\n");

/** Nomor 4 */
    $var_arr = array();
    $var_arr = array(
        1 => 'Surabaya',
        2 => 'Jakarta',
        3 => 'Semarang',
        4 => 'Makassar',
    );
    print("<pre>".print_r($var_arr, true)."<pre>");

    /** Ganti array value, index 3 = Samarinda, 5 = Aceh */
    $var_arr[3] = 'Samarinda';
    $var_arr[5] = 'Aceh';
    print("<pre>".print_r($var_arr, true)."<pre>");

/** Nomor 6 */
    $var_arr1 = array(
        'fruit'  => 'Orange',
        'animal' => 'Dog',
        'bird'   => 'Eagle',
        'food'   => 'Rice'
    );
    print("<pre>".print_r($var_arr1, true)."<pre>");

    /** Ubah value array, index 'animal' => 'Cat' */
    $var_arr1['animal'] = 'Cat';

    /** Gabungkan var_arr dan var_arr1 */
    $new_arr = array_merge($var_arr, $var_arr1);
    print("<pre>".print_r($new_arr, true)."<pre>");

/** Nomor 7 */
    /** Function random string */
    function rand_str($length = 1){
        $var_char    = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $char_length = strlen($var_char);
        $rand_str    = '';
        for($i = 0; $i < $length; $i++){
            $rand_str .= $var_char[rand(0, $char_length -1)];
        }
        return $rand_str;
    }
    
    /** Function patern */
    function drawPattern($coloumn, $row){
        /** Loop per row */
        for($r = 1; $r <= $row; $r++){
            /** Loop each col */
            for($col = 1; $col <= $coloumn; $col++){
                echo rand_str(1).' | ';
            }
            print "<br>";
        }
    }

    drawPattern(12, 6);

/** Nomor 8 */
    /** Buat class vehicle */
    Class Vehicle{
        private $nama;
        private $kapasitas_mesin;
        private $roda;

        /** Function : tampil value variable dalam string */
        public function showValStr($n, $k_m, $r){
            $this->nama = $n;
            $this->kapasitas_mesin = $k_m;
            $this->roda = $r;

            return 'Nama : '.$this->nama.', Kapasitas Mesin : '.$this->kapasitas_mesin.'cc, Roda : '.$this->roda;
        }

        /** Function : tampil value yang uppercase str */
        public function showUppStr($n, $k_m, $r){
            $str = $this->showValStr($n, $k_m, $r);
            return strtoupper($str);
        }
    }

    $v = new Vehicle;
    /** Panggil function showValStr */
    echo $v->showValStr('Aventador', 6498, 4);

    /** Panggil Function showUppStr */
    echo $v->showUppStr('Aventador', 6498, 4);

/** Nomor 9 */
    /** Buat class Car */
    Class Car extends Vehicle{
        public $nama;
        public $kapasitas_mesin;
        public $roda;
        public $merk;
        public $tahun_pembuatan;
        public $nomor_rangka;

        /** Function Construct, panggil 2 function dari parent */
        function __construct(){
            $this->showValStr($this->nama, $this->kapasitas_mesin, $this->roda);
            $this->showUppStr($this->nama, $this->kapasitas_mesin, $this->roda);
        } 

        /** Function : tampil value str */
        public function carShowStr($n, $k_m, $r, $m, $t_p, $n_r){
            /** Set property */
            $this->merk = $m;
            $this->tahun_pembuatan = $t_p;
            $this->nomor_rangka = $n_r;

            $str1 = parent::showValStr($n, $k_m, $r); // Call parent function
            return $str1.', Merk : '.$this->merk.', Tahun pembuatan : '.$this->tahun_pembuatan.', No. Rangka : '.$this->nomor_rangka;
        }

        /** Function : tampil value yang uppercase str */
        public function carShowUppStr($n, $k_m, $r, $m, $t_p, $n_r){
            $str = $this->carShowStr($n, $k_m, $r, $m, $t_p, $n_r);
            return strtoupper($str);
        }
    }

    $c = new Car;
    /** Panggil function carShowStr */
    echo $c->carShowStr('Aventador', 6498, 4, 'Lamborghini', '2012', 'LA001');
    /** Panggil function carShowUppStr */
    echo $c->carShowUppStr('Aventador', 6498, 4, 'Lamborghini', '2012', 'LA001');


    $c2 = new Car;
    /** Panggil function carShowStr */
    echo $c2->carShowStr('911 Carrera S', 6498, 4, 'Porsche', '2011', 'PCS001');
    // /** Panggil function carShowUppStr */
    echo $c2->carShowUppStr('911 Carrera S', 6498, 4, 'Porsche', '2011', 'PCS001');

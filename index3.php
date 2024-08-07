<?php 
    // Variabel
    echo "Aku dari XI RPL 4";
    echo "<br>";
    echo "Nama: Kenzie Rakajati Pratama";
    echo "<br>";
    echo "Jk: Laki-laki";
    echo "<br>";
    echo "Kelas: XI RPL 4";
    echo "<br>";
    echo "Alamat: Jl. Segara Anak G7A2 (KOST GRAHA SELARAS)";


    echo "<br>";
    $nama="Aku";
    $uangSaku=100000;

    echo $nama;
    echo "<br>";
    echo "Uang Saku: $uangSaku";
    echo "<br>";


    // Menghitung Luas Segitiga (OPERATOR)
    $s1 = 10;
    $s2 = 10;
    $hasil= $s1 * $s2;

    echo $hasil;
    echo "<br>";

    // Kondisi 
    $harga =8000;
    if($harga < 5000){
        echo "Saya akan Beli Teh";
    } else if ($harga <= 8000) {
        echo "Saya akan tawar sampai saya dapat barang ";
    } else {
        echo "Saya tidak punya uang";
    }
    echo "<br>";


    // FUNCTION
    function inilho(){
        echo "Belajar terus ya";
    }
    inilho();



?>
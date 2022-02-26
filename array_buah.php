<?php

    //$mahasiswa = 'Raihan';
    //Array (variable yang bisa menyimpan nilai lebih dari 1)
    $mahasiswa = ['Raihan','Kenshin','Albert'];

    //Cara print array
    echo $mahasiswa[0];
    echo '<br><br>';
    echo $mahasiswa[1];
    echo '<br><br>';
    echo $mahasiswa[2];
    echo '<br><br>';

    //Cek variable error atau tidak
    //var_dump($mahasiswa);

    //Print banyak array dengan looping
    foreach ($mahasiswa as $mhs){
        echo '<h1 style="color:red;">'.$mhs.'</h1>';
        echo '<br>';
    }

    //Array Multi dimensi
    $mahasiswas = [
        ["nama" => "Raihan", "nim" => "0110221240", "uts" => 100, "uas" => 100],
        ["nama" => "Kenshin", "nim" => "0110221245", "uts" => 90, "uas" => 90],
        ["nama" => "Albert", "nim" => "0110221250", "uts" => 80, "uas" => 80]
    ];

    //Test variable array multi dimensi
    //var_dump($mahasiswas);

    //Print Array multi dimensi
    echo $mahasiswas[0]["nama"];
    echo "<br><br>";

    //Looping Array multi dimensi
    foreach($mahasiswas as $mhss){
        echo $mhss["nama"].'<br><br>'; //Tidak pakai [0] karena looping
    }
    
?>

<?php  
    $mahasiswa = [
        ["nama" => "Fayyaza", "nim" => "0110221242", "uts" => 100, "uas" => 100],
        ["nama" => "Sabiq", "nim" => "0120221242", "uts" => 10, "uas" => 10],
    ];

    // echo $mahasiswa[0]["nama"];

    foreach($mahasiswa as $mhs) {
        echo $mhs["nama"];
    }
?>
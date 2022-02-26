<?php
    $nama = 'fayyaza';
    $umur = 18;
    $berat = 40;

    $nama = 'Naira';

    echo 'Nama saya '.$nama.' umur saya '.$umur.' berat saya '.$berat;
    echo "<br />";
    echo "<h1 style='color: red'> Nama saya $nama, umur saya $umur, berat saya $berat</h1>";
    echo "<br />";

    // Variable sistem
    // Variable built in php
    echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
    echo "<br />";

    // Variable konstan
    // adalah variable yang tidak bisa diubah nilainya
    define('makanan', 'sushi');
    // define('makanan, 'jambu)
    echo '<h1 style="color: blue">'.makanan.'</h1>';
    echo makanan;
?>
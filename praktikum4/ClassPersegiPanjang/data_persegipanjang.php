<?php
require_once "class_Persegipanjang.php";
$persegiPanjang1 = new Persegipanjang(5,3);
$persegiPanjang2 = new Persegipanjang(7,5);
echo "Luas Persegi panjang I ".$persegiPanjang1->getLuas();
echo "<br>Luas Persegi panjang II ".$persegiPanjang2->getLuas ();
echo "<br>Keliling Persegi panjang I ".$persegiPanjang1->getKeliling();
echo "<br>Keliling Persegi panjang II ".$persegiPanjang2->getKeliling();
?>
<?php
class Dispenser{
    protected $volume;
    protected $hargaSegelas;
    private $jumlahDibeli;
    public $volumeGelas;

    public function __construct($vol, $harga, $gelas, $pergelas){
        $this->volume = $vol;
        $this->hargaSegelas = $harga;
        $this->jumlahDibeli = $gelas;
        $this->volumeGelas = $pergelas;
    }
    public function pembeli(){
        echo "<hr>Volume Air Galon : ".$this->volume."</br>Harga Segelas : ".$this->hargaSegelas."</br>Jumlah Yang Dibeli : ".$this->jumlahDibeli."</br>Volume Gelas : ".$this->volumeGelas;
    }
    public function getJumlah() {
        return $this->volume - $this->jumlahDibeli * $this->volumeGelas;
    }
}
$minum1 = new Dispenser("19000", "Rp. 2000","10","300");
$minum1->pembeli();
echo "</br>Sisa Air Galon : ".$minum1->getJumlah();
$minum2 = new Dispenser("5000", "Rp. 1000","2","150");
$minum2->pembeli();
echo "</br>Sisa Air Galon : ".$minum2->getJumlah();

?>
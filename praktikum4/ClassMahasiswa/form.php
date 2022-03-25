<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">      
    <title>Form Nilai Siswa</title>
</head>
<body>
  <div class="container">
    <h2 style="text-align: center;">Form Nilai Siswa</h2>
    <hr/>
<form action="form.php" method="POST">
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <input id="nim" name="nim" placeholder="Masukkan NIM Anda" type="text" class="form-control" spellcheck="false">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Pilih MK</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="">Pilih Matkul</option>
        <option value="Dasar-Dasar Pemrograman">Dasar-Dasar Pemograman</option>
        <option value="Basis Data I">Basis Data I</option>
        <option value="Pemrograman Web">Pemograman Web</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai" class="col-4 col-form-label">Nilai</label> 
    <div class="col-8">
      <input id="nilai" name="nilai" placeholder="Nilai UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" value="simpan" class="btn btn-primary">Simpan</button>
    </div>
    </div>
  </div>
</form>


<?php

require_once 'class_nilaimahasiswa.php';
if($_POST){
  $ns = new NilaiMahasiswa($_POST['nim'], $_POST['matkul'], $_POST['nilai']);
  $keterangan = $ns->hitungNilai();
  $hasil = $ns->grade($keterangan);
  $hasil2 = $ns->predikat($keterangan);
  echo "NIM : " . $ns->nim;
  echo "<br>";
  echo "Matkul : " . $ns->matkul;
  echo "<br>";
  echo "Nilai : " . $ns->nilai;
  echo "<br>";
  echo "Status : " . $hasil;
  echo "<br>";
  echo "Grade : " . $hasil2;
}
?>

</body>
</html>
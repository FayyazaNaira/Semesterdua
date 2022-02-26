<?php  
    $mahasiswa = [
        ["id" => 1,"nama" => "Fayyaza", "nim" => "0110221242", "uts" => 100, "uas" => 100],
        ["id" => 2,"nama" => "Sabiq", "nim" => "0120221242", "uts" => 10, "uas" => 10],
    ];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <table class="table table-striped">
        <thead>
            <th>ID</th>
            <th>NAMA</th>
            <th>NIM</th>
            <th>UTS</th>
            <th>UAS</th>
        </thead>

        <tbody>
            <?php foreach ($mahasiswa as $mhs): ?>
                <tr>
                    <td><?= $mhs["id"] ?></td>
                    <td><?= $mhs["nama"] ?></td>
                    <td><?= $mhs["nim"] ?></td>
                    <td><?= $mhs["uts"] ?></td>
                    <td><?= $mhs["uas"] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
<?php 
// membuat data mahasiswa
$mahasiswa = [
["Alian","D111","Teknik Informatika","Alian@gmail.com"],
["Alin","D111","Teknik Informatika","Alin@gmail.com"],
["Ilyas","D111","Teknik Informatika","Alin@gmail.com"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ( $mahasiswa as $m ) : ?>
    <ul>
        <li>Nama : <?= $m[0]?></li>
        <li>NIM : <?= $m[1] ?></li>
        <li>Jurusan : <?= $m[2] ?></li>
        <li>Email : <?= $m[3] ?></li>

    </ul>
    <?php endforeach;?> 
</body>
</html>
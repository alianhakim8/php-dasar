<?php 
// $mahasiswa = [
// ["Alian","D111911010","Alian@gmail.com","Teknik Informatika"],
// ["Alin","D111911010","Alin@gmail.com","Teknik Informatika"],
// ["Ilyas","D111911010","Ilyas@gmail.com","Teknik Informatika"]

// ];

// array Associative definisinya sama dengan array kecuali pada array ini key-nya adalah string yang kita buat sendiri 
$mahasiswa = [
    [
    "nama" => "Al ian",
    "nim" => "D111911010",
    "email" => "Alian@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "alian.jpg"
],
    [
    "nama" => "Ilyas",
    "nim" => "D111911010",
    "email" => "Ilyas@gmail.com",
    "jurusan" => "Teknik Elektro",
    "gambar" => "ilyas.jpg"
],
    
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
<?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"];?>" width="100">
        </li>
        <li>Nama : <?= $mhs["nama"]?></li>
        <li>NIM : <?= $mhs["nim"]?></li>
        <li>Email : <?= $mhs["email"]?></li>
        <li>Jurusan : <?= $mhs["jurusan"]?></li>
    </ul>
<?php endforeach; ?>    
</body>
</html>
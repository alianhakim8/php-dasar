<?php 
// Method GET
$dokter = [
    [
        "nama" => "Alian Hakim",
        "ahli" => "anak",
        "tarif" => "Rp.1.000.000",
        "alamat" => "Jl.Waruga Jaya No.53",
        "foto" => "fotoL.png",
    ],

    [
        "nama" => "Alinda Ayu",
        "ahli" => "Kulit",
        "tarif" => "Rp.2.000.000",
        "alamat" => "Jl.Harapan Jaya 3",
        "foto" => "fotoW.png",
    ],

    [
        "nama" => "Ilyas Yasin",
        "ahli" => "Ortopedi",
        "tarif" => "Rp.3.000.000",
        "alamat" => "Jl.Mawar Hitam",
        "foto" => "fotoL.png",
    ],
    [
        "nama" => "Fayola",
        "ahli" => "Gigi",
        "tarif" => "Rp.10.000.000",
        "alamat" => "Jl.Murah Meriah",
        "foto" => "fotoW.png",
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Dokter</title>
</head>
<body>
    <h1>Daftar Dokter</h1>
<ul>
    <?php foreach ($dokter as $dok ) : ?>
    <li>
    <a href="latihan2.php
    ?nama=<?=$dok["nama"];?>
    &ahli=<?= $dok["ahli"];?>
    &tarif=<?= $dok["tarif"];?>
    &alamat=<?= $dok["alamat"];?>
    &foto=<?= $dok["foto"];?>">
    <?= $dok["nama"];?></a>
    </li>
<?php endforeach; ?>
</ul>
</body>
</html>
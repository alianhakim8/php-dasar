<?php 
// mengecek apakah tidak ada di $_GET
if ( !isset($_GET["nama"]) 
    || !isset($_GET["ahli"])
    || !isset($_GET["tarif"])
    || !isset($_GET["alamat"])
    || !isset($_GET["foto"])
    ){
    // redirect memindahkan user ke halaman lain
    header("Location: latihan1.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Dokter</title>
</head>
<body>
    <ul>
        <img src="img/<?=$_GET["foto"];?>" width="100" style=border-radius:50%>
        <li>Nama Dokter : <?=$_GET["nama"];?></li>
        <li>Spesialist : <?=$_GET["ahli"];?></li>
        <li>Tarif : <?=$_GET["tarif"];?></li>
        <li>Alamat : <?=$_GET["alamat"];?></li>
    </ul>

<a href="latihan1.php">Kembali Ke Daftar Dokter</a>
</body>
</html>
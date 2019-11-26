<?php 
function sapa($waktu = "Datang", $nama = "Admin"){
    return "$waktu,$nama";
};

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan function</title>
    <style>
    body{   
        background-color:#2c3e50;
        color:#fff;
        text-align:center;
    }
    img{
        border-radius:100%;
    }
    </style>
</head>
<body>
<img src="img/My Photo.jpg" width="250">
    <h1>Halo Selamat <?= "pagi ", "Alian"?>, Muda cuma sekali karena kita gak tambah muda </h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis fuga placeat eum itaque quo minus iste voluptates, impedit officiis, natus recusandae provident, consectetur quasi a eaque maiores id ipsum cumque.</p>
    
</body>
</html>
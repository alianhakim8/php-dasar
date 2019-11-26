
<?php
  //memanggil file functions.php bisa gunakan require atau include
require 'functions.php';

$namadokter = query("SELECT * FROM nama_dokter");

?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style>
body{
	background-color:#fff;
}
table{
	margin:auto;
	border-radius: 0;
	background-color:#fff;
	border-color: #33E1ED;
	text-align:center;
}
.sub{
	background-color:#34495e;
	padding-bottom:20px;
	padding-top:20px;
	top:0;
	left:0;
	color:#fff;
	font-family:courier;
	font-weight:bold;
	text-align:center;
	font-size:20pt;
}

.nav-wrapper{
	background-color:#2c3e50;
	position: fixed;
	top: 0;
	width: 100%;
}
</style>
<body>
	

<!-- Navbar -->
<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo right"><img src="img/logo.png" width="50"></a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="home.php">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
  </nav>

<!-- sub -->
	<div class="sub">Daftar Nama Dokter</div>
            
<!-- Tabel Nama Dokter -->
	<div class="col s12 m2">
      <table class="z-depth-2"border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No</th>
			<th>Foto</th>
			<th>Nama</th>
			<th>Keahlian</th>
			<th>Alamat</th>
			<th>Email</th>
			<th>Aksi</th>
		</tr>
		<?php $i = 1 ?>
		<?php foreach ( $namadokter as $row ) : ?>
		<tr>
			<td><?= $i ?></td>
			<td><img src="img/<?= $row["foto"]?>" width="50"></td>
			<td><?= $row["nama"];?></td>
			<td><?= $row["keahlian"];?></td>
			<td><?= $row["alamat"];?></td>
			<td><?= $row["email"];?></td>
			<td>
			<a class="waves-effect waves-light btn-small">Edit</a>  
			</td>
			<td>
			<a href="hapus.php?id=<?= $row["id"]?>" class="waves-effect waves-light btn-small" onclick="return confirm('Hapus Data ?');">Delete</a>  

			</td>
		</tr>
		<?php $i++ ?>
		<?php endforeach;?>
	
		</table>
    </div>
	
<!-- Floating Action Button -->

<div class="fixed-action-btn">
  <a class="btn-floating btn-large red">
    <i class="large material-icons">mode_edit</i>
  </a>
  <ul>
    <li><a href="tambah.php" class="btn-floating red"><i class="material-icons">add</i></a></li>
    <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
    <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
    <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
  </ul>
</div>
      

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="script.js"></script>
</body>
</html>
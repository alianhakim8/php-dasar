<!-- logic php -->
<?php  
// koneksi
$db = mysqli_connect("localhost","root","","phpdasar");

require 'functions.php';
// cek apakah tombol submit sudah di tekan atau belum
if ( isset($_POST["submit"])){

	// cek apakah data berhasil di tambahkan atau tidak
	if ( tambah($_POST) > 0 ){
		echo "<script>
			alert('data berhasil Ditambahkan');
			document.location.href = 'index.php';

		</script>";
	}else{
		echo "<script>
			alert('data gagal Ditambahkan');
			document.location.href = 'index.php';	
		</script>";
	}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Dokter</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <style>

 	h1{
 		font-size: 20pt;
 		text-align: center;
 	}
 	label{
 		font-size: 15pt;
 		color: black;
 	}

 </style>
<body>
<div class="container">
		<h1>Tambah Data Dokter</h1>

	<div class="row">
    <form class="col s12" action="" method="post">
      <div class="row">
        <div class="input-field col s12">
          <input  id="nama" name="nama" type="text" class="validate" required>
          <label for="nama">Nama</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input  id="foto" name="foto" type="text" class="validate" required>
          <label for="foto">Foto</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="keahlian" name="keahlian" type="text" class="validate" required>
          <label for="keahlian">Keahlian</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="alamat" name="alamat" type="text" class="validate" required>
          <label for="alamat">Alamat</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" name="email" type="email" class="validate" required>
          <label for="email">Email</label>
        </div>
      </div>
      <button type="submit" class="waves-effect waves-light btn" name="submit">Tambah Data<i class="material-icons right">send</i></button>
	<a href="index.php" class="waves-effect waves-light btn">Kembali</a>
    </form>
</div>

</div>

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
</html>
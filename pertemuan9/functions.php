<?php 
// koneksi ke database 
// mysqli_connect("nama_host","username_mysql", "passwordnya" , "nama_database");
$db = mysqli_connect("localhost", "root" , "" ,"phpdasar");



function query($query){
	global $db;
	$result = mysqli_query($db, $query);
	$rows = [];
	while ( $row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}

	return $rows;
}

// function tambah
function tambah($data){
	global $db;
	// ambil data dari tiap elemen dalam form untuk di simpan kedalam variabel
	$foto = htmlspecialchars($data["foto"]);
	$nama = htmlspecialchars($data["nama"]);
	$keahlian = htmlspecialchars($data["keahlian"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$email = htmlspecialchars($data["email"]);

	// query insert data
	$query = "INSERT INTO nama_dokter VALUES
	('','$foto','$nama','$keahlian','$alamat','$email')";


	mysqli_query($db, $query);
	return mysqli_affected_rows($db);
}




function hapus($id){
	global $db;
	

	$a = mysqli_query($db, "DELETE FROM nama_dokter WHERE id = $id");
	// var_dump($db);die;
	return mysqli_affected_rows($db);
}

?>
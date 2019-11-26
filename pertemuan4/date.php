<!-- FUNGSI PADA PHP -->
<?php 
// 1. DATE
// untuk menampilkan tanggal dengan format tertentu 
// l = tampilkan hari
// D = tampilkan hari
// M = untuk bulan
echo date("l, d/M/Y");
echo "<br>";

// 2. TIME
echo time();
// untuk mengetahui 100 hari kedepan
echo date("l",time()+60*60*24*100);
echo "<br>";
// untuk mengetahui 100 hari kebelakang
echo date("l", time()-60*60*24*100);
echo "<br>";
// untuk mengetahui tanggal lahir


// 3, MKTIME
// membuat sendiri detik 
// mktime(0,0,0,0,0,0);
// jam , menit , detik , bulan ,tanggal ,tahun
echo date("l",mktime (0,0,0,1,7,2001));
echo "<br>";

// 4. STRTOTIME
echo date("l",strtotime("25 jan 2019"));
echo "<br>";
?>
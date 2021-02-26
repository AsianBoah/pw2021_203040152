<?php 
/*
Fadhlan Maulana
203040152
https://github.com/AsianBoah/pw2021_203040152
Pertemuan 4 - Feb 25th 2021
Mempelajari beragam sintaks date PHP 
/*
?>
<?php
// Date
// Untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 January 1970
// echo time();
// echo date("d M Y", time()+60*60*24*100);

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,3,14,2002));

// strtotime
// echo date("l", strtotime("14 Mar 2002"));


?>
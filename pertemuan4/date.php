<?php
// Date 
// Untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");

// Time
// UNIX Timestamp / Epoch time
// detik yang sudah berlalu sejak 1 januari 1970
// echo time();
// echo date("l", time()+60*60*24*100);

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0);
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,3,11,2000));

// strtotime
// echo date("l", strtotime("11 mar 2000"));
?>
<?php

//Saat tekan logout masuk ke sini, dan session dimulai
session_start();
//Semua Session dihapus/ di-destroy
session_destroy();
// diarahkan ke form login
header("Location: index.php");

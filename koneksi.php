<?php
$koneksi = mysqli_connect("localhost", "root", "", "tes");
 
if($koneksi){
 //echo "Koneksi ke database berhasil";
}else{
 echo "Koneksi ke database gagal. Mohon periksa lagi config koneksi database Anda";
}

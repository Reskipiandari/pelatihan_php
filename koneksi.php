<?php
$hostname="localhost";
$username="root";
$password="";
$database="mahasiswa";
$conn = mysqli_connect($hostname,$username,$password,$database);
if ($conn == true)  {
    echo "berhasil terhubung ke database";
} else {
    echo "gagal terhubung ke database";
}
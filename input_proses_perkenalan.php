<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

// mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])) {

	// membuat variabel untuk menampung data dari form
  $nama = $_POST['nama'];
  $status = $_POST['status'];
  
 
  
  // jalankan query INSERT untuk menambah data ke database
  $query = "INSERT INTO perkenalan VALUES ('$nama','$status')";
  $result = mysqli_query($db, $query);
  // periska query apakah ada error
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($db).
           " - ".mysqli_error($db));
      echo "gagal koneksi";
  }
}

// melakukan redirect (mengalihkan) ke halaman index.php
header("location:../App-Perkenalan/index.html");
?>

<?php 
  $servername = "localhost";
  $username   = "root";
  $password   = "";
  $dbname     = "form_peserta_didik";

  // create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // check connection
  if (!$conn) {
      die("Connection failed:" . mysqli_connect_error());
  }

 
  $sql_ = "CREATE TABLE peserta (
      nis INT (50) PRIMARY KEY,
      jp VARCHAR(50) NOT NULL,
      tanggal VARCHAR(50) NOT NULL,
      ujian VARCHAR(50) NOT NULL,
      paud VARCHAR(50) NOT NULL,
      tk VARCHAR(50) NOT NULL,
      skhun VARCHAR(50) NOT NULL,
      hobi VARCHAR(50) NOT NULL
      )";
      
  if (mysqli_query($conn, $sql_)) {
      echo "Database berhasil dibuat";
  } else {
      echo "Gagal membuat database" . mysqli_error($conn);
  }

  $sql = "CREATE TABLE pribadi (
    nik INT (50) PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    jk VARCHAR(50) NOT NULL,
    nisn VARCHAR(50) NOT NULL,
    tempat_lahir VARCHAR(50) NOT NULL,
    tanggal_lahir VARCHAR(50) NOT NULL,
    agama VARCHAR(50) NOT NULL
    )";
    
if (mysqli_query($conn, $sql)) {
    echo "Database berhasil dibuat"; 
} else {
    echo "Gagal membuat database". mysqli_error($conn);
}

$sql = "CREATE TABLE dataibu (
    nama_ibu_kandung VARCHAR(50) PRIMARY KEY,
    tahun_lahir_ibu VARCHAR(50) NOT NULL,
    pendidikan_ibu VARCHAR(50) NOT NULL,
    pekerjaan_ibu VARCHAR(50) NOT NULL,
    penghasilan_ibu VARCHAR(50) NOT NULL,
    berkebutuhan_khusus VARHCAR(50) NOT NULL
    )";

    if (mysqli_query($conn, $sql)) {
        echo "Database berhasil dibuat"; 
    } else {
        echo "Gagal membuat database". mysqli_error($conn);
    }
    
  mysqli_close($conn);
?>
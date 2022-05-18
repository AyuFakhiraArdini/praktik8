<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <title>Formulir Validasi</title>
    <style>
        .warning {color: #FF0000;}
    </style>
    </head>
    <body>
        <?php 
        $error_nama ="";
        $error_nik ="";
        $error_jk="";
        $error_nisn="";
        $error_tempat_lahir="";
        $error_tanggal_lahir="";
        $error_agama="";
      
       
        $nama="";
        $nik="";
        $jk="";
        $nisn="";
        $tempat_lahir="";
        $tanggal_lahir="";
        $agama="";
      

     
      
        ?>
  <div class="row">
  <div class="col-md-6">
  <div class="card">
    <div class="card-header">
      DATA PRIBADI
    </div>
    <div class="card-body">
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
  
  <div class="form-group row">
  <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
    <div class="col-sm-10">
      <input type="text" name="nama" class="form-control <?php echo($error_nama !="" ? "is-invalid" : "");?>" 
      id="nama" placeholder="Nama Lengkap" requiredvalue="<?php echo $nama; ?>">
      <span class="warning" ><?php echo $error_nama; ?></span>
    </div>
  </div>    
      
  <div class="form-group row">
  <label for="jk" class="col-sm-2 col-form-label ">Jenis Kelamin</label>
    <div class="col-sm-10">
    <input type="radio" name="jk" value="Laki-Laki">Laki-Laki</label> 
      <input type="radio" name="jk" value="Perempuan">Perempuan</label> 
      <span class="warning" ><?php echo $error_jk; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="nisn" class="col-sm-2 col-form-label ">NISN</label>
    <div class="col-sm-10">
      <input type="text" name="nisn" class="form-control <?php echo($error_nisn !="" ? "is-invalid" : "");?>" 
      id="nisn" placeholder="NISN" value="<?php echo $nisn; ?>">
      <span class="warning" ><?php echo $error_nisn; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="nik" class="col-sm-2 col-form-label "> NIK </label>
    <div class="col-sm-10">
    <input type="text" name="nik" class="form-control <?php echo($error_nik !="" ? "is-invalid" : "");?>" 
      id="nik" placeholder="NIK" value="<?php echo $nik; ?>">
      <span class="warning" ><?php echo $error_nik; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="tempat_lahir" class="col-sm-2 col-form-label ">Tempat Lahir</label>
    <div class="col-sm-10">
      <input type="text" name="tempat_lahir" class="form-control <?php echo($error_tempat_lahir !="" ? "is-invalid" : "");?>" 
      id="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $tempat_lahir; ?>">
      <span class="warning" ><?php echo $error_tempat_lahir; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="tanggal_lahir" class="col-sm-2 col-form-label ">Tanggal Lahir</label>
    <div class="col-sm-10">
      <input type="text" name="tanggal_lahir" class="form-control <?php echo($error_tanggal_lahir !="" ? "is-invalid" : "");?>" 
      id="tanggal_lahir" placeholder="Tanggal Lahir" value="<?php echo $tanggal_lahir; ?>">
      <span class="warning" ><?php echo $error_tanggal_lahir; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="agama" class="col-sm-2 col-form-label "> Agama </label>
    <div class="col-sm-10">
    <select name="agama">
            <option value="Islam"> Islam </option>
            <option value="Kristen"> Kristen/Protestan</option>
            <option value="Katholik"> Katholik</option>
            <option value="Hindu"> Hindu </option>
            <option value="Budha"> Budha </option>
            <option value="Khong Hu Chu"> Khong Hu Chu </option>
            <option value="Lainnya"> Lainnya </option>
            </select>
      <span class="warning" ><?php echo $error_agama; ?></span>
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
     <button type="submit" name="Submit" class="btn btn-primary">Submit</button>
    </div>
  </div>

    </form>
        </div> 
      </div>
    </div>
  </div>

  <?php 
  include("koneksi.php");

  if(isset($_POST['Submit'])) {
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $nisn = $_POST['nisn'];
    $tempat_lahir= $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $agama= $_POST['agama'];
   
 
    $sql = "INSERT INTO pribadi (nik,nama,jk,nisn,tempat_lahir,tanggal_lahir,agama) VALUES ('$nik','$nama','$jk','$nisn',' $tempat_lahir','$tanggal_lahir','$agama')";
    $pribadi= mysqli_query($conn, $sql);

        if ($pribadi) {
          echo "Tambah data berhasil";
          exit;
        }
    else {
      echo "Gagal";
      exit;
    }
  }
  ?>

</body>
</html>
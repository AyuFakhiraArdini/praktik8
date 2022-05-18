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
        $error_nis ="";
        $error_jp="";
        $error_tanggal="";
        $error_ujian="";
        $error_paud="";
        $error_tk="";
        $error_skhun="";
        $error_hobi="";
       
        $nis="";
        $jp="";
        $tanggal="";
        $ujian="";
        $paud="";
        $tk="";
        $skhun="";
        $hobi="";
      
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST["tanggal"]))
            {
                $error_tanggal = "Data tanggal tidak boleh kosong";
            }
            else
            {
                $tanggal = cek_input ($_POST["tanggal"]);
                if(!is_numeric($tanggal))
                {
                    $error_tanggal = "Data tanggal hanya boleh angka";
                }
            }

            if(empty($_POST["nis"]))
            {
                $error_nis = "Data NIS tidak boleh kosong";
            }
            else
            {
                $nis = cek_input ($_POST["nis"]);
                if(!is_numeric($nis))
                {
                    $error_nis = "Data NIS hanya boleh angka";
                }
            }

        }
  
        function cek_input($data){
            $data = trim($data);
            $data= stripslashes($data);
            $data= htmlspecialchars($data);
            return $data;
        }
        ?>
  <div class="row">
  <div class="col-md-6">
  <div class="card">
    <div class="card-header">
      REGISTRASI PESERTA DIDIK
    </div>
    <div class="card-body">
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
  
  <div class="form-group row">
  <label for="jp" class="col-sm-2 col-form-label "> Jenis Pendaftaran</label>
    <div class="col-sm-10">
    <input type="radio" name="jp" value="Siswa Baru">Siswa Baru</label>
      <input type="radio" name="jp" value="Pindahan">Pindahan</label> 
      <span class="warning" ><?php echo $error_jp; ?></span>
    </div>
  </div>
  
  <div class="form-group row">
  <label for="tanggal" class="col-sm-2 col-form-label">Tanggal Masuk Sekolah</label>
    <div class="col-sm-10">
      <input type="text" name="tanggal" class="form-control <?php echo($error_tanggal !="" ? "is-invalid" : "");?>" 
      id="tanggal" placeholder="Tanggal Masuk Sekolah" value="<?php echo $tanggal; ?>">
      <span class="warning" ><?php echo $error_tanggal; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="nis" class="col-sm-2 col-form-label ">NIS</label>
    <div class="col-sm-10">
      <input type="text" name="nis" class="form-control <?php echo($error_nis !="" ? "is-invalid" : "");?>" 
      id="nis" placeholder="NIS" value="<?php echo $nis; ?>">
      <span class="warning" ><?php echo $error_nis; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="ujian" class="col-sm-2 col-form-label ">Nomor Peserta Ujian</label>
    <div class="col-sm-10">
      <input type="text" name="ujian" class="form-control <?php echo($error_ujian !="" ? "is-invalid" : "");?>" 
      id="ujian" placeholder="Nomor ujian" value="<?php echo $ujian; ?>">
      <span class="warning" ><?php echo $error_ujian; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="paud" class="col-sm-2 col-form-label "> Apakah Pernah PAUD?</label>
    <div class="col-sm-10">
    <input type="radio" name="paud" value="Ya">Ya</label>
      <input type="radio" name="paud" value="Tidak">Tidak</label> 
      <span class="warning" ><?php echo $error_paud; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="tk" class="col-sm-2 col-form-label "> Apakah Pernah TK?</label>
    <div class="col-sm-10">
    <input type="radio" name="tk" value="Ya">Ya</label>
      <input type="radio" name="tk" value="Tidak">Tidak</label> 
      <span class="warning" ><?php echo $error_tk; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="skhun" class="col-sm-2 col-form-label ">No.Seri SKHUN Sebelumnya</label>
    <div class="col-sm-10">
      <input type="text" name="skhun" class="form-control <?php echo($error_skhun !="" ? "is-invalid" : "");?>" 
      id="skhun" placeholder="No.Seri SKHUN Sebelumnya" value="<?php echo $skhun; ?>">
      <span class="warning" ><?php echo $error_skhun; ?></span>
    </div>
  </div>


  <div class="form-group row">
  <label for="hobi" class="col-sm-2 col-form-label "> Hobi </label>
    <div class="col-sm-10">
    <select name="hobi">
            <option value="Olahraga"> Olahraga </option>
            <option value="Kesenian"> Kesenian</option>
            <option value="Membaca"> Membaca</option>
            <option value="Menulis"> Menulis </option>
            <option value="Traveling"> Traveling </option>
            </select>
      <span class="warning" ><?php echo $error_hobi; ?></span>
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
     <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>

    </form>
        </div> 
      </div>
    </div>
  </div>

  <?php 
  include("koneksi.php");

  if(isset($_POST['submit'])) {
    $nis = $_POST['nis'];
    $jp = $_POST['jp'];
    $tanggal = $_POST['tanggal'];
    $ujian = $_POST['ujian'];
    $paud= $_POST['paud'];
    $tk = $_POST['tk'];
    $skhun = $_POST['skhun'];
    $hobi = $_POST['hobi'];


    $sql = "INSERT INTO peserta (nis,jp,tanggal,ujian,paud,tk,skhun,hobi) VALUES ('$nis','$jp','$tanggal','$no_ujian','$paud','$tk','$skhun','$hobi')";
    $peserta = mysqli_query($conn, $sql);

        if ($peserta) {
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
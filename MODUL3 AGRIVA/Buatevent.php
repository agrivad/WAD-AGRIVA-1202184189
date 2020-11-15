<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Buat Event</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar navbar navbar-dark bg-primary">
  <a class="navbar-brand" href="#">EAD EVENTS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="Home.php">Home <span class="sr-only">(current)</span></a>
      </li>

      <button type="button" class="btn btn-outline-light bg-primary text-white">Buat Event</button>
   
  </div>
</nav>
<br>

<!-- judul -->
<div class="row ml-3 mr-2">
    <div class="col text-left ">
    <h4 class="text-primary">Buat Event</h4>

<!-- CARD -->
<div class="row">
<div class="col">
<div class="card mt-2"  >
  <div class="card-header bg-danger">
  </div>
    <div class="card-body">
    <form method="POST" action=""  >
      <div class="form-group">
        <label><b>Name</b></label>
        <input type="text" name="nnama"  class="form-control" placeholder="Open Mind ESD Laboratory" required>
      </div>
      
        <div class="form-group">
        <label><b>Deskripsi</b></label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ddeskripsi" placeholder=""></textarea>
      </div>
      
        <div class="form-group" >
        <label><b>Upload Gambar</b></label>
        <input type="file" name="ggambar"  class="form-control" placeholder="" required>
      </div>
        
        <div class="form-group">
        <label><b>Kategori</b></label><br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rradio" id="exampleRadios1" Value="Online"  checked>
            <label class="form-check-label" for="exampleRadios1">
              Online
            </label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rradio" value="Offline">
            <label class="form-check-label" for="exampleRadios2">
              Offline
            </label>
          </div>
        </div>
        <br><br><br>
    
  </div>
	</div>
</div>
<div class="col">
<!-- CARD KEDUA -->
<div class="card mt-2"  >
  <div class="card-header bg-primary text-white">
  </div>
  <div class="card-body">
      <div class="form-group">
        <label><b>Tanggal</b></label><br>
        <input type="date" id="tanggal" name="ttanggal" id="tanggal" class="form-control">
      </div>
    
<div class="form-group">
<div class="row">
  <div class="col">
      <label>Jam Mulai</label>
      <input type="time" class="form-control" name="jjamawal">
    </div>
    <div class="col">
        <label>Jam Berakhir</label>
      <input type="time" class="form-control" name="jjamakhir">
    </div>
    </div>
    </div>

<div class="form-group">
  <label><b>Tempat</b></label>
  <input type="text" name="ttempat" class="form-control" placeholder="Zoom Meeting" required>
</div>
    
<div class="form-group">
  <label><b>Harga</b></label>
  <input type="text" name="hharga"  class="form-control" placeholder="" required>
  </div>
  <div class="form-group">
      <label>Benefit</label><br>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="cekbox[]" value="Snack" >
    <label class="form-check-label" for="inlineCheckbox1">Snack</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="cekbox[]" value="Sertifikat" >
    <label class="form-check-label" for="inlineCheckbox2">Sertifikat</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="cekbox[]" value="Souvenir">
    <label class="form-check-label" for="inlineCheckbox2">Souvenir</label>
  </div>
</div>

<div class="col text-right ">
<button type="submit" class="btn btn-danger" name="submitt">Submit</button>
<button type="reset" class="btn btn-primary" name="cancel">Cancel</button>
</div>

</form>
</div>
</div> 
</div>
</div>
</div>
</div>

<?php
  include ('config.php');

  if(isset($_POST['submitt']))
  {
    
    $b= implode(",", $_POST['cekbox']);
    $simpan = mysqli_query($conn, "INSERT INTO 'event' ('name','deskripsi','gambar','kategori','tanggal','mulai','berakhir','tempat','harga','benefit')
                  VALUES ('$_POST[nnama]',
                          '$_POST[ddeskripsi]',
                          '$_POST[ggambar]',
                          '$_POST[rradio]', 
                          '$_POST[ttanggal]',
                          '$_POST[jjamawal]',
                          '$_POST[jjamakhir]',
                          '$_POST[ttempat]',
                          '$_POST[hharga]',
                          '$b')
                  ");
    if($simpan) 
    {
      echo "<script>
          alert('Berhasil simpan!SELAMAT BROU!s');
          document.location='Home.php';
          </script>";
    }
    else
    {
      echo "<script>
          alert('GAGAL MENYIMPAN!!');
          </script>";
    }
  }
?>



  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
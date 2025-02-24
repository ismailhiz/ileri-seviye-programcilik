<?php


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
   <div class="container">
  <div class="row">
    <div class="col-md-4">
      <!-- <img src="img/igü-logo.png" alt=""> -->
    </div>
    <div class="col-md-4">
    <form class="row g-3 needs-validation" name="form" action="kutuphane2.php" method="post" novalidate>
  <div class="col-md-12">
    <label for="validationCustom01" class="form-label">Cilt Numarası</label>
    <input type="text" class="form-control" id="validationCustom01" value="Mark" name="cilt_no" value="clt Numarası" required>
  </div>
  <div class="col-md-12">
    <label for="validationCustom02" class="form-label">Yazar Adı</label>
    <input type="text" class="form-control" id="validationCustom02" value="Yazar Adı" name="yazar_adi" required>
  </div>
  <div class="col-md-12">
    <label for="validationCustomUsername" class="form-label">Yayınevi</label>
    <div class="input-group has-validation">
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="yayinevi" value="yayinevi" required>
     
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit" name="ekle">Ekle</button>
    <button class="btn btn-primary" type="submit" name="sil">sil</button>
    <button class="btn btn-primary" type="submit" name="güncelle">güncelle</button>
    <button class="btn btn-primary" type="submit" name="listele">listele</button>

  </div>
</form>
    </div>
    <div class="col-md-4"></div>
  </div>
   </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>


<!-- ÖDEV: SİL YÜKLEME VS İŞLEMLERİNİ BİZ YAPACAĞIZ YÜKLEMEDEN ÖNCE BUNLARI YAP -->
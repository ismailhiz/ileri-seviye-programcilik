<!-- Session kontrlü yapılacak ve kullanıcı doğru bir şekilde girdiyse 
hoşgeldniz diyeceksiniz -->

<?php 

session_start();
if($_SESSION["kullaniciadi"]=="admin" && $_SESSION["kullanicisifre"]==123456)
{
  echo"<h4>Hoşgeldiniz.Sayın".$_SESSION["kullaniciadi"]."</h4>"."<br>"."<a href='ozel-sayfa.php'> Özel Sayfa</a> | <a href='cikis.php'</a>";
 
}
else{
  header("Location:giris.php");
}

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>

<div class="container">
  <div class="row">
    <div class="col">
      <p>Giriş başarılı</p> <br>
      <p><a href="ozel-sayfa.php">Özel sayfaya giriş yap</a>|<a href="giris.php">Çıkış yap</a></p>
    </div>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

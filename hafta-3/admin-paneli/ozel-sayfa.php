<?php 
session_start();
if($_SESSION["kullaniciadi"]=="admin" &&
$_SESSION["kullanicisifre"]==123456)
{
  echo"<h3>Bu sayfa size özel sayfadır. Oturumunuz başarılya geçrellşeşitiği için bu sayfaya 
  yönlendiriliyorsunuz.</h3>"."<br>"."<a href='index.php'>Anasayfa</a>|<a href='cikis.php'>Çıkış yap</a>";
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

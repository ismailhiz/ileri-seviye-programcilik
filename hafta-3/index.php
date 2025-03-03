<?php 
// cookikes
// setcookie("cerez","ismail", time()+(60*60*24*365));
// if(isset($_COOKIE["cerez"]))
// {
//     echo "Çerezin adı:".$_COOKIE["cerez"];

// }
// else
// {
//     echo "böyle bir çerez yok";
// }


// session

// session_start();
// $_SESSION["mesaj"]="Gelişim Üniversitesine Hoşgeldiniz";

// echo $_SESSION["mesaj"];
$_SESSION["dizi"]=array(

    "kullanici_id"=>123,
    "kullanici_adi"=>"Gelişim Üniversitesi",
    "kullanici_mail"=>"ismailhizz@icloud.com",
    "kullanici_telefon"=>"0 (212) 422 700",);
    echo $_SESSION["dizi"]["kullanici_mail"]."<br>";
    print_r($_SESSION["dizi"]);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
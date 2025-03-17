<?php 

// anahtarndeğerleri olmayan diziyi json dizisine çevirme 


$diller=array("PHP","C#","Java");
$json_dizisi=json_encode($diller);
echo $json_dizisi."<br>";


// Anahtar değerleri olan bir diziyi json dizisi haline çevirme

$arabaMarkasi=array(
    "araba1"=>"Mercedes",
    "araba2"=>"BMW",
    "araba3"=>"Volvo",

);
$json_nesnesi=json_encode($arabaMarkasi);
echo $json_nesnesi."<br>";


// Kendinizi tanıtan bir json nesnesi oluşturunuz:

$json_ben=' {
    "isim":"ismail",
    "soyisim":"hız",
    "memleket":"Malatya"
}
';

$veri=json_decode($json_ben);
echo $veri->isim."<br>".
$veri->soyisim."<br>".
$veri->memleket;






?>




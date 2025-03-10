<?php
$veri = simplexml_load_file("personel.xml");

if (!$veri) {
    die("XML dosyası yüklenemedi!");
}
// echo "<pre>";
// print_r($veri);
// echo "</pre>";

// foreach ($veri->personel as $item) {
//     echo "Personelin adı: " . $item->adsoyad . "<br>" . 
//          "Personelin departmanı: " . $item->{'departmanı'} . "<br><hr>";
// }

$personel=$veri->addChild("personel");
$personel=$veri->addChild("adsoyad","mehmet soyal");
$personel=$veri->addChild("departman","igyo müdür");
echo $veri->asXML();

foreach($veri->personel as $item)
{
    echo "personelin Adı: ".$item->adsoyad."<br>".
    "personelin departmanı: ".$item->departman."<br>"."<hr>"; 
}


?>

<?php 
session_start();
include "assets/inc/baglan.php";

if(isset($_POST["giris"])) {
    $kadi = $_POST["kullanici_adi"];
    $ksifre = $_POST["ksifre"];

    // SQL Injection'a karşı güvenli hale getirildi
    $sorgu = $db->prepare("SELECT * FROM kullanicilar WHERE kullanici_adi = ? AND sifre = ?");
    $sorgu->execute([$kadi, $ksifre]);

    if($sorgu->rowCount() > 0) {
        $ad_soyad = $sorgu->fetch(PDO::FETCH_ASSOC);
        $_SESSION["kadi"] = $kadi;
        $_SESSION["ksifre"] = $ksifre;
        
        echo "<h3>Hoşgeldiniz " . $ad_soyad["ad_soyad"] . ". Sayfamı ziyaret ettiğiniz için teşekkür ederim.</h3><br>";
        echo "<a href='cikis.php'>Çıkış yap</a>";
    } 
    else {
        echo "<h3>Hatalı giriş yaptınız. Ana sayfaya yönlendiriliyorsunuz.</h3>";
        header("refresh:4; url=form.php");
        exit;
    }
}
?>

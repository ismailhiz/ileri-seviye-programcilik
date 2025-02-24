<?php 

// Hata ayıklama modu aktif
try {
    $db = new PDO("mysql:host=localhost; dbname=durum; charset=utf8", "root", "", [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
    echo "Veritabanı bağlantısı başarılı.<br>";
} catch (PDOException $e) {
    die("Bağlantı hatası: " . $e->getMessage());
}

// Ekleme işlemi
if (isset($_POST["ekle"])) {
    try {
        $kcilt_no = $_POST["cilt_no"];
        $kyazar_adi = $_POST["yazar_adi"];
        $kyayinevi = $_POST["yayinevi"];

        $ekle = $db->prepare("INSERT INTO durum (cilt_no, yazar_adi, yayinevi) VALUES (?, ?, ?)");
        $ekle->execute([$kcilt_no, $kyazar_adi, $kyayinevi]);

        echo "Kayıt ekleme başarılı!<br>";
    } catch (PDOException $e) {
        echo "Ekleme hatası: " . $e->getMessage();
    }
}

// Silme işlemi
if (isset($_POST["sil"])) {
    try {
        $sil = $db->prepare("DELETE FROM durum"); // Tüm kayıtları siler
        $sil->execute();

        if ($sil->rowCount() > 0) {
            echo "Tüm kayıtlar başarıyla silindi!";
        } else {
            echo "Silme işlemi başarısız! Tablo zaten boş.";
        }
    } catch (PDOException $e) {
        echo "Silme hatası: " . $e->getMessage();
    }
}




// Son eklenen kaydı getirme
$sonKayit = $db->query("SELECT * FROM durum ORDER BY cilt_no DESC LIMIT 1")->fetch(PDO::FETCH_ASSOC);

// Eğer kayıt varsa değişkenlere ata
$cilt_no = $sonKayit ? $sonKayit['cilt_no'] : "";
$yazar_adi = $sonKayit ? $sonKayit['yazar_adi'] : "";
$yayinevi = $sonKayit ? $sonKayit['yayinevi'] : "";

// Güncelleme işlemi
if (isset($_POST["guncelle"])) {
    $kcilt_no = $_POST["cilt_no"];
    $kyazar_adi = $_POST["yazar_adi"];
    $kyayinevi = $_POST["yayinevi"];

    $guncelle = $db->prepare("UPDATE durum SET yazar_adi = ?, yayinevi = ? WHERE cilt_no = ?");
    $guncelle->execute([$kyazar_adi, $kyayinevi, $kcilt_no]);

    if ($guncelle->rowCount() > 0) {
        echo "Güncelleme başarılı!";
    } else {
        echo "Güncelleme başarısız! Böyle bir kayıt bulunamadı.";
    }
}

?>


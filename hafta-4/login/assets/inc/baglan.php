<?php 
try {
    $db = new PDO("mysql:host=localhost;dbname=login;charset=utf8", "root", "", [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Hata modunu Exception yap
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Varsayılan fetch modunu ayarla
        PDO::ATTR_EMULATE_PREPARES => false // Güvenlik için emulated prepares'i kapat
    ]);
} catch (PDOException $e) {
    die("Veritabanı bağlantı hatası: " . $e->getMessage());
}
?>

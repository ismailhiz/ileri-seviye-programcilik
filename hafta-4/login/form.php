<?php 
include "assets/inc/baglan.php";
?>
<!doctype html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Giriş Yap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="col-md-6">
        <form action="veritabani.php" method="post" class="p-4 shadow rounded bg-white">
            <div class="text-center mb-3">
                <img src="assets/img/igü-logo.png" alt="Logo" class="img-fluid" style="max-width: 200px;">
            </div>
            <div class="mb-3">
                <label class="form-label">Kullanıcı Adı</label>
                <input type="text" class="form-control" name="kullanici_adi" placeholder="Kullanıcı adı giriniz" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Şifre</label>
                <input type="password" class="form-control" name="ksifre" placeholder="Şifre giriniz" required>
            </div>
            <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="beni_hatirla">
            <label class="form-check-label" for="exampleCheck1">Beni Hatırla!</label>
           </div>
            <div class="d-grid">
                <button type="submit" name="giris" class="btn btn-primary">Giriş Yap</button>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

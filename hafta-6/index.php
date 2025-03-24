<?php
include 'PHPMailer/../src/SMTP.php';
include 'PHPMailer/../src/PHPMailer.php';
include 'PHPMailer/../src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\Exception;

$mail=new PHPMailer();
$mail->Host='smtp.outlook.com';
$mail->Username= 'isomaohiz123@gmail.com';
$mail->Password="Deneme123.";
$mail->Port=587;
$mail->SMTPSecure='tls';
$mail->isSMTP();
$mail->SMTPAuth=true;
$mail->isHTML(true);
$mail->CharSet="UTF-8";
$mail->setLanguage('tr','PHPMailer/language/');
$mail->setFrom('isomaohiz123@gmail.com','İsmail Hız');
$mail->Subject='Deneme mail Gönderimi';
$mail->Body=

"
<html>
<head></head>
<body>
Bu mail İGMYO Web Tasarımı ve Kodlama Programı Öğrencileri tarafıdnan PHPMailer ile gönderimini test etmek amacıyla gönderilmiştir.</h3>

</body></html>";

$mail_gonder=$mail->send();
if($mail_gonder)
{
echo "Mail gönderimi Başarılı";
}else{
    echo "Mail gönderimi başarısız. Mail hata mesajı:".$mail->ErrorInfo;
}
?>

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
            <div class="mb-3">
                <label class="form-label">Mail Adresiniz</label>
                <input type="mail" class="form-control" name="kmail" placeholder="mail giriniz" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Bölümünüz</label>
                <input type="text" class="form-control" name="kbolum" placeholder="bölümünüzü giriniz" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Programlama dilleri</label>
                    <select name="kprogramlamadili" id="">
                        <option value="php">PHP</option>
                        <option value="js">js</option>
                        <option value="rugby">rugby</option>
                        <option value="go">go</option>
                        <option value="python">python</option>
                    </select>
            </div>
            <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="beni_hatirla">
            <label class="form-check-label" for="exampleCheck1">Beni Hatırla!</label>
           </div>
           <div class="mb-12">
                <label class="form-label">Mesajınız</label>
                <textarea name="kmesaj" id="" cols="30" rows="4"></textarea>
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

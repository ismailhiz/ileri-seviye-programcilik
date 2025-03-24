<?php 

include '../hafta-6/PHPMailer/src/SMTP.php';
include '../hafta-6/PHPMailer/src/PHPMailer.php';
include '../hafta-6/PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\Exception;

$kadi=$_POST["adi"];
$ksoyadi=$_POST["soyadi"];
$kmail=$_POST["mail_adresi"];
$kbolum=$_POST["kbolum"];
$kdiller=$_POST["diller"];
$koneri=$_POST["oneri"];


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
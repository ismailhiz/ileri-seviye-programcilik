<?php 

try
{
    $db=new PDO("mysql:host=localhost;dbname=igü_blog;charset=utf8","root","");
}

catch(PDOException $e)
{
    print $e->getMessage();
}
$sorgu=$db->query("SELECT * FROM iga_blog", PDO::FETCH_ASSOC);
$sonuc=$sorgu->fetchAll(PDO::FETCH_ASSOC);
$json_veri=json_encode($sonuc,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
file_put_contents('haberler2.json',$json_veri);

?>
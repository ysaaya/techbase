<?php
$dsn='ホスト名';
$user='ユーザー名';
$password='パスワード';
$pdo=new PDO($dsn,$user,$password,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

$sql=$pdo -> prepare("INSERT INTO tbtest (id,name,comment) VALUES ('1',:name,:comment)");
$sql->bindParam(':name',$name,PDO::PARAM_STR);
$sql->bindParam(':comment',$comment,PDO::PARAM_STR);
$name=' (淀谷紗彩) ';
$comment=' (コメント) ';
$sql -> execute();
?>
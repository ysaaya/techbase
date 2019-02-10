<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>

<?php
$comment = $_POST['comment'];
$filename = 'mission_1-5_Yodotani.txt';
$fp = fopen($filename,'w');
fwrite($fp,$comment);
fclose($fp)
?>

 <form action="mission_1-5_Yodotani.php" method="post">
<input type="text" name="comment" placeholder="コメント"><br/>
<input type="submit" value="送信"> <br/>
 </form>
 
<?php
$comment = $_POST['comment'];
if($comment == "完成!"){
  echo "おめでとう！";
}
else if(!empty($comment)){
$contents=file_get_contents("mission_1-5_Yodotani.txt");
echo "ご入力ありがとうございます｡<br/>";
echo date('Y年m月d日 H時i分s秒');
echo "に". $_POST['comment']."を受け付けました";
}
?>
   
</body>
</html>
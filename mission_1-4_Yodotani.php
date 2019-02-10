<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
 
 <form action="mission_1-4_Yodotani.php" method="post">
<input type="text" name="comment" placeholder="コメント"><br/>
<input type="submit" value="送信"> <br/>
 
<?php

echo "ご入力ありがとうございます｡<br/>";
echo date('Y年m月d日 H時i分s秒');
echo 'に' . $_POST['comment']."を受け付けました";

?>

</form>
  
</body>
</html>

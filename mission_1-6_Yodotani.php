<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>


<?php
$comment = $_POST['comment'];
 if(!empty($comment)){
 $filename = 'mission_1-6_Yodotani.txt';
$fp = fopen($filename,'a');
fwrite($fp,$comment."\n");
fclose($fp);
}
?>

 <form action="mission_1-6_Yodotani.php" method="post">
<input type="text" name="comment" placeholder="コメント"><br/>
<input type="submit" value="送信"> <br/>
 </form>
     
</body>
</html>
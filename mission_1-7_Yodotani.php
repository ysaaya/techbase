<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>

 <form action="mission_1-7_Yodotani.php" method="post">
<input type="text" name="comment" placeholder="コメント"><br/>
<input type="submit" value="送信"> <br/>
 </form>
 
<?php
$comment = $_POST['comment'];
$filename = 'mission_1-6_Yodotani.txt';
$fp = fopen($filename,'a');
fwrite($fp,$comment."\n");
fclose($fp);
?>

<?php
$contents = file('mission_1-6_Yodotani.txt');
foreach($contents as $line){
  echo $line."<br />";
}
?>
 
</body>
</html>

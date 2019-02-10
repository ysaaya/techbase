<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>

<form action="mission_2-2_Yodotani.php" method="post">

<p>名前：<input type="text" name="name" placeholder="名前"><br/>
<p>コメント：<input type="text" name="comment" placeholder="コメント"><br/>

<input type="submit" value="送信"> 

</form>  

<?php
$name = $_POST['name'];
$comment = $_POST['comment'];
$date = date("Y年m月d日 H時i分s秒");

if(!empty($name)){
 if(!empty($comment)){
 	
 $filename = 'mission_2-1_Yodotani.txt';
$fp = fopen($filename,'a');
$num = count( file($filename)); 
$num++;
fwrite($fp,$num.'<>'.$name.'<>'.$comment.'<>'.$date."\n");
fclose($fp);
}
}
?>


<?php
    $contents = file('mission_2-1_Yodotani.txt');
foreach($contents as $line){
	$word = explode("<>",$line);
foreach($word as $line){
  echo $line."&ensp;";
}
  echo "<br />";
}
?>


</body>
</html>

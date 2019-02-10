<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>

<form action="mission_2-1_Yodotani.php" method="post">

<p>名前：<input type="text" name="name" placeholder="名前"><br/>
<p>コメント：<input type="text" name="comment" placeholder="コメント"><br/>

<input type="submit" value="送信"> 

</form>  


<?php
$name = $_POST['name'];
$comment = $_POST['comment'];
if(!empty($name)){
if(!empty($comment)){
$filename = 'mission_2-1_Yodotani.txt';
$date = date("Y年m月d日 H時i分s秒");
$fpa = fopen($filename,'a');
$file = file('mission_2-1_Yodotani.txt');
$num = count($file)-1; 
$a=explode("<>",$file[$num]);
$num2=$a[0]+1;
fwrite($fpa,$num2.'<>'.$name.'<>'.$comment.'<>'.$date."\n");
fclose($fpa);
}
}
?>



</body>
</html>

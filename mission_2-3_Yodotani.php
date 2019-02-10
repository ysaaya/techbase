<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>

<form action="mission_2-3_Yodotani.php" method="post">

<p>名前：<input type="text" name="name" placeholder="名前"><br/>
<p>コメント：<input type="text" name="comment"placeholder="コメント" >

<input type="submit" value="送信"><br/>

<p>削除対象番号：<input type="text" name="delete" placeholder="削除対象番号">

<input type="submit" value="削除"><br/>

</form>  

<?php
$filename = 'mission_2-1_Yodotani.txt';
$file = file('mission_2-1_Yodotani.txt',FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);  //ファイル全体を読み込んで配列に格納
$name = $_POST["name"];
$comment = $_POST["comment"];

	if(!empty($name)){
		if(!empty($comment)){
		$fpa = fopen($filename,'a');  //追記
		$date = date("Y年m月d日 H時i分s秒");
		$num = count($file)-1; 
		$a=explode("<>",$file[$num]);//文字列を文字列により分割する
		$num2 = $a[0]+1;
		fwrite($fpa,$num2.'<>'.$name.'<>'.$comment.'<>'.$date."\n");
		fclose($fpa);
		}
	}
		$delete = ($_POST["delete"]);
		if (!empty($delete)) { //削除欄が空でない時
		$fpw = fopen($filename,'w');  //ファイルを空
			foreach($file as $line){
			$a = explode("<>",$line); //文字列を文字列により分割する
				if($a[0]!==$_POST["delete"]){
		// ifで投稿番号と入力した削除対象番号が一致しない時//
				$b = implode("<>",$a); //配列要素を文字列により連結する
				fwrite($fpw,$b."\n");
				}
			}
			fclose($fpw);
		}


	
	$file2 = file("$filename");
		foreach($file2 as $line){
		$c = explode("<>",$line);
			foreach($c as $line){
			  echo $line." ";
			}
		echo "<br/>";
		}
//表示//

?>




</body>
</html>
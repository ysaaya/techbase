<?php
$filename = 'mission_2-1_Yodotani.txt';
$name = $_POST["name"];
$comment = $_POST["comment"];
//?//
if(empty($_POST["number2"])){
//?//
if(!empty($name)){
	if(!empty($comment)){
	$file = file('mission_2-1_Yodotani.txt',FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);  //ファイル全体を読み込んで配列に格納

		$fpa = fopen($filename,'a');  //追記
		$date = date("Y年m月d日 H時i分s秒");
		$num = count($file)-1; 
		$a=explode("<>",$file[$num]);//文字列を文字列により分割する
		$num2 = $a[0]+1;
		fwrite($fpa,$num2.'<>'.$name.'<>'.$comment.'<>'.$date."\n");
		fclose($fpa);
		}
		}
	}
	

$delete = ($_POST["delete"]);
	if (!empty($delete)) { //削除欄が空でない時
	$file = file('mission_2-1_Yodotani.txt',FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);  //ファイル全体を読み込んで配列に格納
	$fpw = fopen($filename,'w');  //ファイルを空
			foreach($file as $line){
			$a = explode("<>",$line); //文字列を文字列により分割する
			//?//
			if(!empty($a[0])){
				//?//
				if($a[0]!==$delete){
		// ifで投稿番号と入力した削除対象番号が一致しない時//
				$b = implode("<>",$a); //配列要素を文字列により連結する
				fwrite($fpw,$b."\n");
				}
				}
			}
			fclose($fpw);
		}


//編集フォームからPOSTでフォームの番号を受け取り
$edit=$_POST["edit"];
	if (!empty($edit)) { //編集欄が空でない時
	$file = file('mission_2-1_Yodotani.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

		foreach($file as $line){
		$a = explode("<>",$line); //文字列を文字列により分割する
			if($a[0]==$_POST["edit"]){
				// ifで投稿番号と入力した削除対象番号が一致した時//
			$editname = $a[1];
			$editcomment = $a[2];
			$editnumber = $a[0];
			}    
		}
	}


?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<form action="mission_2-4_Yodotani.php" method="post">
<input type = "text" name = "name" placeholder="名前" value = "<?php echo $editname;?>"><br>
<input type = "text" name = "comment" placeholder="コメント" value = "<?php echo $editcomment;?>">

<input type = "submit" value = "送信">

		<p><input type="text" name="delete" placeholder="削除対象番号">

	<input type="submit" value="削除"><br/>


		<p><input type="text" name="edit" placeholder="編集対象番号">
		<input type="hidden" name="number2" value="<?php echo $editnumber;?>">

	<input type="submit" value="編集"><br/>

</form>

<?php
$filename = 'mission_2-1_Yodotani.txt';
$name = $_POST["name"];
$comment = $_POST["comment"];
$date = date("Y年m月d日 H時i分s秒");
$number2 = $_POST["number2"];
	if (!empty($number2)) { //編集欄が空でない時
	$file = file('mission_2-1_Yodotani.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
	$fpw = fopen($filename,'w');  //ファイルを空
		foreach($file as $line){
		$a = explode("<>",$line); //文字列を文字列により分割する
			if($a[0]!==$number2){
				$b = implode("<>",$a); //配列要素を文字列により連結する
				fwrite($fpw,$b."\n");
				//?//
			}else{
					fwrite($fpw,$a[0].'<>'.$name.'<>'.$comment.'<>'.$date."\n");
				}
			}
		fclose($fpw);
		}


$file = file('mission_2-1_Yodotani.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
	foreach($file as $line){
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
<!DOCTYPE html>
<html>

<meta charset="utf-8">


<head>
	<title>上傳摟</title>
</head>


<body>




 <?php

 		$howmany = $_GET["howmany"] ;

 		echo "<form >";
 		for ($i=0; $i < $howmany ; $i++) 
 		{

 			echo '<input type="file" name="file"> <br>';

  
 		}



 		echo '<input type="submit" name="submit" >';

 		echo '</form>';

 		if(isset($_FILES["file"])){
			for($howmany=0;$a<$howmany;$a++){
				echo "檔案名稱:".$_FILES["file"]["name"][$howmany]."<br/>";
				echo "暫存檔名:".$_FILES["file"]["tmp_name"][$howmany]."<br/>";
				echo "檔案尺寸:".$_FILES["file"]["size"][$howmany]."<br/>";
				echo "檔案種類:".$_FILES["file"]["type"][$howmany]."<br/>";
				$name=$_FILES["file"]["name"][$howmany];
				$tmp=$_FILES["file"]["tmp_name"][$howmany];
				if(!empty($name)){
					copy($tmp,$name);
					echo "檔案上傳成功<br/><br/>";
					unlink($tmp);
				}else{
					echo "檔案上傳失敗";
					}
			}
		}
?>

</body>

</html>
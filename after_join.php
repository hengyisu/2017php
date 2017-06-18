<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">

	<title>報名結果</title>
</head>

<body>

<?php

	$user = $_GET["user"];
	$gender = $_GET["gender"];
	$area = $_GET["Area"];
	//$interest = $_GET["Interest"];
	$where = $_GET["Where"];


	echo "恭喜{$_GET["user"]}你成功加入第100界資管營 <br>";
	echo "性別:{$_GET["gender"]} <br>";

	echo "來自:{$_GET["Area"]}<br>";

	if(!empty($_GET["submit"]))
	{
		
		echo "興趣:";

		if (!empty($_GET["Interest"])) 
		{
				
				foreach($_GET["Interest"] as $interest)
				{
					echo "$interest ";	
				}
		}	
	}

	echo "<br>";

	if(!empty($_GET["submit"]))
	{
		if (!empty($_GET["Where"])) 
		{
				echo "得到資訊方式:";
				foreach ($_GET["Where"] as $where)
				{
					echo "$where ";	
				}
		}	
	}

	echo "<br>";

?>

</body>
</html>
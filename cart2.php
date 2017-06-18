<?php
$id=$_GET["id"];
if (isset($_GET["id"])){
	while(list($name,$value)=each($_COOKIE[$id])){
		setcookie($id."[".$name."]","",time()-3600);
	}
}
header("Location: cart3.php");
?>
<?php
session_start();
if(isset($_SESSION["ID"])){
	$id=$_SESSION["ID"];
	$name=$_SESSION["name"];
	$price=$_SESSION["price"];
	$quantity=$_SESSION["quantity"];
	setcookie($id."[id]",$id,time()+5000);
	setcookie($id."[name]",$name,time()+5000);
	setcookie($id."[price]",$price,time()+5000);
	setcookie($id."[quantity]",$quantity,time()+5000);
}
header("Location: cart4.php")
?>
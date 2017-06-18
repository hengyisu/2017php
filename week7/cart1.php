<?php

echo "";


session_start();
if(isset($_POST["Item"])){
	$Item=$_POST["Item"];
	$_SESSION["ID"]=$Item;
	$_SESSION["quantity"]=$_POST["Quantity"];
	switch($Item){
		case 'A001':
			$_SESSION["name"]="a";
			$_SESSION["price"]=10;
		break;
		case 'A002':
			$_SESSION["name"]="b";
			$_SESSION["price"]=35;
		break;
		case 'A003':
			$_SESSION["name"]="c";
			$_SESSION["price"]=60;
		break;
	}
	header("Location:cart2.php");
}
echo '<form >
	
	<select name="Item">
		<option value="A001">a - $10</option>
		<option value="A002">b - $35</option>
		<option value="A003">c - $60</option>
	</select>
	<input type="text" size="10" name="Quantity" value="1"/>
	<input type="submit">
	</form>';
?>

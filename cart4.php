<?php
$total=0;
while( list($arr,$value) = each($_COOKIE)){
	if(isset($_COOKIE[$arr])&&is_array($_COOKIE[$arr])){
	echo "<a href='hwdelete.php?id=$arr'>§R°£</a>";
	while(list($name,$value) = each($_COOKIE[$arr])){
		if($name=="name"){
			echo $value." ";
		}
		if($name=="price"){
			$price=$value;
			echo $value," ";
		}
		if($name=="quantity"){
			$quantity=$value;
			echo $value," ";
		}
		
	}
	$total+=$price * $quantity;
		echo "<br>";
	}
}
	echo "total:",$total,"<br>";
	echo "<a href='cart1.php'>category</a>";
?>
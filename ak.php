<html>
	<head>
 <h1 style="color: orange; text-align:center; "> THANK YOU FOR YOUR ORDER </h1>
	</head>

	<body style="background-image: url('https://storage.pixteller.com/designs/designs-images/2019-03-27/05/simple-background-backgrounds-passion-simple-1-5c9b95d09002a.png'); background-repeat: no-repeat;
   background-size: cover; text-align:center;">
	<br>
	<?php
$cup = $_POST["cup"];
$size = $_POST["size"];
$sugar = $_POST["sugar"];
$creams = $_POST["creams"];
$costofcoffee=0;
if($size=="small"){
	$costofcoffee=2.5;
}else if($size=="med"){
	$costofcoffee=3;
}else if($size=="large"){
	$costofcoffee=4;
}else {
	$costofcoffee=5;
}
for ($a = 0; $a < $cup; $a++) {
	if ($size == "small") {
		echo '<img src="cup.jpg"
		height="110"
		width="80">';
	} else if ($size == "med") {
		echo '<img src="cup.jpg"
		height="150"
		width="110">';
	} 
	else if ($size == "large") {
		echo '<img src="cup.jpg"
		height="170"
		width="110">';
	}
	else { 
		echo '<img src="cup.jpg"
		height="200"
		width="110">';
	}
	if ($sugar > 1) {
		echo '<img src="plus.jpg"
		height="90"
		width="70">';
	}
	for ($z = 0; $z < $sugar; $z++) {
		if ($sugar > 1) {
			echo '<img src="sugar.jpg"
			height="120"
			width="80">';
		}
	}
	if ($creams > 1) {
		echo '<img src="plus.jpg"
		height="120"
		width="80">';
	}
	for ($k = 0; $k < $creams; $k++) {
		if ($creams > 1) {
			echo '<img src="cream.jpg"
		height="120"
		width="80">';
		}
	}echo "<br>";
}


echo  "Cost $" .$costofcoffee*$cup." + tax";
?>

    </body>
    
</html>

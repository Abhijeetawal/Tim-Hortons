<html>
	<head>
 <h1 style="color: red;"> THANK YOU FOR YOUR ORDER </h1>
	</head>

	<body style="background-color: darkblue;color: red;font-size:2em;">
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
	if ($cup == "small") {
		echo '<img src="cup.jpg"
		height="110"
		width="80">';
	} else if ($cup == "med") {
		echo '<img src="cup.jpg"
		height="150"
		width="110">';
	} 
	else if ($cup == "large") {
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
			height="90"
			width="70">';
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

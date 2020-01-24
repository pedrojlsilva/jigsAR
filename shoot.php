<?php

$x = $_GET["x"];
$y = $_GET["y"];
$p = $_GET["p"];

$linear = $y * 1440 + $x;

//if(file_exists("grid/" . $linear . ".txt")) {
file_put_contents("grid/" . $linear . ".txt", $p);

//	echo "SIM";

//} else {

//	echo "NAO";

//}

?>
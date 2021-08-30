<?php
$host = "localhost";
$uname = "id16324963_jose";
$pwd = "K6b3>?x+oR!4Ek#A";
$database = "id16324963_materias";
$con = mysqli_connect($host, $uname, $pwd, $database);


$q=mysqli_query($con, "SELECT * FROM tbestoque");

while ($row=mysqli_fetch_array($q)){
	echo($row["produto"]);
	echo("-");
	echo($row["preco"]);
	echo("<br>");
}

?>

	
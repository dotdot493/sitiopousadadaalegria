<?php

$host = "localhost";
$uname = "id16324963_jose";
$pwd = "K6b3>?x+oR!4Ek#A";
$database = "id16324963_materias";
$con = mysqli_connect($host, $uname, $pwd, $database);
header('Content-type: application/json');//new
header("Access-Control-Allow-Origin: *");// pq aspas dupla neste código?


$data=array();//new
$q=mysqli_query($con, "SELECT * FROM tbestoque");

while ($row=mysqli_fetch_array($q)){
    $data[]=$row; //new
}
echo json_encode($data);//new

?>
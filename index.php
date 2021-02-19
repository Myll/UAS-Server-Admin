<?php

    $servername= "172.19.0.2";
    $username = "root";
    $password = "1234";
    $dbName = "trucorp";


//create connection

$connect = mysqli_connect($servername, $username, $password, $dbName);

if(mysqli_connect_errno()){
	echo "Failed to connect!";
	exit(); 
}
echo "Connection Established!";

$sql = "SELECT * FROM user";
$result = $connect->query($sql);

if ($result->num_rows>0){
// keluarkan data yang ada

foreach ($result as $row){
echo "ID: ".$row["id"]."Nama: ".$row["nama"]."Kantor :".$row["kantor"]. "<br>";
}} else {
echo "no data!!";}

$connect->close();
?>

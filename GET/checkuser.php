<?php 

$host = "127.9.9.1:3306";
$dbUser = "root";
$dbPass = "root";
$database = "local";
$connect = mysqli_connect($host, $dbUser, $dbPass, $database);

$dbTable = "login";

if(mysqli_connect_errno()){
	die("cannot connect to the database". mysqli_connect_error());
}

$query="select * from ".$dbTable." where
	 username =". $_GET['username'] ." and
	 password =". $_GET['password'] ." ";

	 

$results = mysqli_query($connect, $query);

if(!$results){
	die("no results returned");
}

while($row = mysqli_fetch_assoc($results)){
	$output[]=$row;
}
print(json_encode($output));
mysqli_free_result($results);
mysqli_close($connect);

 ?>
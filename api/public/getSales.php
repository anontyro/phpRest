<?php 

$app = new \Slim\App();

/*
Sales functions below
*/

$app->get('/sales/', function($Response, $request){

	require_once('dbconnect.php');

	$query = "select * from salesdata";
	$result = $mysqli->query($query);

	while($row = $result->fetch_assoc()){
		$output[] = $row;
	}

	print (json_encode($output));

});

$app->get('/sales/{id}', function($request){

	require_once('dbconnect.php');

	$id = $request->getAttribute('id');
	$query = "select * from salesdata where id=$id";
	$result = $mysqli->query($query);

	$output[] = $result->fetch_assoc();
	
	header('Content-Type: application/json');

	print json_encode($output);


});

$app->get('/sales/first/{id}', function($request){

	require_once('dbconnect.php');

	$id = $request->getAttribute('id');

	$query = "select * from salesdata where id <= $id";
	$result = $mysqli->query($query);

	while($row = $result->fetch_assoc()){
		$output[] = $row;
	}

	print (json_encode($output));


});

/*
User functions below
*/
$app->get('/user/', function(){	

	print("welcome to user area");

});



 ?>
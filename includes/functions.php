<?php
$date = date('Y-m-d H:i:s');

// database connection
function connectDB(){
global $dbhost;
global $dbuser;
global $dbpassw;
global $dbname; 
	mysql_connect($dbhost,$dbuser,$dbpassw) or die('<p align="center">Can\'t connect to database server!</p>');
	mysql_select_db($dbname) or die('<p align="center">Can\'t select database '.$dbname.'</p>');
}

// database disconnexion
function uconnect(){
	mysql_close();
}

// get show page data
function GetShow($item) {
	connectDB();
	$rqt = "SELECT * FROM shows WHERE keyword='$item'";
	$query = mysql_query($rqt);
	$datas = mysql_fetch_array($query);
	$test = count($datas);
	// if $test = 1 not found datas => redirection 404
	if($test<=1){ 
		header('Location: ./erreur.php?erreur=404');
    	exit();
	 }
	 else
	 {
		return $datas;
	 }
	uconnect();
}
?>
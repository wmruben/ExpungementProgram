<?
if ($_SERVER['REMOTE_ADDR'] == "::1"){
	$server  = "localhost";
	$username = "root";
	$password = "root";
	$database = '';
} else {
		$server  = "";
		$username = "";
		$password = "";
		$database = '';

	}


$db = mysqli_connect($server, $username, $password, $database);

if (!$db) { // this prevents errors from popping up on team members computers who don't have DB access
	$server  = "localhost";
	$username = "root";
	$password = "root";
	$database = 'mysql';
	
	$db = mysqli_connect( $server, $username, $password, $database);
	if (!$db) {
		die( "Connection failed: " . mysqli_connect_error() );
	} else {
		//echo "Connected Successfully";
	 }
 }
 
 ?>
